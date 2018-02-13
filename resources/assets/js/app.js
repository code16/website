import Vue from 'vue';
import stickyTitle from './sticky-title';
import StickyTitle from './StickyTitle';

new Vue({
    el:'#app',
    components: {
        StickyTitle
    },
    directives: {
        stickyTitle
    }
});