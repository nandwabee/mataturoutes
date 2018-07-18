require('../../../bootstrap');

window.Vue = require('vue');

Vue.component('routeeditor', require('./component/Editor.vue'));

const route_editor = new Vue({
    el: '#route_editor'
});
