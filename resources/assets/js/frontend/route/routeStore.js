import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';
import endpoints from '../../parts/api';

Vue.use(Vuex);

const routeStore = new Vuex.Store({
    state: {
        routes: [],
        favourite_routes: []
    },
    mutations: {
        FETCH(state, routes) {
            state.routes = routes;
        },
        FETCH_FAVOURITES(state, favourite_routes) {
            state.favourite_notes = favourite_notes;
        }
    },
    actions: {
        index({ commit }) {
            return axios.get(endpoints.routes)
                .then(response => commit('FETCH', response.data))
                .catch();
        },
        delete_route({}, id) {
            axios.delete(`${endpoints.routes}/${id}`)
                .then(() => this.dispatch('index'))
                .catch();
        },
        edit({}, route) {
            axios.put(`${endpoints.routes}/${route.id}`, {
                name: route.name
            })
                .then(() => this.dispatch('index'));
        },
        toggle_favourite({}, id) {
            axios.put(`${endpoints.routes}/${id}/toggleFavourite`, {
                is_favourite: true
            })
                .then(() => this.dispatch('index'))
        },
        fetch_favourites({commit}) {
            return axios.get(`${endpoints.routes}?type=favourite`)
                .then(response => commit('FETCH_FAVOURITES', response.data))
                .catch();
        },
        add({}, payload) {
            axios.post(`${endpoints.routes}`, {
                'name': payload.name,
            });
        }
    }
});

export default routeStore;