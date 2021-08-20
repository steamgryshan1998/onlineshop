<template>
    <div>
        <div class="row">
            <h2>Admin Dashboard</h2>
        </div>
        <div class="row">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-categories-tab" data-toggle="pill" href="#v-pills-categories" role="tab" aria-controls="v-pills-categories" aria-selected="true">Categories</a>
                    <a class="nav-link" id="v-pills-products-tab" data-toggle="pill" href="#v-pills-products" role="tab" aria-controls="v-pills-products" aria-selected="false">Products</a>
                    <a class="nav-link" id="v-pills-manufacturers-tab" data-toggle="pill" href="#v-pills-manufacturers" role="tab" aria-controls="v-pills-manufacturers" aria-selected="false">Manufacturers</a>
                </div>
            </div>
            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-categories" role="tabpanel" aria-labelledby="v-pills-categories-tab">
                        <h4>Categories</h4>
                        <div class="col-2">
                            <button type="button" class="btn contact_button btn-primary " @click="showCreateCategory">
                                <!--                todo font awesome-->
                                <i class="fas fa-user-plus"></i>
                                Add new
                            </button>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <td class="col-lg-3" scope="col">
                                    <div
                                        style="cursor: pointer">
                                        Id
                                    </div>

                                </td>
                                <td class="col-lg-3" scope="col">
                                    <div
                                        style="cursor: pointer">
                                        Name
                                    </div>

                                </td>
                                <td class="col-lg-3" scope="col">
                                    <div
                                        style="cursor: pointer">
                                        Created_at
                                    </div>
                                </td>
                                <td class="col-lg-3" scope="col">
                                    <div
                                        style="cursor: pointer">
                                        Updated at
                                    </div>
                                </td>
                                <td scope="col"></td>
                            </tr>
                            <tr v-for="category in categories" :key="category.id">
                                <td>{{category.id}}</td>
                                <td>{{category.name}}</td>
                                <td>{{category.created_at}}</td>
                                <td>{{category.updated_at}}</td>
                                <td>
                                    <button type="button" class="btn contact_button btn-warning " @click="editCategory(category)">
                                        Edit
                                    </button>
                                    <button type="button" class="btn contact_button btn-danger " @click="deleteCategory(category.id)">
                                        Delete
                                    </button>
                                </td>
                            </tr>

                        </table>
                        <CreateCategory
                            v-show="isCreateCategoryVisible"
                            @close="closeCreateCategory"
                            :categories="categories"
                            :category="mode"
                        />
                    </div>
                    <div class="tab-pane fade" id="v-pills-products" role="tabpanel" aria-labelledby="v-pills-products-tab">
                        <h4>Products</h4>
                        <div class="col-2">
                            <button type="button" class="btn contact_button btn-primary " @click="showCreateProduct">
                                <!--                todo font awesome-->
                                <i class="fas fa-user-plus"></i>
                                Add new
                            </button>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <td scope="col">
                                    <div
                                        style="cursor: pointer">
                                        Id
                                    </div>

                                </td>
                                <td scope="col">
                                    <div
                                        style="cursor: pointer">
                                        Category_id
                                    </div>

                                </td>

                                <td scope="col">
                                    <div
                                        style="cursor: pointer">
                                        Category_name
                                    </div>

                                </td>

                                <td scope="col">
                                    <div
                                        style="cursor: pointer">
                                        Name
                                    </div>

                                </td>
                                <td scope="col">
                                    <div
                                        style="cursor: pointer">
                                        Description
                                    </div>

                                </td>
                                <td scope="col">
                                    <div
                                        style="cursor: pointer">
                                        Price
                                    </div>
                                </td>
                                <td scope="col">
                                    <div
                                        style="cursor: pointer">
                                        Created at
                                    </div>
                                </td>
                                <td scope="col">
                                    <div
                                        style="cursor: pointer">
                                        Updated at
                                    </div>
                                </td>
                                <td scope="col">
                                    <div
                                        style="cursor: pointer">
                                        Manufacturer_id
                                    </div>
                                </td>
                                <td scope="col"></td>
                            </tr>
                            <tr v-for="product in products" :key="product.id">
                                <td>{{product.id}}</td>
                                <td>{{product.category_id}}</td>
                                <td>{{product.category_name}}</td>
                                <td>{{product.name}}</td>
                                <td>{{product.description}}</td>
                                <td>{{product.price}}</td>
                                <td>{{product.created_at}}</td>
                                <td>{{product.updated_at}}</td>
                                <td>{{product.manufacturer_id}}</td>
                                <td>
                                    <button type="button" class="btn contact_button btn-warning " @click="editProduct(product)">
                                        Edit
                                    </button>
                                    <button type="button" class="btn contact_button btn-danger " @click="deleteProduct(product.id)">
                                        Delete
                                    </button>
                                </td>
                            </tr>

                            <CreateProduct
                                v-show="isCreateProductVisible"
                                @close="closeCreateProduct"
                                :products="products"
                                :product="product"
                            />
                        </table>
                    </div>
                    <div class="tab-pane fade" id="v-pills-manufacturers" role="tabpanel" aria-labelledby="v-pills-manufacturers-tab">
                        <h4>Manufacturers</h4>
                        <div class="col-2">
                            <button type="button" class="btn contact_button btn-primary " @click="showCreateManufacturer">
                                <!--                todo font awesome-->
                                <i class="fas fa-user-plus"></i>
                                Add new
                            </button>
                        </div>
                        <table class="table table-bordered">
                            <tr>
                                <td class="col-lg-3" scope="col">
                                    <div
                                        style="cursor: pointer">
                                        Id
                                    </div>

                                </td>
                                <td class="col-lg-3" scope="col">
                                    <div
                                        style="cursor: pointer">
                                        Name
                                    </div>

                                </td>
                                <td class="col-lg-3" scope="col">
                                    <div
                                        style="cursor: pointer">
                                        Created at
                                    </div>
                                </td>
                                <td class="col-lg-3" scope="col">
                                    <div
                                        style="cursor: pointer">
                                        Updated_at
                                    </div>

                                </td>
                                <td scope="col"></td>
                            </tr>
                            <tr v-for="manufacturer in manufacturers" :key="manufacturer.id">
                                <td>{{manufacturer.id}}</td>
                                <td>{{manufacturer.name}}</td>
                                <td>{{manufacturer.created_at}}</td>
                                <td>{{manufacturer.updated_at}}</td>
                                <td>
                                    <button type="button" class="btn contact_button btn-warning " @click="editManufacture(manufacturer)">
                                        Edit
                                    </button>
                                    <button type="button" class="btn contact_button btn-danger " @click="deleteManufacture(manufacturer.id)">
                                        Delete
                                    </button>

                                </td>
                            </tr>

                        </table>

                        <CreateManufacturer
                            v-show="isCreateManufacturerVisible"
                            @close="closeCreateManufacturer"
                            :manufacturers="manufacturers"
                            :manufacturer="mode"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import CreateCategory from "./CreateCategory";
import CreateManufacturer from "./CreateManufacturer";
import CreateProduct from "./CreateProduct";

export default {
    components: {
        CreateCategory,
        CreateManufacturer,
        CreateProduct
    },
    data: function () {
        return {
            categories: [],
            category: {
                id: '',
                name: '',
                created_at: '',
                updated_at: ''
            },
            manufacturers: [],
            manufacturer: {
                id: '',
                name: '',
                created_at: '',
                updated_at: ''
            },
            products: [],
            product: {
                id: '',
                category_id: '',
                name: '',
                description: '',
                price: '',
                created_at: '',
                updated_at: '',
                manufacturer_id: ''
            },
            isCreateCategoryVisible: false,
            isCreateManufacturerVisible: false,
            isCreateProductVisible: false,
            mode: {}
        }
    },

    mounted() {
        this.loadCategories();
        this.loadManufacturers();
        this.loadProducts();
    },


    methods: {
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
                    console.log(response.data.data);
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
        showCreateCategory() {
            this.isCreateCategoryVisible = true;
        },
        closeCreateCategory() {
            this.isCreateCategoryVisible = false;
            this.loadCategories();
        },
        showCreateProduct() {
            this.isCreateProductVisible = true;
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
        },
        editCategory(category) {
            //console.log(contact);
            this.mode = category;
            this.isCreateCategoryVisible = true;
        },
        deleteCategory(id) {
            axios
                .post('api/categories/' + id, {
                    _method: 'DELETE'
                })
                .then(response => {
                    this.categories = []
                    this.loadCategories();
                    this.loadProducts();
                    this.loadManufacturers();
                })
                .catch(error => {
                    console.log(error)
                })
        },
        editManufacture(manufacturer) {
            //console.log(contact);
            this.mode = manufacturer;
            this.isCreateManufacturerVisible = true;
        },
        deleteManufacture(id) {
            axios
                .post('/api/manufacturers/' + id, {
                    _method: 'DELETE'
                })
                .then(response => {
                    this.manufacturers = []
                    this.loadManufacturers();
                    this.loadCategories();
                    this.loadProducts();
                })
                .catch(error => {
                    console.log(error)
                })
        },
        editProduct(product) {
            //console.log(contact);
            this.mode = product;
            this.isCreateProductVisible = true;
        },
        deleteProduct(id) {
            axios
                .post('/api/products/' + id, {
                    _method: 'DELETE'
                })
                .then(response => {
                    this.products = []
                    this.loadManufacturers();
                    this.loadCategories();
                    this.loadProducts();
                })
                .catch(error => {
                    console.log(error)
                })
        },

    },
}
</script>

<style scoped>
.row{
    margin-left: 0;
    margin-right: 0;
}
h4{
    align-content: center;
}
table{
    background-color: white;
}
</style>
