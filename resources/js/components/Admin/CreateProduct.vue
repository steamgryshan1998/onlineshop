<template>
    <div class="modal-wrapper" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 v-if="!product.id" class="modal-title">Create Product</h5>
                    <h5 v-else class="modal-title">Edit Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" @click="closeModal"></button>
                </div>
                    <div class="modal-body">
                            <div class="col-md-8">
                                <div class="mb-3 row">
                                    <label for="product_name" class="col-sm-4 col-form-label">Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" v-model="product.name" id="product_name" placeholder="Please enter name of category" />
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Категория</label>
                                    <div class="col-lg-8">
                                        <select class="form-control" v-model="product.category_id">
                                            <option>Выберите категорию</option>
                                            <option v-bind:value="category.id" v-for="category in categories">{{ category.name }}
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-lg-3 form-control-label d-flex justify-content-lg-end">Бренд</label>
                                    <div class="col-lg-8">
                                        <select class="form-control" v-model="product.manufacturer_id">
                                            <option>Выберите бренд</option>
                                            <option v-bind:value="manufacturer.id" v-for="manufacturer in manufacturers">{{ manufacturer.name }}</option>
                                        </select>
                                    </div>
                                </div>
                            </div>



                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" @click="closeModal">Close</button>
                        <button v-if="!product.id" type="button" class="btn btn-primary" @click.prevent="addProduct">Create</button>
                        <button v-else type="button" class="btn btn-primary" @click.prevent="editProduct"><i class="fas fa-check"></i>Edit</button>
                    </div>
            </div>


</template>
<script>
export default {
    props:{
        products: {
            type: Array,
            default: [],
        },
        product: {
            type: Object,
            default: null,
            id: null,
        }
    },
    name: "CreateProduct",
    data () {
        return {
            categories: [],
            category: [],
            manufacturers: [],
            manufacturer: []
        };
    },
    mounted() {
        this.loadCategories();
        this.loadManufacturers();
    },
    methods: {
        closeModal() {
            this.product.name = "";
            this.product.id = "";
            this.$emit('close');
        },
        loadCategories: function () {
            axios.get('/api/categories', {
                params: _.omit(this.selected, 'categories')
            })
                .then((response) => {
                    console.log(response.data.data)
                    this.categories = response.data.data;
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
        addProduct() {
            axios
                .post('api/products',  this.product)
                .then(response => {
                    this.product.id = ""
                    this.product.name = ""
                    this.category.id = ""
                    this.manufacturer.id = ""
                    this.closeModal()
                })
                .catch(error => {
                    this.validate = error.response.data.errors;
                })
                .finally(this.loading = false)
        },
        editProduct() {
            console.log(this.category_id)
            axios
                .put('api/products/' + this.product.id,  {
                    name: this.product.name,
                    category_id: this.product.category_id,
                    manufacturer_id: this.product.manufacturer_id,
                })
                .then(response => {
                    this.product.id = ""
                    this.product.name = ""
                    this.product.category_id = "",
                    this.product.manufacturer_id = ""
                    this.category.id = ""
                    this.manufacturer.id = ""
                    this.closeModal()
                })
                .catch(error => {
                    this.validate = error.response.data.errors;
                })
            // .finally(this.contact.id = null // fixed bug with button add new after edit
            //     )
        }
    },
};
</script>

<style scoped>
.modal-wrapper {
    color: black;
    display: flex;
    position: fixed;
    right: 0;
    left: 0;
    top: 0;

}
</style>
