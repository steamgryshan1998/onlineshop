<template>
    <div>
    <div class="col-md-12">
        <img :src="require('../../../../public/log.png').default" class="img-fluid" alt="" width="1080px" height="300px">
    </div>
    <div class="container brd align-middle">

        <div>
            <div class="form-group">
                <div class="form-group">
                    <input type="email" class="form-control" id="email"
                           v-model="form.email"
                           placeholder="Your e-mail">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="password"
                           v-model="form.password"
                           placeholder="Password">
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


    middleware: 'guest',

    metaInfo () {
        return { title: this.$t('login') }
    },

    data: () => ({
        form: new Form({
            email: '',
            password: ''
        }),
        remember: false
    }),

    methods: {
        async login () {
            // Submit the form.
            const { data } = await this.form.post('/api/login')


            // Save the token.
            this.$store.dispatch('saveToken', {
                token: data.token,
                remember: this.remember
            })

            // Fetch the user.
            await this.$store.dispatch('fetchUser')

            // Redirect home.
            this.$router.push({ name: 'Shop'})
        },

        // redirect () {
        //     const intendedUrl = Cookies.get('intended_url')
        //
        //     if (intendedUrl) {
        //         Cookies.remove('intended_url')
        //         this.$router.push({ name: 'Shop' })
        //     } else {
        //         this.$router.push({ name: 'Home' })
        //     }
        // }
    }
}
</script>

<style scoped>
.container{
    padding-top: 40px;
}
</style>
