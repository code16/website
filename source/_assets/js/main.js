import Vue from 'vue';
import stickyTitle from './sticky-title';
import CarouselsWrapper from './components/CarouselsWrapper';

Vue.use(stickyTitle, { breakpoint: 768 });


new Vue({
    el:'#app',
    components: {
        CarouselsWrapper
    }
});