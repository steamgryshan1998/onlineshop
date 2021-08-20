<template>
    <div>
    <h2>Open</h2>
    <section class="text-gray-700 body-font overflow-hidden">
        <div class="container px-12 py-24 mx-auto">
            <div class="lg:w-3/5 mx-auto flex flex-wrap">
                <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://dummyimage.com/640x640">
                <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
                    <h2
                        class="text-sm title-font text-gray-500 tracking-widest uppercase inline-block mr-2"
                    ></h2>
                    <h1
                        class="text-gray-900 text-3xl title-font font-medium mb-2"
                        v-text="product.name"
                    >{{product.length}}</h1>
                    <p
                        class="leading-relaxed"
                        v-text="product.description"
                    ></p>
                    <div class="flex mt-6 pt-4 border-t-2 border-gray-200">
                        <span
                            class="title-font font-medium text-2xl text-gray-900"
                            v-text="formatCurrency(product.price)"
                        ></span>
                        <button
                            class="flex add ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"
                            @click.prevent="addProduct"
                        ><i class="bi bi-bag-plus"></i>Add To Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
</template>

<script>
import { mapActions } from 'vuex';
export default {
    props: {
        productId: {
            type: String|Number,
            required: true
        }
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
        formatCurrency(amount) {
            amount = (amount / 100);
            return amount.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
        }
    },
    computed: {
        product () {
            return this.$store.getters.product
        }
    },
    created () {
        this.$store.dispatch('getProductById', parseInt(this.productId))
            .catch(() => {})
    }
}
</script>

<style scoped>
.add{
    background-color: blue;
}

</style>
