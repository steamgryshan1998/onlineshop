<template>
<div>
    <Header />
<!--    <hr>-->
    <router-view></router-view>
</div>
</template>

<script>
import Header from "./Header";

export default {
    name: "MainComponent",
    components: {Header}
}
</script>

<style scoped>
div{
    color: white;
}
hr{
    border: 1px solid white;
    margin-top: 0;
}
</style>
