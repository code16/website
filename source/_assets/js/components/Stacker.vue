<template>
    <div>
        <slot />
    </div>
</template>

<script>
    import Vue from 'vue';
    import CarouselComp from './Carousel';
    import StackComp from './Stack';

    const Carousel = Vue.extend(CarouselComp);
    const Stack = Vue.extend(StackComp);

    export default {
        props: {
            breakpoint:{
                type: Number,
                default: 0
            }
        },
        data() {
            return {
                stacks: [],
                currentComponent: null
            }
        },
        methods: {
            adjacentImages() {
                return [...this.$el.querySelectorAll('p')]
                    .map(p => [...p.querySelectorAll('img+img')])
                    .filter(images => images.length > 0)
                    .map(images => [images[0].previousElementSibling, ...images])
            },
            getLegend(image) {
                let { nextSibling } = image;
                return nextSibling && nextSibling.nodeType === Node.TEXT_NODE
                    ? nextSibling.textContent
                    : ''
            },
            createSlides(images) {
                return images.map(image => ({
                    image,
                    legend: this.getLegend(image)
                }))
            },
            mount(Component) {
                if(this.currentComponent === Component) {
                    return;
                }
                this.stacks = this.stacks.map(({ el, slides, component }) => {
                    component.$destroy();
                    component = new Component({
                        propsData: { slides },
                        parent: this
                    }).$mount(el);
                    return { el: component.$el, slides, component };
                });
                this.currentComponent = Component;
            },
            update() {
                if(window.innerWidth > this.breakpoint) {
                    this.mount(Carousel)
                } else {
                    this.mount(Stack)
                }
            }
        },
        mounted() {
            this.stacks = this.adjacentImages().map(images => ({
                el: images[0].parentElement,
                slides: this.createSlides(images),
                component: new Vue()
            }));
            this.update();
            window.addEventListener('resize', this.update);
        },
        destroyed() {
            window.removeEventListener('resize', this.update);
        }
    }
</script>