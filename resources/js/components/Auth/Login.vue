<template>
    <div class="container">
        <div class="col-md-12">
            <!--        пиздец-->
            <img src="/images/log.png" class="img-fluid" alt="" width="1300px">
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
import Form from 'vform'//vform - маленькая библиотека для форм с валидацией на Laravel+vue

export default {

    data: () => ({//сокращенное описание функции по ES6
        form: new Form({//form - объект импортированного Form
            email: '',
            password: ''
        }),
        validate: {},
    }),

    methods: {
        async login() {
            // Обработка формы(сбор и отправка введенных данных)
            const {data} = await this.form.post('/api/login').catch(error => {
                this.validate = error.response.data.errors;
            })


            // Сохранение токена для авторизации
            this.$store.dispatch('saveToken', {
                token: data.token,
            })

            //
            await this.$store.dispatch('fetchUser')//dispatch - метод для запуска действия(action)

            // Перенаправление пользователя на заданную страницу
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
