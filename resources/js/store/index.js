import Vue from "vue";
import Vuex from 'vuex';
import axios from "axios";
import category from "./modules/category";
import cart from "./modules/cart";
import messages from "./modules/messages";
import auth from "./modules/auth";
import product from "./modules/product";
//vuex библиотека для управления состоянием, импортируем его

Vue.use(Vuex)//вызываем импортированный vuex


// move api functions to the service

export const store = new Vuex.Store({//создаем экземпляр vuex
    modules: {
        cart,
        messages,
        auth,
        product
    },
});

