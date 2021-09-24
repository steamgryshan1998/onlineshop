<template>
<!--    <div style="max-width: 1833px">-->
<!--            <div class="whole_header">-->
<!--                <div class="row_1">-->
<!--                    <div class="col-3 title_container">-->
<!--                        <router-link to="/">-->
<!--                            <span class="title"> Days a week from 9:00 am to 7:00 pm</span>-->
<!--                        </router-link>-->
<!--                    </div>-->
<!--                    <div class="col-5">-->
<!--                    </div>-->
<!--                    <div class="col-1 authorization">-->
<!--                        <button class="btn btn-secondary dropdown-toggle" type="button" id="account"-->
<!--                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                            <span v-if="!user">My account</span>&lt;!&ndash;v-if отвечает за условный рендеринг, в зависимости от значения переменной user&ndash;&gt;-->
<!--                            <span v-else>{{ user.name }}</span>-->
<!--                        </button>-->
<!--                        <div class="dropdown-menu dropdown-menu_2" aria-labelledby="dropdownMenuButton">-->
<!--                            <router-link v-if="!user" to="/login">-->
<!--                                <a class="dropdown-item" href="#">-->
<!--                                    Login-->
<!--                                </a>-->
<!--                            </router-link>-->
<!--                            <router-link v-if="!user" to="/register">-->
<!--                                <a class="dropdown-item" href="#">-->
<!--                                    Register-->
<!--                                </a>-->
<!--                            </router-link>-->
<!--                            <router-link v-if="user_role === 'admin'" to="/admin">-->
<!--                                <a class="dropdown-item" href="#">-->
<!--                                    Admin Dashboard-->
<!--                                </a>-->
<!--                            </router-link>-->
<!--                            <a v-if="user" class="dropdown-item" href="#" @click.prevent="logout">&lt;!&ndash;директива @click-->
<!--                                запускает метод logout по клику на ссылку, prevent - модификатор, не допускающий перезагрузку страницы&ndash;&gt;-->
<!--                                Logout-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-1 language">-->
<!--                        <button class="btn btn-secondary dropdown-toggle" type="button" id="account"-->
<!--                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                            <span>Language</span>-->
<!--                        </button>-->
<!--                        <div class="drop dropdown-menu dropdown-menu_2" aria-labelledby="dropdownMenuButton">-->
<!--                            <a class="dropdown-item" href="#">-->
<!--                                English-->
<!--                            </a>-->
<!--                            <a class="dropdown-item" href="#">-->
<!--                                French-->
<!--                            </a>-->
<!--                            <a class="dropdown-item" href="#">-->
<!--                                German-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-2 currency">-->
<!--                        <button class="btn btn-secondary dropdown-toggle" type="button" id="account"-->
<!--                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                            <span>Currency</span>-->
<!--                        </button>-->
<!--                        <div class="drop dropdown-menu dropdown-menu_2" aria-labelledby="dropdownMenuButton">-->
<!--                            <a class="dropdown-item" href="#">-->
<!--                                € Euro-->
<!--                            </a>-->
<!--                            <a class="dropdown-item" href="#">-->
<!--                                £ Pound Sterling-->
<!--                            </a>-->
<!--                            <a class="dropdown-item" href="#">-->
<!--                                $ US Dollar-->
<!--                            </a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <hr>-->
<!--            <div class="container">-->
<!--                <div class="row_1 search_container">-->
<!--                    <form action="/search/" class="search" target="_blank">-->
<!--                        <input type="hidden" name="searchid" value="808327">-->
<!--                        <input type="search" name="text" required placeholder="Search" class="search_input">-->
<!--                    </form>-->
<!--                    <div class="col-3">-->
<!--                    </div>-->
<!--                    <a class="navbar-brand">-->
<!--                        <img :src="img_header" class="header_img" width="220px" height="90px">-->
<!--                    </a>-->
<!--                    <div class="col-3"></div>-->
<!--                    <div class="col-4 busket_indicator">-->
<!--                        <router-link to="/basket">-->
<!--                            <i class="fas fa-shopping-cart"></i>-->
<!--                            <span v-text="'(' + $store.state.cart.length + ' items)'"></span>&lt;!&ndash;v-text - обновляет-->
<!--                            текстовое содержимое элемента, в котором проходит как атрибут;  вылавливаем из vuex-->
<!--                            количество элементов в корзине, знак $ используется для получения доступа к объекту store,-->
<!--                            в котором хранится vuex, length - встроенный js метод для нахождения длины массива ибо-->
<!--                            cart это массив корзины&ndash;&gt;-->
<!--                        </router-link>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="row_2 menu">-->
<!--                    <div class="col-1"></div>-->
<!--                    <div>-->
<!--                        <ul class="nav justify-content-center menu_list">-->
<!--                            <li class="nav-item">-->
<!--                                <router-link to="/">&lt;!&ndash;router-link - компонент для навигации, параметр to - -->
<!--                                    определяет URL для перехода&ndash;&gt;-->
<!--                                    <a class="nav-link">-->
<!--                                        HOME-->
<!--                                    </a>-->
<!--                                </router-link>-->
<!--                            </li>-->
<!--                            <li class="nav-item dropdown mega-dropdown">-->
<!--                                <a href="#" class="nav-link" data-toggle="dropdown">-->
<!--                                    COLLECTION-->
<!--                                </a>-->
<!--                                <ul class="dropdown-menu mega-dropdown-menu row justify-content-center"-->
<!--                                    style="width: 1301px; margin-left: 642px">-->
<!--                                    <li class="col-md-3">-->
<!--                                        <ul>-->
<!--                                            <li class="dropdown-header">Women's</li>-->
<!--                                            <li class="item"><a href="#">Unique Features</a></li>-->
<!--                                            <li class="item"><a href="#">Image Responsive</a></li>-->
<!--                                            <li class="item"><a href="#">Auto Carousel</a></li>-->
<!--                                            <li class="item"><a href="#">Newsletter Form</a></li>-->
<!--                                            <li class="item"><a href="#">Four columns</a></li>-->
<!--                                            <li class="item"><a href="#">Four columns</a></li>-->
<!--                                            <li class="item"><a href="#">Good Typography</a></li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                    <li class="col-md-3">-->
<!--                                        <ul>-->
<!--                                            <li class="dropdown-header">Man's</li>-->
<!--                                            <li class="item"><a href="#">Unique Features</a></li>-->
<!--                                            <li class="item"><a href="#">Image Responsive</a></li>-->
<!--                                            <li class="item"><a href="#">Four columns</a></li>-->
<!--                                            <li class="item"><a href="#">Auto Carousel</a></li>-->
<!--                                            <li class="item"><a href="#">Newsletter Form</a></li>-->
<!--                                            <li class="item"><a href="#">Four columns</a></li>-->
<!--                                            <li class="item"><a href="#">Good Typography</a></li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                    <li class="col-md-3">-->
<!--                                        <ul>-->
<!--                                            <li class="dropdown-header">Children's</li>-->
<!--                                            <li class="item"><a href="#">Unique Features</a></li>-->
<!--                                            <li class="item"><a href="#">Four columns</a></li>-->
<!--                                            <li class="item"><a href="#">Image Responsive</a></li>-->
<!--                                            <li class="item"><a href="#">Auto Carousel</a></li>-->
<!--                                            <li class="item"><a href="#">Newsletter Form</a></li>-->
<!--                                            <li class="item"><a href="#">Four columns</a></li>-->
<!--                                            <li class="item"><a href="#">Good Typography</a></li>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                    <li class="col-md-3">-->
<!--                                        <ul>-->
<!--                                            <div id="carouselExampleControls" class="carousel collection_carousel slide"-->
<!--                                                 data-ride="carousel">-->
<!--                                                <div class="carousel-inner">-->
<!--                                                    <div class="carousel-item active">-->
<!--                                                        <img :src="carousel_img_1"-->
<!--                                                             class="d-block w-100" height="200px" alt="...">-->
<!--                                                    </div>-->
<!--                                                    <div class="carousel-item">-->
<!--                                                        <img :src="carousel_img_2"-->
<!--                                                             class="d-block w-100" height="200px" alt="...">-->
<!--                                                    </div>-->
<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </ul>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <router-link to="/shop">-->
<!--                                    <a class="nav-link">-->
<!--                                        SHOP-->
<!--                                    </a>-->
<!--                                </router-link>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <router-link to="/about">-->
<!--                                    <a class="nav-link">-->
<!--                                        ABOUT US-->
<!--                                    </a>-->
<!--                                </router-link>-->
<!--                            </li>-->
<!--                            <li class="nav-item">-->
<!--                                <router-link to="/contact">-->
<!--                                    <a class="nav-link">-->
<!--                                        CONTACT US-->
<!--                                    </a>-->
<!--                                </router-link>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--</template>-->
<!--<script>-->
<!--import {mapGetters} from 'vuex'//импорт геттеров из Vuex-->

<!--export default {//экспорт компонента-->
<!--    name: "Header",//имя текущего компонента-->
<!--    data: function () {//опция компонента, возвращающая значения всех его компонентов и объектов для дальнейшего их-->
<!--        // использования в рамках данного компонента-->
<!--        return {-->
<!--            img_header: '/images/darklook.png',//присвоение абсолютного пути картинке и дальнейший вызов этой переменной в атрибуте :src-->
<!--            carousel_img_1: '/images/1.jpeg',-->
<!--            carousel_img_2: '/images/2.jpg',-->
<!--        }-->
<!--    },-->
<!--    // mounted() {  - это хук жизненного цикла vue, вызывающийся при добавлении компонента в шаблон DOM-->
<!--    //     console.log('Header mounted.')-->
<!--    // },-->
<!--    computed: mapGetters({//вычисляемое свойство, реагирует на изменение состояния переменных user и user_role во vue-компоненте-->
<!--        user: 'user',//вылавливаем геттер состояния пользователя-->
<!--        user_role: 'user_role'// вылавливаем геттер роли текущего пользователя-->
<!--    }),-->
<!--    methods: {// методы vue компонента, вызывающиеся в шаблоне-->
<!--        async logout() {//асинхронная функция для выхода из учетной записи, async-->
<!--            // Выход из учетной записи-->
<!--            await this.$store.dispatch('logout')-->
<!--            // Редирект на страницу Home, $router - объект, в котором хранятся маршруты к компонентам-->
<!--            this.$router.push({name: 'Home'})-->
<!--        }-->
<!--    }-->
<!--}-->
<!--</script>-->

<!--<style scoped>/*scoped означает, что стили будут применяться только в данном текущем компонента а не передаваться в дочерний*/-->

<!--.whole_header{-->
<!--    color: white;-->
<!--    max-width: 1320px;-->
<!--    margin: 0px auto;-->
<!--    padding: 0px 13px;-->
<!--    padding-bottom: 0px-->
<!--}-->

<!--.title_container{-->
<!--    margin-top: 12px;-->
<!--}-->

<!--.title{-->
<!--    text-transform:uppercase;-->
<!--}-->

<!--.authorization{-->
<!--    margin-right: 15px;-->
<!--    margin-top: 10px;-->
<!--}-->

<!--.language{-->
<!--    margin-top: 10px;-->
<!--}-->

<!--.currency{-->
<!--    margin-top: 10px;-->
<!--}-->

<!--hr{-->
<!--    border: none;-->
<!--    color: white;-->
<!--    background-color: #7e7e7f;-->
<!--    height: 1px;-->
<!--}-->

<!--.search_container{-->
<!--    color: white;-->
<!--    max-width: 1320px;-->
<!--    margin: 0px auto;-->
<!--    padding: 0px 15px;-->
<!--    padding-bottom: 18px;-->
<!--}-->

<!--.search{-->
<!--    margin-top: 20px;-->
<!--    padding-left: 0px;-->
<!--=======-->
    <div style="max-width: 1833px">
        <div>
            <first_level_header/>
            <hr style="
        border: none;
        color: #7e7e7f;
        background-color: #7e7e7f;
        height: 1px; padding-top: 0px; margin-top: 5px">
            <div class="container">
                <second_level_header/>
                <third_level_header/>
            </div>
        </div>
    </div>
</template>
<script>
import {mapGetters} from 'vuex'
import First_level_header from "./first_level_header";
import Second_level_header from "./second_level_header";
import Third_level_header from "./third_level_header";

export default {
    name: "Header",
    components: {Third_level_header, Second_level_header, First_level_header},
    mounted() {
        console.log('Header mounted.')
    },

}
</script>
<style scoped>
.search_input{
    height: 47px;
    width: 240px;
    padding: 0px 2px 5px 25px;
    background: url('http://3.bp.blogspot.com/-4w14hQHr5yQ/Tgm6u7KwUkI/AAAAAAAACAI/Hu2poBOPx3g/s25/search.png')
    no-repeat scroll 0 50%;
}

.header_img{
    padding-bottom: 10px;
}

.busket_indicator{
    padding: 25px;
    padding-left: 18px;
}

.fas{
    font-size: 30px;
}

.menu{
    color: white;
    max-width: 1300px; height: 70px;
    margin: 0px auto;
    padding: 0px 15px;
}

.menu_list{
    height: 70px;
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 0;
}

.collection_carousel{
    padding-left: 15px;
    margin: 0px;
    max-width: 1095px;
}

=======
>>>>>>> c5b50b1cf2978177b35922422cbd2487a22cdb08
.header_1 {
    margin-left: 370px;
    margin-right: 370px;
    width: 100%;

}

.container {
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

.nav-link {
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

div {
    padding-left: 0;
    padding-right: 0;
}

.row_1 {
    /*margin-top: 0.5rem;*/
    /*margin-bottom: 0.5rem;*/
    display: flex;
    text-decoration: none;
}

.row_1 a:hover {
    text-decoration: none;
}

.row_2 {
    background-color: #424242;
    padding-bottom: 0;
    padding-top: 0;
}

a {
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

#dropdownMenuButton, #account {
    background-color: Transparent;
    background-repeat: no-repeat;
    border: none;
    border-radius: 0 0 0 0;
    cursor: pointer;
    overflow: hidden;
    outline: none;
    box-shadow: none;
    padding-right: 16px;
    padding-left: 16px;
    padding-top: 0px;
    padding-bottom: 8px;
}

#dropdownMenuButton:hover {
    background: #FB4251;
    text-decoration: none;
    box-shadow: none;
}

#dropdownMenuButton:active, #dropdownMenuButton:focus {
    outline: none !important;;
    background: #FB4251;
}

#dropdownMenuButton::-moz-focus-inner {
    border: 0 !important;;
    background: #FB4251;
}

#account {
    padding-top: 0;
    padding-bottom: 0;
}

#account:hover {
    box-shadow: none;
}

h1 div, p {
    width: 100%;
    margin: 0 auto;
}

.nav-item {

}

.dropdown-header {
    color: #fff;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
}

.item {
    display: block;
    padding: 5px 20px;
    clear: both;
    font-weight: 500;
    white-space: normal;
}

.mega-dropdown {
    position: static !important;
}

.dropdown-menu.show {
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

.dropdown-menu_2.show {
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
