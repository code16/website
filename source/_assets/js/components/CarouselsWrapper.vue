<template>
    <div>
        <slot />
    </div>
</template>

<script>
    import Vue from 'vue';
    import CarouselComp from './Carousel';

    const Carousel = Vue.extend(CarouselComp);

    export default {
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
            createSlide(image) {
                return {
                    image,
                    legend: this.getLegend(image)
                }
            },
            mount() {
                this.adjacentImages()
                    .map(images => images.map(this.createSlide))
                    .forEach(slides => {
                        let carousel = new Carousel({
                            propsData: { slides },
                            parent: this
                        }).$mount().$el;
                        let paragraph = slides[0].image.parentElement;
                        paragraph.parentElement.replaceChild(carousel, paragraph);
                    });
            }
        },
        mounted() {
            this.mount();
        }
    }
</script>