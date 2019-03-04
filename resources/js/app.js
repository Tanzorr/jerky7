
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
import Vue from 'vue';
//import  VueResource from 'vue-resource';
import axios from 'axios';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router';
//window.Vue = require('vue');
//Vue.http.headers.common['X-CSRF-TOKEN'] = $('meta[name ="csrf-token"]').attr('content');

//Vue.use(VueResource);
Vue.use(VueAxios, axios);
Vue.use(VueRouter);


 var Home = require('./components/pages/HomeComponent');
 var Products = require('./components/pages/ProductsComponent');
 var Product = require('./components/pages/ProductComponent');
 var Blog = require('./components/pages/BlogComponent');
 var Post = require('./components/pages/PostComponent');
 var Contacts = require('./components/pages/ContactComponent');
 var Main = require('./components/MainComponent');
 var router = new VueRouter({
     routes:[
         {path: '/', component: Main,

         children:[
           //  {path: '/', component: Home},
             {path: '/products', component: Products},
             {path: '/blog', component: Blog},
             {path: '/post/:id',name:'post', component: Post},
             {path: '/product/:id',name:'product', component: Product},
             {path: '/contacts', component: Contacts},
         ]},


     ],
    // mode:'history',
 });

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


import {store} from './store/store.js';

const app = new Vue({
    el: '#app',
    store,
    router:router,
    //render: h => h(Main)
});
