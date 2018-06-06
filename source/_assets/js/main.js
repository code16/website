import Vue from 'vue';
import stickyTitle from './sticky-title';
import Stacker from './components/Stacker';

Vue.use(stickyTitle, { breakpoint: 768 });


new Vue({
    el:'#app',
    components: {
        Stacker
    }
});