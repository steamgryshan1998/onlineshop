<template>
    <div>
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
                                <img src="/images/1.jpeg" class="d-block w-100" height="200px" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="/images/2.jpg" class="d-block w-100" height="200px" alt="...">
                            </div>
                        </div>
                    </div>
                </ul>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "Drop_page"
}
</script>

<style scoped>
div{
    padding-left: 0;
    padding-right: 0;
}
a{
    color: #7d7e7e;

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
</style>
