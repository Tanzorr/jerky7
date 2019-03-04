import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {

        products:[
            {id:1,title:'some tuitle', adetTocar: false},
            {id:2,title:'some tuitle1', adetTocar: false},
            {id:3,title:'some tuitle2', adetTocar: false}
        ]
    },

});