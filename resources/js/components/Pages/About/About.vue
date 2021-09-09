<template>
    <div class="container" style="width: 1095px">
        <ul class="nav " style=" padding-left: 0px; padding-right: 0px">
            <li class="col-3" style="padding-left: 0px">
                <sidebar></sidebar>
            </li>


            <li class="col-9">
                <img :src="require('../../../../../public/images/ab2.png').default" alt="" width="792px" style="margin-bottom: 20px;">


                <div class="about-heading-wrap" style="    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    line-height: 24px;
    color: #9E9E9E;
    font-size: 14px;
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    letter-spacing: 0.5px;
    box-sizing: border-box; margin-bottom: 20px;">
                    <h2 class="about-heading mb_20 mt_40 ptb_10" style="font-weight:bold">THEMINI DESIGN IS BEST PART OF
                        <span style="font-weight: normal"> MY LIFE </span></h2>
                </div>
                <h6 style="color: #8e9398">here are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form, by injected humour, or randomised words which don't look even slightly
                    believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't
                    anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet
                    tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                    It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,
                    to generate Lorem Ipsum which looks reasonable. The generated Lorem of text. All the Lorem Ipsum
                    generators on the Internet tend to repeat predefined chunks as necessary, making this the first true
                    generator on the Internet. It uses a Ipsum is therefore always free from repetition, injected
                    humour, or non-characteristic words etc.</h6>

                <p><button class="btn mt_30" type="submit" style="
     -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    box-sizing: border-box;
    margin: 0;
    font: inherit;
    overflow: visible;
    -webkit-appearance: button;
    display: inline-block;
    font-size: 14px;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    touch-action: manipulation;
    cursor: pointer;
    user-select: none;
    border: 1px solid transparent;
    margin-top: 10px;
    background: #424242 none repeat scroll 0 0;
    border-radius: 0;
    color: #fff;
    padding: 10px 20px;
    text-transform: uppercase;
    font-weight: 500;">Hire Me</button></p>




                <ul class="nav " style="margin-top: 60px">
                    <li class="col-5">
                        <Accordion_about />

                    </li>



                    <li class="col-4">
                        <Skills_about />



                    </li>
                </ul>





            </li>
        </ul>
    </div>
</template>

<script>

import Sidebar from "../ Global_sidebar/Sidebar";
import Skills_about from "./Skills";
import Accordion_about from "./Accordion_about";


export default {
    name: "About",
    components: {Accordion_about, Skills_about, Sidebar}
}
</script>

<style scoped>

.card-body{
    color: #696969;
}
body {
    background: rgb(215, 143, 47);
    background: -moz-linear-gradient(left, rgb(214, 142, 47) 0%, rgb(245, 141, 97) 50%, rgb(214, 142, 47) 100%);
    /*background: -webkit-gradient(left top, right top, color-stop(0%, rgb(213, 141, 47)), color-stop(50%, rgba(245,141,97,1)), color-stop(100%, rgb(213, 141, 47)));*/
    background: -webkit-linear-gradient(left, rgb(214, 142, 47) 0%, rgb(245, 141, 97) 50%, rgb(214, 142, 47) 100%);
    background: -o-linear-gradient(left, rgb(214, 142, 47) 0%, rgb(245, 141, 97) 50%, rgb(214, 142, 47) 100%);
    background: -ms-linear-gradient(left, rgb(214, 142, 47) 0%, rgb(245, 141, 97) 50%, rgb(214, 142, 47) 100%);
    background: linear-gradient(to right, rgb(214, 142, 47) 0%, rgb(245, 141, 97) 50%, rgb(214, 142, 47) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f4676e', endColorstr='#f4676e', GradientType=1);
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.container {
    margin: 50px auto;
    width: 900px;

}

button:hover{
    background-color: #b49543;
}

.client h3 {
    font-size: 16px;
    color: #ff8e00;
    padding: 0px;
    margin: 0px;
}

.client h6 {
    color: #9b5719;
}

.client h3 {
    font-weight: 100;
    margin-top: 0px;
}



.client:hover .logo {
    background: rgb(215, 143, 47);
    background: -moz-linear-gradient(top, rgb(215, 143, 47) 0%, rgb(7, 5, 4) 100%);
    background: -webkit-linear-gradient(top, rgb(215, 143, 47) 0%, rgb(3, 3, 2) 100%);
    background: -o-linear-gradient(top, rgb(215, 143, 47) 0%, rgb(0, 0, 1) 100%);
    background: -ms-linear-gradient(top, rgb(215, 143, 47) 0%, rgb(19, 19, 19) 100%);
    background: linear-gradient(to bottom, rgb(215, 143, 47) 0%, rgb(19, 19, 19) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f4676e', endColorstr='#4d406f', GradientType=0);
    border: 5px solid #eee;
}


.wrapper h1 {
    font-weight: 100;
    margin: 0px;
    padding: 0px;
}
</style>


<!--АВТОРОСКОЕ-->

<!--<div class="client"><span class="logo"><img :src="require('../../../../public/images/bee2.jpg').default" class="img-fluid" alt="" width="500px" height="500px" style="border-radius: 500px; border: 3px solid #ffa600;box-shadow: 0 0 7px #666; "></span><h3>Lorem ipsum</h3><h6>detailed information</h6></div>-->
<!--<div class="client"><span class="logo"><img :src="require('../../../../public/images/tm1.jpg').default" class="img-fluid" alt="" width="500px" height="500px" style="border-radius: 500px; border: 3px solid #ffa600;box-shadow: 0 0 7px #666; "></span><h3>Lorem ipsum</h3><h6>detailed information</h6></div>-->
<!--<div class="client"><span class="logo"><img :src="require('../../../../public/images/tm2.jpg').default" class="img-fluid" alt="" width="500px" height="500px" style="border-radius: 500px; border: 3px solid #ffa600;box-shadow: 0 0 7px #666; "></span><h3>Lorem ipsum</h3><h6>detailed information</h6></div>-->
<!--<div class="client"><span class="logo"><img :src="require('../../../../public/images/tm3.jpg').default" class="img-fluid" alt="" width="500px" height="500px" style="border-radius: 500px; border: 3px solid #ffa600;box-shadow: 0 0 7px #666; "></span><h3>Lorem ipsum</h3><h6>detailed information</h6></div>-->
<!--<div class="client"><span class="logo"><img :src="require('../../../../public/images/tm4.jpg').default" class="img-fluid" alt="" width="500px" height="500px" style="border-radius: 500px; border: 3px solid #ffa600;box-shadow: 0 0 7px #666; "></span><h3>Lorem ipsum</h3><h6>detailed information</h6></div>-->
<!--<div class="client"><span class="logo"><img :src="require('../../../../public/images/tm5.jpg').default" class="img-fluid" alt="" width="500px" height="500px" style="border-radius: 500px; border: 3px solid #ffa600;box-shadow: 0 0 7px #666; "></span><h3>Lorem ipsum</h3><h6>detailed information</h6></div>-->
<!--<div class="clearer"></div>-->


<!--<div class="row pointers" style="padding: 10px; margin-right: 20px" >-->
<!--<div class="col-3">-->
<!--    <i class="fas fa-truck-loading"></i>-->
<!--    FREE SHIPPING<br>-->
<!--    Free dedlivery worldwide-->
<!--</div>-->
<!--<div class="col-3">-->
<!--    <i class="fas fa-globe"></i>-->
<!--    ORDER ONLINE<br>-->
<!--    Hours : 8am - 11pm-->
<!--</div>-->
<!--<div class="col-3">-->
<!--    <i class="fas fa-wallet"></i>-->
<!--    SHOP AND SAVE<br>-->
<!--    For All Spices & Herbs-->
<!--</div>-->
<!--<div class="col-3">-->
<!--    <i class="fas fa-user-shield"></i>-->
<!--    SAFE SHOPPING<br>-->
<!--    Ensure genuine 100%-->
<!--</div>-->

<!--</div>-->


<!--<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="margin:auto; max-width: 500px; max-higth: 500px; ma-lemargin: 20px; padding: 20px">-->
<!--<div class="carousel-inner" style="margin:auto">-->
<!--    <div class="carousel-item active">-->
<!--        <img :src="require('../../../../public/images/team1.jpg').default" class="d-block w-100" alt="..." style="max-width: 500px;border-radius: 500px; border: 3px solid #ffa600;box-shadow: 0 0 7px #666; ">-->
<!--        Lorem ipsum-->
<!--    </div>-->
<!--    <div class="carousel-item">-->
<!--        <img :src="require('../../../../public/images/team2.jpg').default" class="d-block w-100" alt="..." style="max-width: 500px;border-radius: 500px; border: 3px solid #ffa600;box-shadow: 0 0 7px #666; ">-->
<!--        Lorem ipsum-->
<!--    </div>-->
<!--    <div class="carousel-item">-->
<!--        <img :src="require('../../../../public/images/team3.jpg').default" class="d-block w-100" alt="..." style="max-width: 500px; border-radius: 500px; border: 3px solid #ffa600;box-shadow: 0 0 7px #666; ">-->
<!--        Lorem ipsum-->
<!--    </div>-->
<!--</div>-->
<!--<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">-->
<!--    <span class="carousel-control-prev-icon" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Предыдущий</span>-->
<!--</a>-->
<!--<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">-->
<!--    <span class="carousel-control-next-icon" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Следующий</span>-->
<!--</a>-->
<!--</div>-->
