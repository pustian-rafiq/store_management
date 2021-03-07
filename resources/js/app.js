require('./bootstrap');
require('alpinejs');
// window.Vue = require('vue');
import Vue from 'vue'
// Vue.component('example-component',require('./components/ExampleComponent.vue').default);
Vue.component('hello',require('./components/HelloTest.vue').default);

const app = new Vue({
	el: '#app',
});

