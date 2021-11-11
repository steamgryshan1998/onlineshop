<!--todo разнести на несколько мелких компонентов
убрать храдкод картинок, рейтинга
-->

<template>
    <div class="page container">
        <div class="col-md-12 head">
            <img src="/images/header.jpg" class="img-fluid" alt="" width="1080px">

        </div>
        <div class="card mx-auto" style="max-width: 840px;">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img :src="product.image" class="card-img-top" alt="ecommerce" width="425px" height="460px">
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h4 class="card-title" v-text="product.name"></h4>
                        <div class="rating">
                            <span v-for="n in product.rating" class="fa fa-stack stars"><i class="fa fa-star fa-stack-1x red_star"></i></span>
                            <span v-for="n in 5 - product.rating"class="fa fa-stack stars"><i class="fa fa-star-o fa-stack-1x red_star"></i></span>
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
                        <ul class="icons">
                        <li class="icon_items"><a href="#"><i class="fas fa-heart"></i></a></li>
                        <li class="icon_items"><a href="#"><i class="fas fa-align-left"></i></a></li>
                        <li class="icon_items"><a href="#"><i class="fas fa-cart-plus"></i></a></li>
                        </ul>
                    </div>

                </div>
            <div>
            <Review/>
            </div>
    </div>
    </div>
    </div>
</template>

<script>
import { mapGetters,mapActions } from 'vuex';
import Review from "./Review";
export default {
    components: {Review},
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
            this.updateCart(order);
        },
        loadProducts: function () {
            axios.get('/api/products', {
                params: this.selected
            })
                .then((response) => {
                    this.products = response.data.data;
                })
                .catch(function (error) {
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
.head{
    padding-right: 0;
    padding-left: 0;
}
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
