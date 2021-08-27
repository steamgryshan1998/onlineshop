import Home from "./components/tabs/Home";
import Collection from "./components/tabs/Collection";
import Shop from "./components/tabs/Shop";
import About from "./components/tabs/About";
import Contact from "./components/tabs/Contact";
import Show from "./components/product/Show";
import Login from "./components/Auth/Login";
import Register from './components/Auth/Register';
import Basket from "./components/busket/Basket";
import Dashboard from "./components/Admin/Dashboard";

export const routes = [
        {
            path: '/',
            component: Home,
            name: 'Home',
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
