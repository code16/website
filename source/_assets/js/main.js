import Vue from 'vue';
import stickyTitle from './sticky-title';
import Stacker from './components/Stacker';
import MobileDetect from 'mobile-detect';


const isMobile = new MobileDetect(window.navigator.userAgent).mobile();

Vue.use(stickyTitle, { breakpoint: !isMobile ? 768: Infinity });

new Vue({
    el:'#app',
    components: {
        Stacker
    },
    computed: {
        isMobile() {
            // return false;
            return isMobile;
        }
    }
});