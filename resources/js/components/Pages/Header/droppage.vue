<template>

    <ul class="nav justify-content-center"
        style="
                        height: 70px;
                        padding-left: 121px;
                        padding-right: 20px;
                        padding-top: 0px;
                        font-family: Geneva, Arial, Helvetica, sans-serif">
        <li class="nav-item">
            <router-link to="/"><a class="nav-link" style="">HOME</a></router-link>
        </li>
        <li class="nav-item dropdown mega-dropdown" ><a href="#" class="nav-link " data-toggle="dropdown">
            COLLECTION</a>
            <ul class="dropdown-menu mega-dropdown-menu row justify-content-center"
                style="width: 1171px; margin-left: 703px">
                <li class="col-md-3">
                    <ul>
                        <li class="dropdown-header">Women's</li>
                        <li class="item"><a href="#">Unique Features</a></li>
                        <li class="item"><a href="#">Image Responsive</a></li>
                        <li class="item"><a href="#">Auto Carousel</a></li>
                        <li class="item"><a href="#">Newsletter Form</a></li>
                        <li class="item"><a href="#">Four columns</a></li>
                        <li class="item"><a href="#">Four columns</a></li>
                        <li class="item"><a href="#">Good Typography</a></li>
                    </ul>
                </li>
                <li class="col-md-3">
                    <ul>
                        <li class="dropdown-header">Man's</li>
                        <li class="item"><a href="#">Unique Features</a></li>
                        <li class="item"><a href="#">Image Responsive</a></li>
                        <li class="item"><a href="#">Four columns</a></li>
                        <li class="item"><a href="#">Auto Carousel</a></li>
                        <li class="item"><a href="#">Newsletter Form</a></li>
                        <li class="item"><a href="#">Four columns</a></li>
                        <li class="item"><a href="#">Good Typography</a></li>
                    </ul>
                </li>
                <li class="col-md-3">
                    <ul>
                        <li class="dropdown-header">Children's</li>
                        <li class="item"><a href="#">Unique Features</a></li>
                        <li class="item"><a href="#">Four columns</a></li>
                        <li class="item"><a href="#">Image Responsive</a></li>
                        <li class="item"><a href="#">Auto Carousel</a></li>
                        <li class="item"><a href="#">Newsletter Form</a></li>
                        <li class="item"><a href="#">Four columns</a></li>
                        <li class="item"><a href="#">Good Typography</a></li>
                    </ul>
                </li>
                <li class="col-md-3">
                    <ul>
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel"
                             style="padding-left: 15px; margin: 0px; max-width: 1095px">
                            <div class="carousel-inner">
                                <div class="carousel-item active">

                                    <img src="/images/1.jpeg"
                                         class="d-block w-100" height="200px" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="/images/2.jpg"
                                         class="d-block w-100" height="200px" alt="...">
                                </div>

                            </div>

                        </div>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <router-link to="/shop"><a class="nav-link">SHOP</a></router-link>
        </li>
        <li class="nav-item">
            <router-link to="/shop"><a class="nav-link">BLOG</a></router-link>
        </li>
        <li class="nav-item">
            <router-link to="/shop"><a class="nav-link">PAGES</a></router-link>
        </li>
        <li class="nav-item">
            <router-link to="/about"><a class="nav-link">ABOUT US</a></router-link>
        </li>
        <li class="nav-item">
            <router-link to="/contact"><a class="nav-link">CONTACT US</a></router-link>
        </li>
    </ul>

</template>

<script>
export default {
    name: "droppage"
}
</script>

<style scoped>

.title{

}


.header_1{
    margin-left: 370px;
    margin-right: 370px;
    width: 100%;

}
.container{
    color: #58503d;
    max-width: 1800px;
    margin: 0px auto;
    padding: 0px 15px;
}
@media (max-width: 1200px) {
    .container {
        max-width: 970px;
    }
}
.nav-link{
    padding-top: 24px;
    padding-bottom: 23px;
    color: white
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
div{
    padding-left: 0;
    padding-right: 0;
}
.row_1{
    /*margin-top: 0.5rem;*/
    /*margin-bottom: 0.5rem;*/
    display: flex;
    text-decoration: none;
}
.row_1 a:hover{
    text-decoration: none;
}
.row_2{
    background-color: #424242;
    padding-bottom: 0;
    padding-top: 0;
}
a{
    color: #7d7e7e;

}
.row_2 a:hover {
    background: #fa4250;
    text-decoration: none;
    height: 64px;
}


.drop {
    background-color: #424242;
}
#dropdownMenuButton, #account{
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    border-radius: 0 0 0 0;
    cursor:pointer;
    overflow: hidden;
    outline:none;
    box-shadow: none;
    padding-right: 16px;
    padding-left: 16px;
    padding-top: 0px;
    padding-bottom: 8px;
}
#dropdownMenuButton:hover{
    background: #FB4251;
    text-decoration: none;
    box-shadow: none;
}
#dropdownMenuButton:active, #dropdownMenuButton:focus{
    outline: none !important;;
    background: #FB4251;
}
#dropdownMenuButton::-moz-focus-inner{
    border: 0 !important;;
    background: #FB4251;
}
#account{
    padding-top: 0;
    padding-bottom: 0;
}
#account:hover{
    box-shadow: none;
}

h1 div, p {
    width: 100%;
    margin: 0 auto;
}

.nav-item{

}

.dropdown-header{
    color: #fff;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
}

.item{
    display: block;
    padding: 5px 20px;
    clear: both;
    font-weight: 500;
    white-space: normal;
}

.mega-dropdown{
    position: static !important;
}
.dropdown-menu.show{
    border-radius: unset;
    border-top: 0;
    border-left-width: 0px;
    margin-top: 0;
    margin-left: 0;
    margin-right: 370px;
    width: 1081px;
    display: flex;
    background-color: #424242;
}

.dropdown-menu_2.show{
    border-radius: unset;
    border-top: 0;
    border-left-width: 0px;
    margin-top: 0;
    margin-left: 0;
    margin-right: 363px;
    width: 50px;
    display: block;
    background-color: #424242;
}

hr {
    border: none; /* Убираем границу */
    background-color: red; /* Цвет линии */
    color: red; /* Цвет линии для IE6-7 */
    height: 2px; /* Толщина линии */
}



.fa-shopping-cart:hover {
    color: #fa880b;
    text-decoration: none;
}

</style>
