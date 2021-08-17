<template>
    <div class="w-full">
        <div class="lg:w-2/3 w-full mx-auto mt-8 overflow-auto">
            <table class="table-auto w-full text-left whitespace-no-wrap">
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
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
     methods: {
        cartLineTotal(item) {
            let amount = item.price * item.quantity;
            amount = (amount / 100);
            return amount.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
        },
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
            amount = (amount / 100);
            return amount.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
        }
    }
}
</script>

<style scoped>

</style>
