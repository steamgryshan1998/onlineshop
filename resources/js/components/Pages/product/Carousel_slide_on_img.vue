<template>
    <div>
        <div class="row blog">
            <div class="col-md-6">
                <div id="blogCarousel" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators">
                        <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#blogCarousel" data-slide-to="1"></li>
                    </ol>

                    <!-- Carousel items -->
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="#">
                                        <img :src="product.image" alt="Image" style="max-width:100%;">
                                        
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img :src="product.image" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img :src="product.image" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img :src="product.image" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="#">
                                        <img :src="product.image" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img :src="product.image" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img :src="product.image" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                                <div class="col-md-3">
                                    <a href="#">
                                        <img :src="product.image" alt="Image" style="max-width:100%;">
                                    </a>
                                </div>
                            </div>
                            <!--.row-->
                        </div>
                        <!--.item-->

                    </div>
                    <!--.carousel-inner-->
                </div>
                <!--.Carousel-->
            </div>
            <div class="col-md-6">
                <ul class="icons">
                    <li class="icon_items"><a href="#"><i class="fas fa-heart"></i></a></li>
                    <li class="icon_items"><a href="#"><i class="fas fa-align-left"></i></a></li>
                    <li class="icon_items"><a href="#"><i class="fas fa-cart-plus"></i></a></li>
                </ul>
            </div>

        </div>
    </div>
</template>


<script>

export default {
    name: "Car_sl_on_im"
}

</script>


<style scoped>
.page{
    font-size: 0.9rem;
    color: #928383;
}
.add{
    background-color: blue;
}
.card{
    margin-top: 20px;
    background-color: black;
}
p{
    margin-bottom: 0;
}
hr {
    border-top: 0.5px solid #928383;
    margin-bottom: 20px;
    margin-top: 20px;
}
a{
    color: white;
}
.price{
    color: white;
    font: 700 20px/20px "Roboto";
    margin-bottom: 20px;
}
.card-title{
    margin-bottom: 0;
    font-size: 18px;
    line-height: 22px;
    font-weight: 400;
}
.stars{
    height: 13px;
    width: 13px;
}
.red_star{
    color: red;
    height: 13px;
    width: 13px;
}
.name_of_param{
    font-weight: bold;
    margin-bottom: 0;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
    line-height: 24px;
}
.inputs{
    margin-top: 20px;
}
.card-body{
    padding-top: 0px;
    padding-right: 0px;
}
.nav{
    margin-top: 30px;
}
.fade{
    margin-top: 20px;
}
.rating{
    margin-bottom: 18px;
}


.blog{
    margin-top: 30px;
}
.blog .carousel-indicators {
    left: 0;
    top: auto;
    bottom: -40px;

}

.carousel-item{
    padding-left: 15px;
    padding-right: 15px;
}

/* The colour of the indicators */
.blog .carousel-indicators li {
    background: #a3a3a3;
    border-radius: 100%;
    width: 23px;

}

.blog .carousel-indicators .active {
    background: #707070;
}

.icons{
    padding-top: 20px;
    display: flex;
}
.icon_items{
    list-style: none;
    display: inline;
    margin-right: 10px;
    margin-left: 10px;
}
.icon_items:hover{
    background-color: red;
}

.review{
    margin-top: 50px;
}
.input-group{
    margin-top: 30px;
}


.submit{
    margin-right: 0;
    margin-left: 0;
}
.continue{
    margin-top: 20px;
    margin-left: 738px;
    margin-right: 0;
}

</style>
