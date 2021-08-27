<template>
<div>
    <div class="col-md-12">
        <img :src="require('../../../../public/reg.png').default" class="img-fluid" alt="" width="1080px" height="300px">
    </div>
    <div class="container">
        <div class="form-group">
            <input type="text" class="form-control" v-model="form.name" :class="validate.name === undefined ? '' : ' is-invalid'" id="name" placeholder="Name">
            <div v-for="error in validate.name" v-if="validate.name !== null" class="invalid-feedback">
                {{ error }}
            </div>
        </div>

        <div class="form-group">
            <input type="email" class="form-control" v-model="form.email" :class="validate.email === undefined ? '' : ' is-invalid'" id="email" placeholder="Email">
            <div v-for="error in validate.email" v-if="validate.email !== null" class="invalid-feedback">
                {{ error }}
            </div>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" v-model="form.password" :class="validate.password === undefined ? '' : ' is-invalid'" id="password" placeholder="Password">
            <div v-for="error in validate.password" v-if="validate.password !== null" class="invalid-feedback">
                {{ error }}
            </div>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" v-model="form.conf_password" :class="validate.password_confirmation === undefined ? '' : ' is-invalid'" id="conf_password" placeholder="Confirm password" required>
            <div v-for="error in validate.password_confirmation" v-if="validate.password_confirmation !== null" class="invalid-feedback">
                {{ error }}
            </div>
        </div>
        <!--            <div class="form-group">-->
        <!--                <div class="form-check">-->
        <!--                    <label class="form-check-label">-->
        <!--                        <input class="form-check-input" type="checkbox"> I accept the Terms of Use & Privacy Policy-->
        <!--                    </label>-->
        <!--                </div>-->
        <!--            </div>-->
        <button @click.prevent="register" @keydown="form.onKeydown($event)" type="submit" style="width: 100%" class="btn btn-primary">Sign in</button>
    </div>
</div>
</template>

<script>
import Form from 'vform'


export default {
    middleware: 'guest',

    metaInfo () {
        return { title: this.$t('register') }
    },

    data: () => ({
        form: new Form({
            name: '',
            email: '',
            password: '',
            password_confirmation: ''
        }),
        validate:{
        },
        mustVerifyEmail: false
    }),

    methods: {
        async register () {
            // Register the user.
            const { data } = await this.form.post('/api/register').catch(error => {this.validate = error.response.data.errors;})
                // Log in the user.
                const { data: { token } } = await this.form.post('/api/login')

                // Save the token.
                this.$store.dispatch('saveToken', { token })

                // Update the user.
                await this.$store.dispatch('updateUser', { user: data })

                // Fetch the user
                await this.$store.dispatch('fetchUser')

                // Redirect home.
                this.$router.push({ name: 'Home' })
            }
        }

}
</script>

<style scoped>
.container{
    padding-top: 50px;
}
</style>

