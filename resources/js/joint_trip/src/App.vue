<template>
  <!--<nav>
    <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link> |
    <router-link to="/RegisterUser">Register</router-link> |
    <router-link to="/LoginUser">LoginUser</router-link>
  </nav> -->

  <!-- Подгружаем header-->
  <header-pages/>
  <!-- Подгружаем тело наших страниц-->
  <router-view/>
  <footer-pages/>
</template>

<script>
import { mapActions } from 'vuex';
import HeaderPages from './components/HeaderPages.vue';
import FooterPages from './components/FooterPages.vue';

export default {
  name: 'indexApp',
  components: {
    HeaderPages,
    FooterPages,
  },

  // Обработка просроченных токенов
  created() {
    this.checkLogin();
  },
  computed: {
  },

  methods: {
    // После загрузки страницы  - Проверяем авторизован ли пользователь
    // это метод из нашего хранилища в файле: auth.js
    ...mapActions(['checkLogin']),
  },
};
</script>
