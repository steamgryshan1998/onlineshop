<template>
    <div>
        <div id="overlay">
            <div class="popup">

                <ul class="nav row " style="height: 220px; width: 1050px">
                <li class="col-2" >
<!--                   <img src="/public/images/callback-img.png"  class="d-block" style="height: 150px; width: 150px" alt="...">-->
                    <img src="/images/header.jpg"  class="img-fluid" alt="" width="1080px">

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


<Banner_carousel />


<Cont_homepage />
    </div>
</template>

<script>
import Cont_homepage from "./Container_homepage";
import Banner_carousel from "./Banner_carousel";
export default {
    name: "Home",
    components: {Banner_carousel, Cont_homepage}
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
    margin: auto;
    min-width: 320px;
    max-width: 600px;
    position: absolute;
    padding: 15px 20px;
    border: 1px solid #383838;
    background: #fefefe;
    z-index: 1000;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;

    border-radius: 4px;
    font: 14px/18px 'Tahoma', Arial, sans-serif;
    -webkit-box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
    -moz-box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);

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

.scale {
    display: inline-block; /* Строчно-блочный элемент */
    overflow: hidden; /* Скрываем всё за контуром */
}
.scale img {
    transition: 1s; /* Время эффекта */
    display: block; /* Убираем небольшой отступ снизу */
}
.scale img:hover {
    transform: scale(1.2); /* Увеличиваем масштаб */
}

.carousel-indicators li {
    background: #a3a3a3;
    border-radius: 100%;
    width: 23px;

}

.blog .carousel-indicators .active {
    background: #707070;
}

</style>
