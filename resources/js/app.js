/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
//import css files
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import Vuex from 'vuex'
import VueSignaturePad from 'vue-signature-pad';

import VueFormWizard from 'vue-form-wizard'
import 'vue-form-wizard/dist/vue-form-wizard.min.css';

import ModalFullScreenVue from 'modal-fullscreen-vue'
// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)
Vue.use(Vuex)
Vue.use(VueSignaturePad);
Vue.use(VueFormWizard);
Vue.use(ModalFullScreenVue)

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('users-component', require('./components/UsersComponent.vue').default);
Vue.component('signature-pad', require('./components/SignaturePad.vue').default);
Vue.component('generic-signature', require('./components/GenericSignature.vue').default);
Vue.component('patients-component', require('./components/PatientsComponent.vue').default);
Vue.component('samples-component', require('./components/SamplesComponent.vue').default);
Vue.component('lab-signature', require('./components/LabSignature.vue').default);
Vue.component('physical-signature', require('./components/PhysicalSignature.vue').default);
Vue.component('physical-component', require('./components/PhisycalComponent.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
