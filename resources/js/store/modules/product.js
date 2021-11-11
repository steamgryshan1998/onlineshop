import axios from "axios";

const state = {
    products: [],
    product: null,
}

const mutations = {
    updateProducts(state, products){
        state.products = products;
    },
    SET_PRODUCT (state, payload) {
        state.product = payload
    },

}

const actions = {
    getProducts({ commit }) {
        axios.get('/api/products')
            .then((response) => {
                commit('updateProducts', response.data);
            })
            .catch((error) => console.error(error));
    },
    async getProductById ({commit}, productId) {

        try {
            const product = await axios.get('/api/products/' + productId)
            console.log(product.data.data)
            commit('SET_PRODUCT', product.data.data)
        }
        catch (e) {
            console.log('Error')
        }
    },
}

const getters = {
    products: (state) => {
        return state.products;
    },
    product(state) {
        return state.product
    },
}

export default {
    state,
    mutations,
    actions,
    getters
}
