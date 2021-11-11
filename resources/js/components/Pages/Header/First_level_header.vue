<template>
    <div class="first_header">
        <div class="row_1">
            <div class="col-4 work_hours">
                <router-link to="/"><h6>Days a week from 9:00 am to 7:00 pm</h6></router-link>
            </div>
            <div class="col-4">
            </div>
            <div class="col-1 account_dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="account" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    <span v-if="!user">My Account</span>
<!--v-if отвечает за условный рендеринг, в зависимости от значения переменной user -->
                    <span v-else>{{ user.name }}</span>
                </button>
                <div class="dropdown-menu dropdown-menu_2" aria-labelledby="dropdownMenuButton">
                    <router-link v-if="!user" to="/login"><a class="dropdown-item" href="#">Login</a></router-link>
                    <router-link v-if="!user" to="/register"><a class="dropdown-item" href="#">Register</a>
                    </router-link>
                    <router-link v-if="user_role === 'admin'" to="/admin"><a class="dropdown-item" href="#">Admin
                        Dashboard</a></router-link>
                    <a v-if="user" class="dropdown-item" href="#" @click.prevent="logout">Logout</a>
<!--директива @click запускает метод logout по клику на ссылку, prevent - модификатор, не допускающий перезагрузку страницы -->
                </div>
            </div>
            <div class="col-1 language_dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="account" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    <span>Language</span>
                </button>
                <div class="drop dropdown-menu dropdown-menu_2" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">English</a>
                    <a class="dropdown-item" href="#">French</a>
                    <a class="dropdown-item" href="#">German</a>
                </div>
            </div>
            <div class="col-2 currency_dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="account" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
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
import {mapGetters} from "vuex";//импорт геттеров из Vuex
export default {//экспорт компонента
    name: "first_level_header",//имя текущего компонента
    computed: mapGetters({//вычисляемое свойство, реагирует на изменение состояния переменных user и user_role во vue-компоненте
        user: 'user',//вылавливаем геттер состояния пользователя
        user_role: 'user_role'//вылавливаем геттер роли текущего пользователя
    }),
    methods: {// методы vue компонента, вызывающиеся в шаблоне
        async logout() {//асинхронная функция для выхода из учетной записи, async
            // Выход из учетной записи
            await this.$store.dispatch('logout')
            // Редирект на страницу Home, $router - объект, в котором хранятся маршруты к компонентам
            this.$router.push({name: 'Home'})
        }
    }
}
</script>
<style scoped>
div {
    padding-left: 0;
    padding-right: 0;
}
.first_header{
    color: white;
    max-width: 1320px;
    margin: 0px auto;
    padding: 0px 13px;
    padding-bottom: 0px;
}
.row_1 {
    display: flex;
    text-decoration: none;
}
.work_hours{
    margin-top: 15px;
    padding-left: 63px;
    text-transform:uppercase
}
.account_dropdown{
    margin-left: 48px;
    margin-top: 10px
}
.language_dropdown{
    margin-top: 10px;
}
.currency_dropdown{
    margin-top: 10px;
}
.row_1 a:hover {
    text-decoration: none;
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
.dropdown-menu_2.show {
    border-radius: unset;
    border-top: 0;
    border-left-width: 0;
    margin-top: 0;
    margin-left: 0;
    margin-right: 363px;
    width: 50px;
    display: block;
    background-color: #424242;
}
</style>
