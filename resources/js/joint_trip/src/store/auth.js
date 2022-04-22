import axios from 'axios';
import router from '../router';

export default ({
  state: {
    status: false,
    user: {},
  },

  getters: {
    authStatus(state) {
      return state.status;
    },

    user(state) {
      return state.user;
    },
  },

  mutations: {
    AUTH_REQUEST(state) {
      state.status = 'loading';
    },

    AUTH_SUCCESS(state, user) {
      state.status = true;
      state.user = user;
      window.isLoggedin = true;
    },

    AUTH_REGISTER() {
    },

    AUTH_ERROR(state) {
      state.status = false;
      window.isLoggedin = false;
    },

    LOGOUT(state) {
      state.status = false;
      state.user = {};
      window.isLoggedin = false;
    },
  },

  actions: {
    // Здесь мы делаем запрос на сервер для проверки авторизации пользователя
    //
    async checkLogin({ commit }) {
      commit('AUTH_REQUEST');
      const { data } = await axios.get('api/check_login');

      console.log(data);
      if (data.success) {
        commit('AUTH_SUCCESS', data.user);
      } else {
        commit('AUTH_ERROR');
      }
    },

    async register({ commit }, user) {
      try {
        const sanctum = await axios.get('/sanctum/csrf-cookie');
        console.log(sanctum.headers);
        if (sanctum) {
          const { data } = await axios.post('api/register', user);
          if (data.success) {
            console.log(data);
            commit('AUTH_REGISTER', data.user);
            return true;
          }
          alert(data.message);
        }
        return false;
      } catch (error) {
        alert(Object.entries(error.response.data.errors).map(([k, v]) => `${k}: ${v}`).join(', '));
        return false;
      }
    },

    async login({ commit }, user) {
      axios.get('/sanctum/csrf-cookie').then(() => {
        axios.post('api/login', {
          email: user.email,
          password: user.password,
          remember: user.remember,
        })
          .then((response) => {
            if (response.data.success) {
              commit('AUTH_SUCCESS', response.data.user);
              router.push(window.laravelPath || '/');
            } else {
              commit('AUTH_ERROR', response.data.message);
            }
          });
      });
    },

    async logout({ commit }) {
      const { data } = await axios.get('api/logout');
      if (data.success) {
        commit('LOGOUT');
        router.push('/');
      }
    },

  },

  modules: {
  },

});
