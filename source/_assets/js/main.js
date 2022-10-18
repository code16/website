import Vue from 'vue';
import stickyTitle from './components/sticky-title';
import Stacker from './vue/components/Stacker';
import Alpine from 'alpinejs';


document.querySelectorAll('pre').forEach(pre => {
    pre.setAttribute('v-pre', '');
});

[...document.querySelectorAll('[data-v-app]')]
    .forEach(el => {
        const app = new Vue({
            components: {
                Stacker
            },
        });
        app.$mount(el);
    });


Alpine.data('stickyTitle', stickyTitle);

Alpine.start();
