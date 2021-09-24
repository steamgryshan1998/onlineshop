/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import axios from "axios";

require('./bootstrap');
// import * as bootstrap from './bootstrap';
import Vue from "vue";//подключаем фреймворк Vue.js для дальнейшей работы с ним(создание компонентов и т.д.)
import MainComponent from "./components/MainComponent";//импортируем созданный vue-компонент
import VueRouter from "vue-router";//импортируем vue-router
import { routes } from "./routes";//импортируем файл, где прописаны маршруты к нашим компонентам
import {store} from "./store";



//window.Vue = require('vue').default;
/* Window - глобальный объект, его функции и переменные доступны в любом месте программы(
   то есть делаем Vue глобальным); require - импортирует объект полностью сво всеми его методами и свойствами,
   если установлен default - то импортируется только лишь функция с одноименным режимом    */

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
Vue.use(VueRouter)//вызываем импортированный vue-router




const router = new VueRouter({//создаем экземпляр маршрутизатора
    mode: 'history',//позволяет избежать перезагрузки страницы при смене url без хеша URL
    routes//кладем в этот экземпляр массив с нашими маршрутами
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

const app = new Vue({// Создание объекта Vue, с которого начинается выполнение приложения
    el: '#app',//связь с div-контейнером в DOM шаблоне .blade.php по id этого контейнера
    components: {MainComponent},//определение главного Vue-компонента MainComponent, components - это объект, поэтому в фигурных скобках
    store,
    router//передаем экземпляр маршрутизатора в качестве опции
})
