<template>
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


</template>


<script>

import {mapActions} from "vuex";

export default {
    name: "Review",
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
    margin-top: 20px;
    width: 836px;
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
