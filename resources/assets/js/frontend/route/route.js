require('../../bootstrap');

window.Vue = require('vue');

Vue.component('route', require('./components/ViewRoute.vue'));

const app = new Vue({
    el: '#route'
});