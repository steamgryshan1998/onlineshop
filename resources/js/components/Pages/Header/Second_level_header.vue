<template>
    <div class="row_1">
        <div class="box">
            <div class="container-1">
                <span class="icon"><i class="fa fa-search"></i></span>
                <input type="search" id="search" placeholder="Search" style="border: 1px double #424242;"/>
            </div>
        </div>
        <div class="col-3">
        </div>
        <a class="navbar-brand"><img src="/images/darklook.png" width="240px"></a>
        <div class="col-2"></div>
        <div class="col-2 basket">
            <router-link to="/basket"><i class="fas fa-shopping-cart" style="font-size: 30px;"></i><span
                v-text="'(' + cart.length + ' items)'"></span>
<!-- v-text - обновляет текстовое содержимое элемента, в котором проходит как атрибут;  вылавливаем из vuex количество
элементов в корзине, знак $ используется для получения доступа к объекту store, в котором хранится vuex,
length - встроенный js метод для нахождения длины массива ибо cart это массив корзины-->
            </router-link>
        </div>
    </div>
</template>

<script>
import {mapGetters} from "vuex";

export default {
    name: "second_level_header",
    computed: mapGetters({
        cart: 'cart',
    }),
}
</script>

<style scoped>
div {
    padding-left: 0;
    padding-right: 0;
}

.row_1 {
    color: white;
    max-width: 1320px;
    margin: 0px auto;
    padding: 0px 15px;
    padding-bottom: 24px;
    display: flex;
    text-decoration: none;
}

.row_1 a:hover {
    text-decoration: none;
}

.box{
    margin-top: 25px;
    padding-top: 0;
    padding-left: 56px;
    height: 58px;
    width: 218px;
}

.container-1{
    font-family: Poppins, sans-serif;
    letter-spacing: 5px;
}

img{
    margin-top: 6px;
    margin-left: 29px;
}

.basket{
    padding: 25px;
    padding-left: 72px;
    margin-top: 5px;
}

a {
    color: #7d7e7e;
}

.container-1 input#search {
    width: 220px;
    height: 40px;
    background: #000001;
    border: none;
    font-size: 10pt;
    float: left;
    color: #63717f;
    padding-left: 10px;

}

.container-1 .icon {
    position: absolute;
    top: 50%;
    margin-left: 192px;
    margin-top: 10px;
    z-index: 1;
    color: #4f5b66;
}

.container-1{
    width: 220px;
    vertical-align: middle;
    white-space: nowrap;
    position: relative;
}
.container-1 input#search::-webkit-input-placeholder {
    color: #989898;
    letter-spacing: 1px;
    font-size: 95%;
}

.fa-shopping-cart:hover {
    color: #fa880b;
    text-decoration: none;
}
</style>
