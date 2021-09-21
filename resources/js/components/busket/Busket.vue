<template>
    <div>

        <div class="col-md-12" style="padding-left: 274px">
            <img src="/images/busket.png" class="img-fluid" alt="" width="1300px" >
        </div>


    <div class="w-full">
        <div class="lg:w-2/3 w-full mx-auto mt-8 overflow-auto container">
            <table class="table-auto w-full text-left whitespace-no-wrap table-responsive-sm" style="background-color: #fca901">
                <thead>
                <tr>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200 rounded-tl rounded-bl">Item</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200">Quantity</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200">Price</th>
                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-200">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="(item, index) in cart" :key="item.id">
                    <td class="p-4" v-text="item.name"></td>
                    <td class="p-4" v-text="item.quantity"></td>
                    <td class="p-4" v-text="cartLineTotal(item)"></td>
                    <td class="w-10 text-right">
                        <button
                            class="flex btn-danger ml-auto text-sm text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded"
                            @click="$store.commit('removeFromCart', index)"
                        >Remove</button>
                    </td>
                </tr>
                <tr>
                    <td class="p-4 font-bold">Total Amount</td>
                    <td class="p-4 font-bold" v-text="cartQuantity"></td>
                    <td class="p-4 font-bold" v-text="cartTotal"></td>
                    <td class="w-10 text-right"></td>
                </tr>
                <tr>
                    <td class="p-4 font-bold"></td>
                    <td class="p-4 font-bold"></td>
                    <td class="p-4 font-bold"></td>
                    <td class="w-10 text-right">
                        <div class="submit">
                            <button class="
                                    btn btn-success"
                                    @click="checkout"
                                    style="background-color: #e36663; border-color: #e36663"
                            >
                                    <span class="text-nowrap">
                                        Checkout
                                        <i class="fa fa-angle-right d-inline"></i>
                                    </span>
                            </button>
                        </div>

                    </td>
                </tr>
                </tbody>
            </table>
            </div>
    </div>
    </div>
</template>

<script>
import { mapActions, mapGetters } from 'vuex'
export default {
     methods: {
         ...mapActions([
             'addMessage',
             'clearCart',
         ]),
        cartLineTotal(item) {
            let amount = item.price * item.quantity;
            amount = (amount / 1);
            return amount.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
        },
        checkout() {
            if (!this.cart || this.cart.length == 0) {
                this.addMessage({
                    messageClass: 'warning',
                    message: 'Your cart is empty!',
                })
                return
            }

            this.addMessage({
                messageClass: 'success',
                message: 'Your order has been successfully processed!',
            })
            this.clearCart()
            this.$router.push('/')
        }
    },
    computed: {
        cart() {
            return this.$store.state.cart;
        },
        cartQuantity() {
            return this.$store.state.cart.reduce((acc, item) => acc + item.quantity, 0);
        },
        cartTotal() {
            let amount = this.$store.state.cart.reduce((acc, item) => acc + (item.price * item.quantity), 0);
            amount = (amount / 1);
            return amount.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
        }
    }
}
</script>

<style scoped>
table{
    margin-left: auto;
    margin-right: auto;
    background-color: white;
    color: black;
}
.container{
    padding-top: 50px;
    align-content: center;
}

</style>
