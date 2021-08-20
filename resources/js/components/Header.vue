<template>
    <div class="container">
        <div class="row_1">
            <div class="col-2">
                <router-link to="/"><i class="fab fa-shopify"></i><span class="title">ONLINESTORE.com</span>
                </router-link>
            </div>
            <div class="col-7">
            </div>
            <div class="col-2 dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="account" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle"></i>
                <span v-if="!user" >My account</span>
                <span v-else>{{ user.name }}</span>
                </button>
                    <div class="drop dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <router-link v-if="!user" to="/login"><a class="dropdown-item" href="#">Login</a></router-link>
                        <router-link v-if="!user" to="/register"><a class="dropdown-item" href="#">Register</a></router-link>
                        <router-link v-if="user_role === 'admin'" to="/admin"><a class="dropdown-item" href="#">Admin Dashboard</a></router-link>
                        <a v-if="user" class="dropdown-item" href="#" @click.prevent="logout">Logout</a>
                    </div>
            </div>
            <div class="col-1">
                <router-link to="/basket"><i class="fas fa-shopping-cart"
                                             v-text="'(' + $store.state.cart.length + ' items)'"></i><span></span>
                </router-link>
            </div>
        </div>
        <div class="row_2">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <router-link to="/"><a class="nav-link">HOME</a></router-link>
                </li>
                <li class="nav-item dropdown mega-dropdown">
                    <button class="btn btn-secondary" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        COLLECTION
                    </button>
                    <ul class="dropdown mega-dropdown open" >
                        <ul class="dropdown-menu mega-dropdown-menu row"  style="width: 600px; background-color: rgba(206,121,6,0.65)">
                            <li class="col-md-1"style="    display: inline-block;
     solid #000;
    padding: 30px; ">Tema 11
                                <ul style="margin: 0px; padding: 0px;"> <div class="tidown" >
                                    <li class="dropdown-header"></li></div>
                                    <li>подпункт 1 </li>
                                    <li>подпункт 1 </li>
                                    <li>подпункт 1 </li>
                                </ul>
                            </li>
                            <li class="col-md-1"style="    display: inline-block;
     solid #000;
    padding: 85px; ">Tema 11
                                <ul > <div class="tidown">
                                    <li class="dropdown-header"></li></div>
                                    <li>подпункт 1 </li>
                                    <li>подпункт 1 </li>
                                    <li>подпункт 1 </li>
                                </ul>
                            </li>

                        </ul>
                    </ul>

                </li>
    <li class="nav-item">
        <router-link to="/shop"><a class="nav-link">SHOP</a></router-link>
    </li>
    <li class="nav-item">
        <router-link to="/about"><a class="nav-link">ABOUT US</a></router-link>
    </li>
    <li class="nav-item">
        <router-link to="/contact"><a class="nav-link">CONTACT US</a></router-link>
    </li>
    </ul>
    </div>
    </div>
</template>

<script>
import { mapGetters } from 'vuex'

export default {
    name: "Header",

    mounted() {
        console.log('Header mounted.')
    },
    computed: mapGetters({
        user: 'user',
        user_role: 'user_role'
    }),
    methods: {
        async logout () {
            // Log out the user.
            await this.$store.dispatch('logout')

            // Redirect to login.
            this.$router.push({ name: 'Home' })
        }
    }
}
</script>

<style scoped>
.title {

}

.container {
    color: white;
}

div {
    padding-left: 0;
    padding-right: 0;
}
@media (max-width: 1200px) {
    .container {
        max-width: 970px;
    }
}

@media (max-width: 992px) {
    .container {
        max-width: 750px;
    }
}

@media (max-width: 767px) {
    .container {
        max-width: none;
    }
}


.row_1 {
    margin-top: 0.5rem;
    margin-bottom: 0.5rem;
    display: flex;
    text-decoration: none;
}

.row_1 a:hover {
    text-decoration: none;
}

.row_2 {
    background-color: #424242;
}

a {
    color: white;
}

.row_2 a:hover {
    background: #FB4251;
    text-decoration: none;
}



.drop {
    background-color: #424242;

}
#dropdownMenuButton, #account{
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
    box-shadow: none;
    padding-right: 16px;
    padding-left: 16px;
    padding-top: 8px;
    padding-bottom: 8px;
}
#dropdownMenuButton:hover{
    background: #FB4251;
    text-decoration: none;
    box-shadow: none;
}
#dropdownMenuButton:active, #dropdownMenuButton:focus{
    outline: none !important;;
    background: #FB4251;
}
#dropdownMenuButton::-moz-focus-inner{
    border: 0 !important;;
    background: #FB4251;
}
#account{
    padding-top: 0;
    padding-bottom: 0;
}
#account:hover{
    box-shadow: none;
}
</style>
