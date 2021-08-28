/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import axios from "axios";

require('./bootstrap');
// import * as bootstrap from './bootstrap';
import Vue from "vue";
import MainComponent from "./components/MainComponent";
import VueRouter from "vue-router";
import { routes } from "./routes";
import Vuex from 'vuex';
import i18n from './components/plugins/i18n'
import * as types from './mutation-types';
window.Vue = require('vue').default;

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
Vue.use(VueRouter)

Vue.use(Vuex)


Vue.component('app', require("./components/MainComponent").default)
// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

const router = new VueRouter({
    mode: 'history',
    routes
});

axios.interceptors.request.use(function (config) {
    config.headers.Authorization = `Bearer ${localStorage.getItem('token')}`;
    return config;
}, function (error) {
    // Do something with request error
    return Promise.reject(error);
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

export const store = new Vuex.Store({
    state: {
        products: [],
        product: null,
        cart: [],
        user: null,
        user_role: null,
        token: localStorage.getItem('token'),
        auth: false,
        messageGroup: {
            // messageClass: 'danger',
            // message: 'Test'
            messageClass: '',
            message: '',
            timeoutEvent: null,
        },
    },
    getters: {
        isAuth: state => state.auth,
        user: state => state.user,
        user_role: state => state.user_role,
        token: state => state.token,
        isLoggedIn: state => state.user !== null,
        cart: state => state.cart,
        products: (state) => {
            return state.products;
        },
        product(state) {
            return state.product
        },
        messages: (state) => {
            return state.messageGroup;
        },

    },
    mutations: {
        updateProducts(state, products){
            state.products = products;
        },
        SET_PRODUCT (state, payload) {
            state.product = payload
        },
        'UPDATE_CART' (state, {product, quantity, isAdd}) {
            const record = state.cart.find(element => element.id == product.id);
            if (record) {
                if (isAdd) {
                    record.quantity += quantity;
                } else {
                    record.quantity = quantity;
                }
            } else {
                state.cart.push({
                    ...product,
                    quantity
                });
            }
        },
        'ADD_MESSAGE' (state, {message, messageClass}) {
            state.messageGroup = {
                messageClass,
                message
            }

            if (state.timeoutEvent) {
                clearTimeout(state.timeoutEvent);
            }
            state.timeoutEvent = setTimeout(function() {
                state.messageGroup = {
                    messageClass: '',
                    message: ''
                }
            }, 5000);
        },
        'CLEAR_MESSAGE' (state) {
            state.messageGroup = {
                messageClass: '',
                message: ''
            }
        },
        'AUTH_STATUS_CHANGE' (state, {user}) {
            state.isLoggedIn = user != null;
        },
        // addToCart(state, product){
        //     let productInCartIndex = state.cart.findIndex(item => item.slug === product.slug);
        //     if(productInCartIndex !== -1){
        //         state.cart[productInCartIndex].quantity++;
        //         return;
        //     }
        //     product.quantity = 1;
        //     state.cart.push(product);
        // },
        removeFromCart(state, index){
            state.cart.splice(index, 1);
        },
        updateOrder(state, order){
            state.order = order;
        },
        updateCart(state, cart){
            state.cart = cart;
        },
        [types.SAVE_TOKEN] (state, { token, remember }) {
            state.token = token
            localStorage.setItem('token', token, { expires: remember ? 365 : null })
        },

        [types.FETCH_USER_SUCCESS] (state, { user, user_role }) {
            state.user = user
            state.user_role = user_role
            state.auth = true
        },

        [types.FETCH_USER_FAILURE] (state) {
            state.token = null
            localStorage.remove('token')
        },

        [types.LOGOUT] (state) {
            console.log('logout');
            state.user = null
            state.token = null
            state.user_role = null

            localStorage.remove('token')
        },

        [types.UPDATE_USER] (state, { user }) {
            console.log('update_user');
            state.user = user
        }
    },
    actions:{
        getProducts({ commit }) {
            axios.get('/api/products')
                .then((response) => {
                    commit('updateProducts', response.data);
                })
                .catch((error) => console.error(error));
        },
        async getProductById ({commit}, productId) {

            try {
                const product = await axios.get('/api/products/' + productId)
                console.log(product.data.data)
                commit('SET_PRODUCT', product.data.data)
            }
            catch (e) {
                console.log('Error')
            }
        },
        clearCart({ commit }) {
            commit('updateCart', []);
        },
        saveToken ({ commit, dispatch }, payload) {
            commit(types.SAVE_TOKEN, payload)
        },

        async fetchUser ({ commit }) {
            try {
                const { data } = await axios.get('/api/user')
                console.log(data.role)
                commit(types.FETCH_USER_SUCCESS, { user: data, user_role: data.role })
            } catch (e) {
                commit(types.FETCH_USER_FAILURE)
            }
        },

        updateUser ({ commit }, payload) {
            commit(types.UPDATE_USER, payload)
        },

        async logout ({ commit }) {
            try {
                await axios.post('/api/logout')
            } catch (e) { }

            commit(types.LOGOUT)
        },

        updateCart ({ commit }, {product, quantity, isAdd}) {
            // TODO: Call service
            commit('UPDATE_CART', {product, quantity, isAdd});
            if (isAdd) {
                let message_obj = {
                    message: `Add ${product.name} to cart successfully`,
                    messageClass: "success",
                    autoClose: true
                }
                commit('ADD_MESSAGE', message_obj);
            }
        },

        async fetchOauthUrl (ctx, { provider }) {
            const { data } = await axios.post(`/api/oauth/${provider}`)

            return data.url
        },

        addMessage({commit}, obj) {
            commit('ADD_MESSAGE', obj);
        },
        clearMessage({commit}) {
            commit('CLEAR_MESSAGE');
        },
        getShoppingCart({commit}, {uid, currentCart}) {
            if (uid) {
                return ref.child("cart/" + uid).once('value').then((cart) => {
                    // console.log(cart.val());
                    if (cart.val() && (!currentCart || currentCart.length == 0)) {
                        commit('SET_CART', cart.val());
                    }
                });
            } else {
                // console.log("User has not logged in");
            }
        }
    }
});

router.beforeEach( async(to, from, next) => {
    if (store.getters.token) {
        await store.dispatch('fetchUser')
        if (to.matched.some(record => record.meta.onlyGuest)) {
            if(store.getters.user !== null) {
                next('/');
            }
        } else if(to.matched.some(record => record.meta.admin)) {
            if(store.getters.user_role !== 'admin'){
                next('/');
            }
        }
    } else if (to.matched.some(record => record.meta.admin)) {
        next('/');
    }
    next();
});

const app = new Vue({
    el: '#app',
    components: {MainComponent},
    store,
    i18n,
    router
})
