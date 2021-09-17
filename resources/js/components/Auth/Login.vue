<template>
    <div class="container">
        <div class="col-md-12">
            <!--        пиздец-->
            <img src="../../../../public/images/log.png" class="img-fluid" alt="" width="1300px"
                 height="300px">
        </div>
        <div class="brd align-middle">

            <div>
                <div class="form-group">
                    <div class="form-group">
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            :class="validate.email === undefined ? '' : ' is-invalid'"
                            v-model="form.email"
                            placeholder="Your e-mail"
                        >
                        <div v-for="error in validate.email" v-if="validate.email !== null" class="invalid-feedback">
                            {{ error }}
                        </div>
                    </div>
                    <div class="form-group">
                        <input
                            type="password"
                            class="form-control"
                            id="password"
                            :class="validate.password === undefined ? '' : ' is-invalid'"
                            v-model="form.password"
                            placeholder="Password">
                        <div v-for="error in validate.password" v-if="validate.password !== null"
                             class="invalid-feedback">
                            {{ error }}
                        </div>
                    </div>
                </div>
                <button @click.prevent="login" style="width: 100%" type="button" class="btn btn-primary">Log in</button>
            </div>

        </div>
    </div>
</template>

<script>
import Form from 'vform'

export default {

    data: () => ({
        form: new Form({
            email: '',
            password: ''
        }),
        validate: {},
    }),

    methods: {
        async login() {
            // Submit the form.
            const {data} = await this.form.post('/api/login').catch(error => {
                this.validate = error.response.data.errors;
            })


            // Save the token.
            this.$store.dispatch('saveToken', {
                token: data.token,
            })

            // Fetch the user.
            await this.$store.dispatch('fetchUser')

            // Redirect home.
            this.$router.push({name: 'Shop'})
        },

    }
}
</script>

<style scoped>
.brd {
    padding-top: 40px;
}
</style>
