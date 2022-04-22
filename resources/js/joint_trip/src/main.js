import { createApp } from 'vue';
import App from './App.vue';
import router from './router';
import store from './store';

import './assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css';

createApp(App).use(store).use(router).mount('#app');
