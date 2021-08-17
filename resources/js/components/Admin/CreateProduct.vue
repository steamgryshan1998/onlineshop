<template>
    <div class="modal-wrapper" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 v-if="!product.id" class="modal-title">Create Product</h5>
                    <h5 v-else class="modal-title">Edit Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" @click="closeModal"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3 row">
                                    <label for="product_name" class="col-sm-4 col-form-label">Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" v-model="product.name" id="product_name" placeholder="Please enter name of category" />
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
                </form>
            </div>
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
            id: null
        }
    },
    name: "CreateProduct",
    data () {
        return {
            name: '',
        };
    },
    methods: {
        closeModal() {
            this.product.name = "";
            this.product.id = "";
            this.$emit('close');
        },
        addProduct() {
            axios
                .post('api/products',  {
                    name: this.product.name,
                })
                .then(response => {
                    this.product.id = ""
                    this.product.name = ""
                    this.closeModal()
                })
                .catch(error => {
                    this.validate = error.response.data.errors;
                })
                .finally(this.loading = false)
        },
        editProduct() {
            axios
                .put('api/products/' + this.product.id,  {
                    name: this.product.name,
                })
                .then(response => {
                    this.product.id = ""
                    this.product.name = ""
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
    position: absolute;
    align-items: center;
    right: 0;
    left: 0;
    top: 0;
    bottom: 0;
    justify-content: center;
    background: rgba(64, 64, 64, .4);
}
</style>
