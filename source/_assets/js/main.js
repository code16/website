import Vue from 'vue';
import stickyTitle from './sticky-title';
import CarouselComp from './components/Carousel';

const Carousel = Vue.extend(CarouselComp);

Vue.use(stickyTitle, { breakpoint: 768 });

new Vue({
    el:'#app',
    components: {
        Carousel
    },
    methods: {
        adjacentImages() {
            return [...this.$el.querySelectorAll('p')]
                .map(p=>[...p.querySelectorAll('img+img')])
                .filter(images => images.length>0)
                .map(images => [images[0].previousElementSibling, ...images])
        }
    },
    mounted() {
        console.log(this.adjacentImages());
        this.adjacentImages().forEach(images => {
            let carousel = new Carousel({
                propsData:{ images },
                parent:this
            }).$mount().$el;
            let paragraph = images[0].parentElement;
            paragraph.parentElement.replaceChild(carousel, paragraph);
        });
    }
});