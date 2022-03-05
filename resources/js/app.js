require('./bootstrap');

window.Vue = require('vue').default;

import Vue from "vue";
// import vue route
import VueRouter from "vue-router";

// vue use vue router
Vue.use(VueRouter);

// make route file
import routes from "./routes";

// define vue router instance
const router = new VueRouter({
    mode: 'history',
    routes
})


const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

const app = new Vue({
    el: '#app',
    router
});
