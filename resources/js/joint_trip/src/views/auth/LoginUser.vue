<template>
    <main class="main-content">
        <div class="container">
            <div class="login-form" >
                <div class="login-form-row">
                    <h1 class="login-form-header">Вход в персональный раздел</h1>
                    <div class="login-form-input">
                        <input type="email" placeholder="Эл. почта" name="email"
                          v-model="user.email">
                    </div>
                    <div class="login-form-input">
                        <input type="password" placeholder="Пароль" name="password"
                          v-model="user.password">
                    </div>
                    <label for="rememberMe" class="login-form-remember">
                        <div>Запомнить меня</div>
                        <input id="rememberMe" type="checkbox" name="rememberMe"
                          v-model="user.remember">
                    </label>
                    <div class="login-form-btn-wrapper" >
                        <button class="login-form-btn" type="submit" @click="handleSubmit">
                            <div class="button-label">Войти</div>
                        </button>
                    </div>
                    <div class="login-form-forgot">
                      <a href="#">Я не помню пароль</a>
                      </div>
                    <div class="login-form-register">
                      <router-link to="/register_user">Регистрация</router-link>
                      </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>

import { mapActions } from 'vuex';
// import ResultsRows from '../components/ResultsRows.vue';

export default {
  name: 'loginUser',
  data() {
    return {
      user: {
        email: '',
        login: '',
        password: '',
        remember: '',
      },
    };
  },

  computed: {
    // Здесь причисляем методы (функции) которые отдают нам данные из хранилища (store)
    // ...mapGetters(['material', 'user']),
  },

  methods: {
    // Здесь причисляем методы (функции) которые будут вызываться нами в этом блоке.
    // Они хранятся в хранилище  (store)
    ...mapActions(['login']),

    // Метод который вызывает нажатие кнопки
    handleSubmit(e) {
      e.preventDefault();
      // Простая валидация на заполненность полей
      if (this.user.password.length > 0 && this.user.email.length > 0) {
        this.login(this.user);
      }
    },
  },

  // Хука, которая вызывается при создании этой страницы
  // почитать можно https://v3.ru.vuejs.org/ru/api/options-lifecycle-hooks.html
  created() {
    console.log(window.isLoggedin);
    if (typeof window.isLoggedin !== 'undefined') {
      if (window.isLoggedin === true) {
        this.$router.push(window.laravelPath || '/');
      }
    }
  },

};

</script>
