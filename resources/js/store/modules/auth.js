import axios from "axios";

const state = {
    user: null,
    user_role: null,
    token: localStorage.getItem('token'),
}

const mutations = {
    'AUTH_STATUS_CHANGE' (state, {user}) {
        state.isLoggedIn = user != null;
    },
    'SAVE_TOKEN' (state, { token, remember }) {
        state.token = token
        localStorage.setItem('token', token, { expires: remember ? 365 : null })
    },

    'FETCH_USER_SUCCESS' (state, { user, user_role }) {
        state.user = user
        state.user_role = user_role
        state.auth = true
    },
    'FETCH_USER_FAILURE' (state) {
        state.token = null
        localStorage.removeItem('token')
    },

    'LOGOUT' (state) {
        console.log('logout');
        state.user = null
        state.token = null
        state.user_role = null

        localStorage.removeItem('token')
    },

    'UPDATE_USER' (state, { user }) {
        console.log('update_user');
        state.user = user
    }

}

const actions = {
    saveToken ({ commit, dispatch }, payload) {
        commit('SAVE_TOKEN', payload)
    },

    async fetchUser ({ commit }) {
        try {
            const { data } = await axios.get('/api/user')
            console.log(data.role)
            commit('FETCH_USER_SUCCESS', { user: data, user_role: data.role })
        } catch (e) {
            commit('FETCH_USER_FAILURE')
        }
    },

    updateUser ({ commit }, payload) {
        commit('UPDATE_USER', payload)
    },

    async logout ({ commit }) {
        try {
            await axios.post('/api/logout')
        } catch (e) { }

        commit('LOGOUT')
    },

}

const getters = {
    user: state => state.user,
    user_role: state => state.user_role,
    token: state => state.token,
    isLoggedIn: state => state.user !== null,

}

export default {
    state,
    mutations,
    actions,
    getters
}
