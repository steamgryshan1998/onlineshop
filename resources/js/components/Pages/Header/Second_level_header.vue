<template>

    <div class="row_1"  style=" color: white;
    max-width: 1320px;
    margin: 0px auto;
    padding: 0px 15px; padding-bottom: 24px">



        <div class="box" style="margin-top: 25px; padding-top: 0px; padding-left: 56px; height: 58px;width: 218px;">
            <div class="container-1" style="font-family: Poppins, sans-serif; letter-spacing: 5px;">
                <span class="icon"><i class="fa fa-search"></i></span>
                <input type="search" id="search" placeholder="Search" style="    border: 1px double #424242;"/>
            </div>
        </div>




        <div class="col-2">
        </div>
       <a class="navbar-brand" > <img src="/images/darklook.png" width="240px"  style="margin-top: 6px; margin-left: 29px"> </a>


        <a class="navbar-brand" style="padding-left: 3.2em">
            <img src="/images/darklook.png" width="240px"  style="margin-top: 6px; margin-left: 29px">
        </a>

        <div class="col-2"></div>
        <div class="col-2" style="padding: 25px; padding-left: 72px; margin-top: 5px">
            <router-link to="/basket"><i class="fas fa-shopping-cart" style="font-size: 30px; "></i>    <span v-text="'(' + $store.state.cart.length + ' items)'"></span>
            </router-link>
        </div>
    </div>


</template>

<script>
export default {
    name: "second_level_header"
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
    height: 70px;
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




.container-4:hover button.icon, .container-4:active button.icon, .container-4:focus button.icon{
    outline: none;
    opacity: 1;
    margin-left: -50px;
}

.container-4:hover button.icon:hover{
    background: #000001;
}
.container-1{

    width: 220px;
    vertical-align: middle;
    white-space: nowrap;
    position: relative;
}
.container-1 input#search{
    width: 220px;
    height: 40px;
    background: #000001;
    border: none;
    font-size: 10pt;
    float: left;
    color: #63717f;
    padding-left: 10px;

}
.container-1 input#search::-webkit-input-placeholder {
    color: #989898;
    letter-spacing: 1px;
    font-size: 95%;
}


.container-1 .icon{
    position: absolute;
    top: 50%;
    margin-left:192px;
    margin-top: 10px;
    z-index: 1;
    color: #4f5b66;
}


</style>
