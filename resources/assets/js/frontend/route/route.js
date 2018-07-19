require('../../bootstrap');

window.Vue = require('vue');

Vue.component('route', require('./components/ViewRoute.vue'));

const app = new Vue({
    el: '#route'
});

var mapboxgl = require('mapbox-gl/dist/mapbox-gl.js');

mapboxgl.accessToken = 'pk.eyJ1IjoibmFuZHdhYmVlIiwiYSI6ImNqMGp5MXh1ejAwMW0zM3MyNTJ5YTgxejYifQ.x7sLashFo11lBNK8qUZdQQ';

var map = new mapboxgl.Map({
    container: 'routemap',
    style: 'mapbox://styles/mapbox/streets-v10'
});