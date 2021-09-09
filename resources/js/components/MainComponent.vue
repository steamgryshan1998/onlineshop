<template>
<div class="flex-fill">
    <Header />
    <message></message>
    <router-view></router-view>
</div>
</template>

<script>
import Header from "./Pages/Header/Header";
import Message from "./Modal/Message";

export default {
    name: "MainComponent",
    components: {
        Header, Message
    },
    created() {
        // cart() {
            return this.$store.state.cart;
        // }
    }
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
.container{
    color: white;
    max-width: 1200px;
    margin: 0px auto;
    padding: 0px 15px;
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

</style>
