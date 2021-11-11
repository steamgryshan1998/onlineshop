export default {
    data() {
        return {
            isCreateCategoryVisible: false,
            isCreateManufacturerVisible: false,
            isCreateProductVisible: false,
            mode: {}
        }
    },
    methods: {
        showCreateCategory() {
            this.isCreateCategoryVisible = true;
        },
        closeCreateCategory() {
            this.isCreateCategoryVisible = false;
            this.loadCategories();
            this.loadProducts();
        },
        showCreateProduct() {
            this.isCreateProductVisible = true;
            this.loadCategories();
            this.loadManufacturers()
        },
        closeCreateProduct() {
            this.isCreateProductVisible = false;
            this.loadProducts();
        },
        showCreateManufacturer() {
            this.isCreateManufacturerVisible = true;
        },
        closeCreateManufacturer() {
            this.isCreateManufacturerVisible = false;
            this.loadManufacturers();
            this.loadProducts();
        },
        editCategory(category) {
            //console.log(contact);
            this.mode = category;
            this.isCreateCategoryVisible = true;
        },
        editManufacture(manufacturer) {

            //console.log(contact);
            this.mode = manufacturer;
            this.isCreateManufacturerVisible = true;
        },
        editProduct(product) {
            //console.log(contact);
            this.mode = product;
            this.isCreateProductVisible = true;
        },
    }
}
