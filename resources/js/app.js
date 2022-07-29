
import vuetify from './plugins/vuetify'
import VueAxios from 'vue-axios';
import axios from 'axios'
import Vue from 'vue';
import router from './plugins/routes'
import App from './pages/App.vue'

require('./bootstrap');

// window.Vue = require('vue').default;
// Vue.component('main-component', require('./components/Main.vue').default);


Vue.use(VueAxios, axios)

const app = new Vue({
    el: '#app',
    components: {
        App
    },
    router,
    vuetify
});
