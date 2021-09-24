export default {
    loadCategories() {
        return axios.get('api/categories');
    },
}
