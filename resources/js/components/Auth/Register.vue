<template>
<div>
    <div class="col-md-12">
        <img :src="require('../../../../public/reg.png').default" class="img-fluid" alt="" width="1080px" height="300px">
    </div>
    <div class="container">
        <div class="form-group">
            <input type="text" class="form-control" v-model="form.name" id="name" placeholder="Name">
        </div>

        <div class="form-group">
            <input type="email" class="form-control" v-model="form.email" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" v-model="form.password" id="password" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" v-model="form.conf_password" id="conf_password" placeholder="Confirm password" required>
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
        mustVerifyEmail: false
    }),

    methods: {
        async register () {
            // Register the user.
            const { data } = await this.form.post('/api/register')
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

