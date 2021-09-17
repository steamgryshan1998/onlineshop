<template>
<div class="flex-fill">
    <Header/><!--Подключаем хедер-->
    <message></message>
    <router-view></router-view><!--компонент для отображения компонента, для которого совпадает маршрут-->
</div>
</template>

<script>
import Header from "./Pages/Header/Header";//импортируем компонент Header
import Message from "./Modal/Message";

export default {
    name: "MainComponent",
    components: {
        Header, Message//определяем дочерние компоненты, импортированный в текущий(родительский)
    },
    created() {//хук, позволяющий получить доступ к реактивным данным(автоматическая реакция на изменение состояния), в данном случае к состоянию корзины(state из vuex)
        // cart() {
            return this.$store.state.cart;//возвращаем текущее состояние корзины из vuex($ - спецификатор доступа к vuex store)
        // }
    }
}
</script>

<style scoped>
div{
    color: white;
}
</style>
