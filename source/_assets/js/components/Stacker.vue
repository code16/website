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
            mountCarousels() {
                this.adjacentImages()
                    .map(this.createSlides)
                    .forEach(slides => {
                        let paragraph = slides[0].image.parentElement;
                        new Carousel({
                            propsData: { slides },
                            parent: this
                        }).$mount(paragraph);
                    });
            },
            mountStacks() {
                this.adjacentImages()
                    .map(this.createSlides)
                    .forEach(slides => {
                        let paragraph = slides[0].image.parentElement;
                        new Stack({
                            propsData: { slides },
                            parent: this
                        }).$mount(paragraph);
                    });
            }
        },
        mounted() {
            if(window.innerWidth > this.breakpoint) {
                this.mountCarousels();
            } else {
                this.mountStacks();
            }
        }
    }
</script>