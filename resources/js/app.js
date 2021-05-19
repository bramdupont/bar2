require('./bootstrap');
require('alpinejs');

import Vue from 'vue'
import App from './views/App'
import VueRouter from "vue-router"

import { library } from '@fortawesome/fontawesome-svg-core'
import { faPlusSquare, faTrash, faHome, faCreditCard, faUser, faCog } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faPlusSquare, faTrash, faHome, faCreditCard, faUser, faCog)

Vue.component('font-awesome-icon', FontAwesomeIcon)
Vue.component('app', require('./views/App.vue').default);
import { routes } from './routes';
Vue.use(VueRouter);


const router = new VueRouter( {
    mode: 'history',
    routes
});

const app = new Vue({
    el: '#app',
    router,
    components: { App }
})

