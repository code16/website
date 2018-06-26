<template>
    <carousel class="carousel" :per-page="1" :pagination-enabled="false" ref="carousel">
        <slide class="slide relative" v-for="(slide, i) in slides" :key="i" :data-index="i" @slideClick="handleSlideClick">
            <div class="slide-image-container" v-html="slide.image.outerHTML"></div>
            <span class="legend">{{slide.legend}}</span>
        </slide>
    </carousel>
</template>

<script>
    import { Carousel, Slide } from 'vue-carousel';

    export default {
        props: {
            slides: Array
        },
        components: {
            Carousel,
            Slide
        },
        data() {
            return {
                currentSlide: 0
            }
        },
        methods: {
            handleSlideClick({ index }) {
                this.$refs.carousel.goToPage(Number(index));
            }
        },
        mounted() {
            // prevent scrolling on
            let { onDrag } = this.$refs.carousel;
            this.$refs.carousel.onDrag = e => {
                this.prevent = false;
                e.stopImmediatePropagation = () => this.prevent = true;
                onDrag(e);
            };
            this.$el.querySelector('.VueCarousel-wrapper').addEventListener('touchmove', e => {
                if(this.prevent) {
                    e.preventDefault();
                }
            })
        }
    }
</script>