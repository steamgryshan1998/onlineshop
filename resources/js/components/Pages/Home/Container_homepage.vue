
<template>
    <div>

        <div class="container">
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

            <div class="col-md-12 scale">
                <img src="/images/store.jpg"  class="img-fluid scale" alt="" width="1170px" height="298px">

            </div>
        </div>

    </div>


</template>


<script>

export default {
    name: "Cont_homepage"
}

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
