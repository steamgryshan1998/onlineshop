<template>
    <div class="modal-wrapper" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 v-if="!product.id" class="modal-title">Create Product</h5>
                    <h5 v-else class="modal-title">Edit Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            @click="closeModal"></button>
                </div>
                <div class="modal-body">
                    <div class="col-md-8">
                        <div class="mb-3 row">
                            <label for="product_name" class="col-sm-6 col-form-label">Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" v-model="product.name"
                                       :class="validate.name === undefined ? '' : ' is-invalid'" id="product_name"
                                       placeholder="Please enter name of category"/>
                                <div v-for="error in validate.name" v-if="validate.name !== null"
                                     class="invalid-feedback">
                                    {{ error }}
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="product_price" class="col-sm-6 col-form-label">Price</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" v-model="product.price"
                                       :class="validate.price === undefined ? '' : ' is-invalid'" id="product_price"
                                       placeholder="Please enter price of product"/>
                                <div v-for="error in validate.price" v-if="validate.price !== null"
                                     class="invalid-feedback">
                                    {{ error }}
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-6 col-form-label">Description</label>
                            <div class="col-sm-6">
                                <textarea type="text" class="form-control" v-model="product.description"
                                          :class="validate.description === undefined ? '' : ' is-invalid'"
                                          id="product_description"
                                          placeholder="Please enter name of category"/>
                                <div v-for="error in validate.description" v-if="validate.description !== null"
                                     class="invalid-feedback">
                                    {{ error }}
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-sm-6 сol-form-label">Category</label>
                            <div class="col-sm-6">
                                <select class="form-control" v-model="product.category_id"
                                        :class="validate.category_id === undefined ? '' : ' is-invalid'">
                                    <option v-bind:value="category.id" v-for="category in categories">{{
                                            category.name
                                        }}
                                    </option>
                                </select>
                                <div v-for="error in validate.category_id" v-if="validate.category_id !== null"
                                     class="invalid-feedback">
                                    {{ error }}
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-6 сol-form-label">Manufacturer</label>
                            <div class="col-sm-6">
                                <select class="form-control" v-model="product.manufacturer_id"
                                        :class="validate.manufacturer_id === undefined ? '' : ' is-invalid'">
                                    <option v-bind:value="manufacturer.id" v-for="manufacturer in manufacturers">
                                        {{ manufacturer.name }}
                                    </option>
                                </select>
                                <div v-for="error in validate.manufacturer_id" v-if="validate.manufacturer_id !== null"
                                     class="invalid-feedback">
                                    {{ error }}
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-6 сol-form-label">Image</label>
                            <div class="col-sm-6">
                                <input type="file" ref="file" @change="handleFileUpload"/>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" @click="closeModal">Close
                    </button>
                    <button v-if="!product.id" type="button" class="btn btn-primary" @click.prevent="addProduct">
                        Create
                    </button>
                    <button v-else type="button" class="btn btn-primary" @click.prevent="editProduct"><i
                        class="fas fa-check"></i>Edit
                    </button>
                </div>
            </div>
        </div>

    </div>


</template>
<script>
export default {
    props: {
        categories: {
            type: Array,
            default: [],
        },
        manufacturers: {
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
    data() {
        return {
            category: [],
            manufacturer: [],
            file: '',
            validate: {},
        };
    },
    methods: {
        handleFileUpload() {
            this.file = this.$refs.file.files[0];
        },
        closeModal() {
            this.product.name = "";
            this.product.id = "";
            this.product.category_id = ""
            this.product.manufacturer_id = ""
            this.product.price = ""
            this.product.description = ""
            this.category.id = ""
            this.manufacturer.id = ""
            this.product.image = ""
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
            const formData = new FormData();
            formData.append('image', this.file);
            for (const [key, value] of Object.entries(this.product)) {
                formData.append(key, value);
            }

            axios
                .post('api/products', formData, {
                    headers: {
                        'Content-type': 'multipart/form-data',
                    }
                })
                .then(response => {
                    this.product.id = ""
                    this.product.name = ""
                    this.product.price = ""
                    this.product.description = ""
                    this.category.id = ""
                    this.manufacturer.id = ""
                    this.file = ""
                    this.closeModal()
                })
                .catch(error => {
                    this.validate = error.response.data.errors;
                })
                .finally(this.loading = false)
        },
        editProduct() {
            const formData = new FormData();
            formData.append('image', this.file);
            for (const [key, value] of Object.entries(this.product)) {
                formData.append(key, value);
            }
            console.log(this.category_id)
            axios
                .post('api/products/' + this.product.id, formData, {
                    headers: {
                        'Content-type': 'multipart/form-data',
                    }
                })
                .then(response => {
                    this.product.id = ""
                    this.product.name = ""
                    this.product.category_id = ""
                    this.product.manufacturer_id = ""
                    this.product.price = ""
                    this.product.description = ""
                    this.category.id = ""
                    this.manufacturer.id = ""
                    this.product.image = ""
                    this.file = ""
                    this.closeModal()
                })
                .catch(error => {
                    this.validate = error.response.data.errors;
                })
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
