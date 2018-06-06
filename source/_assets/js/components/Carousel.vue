<template>
    <carousel class="carousel" :per-page="1" :pagination-enabled="false" ref="carousel">
        <slide class="slide" v-for="(slide, i) in slides" :key="i" :data-index="i" @slideClick="handleSlideClick">
            <div v-html="slide.image.outerHTML"></div>
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
                this.$refs.carousel.goToPage(Number(index))
            }
        }
    }
</script>