import Vue from "vue";
import Vuex from 'vuex';
import axios from "axios";
//vuex библиотека для управления состоянием, импортируем его

Vue.use(Vuex)//вызываем импортированный vuex


//todo pizdez raznesty/ use mixins
//vuex config mutators getters
// move api functions to the service

export const store = new Vuex.Store({//создаем экземпляр vuex
    state: {//состояние элементов приложения
        products: [],
        product: null,
        cart: [],
        user: null,
        user_role: null,
        token: localStorage.getItem('token'),
        auth: false,
        messageGroup: {
            messageClass: '',
            message: '',
            timeoutEvent: null,
        },
    },
    getters: {//свойства, получающие состояние хранилища
        //isAuth: state => state.auth,
        user: state => state.user,//извлекает текущий статус наличия пользователя(либо есть, либо нет)
        user_role: state => state.user_role,//извлекает роль текущего пользователя(админ, юзер или неавторизирован)
        token: state => state.token,
        //isLoggedIn: state => state.user !== null,
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
    mutations: {//изменение состояния state хранилища
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
        // 'AUTH_STATUS_CHANGE' (state, {user}) {
        //     state.isLoggedIn = user != null;
        // },
        removeFromCart(state, index){
            state.cart.splice(index, 1);
        },
        // updateOrder(state, order){
        //     state.order = order;
        // },
        updateCart(state, cart){
            state.cart = cart;
        },
        'SAVE_TOKEN' (state, { token, remember }) {
            state.token = token
            localStorage.setItem('token', token, { expires: remember ? 365 : null })
        },

        'FETCH_USER_SUCCESS' (state, { user, user_role }) {
            state.user = user
            state.user_role = user_role
            state.auth = true
        },

        'FETCH_USER_FAILURE' (state) {
            state.token = null
            localStorage.removeItem('token')
        },

        'LOGOUT' (state) {
            console.log('logout');
            state.user = null
            state.token = null
            state.user_role = null

            localStorage.removeItem('token')
        },
    },
    actions:{
        //те же мутации, но они лишь инициируют мутации через метод commit, а не напрямую изменяют значение состояния хранилища, также используются для асинхронных операций
        async getProducts({ commit }) {//
            await axios.get('/api/products')
                .then((response) => {
                    commit('updateProducts', response.data);
                })
                .catch((error) => console.error(error));
        },
        async getProductById ({commit}, productId) {

            try {
                const product = await axios.get(`/api/products/${productId}`)
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
            commit('SAVE_TOKEN', payload)
        },

        async fetchUser ({ commit }) {
            try {
                const { data } = await axios.get('/api/user')
                console.log(data.role)
                commit('FETCH_USER_SUCCESS', { user: data, user_role: data.role })
            } catch (e) {
                commit('FETCH_USER_FAILURE')
            }
        },

        async logout ({ commit }) {
            try {
                await axios.post('/api/logout')
            } catch (e) { }

            commit('LOGOUT')
        },

        updateCart ({ commit }, {product, quantity, isAdd}) {
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

        addMessage({commit}, obj) {
            commit('ADD_MESSAGE', obj);
        },
        clearMessage({commit}) {
            commit('CLEAR_MESSAGE');
        },
        // getShoppingCart({commit}, {uid, currentCart}) {
        //     if (uid) {
        //         return ref.child("cart/" + uid).once('value').then((cart) => {
        //             // console.log(cart.val());
        //             if (cart.val() && (!currentCart || currentCart.length == 0)) {
        //                 commit('SET_CART', cart.val());
        //             }
        //         });
        //     } else {
        //         // console.log("User has not logged in");
        //     }
        // }
    }
});

