const state = {
    cart: [],
}

const mutations = {
    'UPDATE_CART' (state, {product, quantity, isAdd}) {
        const record = state.cart.find(element => element.id == product.id);
        if (record) {
            if (isAdd) {
                record.quantity += quantity;
            } else {
                record.quantity = quantity;
            }
        } else {
            state.cart.push({
                ...product,
                quantity
            });
        }
    },
    removeFromCart(state, index){
        state.cart.splice(index, 1);
    },
    updateCart(state, cart){
        state.cart = cart;
    },

}

const actions = {
    clearCart({ commit }) {
        commit('updateCart', []);
    },
    updateCart ({ commit }, {product, quantity, isAdd}) {
        commit('UPDATE_CART', {product, quantity, isAdd});
        if (isAdd) {
            let message_obj = {
                message: `Add ${product.name} to cart successfully`,
                messageClass: "success",
                autoClose: true
            }
            commit('ADD_MESSAGE', message_obj);
        }
    },
    getShoppingCart({commit}, {uid, currentCart}) {
        if (uid) {
            return ref.child("cart/" + uid).once('value').then((cart) => {
                // console.log(cart.val());
                if (cart.val() && (!currentCart || currentCart.length == 0)) {
                    commit('SET_CART', cart.val());
                }
            });
        } else {
            // console.log("User has not logged in");
        }
    }
}

const getters = {
    cart: state => state.cart,
}

export default {
    state,
    mutations,
    actions,
    getters
}
