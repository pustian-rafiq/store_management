require('./bootstrap');
require('alpinejs');
// window.Vue = require('vue');
import Vue from 'vue'
// Vue.component('example-component',require('./components/ExampleComponent.vue').default);
Vue.component('hello',require('./components/HelloTest.vue').default);
Vue.component('product-add',require('./components/products/ProductAdd.vue').default);
import store from './store'

const app = new Vue({
	el: '#app',
    store
});

