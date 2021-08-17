<template>
    <div class="container">
        <h2 align="center">Registration</h2>
        <div class="form-group">
            <input type="text" class="form-control" v-model="form.name" id="name" placeholder="Name">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" v-model="form.phone_number" id="phone_number" placeholder="Phone number">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" v-model="form.address" id="address" placeholder="Address">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" v-model="form.city" id="city" placeholder="City">
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
            phone_number: '',
            address: '',
            city: '',
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
