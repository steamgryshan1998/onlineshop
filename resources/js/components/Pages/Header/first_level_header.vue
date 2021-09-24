<template>
    <div style="    color: white;
    max-width: 1320px;
    margin: 0px auto;
    padding: 0px 13px; padding-bottom: 0px">

        <div class="row_1" >

            <div class="col-4" style="margin-top: 10px; padding-left: 63px; text-transform:uppercase" >
                <router-link to="/">
                    <h6>Days a week from 9:00 am to 7:00 pm</h6>
                </router-link>
            </div>
            <div class="col-4">
            </div>

            <div class="col-1 " style="margin-left: 48px; margin-top: 7px" >
                <button class="btn btn-secondary dropdown-toggle" type="button" id="account" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span v-if="!user" >My account</span>
                    <span v-else>{{ user.name }}</span>
                </button>
                <div class="dropdown-menu dropdown-menu_2" aria-labelledby="dropdownMenuButton" >
                    <router-link v-if="!user" to="/login"><a class="dropdown-item" href="#">Login</a></router-link>
                    <router-link v-if="!user" to="/register"><a class="dropdown-item" href="#">Register</a></router-link>
                    <router-link v-if="user_role === 'admin'" to="/admin"><a class="dropdown-item" href="#">Admin Dashboard</a></router-link>
                    <a v-if="user" class="dropdown-item" href="#" @click.prevent="logout">Logout</a>
                </div>
            </div>

            <div class="col-1 " style="margin-top: 10px; margin-top: 7px">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="account" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>Language</span>
                </button>
                <div class="drop dropdown-menu dropdown-menu_2" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">English</a>
                    <a class="dropdown-item" href="#">French</a>
                    <a class="dropdown-item" href="#">German</a>
                </div>

            </div>
            <div class="col-2" style="margin-top: 10px; margin-top: 7px">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="account" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>Currency</span>
                </button>
                <div class="drop dropdown-menu dropdown-menu_2" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">€ Euro</a>
                    <a class="dropdown-item" href="#">£ Pound Sterling</a>
                    <a class="dropdown-item" href="#">$ US Dollar</a>
                </div>
            </div>


        </div>
    </div>


</template>

<script>
import {mapGetters} from "vuex";

export default {
    name: "first_level_header",
    computed: mapGetters({
        user: 'user',
        user_role: 'user_role'
    }),
    methods: {
        async logout() {
            // Log out the user.
            await this.$store.dispatch('logout')
            // Redirect to login.
            this.$router.push({name: 'Home'})
        }
    }
}
</script>

<style scoped>

.title{

}


.header_1{
    margin-left: 370px;
    margin-right: 370px;
    width: 100%;

}
.container{
    color: #58503d;
    max-width: 1800px;
    margin: 0px auto;
    padding: 0px 15px;
}
@media (max-width: 1200px) {
    .container {
        max-width: 970px;
    }
}
.nav-link{
    padding-top: 24px;
    padding-bottom: 23px;
    color: white
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
div{
    padding-left: 0;
    padding-right: 0;
}
.row_1{
    /*margin-top: 0.5rem;*/
    /*margin-bottom: 0.5rem;*/
    display: flex;
    text-decoration: none;
}
.row_1 a:hover{
    text-decoration: none;
}
.row_2{
    background-color: #424242;
    padding-bottom: 0;
    padding-top: 0;
}
a{
    color: #7d7e7e;

}
.row_2 a:hover {
    background: #fa4250;
    text-decoration: none;
    height: 70px;
}


.drop {
    background-color: #424242;
}
#dropdownMenuButton, #account{
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    border-radius: 0 0 0 0;
    cursor:pointer;
    overflow: hidden;
    outline:none;
    box-shadow: none;
    padding-right: 16px;
    padding-left: 16px;
    padding-top: 0px;
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

h1 div, p {
    width: 100%;
    margin: 0 auto;
}

.nav-item{

}

.dropdown-header{
    color: #fff;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
}

.item{
    display: block;
    padding: 5px 20px;
    clear: both;
    font-weight: 500;
    white-space: normal;
}

.mega-dropdown{
    position: static !important;
}
.dropdown-menu.show{
    border-radius: unset;
    border-top: 0;
    border-left-width: 0px;
    margin-top: 0;
    margin-left: 0;
    margin-right: 370px;
    width: 1081px;
    display: flex;
    background-color: #424242;
}

.dropdown-menu_2.show{
    border-radius: unset;
    border-top: 0;
    border-left-width: 0px;
    margin-top: 0;
    margin-left: 0;
    margin-right: 363px;
    width: 50px;
    display: block;
    background-color: #424242;
}

hr {
    border: none; /* Убираем границу */
    background-color: red; /* Цвет линии */
    color: red; /* Цвет линии для IE6-7 */
    height: 2px; /* Толщина линии */
}



.fa-shopping-cart:hover {
    color: #fa880b;
    text-decoration: none;
}

</style>
