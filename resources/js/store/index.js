import Vuex from "vuex";
import * as types from "../mutation-types";
import axios from "axios";
import category from "./modules/category";
import Vue from "vue";

Vue.use(Vuex);
export const store = new Vuex.Store({
    modules: {
        category
    },
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
        user: state => state.user,//извлекает текущий статус наличия пользователя(либо есть, либо нет)
        user_role: state => state.user_role,//извлекает роль текущего пользователя(админ, юзер или неавторизирован)
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
        updateProducts(state, products) {
            state.products = products;
        },
        SET_PRODUCT(state, payload) {
            state.product = payload
        },
        'UPDATE_CART'(state, {product, quantity, isAdd}) {
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
        'ADD_MESSAGE'(state, {message, messageClass}) {
            state.messageGroup = {
                messageClass,
                message
            }

            if (state.timeoutEvent) {
                clearTimeout(state.timeoutEvent);
            }
            state.timeoutEvent = setTimeout(function () {
                state.messageGroup = {
                    messageClass: '',
                    message: ''
                }
            }, 5000);
        },
        'CLEAR_MESSAGE'(state) {
            state.messageGroup = {
                messageClass: '',
                message: ''
            }
        },
        'AUTH_STATUS_CHANGE'(state, {user}) {
            state.isLoggedIn = user != null;
        },
        removeFromCart(state, index) {
            state.cart.splice(index, 1);
        },
        updateOrder(state, order) {
            state.order = order;
        },
        updateCart(state, cart) {
            state.cart = cart;
        },
        [types.SAVE_TOKEN](state, {token, remember}) {
            state.token = token
            localStorage.setItem('token', token, {expires: remember ? 365 : null})
        },

        [types.FETCH_USER_SUCCESS](state, {user, user_role}) {
            state.user = user
            state.user_role = user_role
            state.auth = true
        },

        [types.FETCH_USER_FAILURE](state) {
            state.token = null
            localStorage.removeItem('token')
        },

        [types.LOGOUT](state) {
            console.log('logout');
            state.user = null
            state.token = null
            state.user_role = null

            localStorage.removeItem('token')
        },

        [types.UPDATE_USER](state, {user}) {
            console.log('update_user');
            state.user = user
        }
    },
    actions: {
        async getProducts({commit}) {
            try {
                const response = await axios.get('/api/products');
                commit('updateProducts', response.data);
            } catch (e) {
                console.log(e)
            }
        },
        async getProductById({commit}, productId) {

            try {
                const product = await axios.get('/api/products/' + productId)
                console.log(product.data.data)
                commit('SET_PRODUCT', product.data.data)
            } catch (e) {
                console.log('Error')
            }
        },
        clearCart({commit}) {
            commit('updateCart', []);
        },
        saveToken({commit, dispatch}, payload) {
            commit(types.SAVE_TOKEN, payload)
        },

        async fetchUser({commit}) {
            try {
                const {data} = await axios.get('/api/user')
                console.log(data.role)
                commit(types.FETCH_USER_SUCCESS, {user: data, user_role: data.role})
            } catch (e) {
                commit(types.FETCH_USER_FAILURE)
            }
        },

        updateUser({commit}, payload) {
            commit(types.UPDATE_USER, payload)
        },

        async logout({commit}) {
            try {
                await axios.post('/api/logout')
            } catch (e) {
            }

            commit(types.LOGOUT)
        },

        updateCart({commit}, {product, quantity, isAdd}) {
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

        async fetchOauthUrl(ctx, {provider}) {
            const {data} = await axios.post(`/api/oauth/${provider}`)

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
