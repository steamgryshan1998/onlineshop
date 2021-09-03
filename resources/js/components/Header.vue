<!--<template>-->
<!--    <div class="container">-->
<!--        <div class="row_1">-->
<!--            <div class="col-2">-->
<!--                <router-link to="/"><i class="fab fa-shopify"></i><span class="title">ONLINESTORE.com</span>-->
<!--                </router-link>-->
<!--            </div>-->
<!--            <div class="col-7">-->
<!--            </div>-->
<!--            <div class="col-2 dropdown">-->
<!--                <button class="btn btn-secondary dropdown-toggle" type="button" id="account" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                <i class="fas fa-user-circle"></i>-->
<!--                <span v-if="!user" >My account</span>-->
<!--                <span v-else>{{ user.name }}</span>-->
<!--                </button>-->
<!--                    <div class="drop dropdown-menu" aria-labelledby="dropdownMenuButton">-->
<!--                        <router-link v-if="!user" to="/login"><a class="dropdown-item" href="#">Login</a></router-link>-->
<!--                        <router-link v-if="!user" to="/register"><a class="dropdown-item" href="#">Register</a></router-link>-->
<!--                        <router-link v-if="user_role === 'admin'" to="/admin"><a class="dropdown-item" href="#">Admin Dashboard</a></router-link>-->
<!--                        <a v-if="user" class="dropdown-item" href="#" @click.prevent="logout">Logout</a>-->
<!--                    </div>-->
<!--            </div>-->
<!--            <div class="col-1">-->
<!--                <router-link to="/basket"><i class="fas fa-shopping-cart"-->
<!--                                             v-text="'(' + $store.state.cart.length + ' items)'"></i><span></span>-->
<!--                </router-link>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row_2">-->
<!--            <ul class="nav justify-content-center">-->
<!--                <li class="nav-item">-->
<!--                    <router-link to="/"><a class="nav-link">HOME</a></router-link>-->
<!--                </li>-->
<!--                <li class="nav-item dropdown mega-dropdown">-->
<!--                    <button class="btn btn-secondary" type="button" id="dropdownMenuButton"-->
<!--                            data-toggle="modal" data-target="#staticBackdrop">-->
<!--                        COLLECTION-->
<!--                    </button>-->
<!--                    <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--                        <div class="modal-dialog modal-dialog-centered">-->
<!--                            <div class="modal-content">-->
<!--                                    <img :src="require('../../../public/coll.jpg').default" class="img-fluid" alt="" width="1080px" height="300px">-->

<!--                                <router-link to="/shop" class="btn modal-btn btn-success" data-dismiss="modal">Yes, I'm interested</router-link>-->
<!--                                    <button type="button" class="btn modal-btn btn-danger" data-dismiss="modal">No, thanks</button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->


<!--                </li>-->
<!--    <li class="nav-item">-->
<!--        <router-link to="/shop"><a class="nav-link">SHOP</a></router-link>-->
<!--    </li>-->
<!--    <li class="nav-item">-->
<!--        <router-link to="/about"><a class="nav-link">ABOUT US</a></router-link>-->
<!--    </li>-->
<!--    <li class="nav-item">-->
<!--        <router-link to="/contact"><a class="nav-link">CONTACT US</a></router-link>-->
<!--    </li>-->
<!--    </ul>-->
<!--    </div>-->
<!--    </div>-->
<!--</template>-->

<!--<script>-->
<!--import { mapGetters } from 'vuex'-->

<!--export default {-->
<!--    name: "Header",-->

<!--    mounted() {-->
<!--        console.log('Header mounted.')-->
<!--    },-->
<!--    computed: mapGetters({-->
<!--        user: 'user',-->
<!--        user_role: 'user_role'-->
<!--    }),-->
<!--    methods: {-->
<!--        async logout () {-->
<!--            // Log out the user.-->
<!--            await this.$store.dispatch('logout')-->

<!--            // Redirect to login.-->
<!--            this.$router.push({ name: 'Home' })-->
<!--        }-->
<!--    }-->
<!--}-->
<!--</script>-->

<!--<style scoped>-->
<!--.title {-->

<!--}-->

<!--.container {-->
<!--    color: white;-->
<!--}-->

<!--div {-->
<!--    padding-left: 0;-->
<!--    padding-right: 0;-->
<!--}-->
<!--@media (max-width: 1200px) {-->
<!--    .container {-->
<!--        max-width: 970px;-->
<!--    }-->
<!--}-->

<!--@media (max-width: 992px) {-->
<!--    .container {-->
<!--        max-width: 750px;-->
<!--    }-->
<!--}-->

<!--@media (max-width: 767px) {-->
<!--    .container {-->
<!--        max-width: none;-->
<!--    }-->
<!--}-->


<!--.row_1 {-->
<!--    margin-top: 0.5rem;-->
<!--    margin-bottom: 0.5rem;-->
<!--    display: flex;-->
<!--    text-decoration: none;-->
<!--}-->

<!--.row_1 a:hover {-->
<!--    text-decoration: none;-->
<!--}-->

<!--.row_2 {-->
<!--    background-color: #424242;-->
<!--}-->

<!--a {-->
<!--    color: white;-->
<!--}-->

<!--.modal-btn{-->
<!--    border-radius: 0 0 0 0;-->
<!--}-->

<!--.row_2 a:hover {-->
<!--    background: #FB4251;-->
<!--    text-decoration: none;-->
<!--}-->



<!--.drop {-->
<!--    background-color: #424242;-->

<!--}-->
<!--#dropdownMenuButton, #account{-->
<!--    background-color: Transparent;-->
<!--    background-repeat:no-repeat;-->
<!--    border: none;-->
<!--    border-radius: 0 0 0 0;-->
<!--    cursor:pointer;-->
<!--    overflow: hidden;-->
<!--    outline:none;-->
<!--    box-shadow: none;-->
<!--    padding-right: 16px;-->
<!--    padding-left: 16px;-->
<!--    padding-top: 8px;-->
<!--    padding-bottom: 8px;-->
<!--}-->
<!--#dropdownMenuButton:hover{-->
<!--    background: #FB4251;-->
<!--    text-decoration: none;-->
<!--    box-shadow: none;-->
<!--}-->
<!--#dropdownMenuButton:active, #dropdownMenuButton:focus{-->
<!--    outline: none !important;;-->
<!--    background: #FB4251;-->
<!--}-->
<!--#dropdownMenuButton::-moz-focus-inner{-->
<!--    border: 0 !important;;-->
<!--    background: #FB4251;-->
<!--}-->
<!--#account{-->
<!--    padding-top: 0;-->
<!--    padding-bottom: 0;-->
<!--}-->
<!--#account:hover{-->
<!--    box-shadow: none;-->
<!--}-->
<!--</style>-->
<template>
    <div>


<!--        <div class="row_1 header_hr">-->
<!--            <div class="row header_1">-->
<!--            <div class="col-6">-->
<!--                <router-link to="/"><i class="fas fa-battery-three-quarters"></i><span class="title"> Days a week from 9:00 am to 7:00 pm</span></router-link>-->
<!--            </div>-->
<!--            <div class="col-2">-->
<!--            </div>-->

<!--            <div class="col-1 " style="margin-right: 15px; " >-->
<!--                <button class="btn btn-secondary dropdown-toggle" type="button" id="account" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                    <span v-if="!user" >My account</span>-->
<!--                    <span v-else>{{ user.name }}</span>-->
<!--                </button>-->
<!--                <div class="dropdown-menu dropdown-menu_2" aria-labelledby="dropdownMenuButton" >-->
<!--                    <router-link v-if="!user" to="/login"><a class="dropdown-item" href="#">Login</a></router-link>-->
<!--                    <router-link v-if="!user" to="/register"><a class="dropdown-item" href="#">Register</a></router-link>-->
<!--                    <router-link v-if="user_role === 'admin'" to="/admin"><a class="dropdown-item" href="#">Admin Dashboard</a></router-link>-->
<!--                    <a v-if="user" class="dropdown-item" href="#" @click.prevent="logout">Logout</a>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="col-1 ">-->
<!--                <button class="btn btn-secondary dropdown-toggle" type="button" id="account" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                    <span>Language</span>-->
<!--                </button>-->
<!--                <div class="drop dropdown-menu dropdown-menu_2" aria-labelledby="dropdownMenuButton">-->
<!--                    <a class="dropdown-item" href="#">English</a>-->
<!--                    <a class="dropdown-item" href="#">French</a>-->
<!--                    <a class="dropdown-item" href="#">German</a>-->
<!--                </div>-->

<!--            </div>-->
<!--            <div class="col-1">-->
<!--                <button class="btn btn-secondary dropdown-toggle" type="button" id="account" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                    <span>Currency</span>-->
<!--                </button>-->
<!--                <div class="drop dropdown-menu dropdown-menu_2" aria-labelledby="dropdownMenuButton">-->
<!--                    <a class="dropdown-item" href="#">€ Euro</a>-->
<!--                    <a class="dropdown-item" href="#">£ Pound Sterling</a>-->
<!--                    <a class="dropdown-item" href="#">$ US Dollar</a>-->
<!--                </div>-->
<!--            </div>-->
<!--            </div>-->
<!--        </div>-->




<!--        <div class="row_1"  style="height: 110px; padding: 20px; margin-bottom: 30px">-->
<!--            <form action="/search/" target="_blank" style="padding: 30px;padding-left: 0px;">-->
<!--                <input type="hidden" name="searchid" value="808327">-->
<!--                <input type="search" name="text" required placeholder="Поиск по сайту" style="-->
<!--padding: 5px 2px 5px 25px;-->
<!--background: url('http://3.bp.blogspot.com/-4w14hQHr5yQ/Tgm6u7KwUkI/AAAAAAAACAI/Hu2poBOPx3g/s25/search.png') no-repeat scroll 0 50%;-->
<!--">-->
<!--            </form>-->

<!--            <div class="col-2">-->
<!--            </div>-->
<!--            <a class="navbar-brand" > <img :src="require('../../../public/logo.onlineshop.loc.png').default" width="220px" height="90px" style="padding-bottom: 10px;"> </a>-->

<!--            <div class="col-3">-->
<!--            </div>-->

<!--            <div class="col-4" style="padding: 25px">-->
<!--                <router-link to="/basket"><i class="fas fa-shopping-cart"-->
<!--                                             v-text="'(' + $store.state.cart.length + ' items)'" ></i><span></span>-->
<!--                </router-link>-->
<!--            </div>-->
<!--        </div>-->


        <div class="row_2"  style="width: 1000px; padding-left: 100px">

            <ul class="nav justify-content-center" style=" height: 64px; padding-left: 20px; padding-right: 20px; padding-bottom: 0;">
                <li class="nav-item" >
                    <router-link to="/"><a class="nav-link">HOME</a></router-link>
                </li>

                <li class="nav-item dropdown mega-dropdown"> <a href="#" class="nav-link " data-toggle="dropdown">
                   COLLECTION</a>
                    <ul class="dropdown-menu mega-dropdown-menu row justify-content-center">
                        <li class="col-md-3">
                            <ul>
                                <li class="dropdown-header">Women's</li>
                                <li class="item"><a href="#">Unique Features</a></li>
                                <li class="item"><a href="#">Image Responsive</a></li>
                                <li class="item"><a href="#">Auto Carousel</a></li>
                                <li class="item"><a href="#">Newsletter Form</a></li>
                                <li class="item"><a href="#">Four columns</a></li>
                                <li class="item"><a href="#">Four columns</a></li>
                                <li class="item"><a href="#">Good Typography</a></li>
                            </ul>
                        </li>
                        <li class="col-md-3">
                            <ul>
                                <li class="dropdown-header">Man's</li>
                                <li class="item"><a href="#">Unique Features</a></li>
                                <li class="item"><a href="#">Image Responsive</a></li>
                                <li class="item"><a href="#">Four columns</a></li>
                                <li class="item"><a href="#">Auto Carousel</a></li>
                                <li class="item"><a href="#">Newsletter Form</a></li>
                                <li class="item"><a href="#">Four columns</a></li>
                                <li class="item"><a href="#">Good Typography</a></li>
                            </ul>
                        </li>
                        <li class="col-md-3">
                            <ul>
                                <li class="dropdown-header">Children's</li>
                                <li class="item"><a href="#">Unique Features</a></li>
                                <li class="item"><a href="#">Four columns</a></li>
                                <li class="item"><a href="#">Image Responsive</a></li>
                                <li class="item"><a href="#">Auto Carousel</a></li>
                                <li class="item"><a href="#">Newsletter Form</a></li>
                                <li class="item"><a href="#">Four columns</a></li>
                                <li class="item"><a href="#">Good Typography</a></li>
                            </ul>
                        </li>
                        <li class="col-md-3">
                            <ul>
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="padding-left: 15px; margin: 0px; max-width: 1095px">
                                    <div class="carousel-inner" >
                                        <div class="carousel-item active">

                                            <img :src="require('../../../public/1.jpeg').default" class="d-block w-100" height="200px" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img :src="require('../../../public/2.jpg').default" class="d-block w-100" height="200px" alt="...">
                                        </div>

                                    </div>

                                </div>
                            </ul>
                        </li>
                    </ul>
                </li>



                <!--                <li class="nav-item dropdown mega-dropdown">-->
                <!--                    <button class="btn btn-secondary" type="button" id="dropdownMenuButton"-->
                <!--                            data-toggle="modal" data-target="#staticBackdrop">-->
                <!--                        COLLECTION-->
                <!--                    </button>-->
                <!--                    <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
                <!--                        <div class="modal-dialog modal-dialog-centered">-->
                <!--                            <div class="modal-content">-->
                <!--                                <img :src="require('../../../public/images/some-tips-for-creating-effective-promotion-banner-for-your-website-1024x614.jpg').default" class="img-fluid" alt="" width="1080px" height="300px">-->

                <!--                                <router-link to="/shop" class="btn modal-btn btn-success" data-dismiss="modal">Yes, I'm interested</router-link>-->
                <!--                                <button type="button" class="btn modal-btn btn-danger" data-dismiss="modal">No, thanks</button>-->
                <!--                            </div>-->
                <!--                        </div>-->
                <!--                    </div>-->


                <!--                </li>-->
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
    padding-top: 20px;
    padding-bottom: 20px;
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

    background: #5a4e38;
    text-decoration: none;
    height: 63px;

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





</style>


