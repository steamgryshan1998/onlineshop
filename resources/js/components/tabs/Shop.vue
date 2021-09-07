<template>
    <div class="container" :class="{'loading': loading}">
        <div class="col-md-12 head">
            <img :src="require('../../../../public/header.jpg').default" class="img-fluid" alt="" width="1080px">

        </div>
        <div class="row">
            <div class="col-lg-3 mb-4 sidebar">
                <h1 class="mt-4">Categories</h1>
                <hr>
                <div class="form-check" v-for="category in categories">
                    <div :id="category.id" @click="selectCategory(category)">
                        <h6>{{ category.name }}</h6>
                    </div>
                    <hr>
                </div>



                <h1 class="mt-4">Filters</h1>
                <hr>
                <h3 class="mt-2">Price</h3>
                <hr class="hr-dashed-bg">
                <div class="form-check" v-for="(price, index) in prices">
                    <input class="form-check-input" type="checkbox" :value="index" :id="'price'+index" v-model="selected.prices">
                    <label class="form-check-label option" :for="'price' + index">
                        {{ price.name }} ({{ price.products_count }})
                    </label>
                </div>

<!--                <h3 class="mt-2">Categories</h3>-->
<!--                <hr class="hr-dashed-bg">-->
<!--                <div class="form-check" v-for="(category, index) in categories">-->
<!--                    <input class="form-check-input" type="checkbox" :value="category.id" :id="'category'+index" v-model="selected.categories">-->
<!--                    <label class="form-check-label option" :for="'category' + index">-->
<!--                        {{ category.name }} ({{ category.products_count }})-->
<!--                    </label>-->
<!--                </div>-->

                <h3 class="mt-2">Manufacturers</h3>
                <hr class="hr-dashed-bg">
                <div class="form-check" v-for="(manufacturer, index) in manufacturers">
                    <input class="form-check-input" type="checkbox" :value="manufacturer.id" :id="'manufacturer'+index" v-model="selected.manufacturers">
                    <label class="form-check-label option" :for="'manufacturer' + index">
                        {{ manufacturer.name }} ({{ manufacturer.products_count }})
                    </label>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row mt-4">
                    <div class="col-lg-4 col-md-6 mb-4 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0" v-for="product in FilteredProducts" :key="product.id">
                        <div class="card h-100 our-team">
                            <div class="team_img">
                            <a href="#">
                                <img class="card-img-top" :src="product.image" alt="" width="200px" height="300px">

                                <ul class="social">
                                    <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#"><i class="fas fa-align-left"></i></a></li>
                                    <li><a href="#"><i class="fas fa-cart-plus"></i></a></li>
                                </ul>
                            </a>
                            </div>
                            <div class="card-body">
                                <h4 class="card-title" align="center">

                                    <router-link
                                        class="block relative h-48 rounded overflow-hidden"
                                        :to="{name: 'Show', params: {'productId': product.id}}"
                                    >
                                        <a href="#">{{ product.name }}</a>
                                    </router-link>

                                </h4>
<!--                                <h5>$ {{ product.price }}</h5>-->
                                <p  align="center" class="card-text" v-text="formatCurrency(product.price)"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import Show from "../product/Show";

export default {
    data: function () {
        return {
            prices: [],
            categories: [],
            manufacturers: [],
            products: [],
            loading: true,
            selected: {
                prices: [],
                categories: [],
                manufacturers: []
            }
        }
    },

    mounted() {
        this.loadCategories();
        this.loadManufacturers();
        this.loadPrices();
        this.loadProducts();
    },

    watch: {
        selected: {
            handler: function () {
                this.loadCategories();
                this.loadManufacturers();
                this.loadPrices();
                this.loadProducts();
            },
            deep: true
        }
    },

    methods: {
        selectCategory(category){
            this.SortedProducts = [];
            this.products.map(function (item) {
                if(item.category === category.name){
                    this.SortedProducts.push(item);
                }
            })
        },
        loadCategories: function () {
            axios.get('/api/categories', {
                params: _.omit(this.selected, 'categories')
            })
                .then((response) => {
                    this.categories = response.data.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        loadProducts: function () {
            axios.get('/api/products', {
                params: this.selected
            })
                .then((response) => {
                    this.products = response.data.data;
                    this.loading = false;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        loadManufacturers: function () {
            axios.get('/api/manufacturers', {
                params: _.omit(this.selected, 'manufacturers')
            })
                .then((response) => {
                    this.manufacturers = response.data.data;
                    this.loading = false;
                })
                .catch(function (error) {
                    console.log(error);
                });
        },

        loadPrices: function () {
            axios.get('/api/prices', {
                params: _.omit(this.selected, 'prices')
            })
                .then((response) => {
                    this.prices = response.data;
                    this.loading = false;
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
        FilteredProducts() {
            let l = this.SortedProducts
            if (l) {
                return this.SortedProducts;
            }  else {
                return this.products;
            }
        }
    }
}
</script>
<style scoped>
.container{
    color: #928383;
}
.sidebar{
    color: white;
}
h1{
    font-family: 'Poppins', sans-serif;
    font-size: 20px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}
h3{
    font-family: 'Poppins', sans-serif;
    font-size: 17px;
    font-weight: 500;
    letter-spacing: 0.5px;
}
.option{
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    font-weight: 400;
    letter-spacing: 0.5px;
}
.mt-4{
    margin-bottom: 3px;
}
hr{
    margin-top: 0;
    border-top: 0.5px solid #928383;
}
.mt-2{
    padding-top: 30px;
}
.hr-dashed-bg {
    margin-top: 0;
    padding: 0;
    height: 0;
    border: none;
    border-top: 2px dashed #928383;
}
.card{
    background-color: black;
}
.head{
    padding-right: 0;
    padding-left: 0;
}
a{
    color: #928383;
}
a:hover{
    color: black;
}
.card-text{
    color: white;
    font-size: 1.5rem;
}


.team_member {
    background: black;
    padding-bottom: 50px;
    overflow: hidden;
}
.single_team_content{
    padding:45px;
    margin-top:60px;
}
.single_team_content h1 {
    font-size: 50px;
    font-weight: 600;
    line-height: 60px;
}
.single_team_content p{}
.our-team {
    margin-bottom: 30px;
    box-shadow: 0 10px 40px -10px rgba(0,64,128,.09);
}
.our-team .team_img{
    position: relative;
    overflow: hidden;
}
.our-team .team_img:after{
    content: "";
    width: 100%;
    height: 100%;
    background-color: rgba(255,255,255,0.2);
    position: absolute;
    bottom: -100%;
    left: 0;
    transition: all 0.3s ease 0s;
}
.our-team:hover .team_img:after{
    bottom: 0;
}
.our-team img{
    width: 100%;

}
.our-team .social{
    padding: 0 0 18px 0;
    margin: 0;
    list-style: none;
    position: absolute;
    top: -100%;
    right: 10px;
    background: #ffaa17;
    border-radius: 0 0 20px 20px;
    z-index: 1;
    transition: all 0.3s ease 0s;
}
.our-team:hover .social{
    top: 0;
}
.our-team .social li a{
    display: block;
    padding: 15px;
    font-size: 15px;
    color: #232434;
}
.our-team:hover .social li a:hover{
    color: #fff;
}
.our-team .team-content{
    padding: 20px 0;
    background: #fff;
}
.our-team .title{
    font-size: 18px;
    font-weight: bold;
    color: #ffaa17;
    text-transform: capitalize;
    margin: 0 0 20px;
    position: relative;
}
.our-team .title:before{
    content: "";
    width: 25px;
    height: 1px;
    background: #ffaa17;
    position: absolute;
    bottom: -10px;
    right: 50%;
    margin-right: 9px;
    transition-duration: 0.25s;
}
.our-team .title:after{
    content: "";
    width: 25px;
    height: 1px;
    background: #ffaa17;
    position: absolute;
    bottom: -10px;
    left: 50%;
    margin-left: 9px;
    transition-duration: 0.25s;
}
.our-team:hover .title:before,
.our-team:hover .title:after{
    width: 50px;
}
.our-team .post{
    display: inline-block;
    font-size: 15px;
    text-transform: capitalize;
}
.our-team .post:before{
    content: "";
    display: block;
    width: 7px;
    height: 7px;
    border-radius: 50%;
    background: #ffaa17;
    margin: 0 auto;
    position: relative;
    top: -13px;
}
@media only screen and (max-width: 990px){
    .our-team{ margin-bottom: 30px; }
}
</style>
