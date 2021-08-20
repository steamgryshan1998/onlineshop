<template>
    <div>
    <div class="col-md-12">
        <img :src="require('../../../../public/store.jpg').default" class="img-fluid" alt="" width="1080px" height="300px">
    </div>
        <div class="row pointers">
            <div class="col-3">
                <i class="fas fa-truck-loading"></i>
                FREE SHIPPING<br>
                Free dedlivery worldwide
            </div>
            <div class="col-3">
                <i class="fas fa-globe"></i>
                ORDER ONLINE<br>
                Hours : 8am - 11pm
            </div>
            <div class="col-3">
                <i class="fas fa-wallet"></i>
                SHOP AND SAVE<br>
                For All Spices & Herbs
            </div>
            <div class="col-3">
                <i class="fas fa-user-shield"></i>
                SAFE SHOPPING<br>
                Ensure genuine 100%
            </div>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img :src="require('../../../../public/main_banner1.jpg').default" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img :src="require('../../../../public/main_banner2.jpg').default" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Предыдущий</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Следующий</span>
            </a>
        </div>
    </div>
</template>

<script>
export default {
    name: "Home"
}
</script>

<style scoped>
h1{
    text-align: center;
}
.pointers{
    padding-left: 15px;
    padding-right: 15px;
}
</style>
