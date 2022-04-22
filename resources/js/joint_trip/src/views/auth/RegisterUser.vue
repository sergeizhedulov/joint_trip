<template>
    <main class="main-content">
        <div class="container">
            <div class="login-form">
                <div class="login-form-row">
                    <h1 class="login-form-header">Регистрация</h1>
                    <div class="login-form-input">
                        <input type="text" placeholder="Имя" name="name" v-model="user.name">
                    </div>
                    <div class="login-form-input">
                        <input type="email" placeholder="Эл. почта" name="login"
                          v-model="user.email">
                    </div>
                    <div class="login-form-input">
                        <input type="password" placeholder="Пароль" name="password"
                          v-model="user.password">
                    </div>
                    <label for="accept" class="login-form-remember">
                        <div>Регистрируясь, я принимаю <a target="_blank" href="#">условия</a></div>
                        <input id="accept" type="checkbox" name="accept" checked="">
                    </label>
                    <div class="login-form-btn-wrapper">
                      <button class="login-form-btn" @click="handleSubmit()">
                        <div class="button-label">Зарегистрироватья!</div>
                      </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>

import { mapActions } from 'vuex';

export default {
  name: 'RegisterUser',

  data() {
    return {
      user: {
        name: '',
        login: '',
        email: '',
        password: '',
      },
      // sitekey: '6LfakIEfAAAAAI_bxI_b_2pAYplveVdcsyiVL4K2',

    };
  },

  computed: {
    // Здесь причисляем методы (функции) которые отдают нам данные из хранилища (store)
    // ...mapGetters(['material', 'user']),
  },

  methods: {
    // Здесь причисляем методы (функции) которые будут вызываться нами в этом блоке.
    // Они хранятся в хранилище  (store)
    ...mapActions(['register']),

    async handleSubmit() {
      if (this.user.password.length > 0 && this.user.email.length > 0
      && this.user.name.length > 0) {
        const result = await this.register(this.user);

        if (result) {
          this.$router.push(window.laravelPath || '/login_user');
        }
      }
    },

    /*
    register(recaptchaToken) {
      this.$axios.post('https://yourserverurl.com/register', {
        email: this.email,
        password: this.password,
        recaptchaToken,
      });
    },
    /*
    onCaptchaExpired() {
      this.$refs.recaptcha.reset();
    },
    */
  },
  created() {
    /* if (typeof window.isLoggedin !== 'undefined' || window.isLoggedin === true) {
      this.$router.push(window.laravelPath || '/');
    } */

    /*
    const $script = document.createElement('script');
    $script.async = true;
    $script.src = 'https://www.google.com/recaptcha/api.js?onload=vueRecaptchaApiLoaded&render=explicit';
    document.head.appendChild($script);
    */
  },
};
</script>
