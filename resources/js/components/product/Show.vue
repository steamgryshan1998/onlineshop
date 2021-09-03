<template>
    <div class="page">
        <div class="col-md-12 head">
            <img :src="require('../../../../public/header.jpg').default" class="img-fluid" alt="" width="1080px">
        </div>
<!--        <div class="card mx-auto" style="width: 500px;">-->
<!--            <img :src="product.image" class="card-img-top" alt="ecommerce">-->
<!--            <div class="card-body">-->
<!--                <h5 class="card-title" v-text="product.name"></h5>-->
<!--                <p class="card-text" v-text="product.description"></p>-->
<!--                <span-->
<!--                    class="title-font font-medium text-2xl text-gray-900"-->
<!--                    v-text="formatCurrency(product.price)"-->
<!--                ></span>-->
<!--                <button v-if="user"-->
<!--                        class="flex add ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"-->
<!--                        @click.prevent="addProduct"-->
<!--                ><i class="bi bi-bag-plus"></i>Add To Cart</button>-->
<!--                <div v-else>You need to <a href="#"><router-link to="/login">log in</router-link></a> firstly!</div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="card mx-auto" style="max-width: 840px;">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img :src="product.image" class="card-img-top" alt="ecommerce" width="425px" height="460px">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h4 class="card-title" v-text="product.name"></h4>
                        <div class="rating">
                            <span class="fa fa-stack stars"><i class="fa fa-star fa-stack-1x red_star"></i></span>
                            <span class="fa fa-stack stars"><i class="fa fa-star fa-stack-1x red_star"></i></span>
                            <span class="fa fa-stack stars"><i class="fa fa-star fa-stack-1x red_star"></i></span>
                            <span class="fa fa-stack stars"><i class="fa fa-star fa-stack-1x red_star"></i></span>
                            <span class="fa fa-stack stars"><i class="fa fa-star-o fa-stack-1x red_star"></i></span>
                        </div>
                        <p class="card-text price" v-text="formatCurrency(product.price)"></p>
                        <hr>
                        <p class="card-text"><label class="name_of_param">Product code:</label>&nbsp;{{product.id}}</p>
                        <p class="card-text"><label class="name_of_param">Category name:</label>&nbsp;{{product.category_name}}</p>
                        <p class="card-text"><label class="name_of_param">Manufacturer name:</label>&nbsp;{{product.manufacturer}}</p>
                        <hr>
                        <p class="card-text">{{product.description}}</p>
                        <button v-if="user"
                                class="flex add ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"
                                @click.prevent="addProduct"
                        ><i class="fas fa-cart-plus"></i>&nbsp;Add To Cart</button>
                        <div v-else>You need to <a href="#"><router-link to="/login">log in</router-link></a> firstly!</div>
                        <div class="inputs">
                            <div class="form-group">
                                <div class="row">
                                    <div class="Sort-by col-md-6">
                                        <label class="name_of_param">Size</label>
                                        <select name="product_size" id="select-by-size" class="selectpicker form-control">
                                            <option>Small</option>
                                            <option>Medium</option>
                                            <option>Large</option>
                                        </select>
                                    </div>
                                    <div class="Color col-md-6">
                                        <label class="name_of_param">Color</label>
                                        <select name="product_color" id="select-by-color" class="selectpicker form-control">
                                            <option>Blue</option>
                                            <option>Green</option>
                                            <option>Orange</option>
                                            <option>White</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
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
            <div>
            <div class="review">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Overview</a>
                    <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Review</a>
                    <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Solution</a>
                </div>
            </nav>
            </div>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">{{product.description}}</div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <h5>Write a review</h5>
                    <div class="input-group flex-nowrap">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="addon-wrapping">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Usern@me" aria-label="Usern@me" aria-describedby="addon-wrapping">
                    </div>
                    <div class="rating">
                        Rating:&nbsp;
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                            <label class="form-check-label" for="inlineRadio3">3</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                            <label class="form-check-label" for="inlineRadio4">4</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                            <label class="form-check-label" for="inlineRadio5">5</label>
                        </div>

                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Your review</span>
                        </div>
                        <textarea class="form-control" aria-label="Your review"></textarea>
                    </div>
                    <div class="row submit">

                            <button type="button" class="btn btn-secondary continue">CONTINUE</button>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">{{product.description}}</div>
            </div>
            </div>
<!--    <section class="text-gray-700 body-font overflow-hidden">-->
<!--        <div class="container px-12 py-24 mx-auto">-->
<!--            <div class="lg:w-3/5 mx-auto flex flex-wrap">-->
<!--                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://dummyimage.com/640x640">-->
<!--                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">-->
<!--                    <h2-->
<!--                        class="text-sm title-font text-gray-500 tracking-widest uppercase inline-block mr-2"-->
<!--                    ></h2>-->
<!--                    <h1-->
<!--                        class="text-gray-900 text-3xl title-font font-medium mb-2"-->
<!--                        v-text="product.name"-->
<!--                    >{{product.length}}</h1>-->
<!--                    <p-->
<!--                        class="leading-relaxed"-->
<!--                        v-text="product.description"-->
<!--                    ></p>-->
<!--                    <div class="flex mt-6 pt-4 border-t-2 border-gray-200">-->
<!--                        <span-->
<!--                            class="title-font font-medium text-2xl text-gray-900"-->
<!--                            v-text="formatCurrency(product.price)"-->
<!--                        ></span>-->
<!--                        <button v-if="user"-->
<!--                            class="flex add ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"-->
<!--                            @click.prevent="addProduct"-->
<!--                        ><i class="bi bi-bag-plus"></i>Add To Cart</button>-->
<!--                        <div v-else>You need to <a href="#"><router-link to="/login">log in</router-link></a> firstly!</div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
    </div>
    </div>
    </div>
</template>

<script>
import { mapGetters,mapActions } from 'vuex';
export default {
    props: {
        productId: {
            type: String|Number,
            required: true
        }
    },
    mounted() {
        this.loadProducts();
    },
    methods: {
        ...mapActions(['updateCart']),
        addProduct() {
            const order = {
                product: Object.assign({}, this.product),
                quantity: 1,
                isAdd: true
            };
            // console.log(order);
            this.updateCart(order);
        },
        loadProducts: function () {
            axios.get('/api/products', {
                params: this.selected
            })
                .then((response) => {
                    this.products = response.data.data;
                    //this.loading = false;
                    console.log(response.data.data);
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        formatCurrency(amount) {
            amount = (amount / 1);
            return amount.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
        }
    },
    computed: {
        product () {
            return this.$store.getters.product
        },
        user () {
            return this.$store.getters.user;
        }
    },
    created () {
        this.$store.dispatch('getProductById', parseInt(this.productId))
            .catch(() => {})
    }
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
