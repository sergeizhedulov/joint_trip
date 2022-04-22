<template>

<header class="main-header">
    <div class="container">
        <div class="header-wrapper">
            <div class="left-head">
              <router-link to="/">
                   <img src="/images/logo.png" alt="" class="logo">
              </router-link>
              <div class="site-name">
                  <span style="color: rgb(0, 175, 245)"
                  >П</span>о<span style="color: rgb(0, 175, 245)">П</span>ути!
              </div>
            </div>
            <div class="center-head"></div>
            <div class="right-head">
                <a href="#">Найти поезду</a>
                <a href="#">Опубликовать поездку</a>

                <!-- По хорошему надо вынести этот блок в отдельный темплет
                 Но это будет нашей проблемой в будущем ))) -->
                <span v-if="authStatus===false">
                    <router-link to="/login_user">Вход</router-link>
                    <router-link to="/register_user">Регистрация</router-link>
                </span>

                <span v-else-if="authStatus==='loading'">
                    <i class="fa fa-2x fa-spin fa-cog" style="color:blue;"></i>Загрузка...
                </span>
                <span v-else-if="authStatus===true">
                <span>
                  <router-link to="/account_user">{{user.name}}</router-link>
                  <button  @click="logoutFunction()">Выход</button>
                </span>

                </span>
            </div>
        </div>
    </div>
</header>

</template>

<script>
import { mapActions, mapGetters } from 'vuex';

export default {
  name: 'HeaderPages',

  computed: {
    ...mapGetters(['authStatus', 'user']),

  },

  methods: {
    ...mapActions(['login', 'logout']),

    handleSubmit(e) {
      e.preventDefault();

      if (this.userLogin.password.length > 0) {
        this.login(this.userLogin);
      }
    },
    logoutFunction() {
      this.logout();
      // this.$router.push('login');
    },
  },
};
</script>
