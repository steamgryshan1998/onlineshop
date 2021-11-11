<template>
    <div class="modal-wrapper" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 v-if="!category.id" class="modal-title">Create Category</h5>
                    <h5 v-else class="modal-title">Edit Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            @click="closeModal"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3 row">
                                    <label for="category_name" class="col-sm-4 col-form-label">Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" v-model="category && category.name"
                                               :class="validate.message === null ? '' : ' is-invalid'"
                                               id="category_name" placeholder="Please enter name of category"/>
                                        <div v-if="validate.message !== null"
                                             class="invalid-feedback">
                                            {{ validate.message }}
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" @click="closeModal">
                            Close
                        </button>
                        <button v-if="!category.id" type="button" class="btn btn-primary" @click.prevent="addCategory">
                            Create
                        </button>
                        <button v-else type="button" class="btn btn-primary" @click.prevent="editCategory"><i
                            class="fas fa-check"></i>Edit
                        </button>
                    </div>
                </form>
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
        category: {
            type: Object,
            default: null,
            id: null
        }
    },
    name: "CreateCategory",
    data() {
        return {
            name: '',

            validate: {
                message: null
            },
        };
    },
    methods: {
        closeModal() {
            this.category.name = null;
            this.category.id = null;
            this.validate.message = null;
            this.$emit('close');
        },
        addCategory() {
            axios
                .post('api/categories', {
                    name: this.category.name,
                })
                .then(response => {
                    this.category.id = ""
                    this.category.name = "null"
                    this.closeModal()
                })
                .catch(error => {
                    this.validate.message = error.response.data.message;
                    console.log(error.response.data.message)
                })
                .finally(this.loading = false)
        },
        editCategory() {
            axios
                .put('api/categories/' + this.category.id, {
                    name: this.category.name,
                })
                .then(response => {
                    this.category.id = ""
                    this.category.name = ""
                    this.closeModal()
                })
                .catch(error => {
                    this.validate.message = error.response.data.message;
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
    right: 0;
    left: 0;
    top: 0;

}
</style>
