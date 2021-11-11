<template>
    <div class="modal-wrapper" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 v-if="!manufacturer.id" class="modal-title">Create Manufacturer</h5>
                    <h5 v-else class="modal-title">Edit Manufacturer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            @click="closeModal"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="mb-3 row">
                                    <label for="name" class="col-sm-4 col-form-label">Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control"
                                               v-model="manufacturer && manufacturer.name"
                                               :class="validate.message === null ? '' : ' is-invalid'"
                                               placeholder="Please enter name of manufacture"/>
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
                        <button v-if="!manufacturer.id" type="button" class="btn btn-primary"
                                @click.prevent="addManufacture">Create
                        </button>
                        <button v-else type="button" class="btn btn-primary" @click.prevent="editManufacturer"><i
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
        manufacturer: {
            type: Object,
            default: null,
            id: null
        }
    },
    name: "CreateManufacturer",
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
            this.manufacturer.name = null;
            this.manufacturer.id = null;
            this.validate.message = null;
            this.$emit('close');
        },
        addManufacture() {
            axios
                .post('api/manufacturers', {
                    name: this.manufacturer.name,
                })
                .then(response => {
                    this.manufacturer.id = ""
                    this.manufacturer.name = ""
                    this.closeModal()
                })
                .catch(error => {
                    this.validate.message = error.response.data.message;
                })
                .finally(this.loading = false)
        },
        editManufacturer() {
            axios
                .put('api/manufacturers/' + this.manufacturer.id, {
                    name: this.manufacturer.name,
                })
                .then(response => {
                    this.manufacturer.id = ""
                    this.manufacturer.name = ""
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
