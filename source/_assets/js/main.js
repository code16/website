import Vue from 'vue';
import stickyTitle from './sticky-title';
import Stacker from './components/Stacker';


Vue.use(stickyTitle);

document.querySelectorAll('pre').forEach(pre => {
    pre.setAttribute('v-pre', '');
});

new Vue({
    el:'#app',
    components: {
        Stacker
    }
});
