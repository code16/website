import Vue from 'vue';
import stickyTitle from './sticky-title';

Vue.use(stickyTitle, { breakpoint: 768 });

new Vue({
    el:'#app'
});