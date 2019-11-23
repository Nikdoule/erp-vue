
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');



window.Vue = require('vue');
import BootstrapVue from 'bootstrap-vue'
Vue.use(BootstrapVue)
import 'bootstrap-vue/dist/bootstrap-vue.css'

import Chartkick from 'vue-chartkick'
import Chart from 'chart.js'
Vue.use(Chartkick.use(Chart))

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


//view
Vue.component('business-view', require('./components/view/Business.vue').default);
Vue.component('case-view', require('./components/view/case.vue').default);
Vue.component('business-dev', require('./components/view/Developper.vue').default);
Vue.component('contact-view', require('./components/view/Contact.vue').default);
Vue.component('data-view', require('./components/data/Data.vue').default);
//create
Vue.component('create-business-developper', require('./components/create/BusinessDevelopper.vue').default);
Vue.component('create-deal', require('./components/create/Deal.vue').default);
Vue.component('create-contact', require('./components/create/Contact.vue').default);
//menu
Vue.component('menu-vertical', require('./components/menu/Menu.vue').default);




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});