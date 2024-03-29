import Home from "./components/Pages/Home/Home";//импортируем наши компоненты из директорий, в которых они находяться
import Collection from "./components/Pages/Collection";
import Shop from "./components/Pages/Shop/Shop";
import About from "./components/Pages/About/About";
import Contact from "./components/Pages/Contact";
import Show from "./components/Pages/product/Show";
import Login from "./components/Auth/Login";
import Register from './components/Auth/Register';
import Basket from "./components/busket/Busket";
import Dashboard from "./components/Admin/Dashboard";

export const routes = [//создаем массив с маршрутами компонентов и экспортируем его в app.js
        {
            path: '/',//гет-параметр компонента
            component: Home,// подтягиваем сам компонент
            name: 'Home',//имя компонента
        },
        {
            path: '/collection',
            component: Collection,
            name: 'Collection'
        },
        {
            path: '/shop',
            component: Shop,
            name: 'Shop',
        },
        {
            path: '/shop/:productId',
            component: Show,
            props:true,
            name: 'Show',
        },
        {
            path: '/about',
            component: About,
            name: 'About',
        },
        {
            path: '/contact',
            component: Contact,
            name: 'Contact',
        },
        // {
        //     path: '/product',
        //     component: Show,
        //     name: 'Show'
        // },
        {
            path: '/basket',
            component: Basket,
            name: 'Basket',
        },
        {
            path: '/login',
            name: 'Login',
            component: Login,
            meta: {
                onlyGuest: true
            }
        },
        {
            path: '/register',
            name: 'Register',
            component: Register,
            meta: {
                onlyGuest: true
            }
        },
        {
            path: '/admin',
            name: 'Dashboard',
            component: Dashboard,
            meta: {
                admin: true
            }
        }
]
