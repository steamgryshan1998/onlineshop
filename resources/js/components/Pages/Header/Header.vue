<template>
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
    <div>
        <div>
            <div class="container">
                <first_level_header/>
            </div>
            <hr>
            <div class="container">
                <second_level_header/>
                <third_level_header/>
            </div>
        </div>
    </div>
</template>
<script>
import First_level_header from "./First_level_header";
import Second_level_header from "./Second_level_header";
import Third_level_header from "./Third_level_header";
export default {
    name: "Header",
    components: {Third_level_header, Second_level_header, First_level_header},
}
</script>
<style scoped>
/* scoped означает, что стили будут применяться только в данном текущем компонента а не передаваться в дочерний */
div{
    max-width: 1833px
}
.container {
    color: #58503d;
    max-width: 1800px;
    margin: 0px auto;
    padding: 0px 15px;
}
hr{
    border: none;
    color: #7e7e7f;
    background-color: #7e7e7f;
    height: 1px; padding-top: 0px; margin-top: 7px
}
</style>
