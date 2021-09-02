<template>
    <div>
        <div id="overlay">
            <div class="popup">

                <ul class="nav row " style="margin-top: 20px">
                <li class="col-5" >
                    <img :src="require('../../../../public/images/images/callback-img.png').default" class="d-block w-100" style="height: 150px; width: 300px" alt="...">
                </li>
                <li class="col-7">
                    <h2 style="font-size: 50px;font-weight: 600; ">50% off</h2>
                    <hr style="color: #5a6268">
                    <h6 style="margin: 10px">SIGN UP AND GET 50% OFF YOUR NEXT ORDER</h6>
                    <hr style="color: #5a6268">
                    <input placeholder="Enter Your Email">
                    <button type="submit" class="btn btn-default btn-lg" id="email-popup-submit" style="    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    box-sizing: border-box;
    font: inherit;
    overflow: visible;
    margin: 20px;
    -webkit-appearance: button;
    font-family: inherit;
    display: inline-block;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    user-select: none;
    font-size: 18px;
    line-height: 1.3333333;
    background: #424242 none repeat scroll 0 0;
    border-radius: 0;
    color: #fff;
    text-transform: uppercase;
    font-weight: 500;
    border: 0;
    transition: all 0.5s ease 0s;
    padding: 10px 18px;
    margin: 20px 0 0;
    float: left;">Subscribe</button>


                </li>
                </ul>
                <button class="close" title="Закрыть" onclick="document.getElementById('overlay').style.display='none';"></button>
            </div>
        </div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="padding-left: 0px; margin: 0px; width: 1818px; height:620px">
            <div class="carousel-inner" >
                <div class="carousel-item active">

                    <img :src="require('../../../../public/images/ban.jpg').default" class="d-block w-100" height="494px" width="100%" alt="...">
                </div>
                <div class="carousel-item">
                    <img :src="require('../../../../public/images/ban2.jpg').default" class="d-block w-100" height="494px" alt="...">
                </div>

            </div>
            <div style="max-width: 1095px">
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



        <div class="row pointers" style="padding: 10px; margin-left: 40px">
            <div class="col-3" >
                <i class="fas fa-truck-loading"></i>
                <a   class="learnMore" style="font-weight:bold"> FREE SHIPPING</a><br>
                Free dedlivery worldwide
            </div>
            <div class="col-3">
                <i class="fas fa-globe"></i>
                <a   class="learnMore" style="font-weight:bold">ORDER ONLINE</a><br>
                Hours : 8am - 11pm
            </div>
            <div class="col-3">
                <i class="fas fa-wallet"></i>
                <a   class="learnMore" style="font-weight:bold">SHOP AND SAVE</a><br>
                For All Spices & Herbs
            </div>
            <div class="col-3">
                <i class="fas fa-user-shield"></i>
                <a   class="learnMore"  style="font-weight:bold">SAFE SHOPPING</a><br>
                Ensure genuine 100%
            </div>
        </div>

        <div class="col-md-12">
            <img :src="require('../../../../public/images/images/cart.1GucY.jpg').default" class="img-fluid" alt="" width="1080px" height="300px">
        </div>

    </div>
</template>

<script>
export default {
    name: "Home"
}
let delay_popup = 0;
setTimeout("document.getElementById('overlay').style.display='block'", delay_popup);
</script>

<style scoped>
h1{
    text-align: center;
}
.pointers{
    padding-left: 0px;
    padding-right: 0px;
}

.learnMore {
    background-color: none;
    color:white;
}
.learnMore:hover {
    /*background-color:purple;*/
    color: #fa880b;
    text-decoration: none;
}




#overlay {
    position: fixed;
    top: 0;
    left: 0;
    display: none;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.65);
    z-index: 999;
    -webkit-animation: fade .6s;
    -moz-animation: fade .6s;
    animation: fade .6s;
    overflow: auto;
}
.popup {
    color: black;
    top: 25%;
    left: 0;
    right: 0;
    font-size: 14px;
    margin: auto;
    width: 1150px;
    min-width: 320px;
    max-width: 600px;
    position: absolute;
    padding: 15px 20px;
    border: 1px solid #383838;
    background: #fefefe;
    z-index: 1000;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    -ms-border-radius: 4px;
    border-radius: 4px;
    font: 14px/18px 'Tahoma', Arial, sans-serif;
    -webkit-box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
    -moz-box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
    -ms-box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
    box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
    -webkit-animation: fade .6s;
    -moz-animation: fade .6s;
    animation: fade .6s;
}
.close {
    top: 10px;
    right: 10px;
    width: 32px;
    height: 32px;
    position: absolute;
    border: none;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
    background-color: rgba(0, 131, 119, 0.9);
    -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
    cursor: pointer;
    outline: none;

}
.close:before {
    color: rgba(255, 255, 255, 0.9);
    content: "X";
    font-family:  Arial, Helvetica, sans-serif;
    font-size: 14px;
    font-weight: normal;
    text-decoration: none;
    text-shadow: 0 -1px rgba(0, 0, 0, 0.9);
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    transition: all 0.5s;
}
/* кнопка закрытия при наведении */
.close:hover {
    background-color: rgba(252, 20, 0, 0.8);
}

</style>

<!--<template>-->
<!--    <div>-->
<!--        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">-->
<!--            <ol class="carousel-indicators">-->
<!--                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">-->
<!--                    <li data-target="#carousel" data-slide-to="0" class="active"></li>-->
<!--                </a>-->
<!--                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">-->
<!--                    <li data-target="#carousel" data-slide-to="1"></li>-->
<!--                </a>-->
<!--            </ol>-->
<!--            <div class="carousel-inner">-->
<!--                <div class="carousel-item active">-->
<!--                    <img :src="require('../../../../public/main_banner1.jpg').default" class="d-block w-100" alt="...">-->
<!--                </div>-->
<!--                <div class="carousel-item">-->
<!--                    <img :src="require('../../../../public/main_banner2.jpg').default" class="d-block w-100" alt="...">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row pointers">-->
<!--            <div class="col-3">-->
<!--                <i class="fas fa-truck-loading"></i>-->
<!--                FREE SHIPPING<br>-->
<!--                Free delivery worldwide-->
<!--            </div>-->
<!--            <div class="col-3">-->
<!--                <i class="fas fa-globe"></i>-->
<!--                ORDER ONLINE<br>-->
<!--                Hours : 8am - 11pm-->
<!--            </div>-->
<!--            <div class="col-3">-->
<!--                <i class="fas fa-wallet"></i>-->
<!--                SHOP AND SAVE<br>-->
<!--                For All Spices & Herbs-->
<!--            </div>-->
<!--            <div class="col-3">-->
<!--                <i class="fas fa-user-shield"></i>-->
<!--                SAFE SHOPPING<br>-->
<!--                Ensure genuine 100%-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md-12">-->
<!--            <img :src="require('../../../../public/store.jpg').default" class="img-fluid" alt="" width="1080px" height="300px">-->
<!--        </div>-->

<!--    </div>-->
<!--</template>-->

<!--<script>-->
<!--export default {-->
<!--    name: "Home"-->
<!--}-->
<!--</script>-->

<!--<style scoped>-->
<!--h1{-->
<!--    text-align: center;-->
<!--}-->
<!--.pointers{-->
<!--    padding-left: 15px;-->
<!--    padding-right: 15px;-->
<!--}-->
<!--</style>-->
