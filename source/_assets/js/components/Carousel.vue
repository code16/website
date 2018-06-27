<template>
    <carousel class="carousel"
        :class="classes"
        :per-page="1"
        :pagination-enabled="false"
        :speed="speed"
        @pageChange="handlePageChanged"
        ref="carousel"
    >
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
            slides: Array,
            speed: {
                type: Number,
                default: 500
            }
        },
        components: {
            Carousel,
            Slide
        },
        data() {
            return {
                currentSlide: 0,
                // meta
                dragging: false,
                page: 0
            }
        },
        computed: {
            classes() {
                return {
                    'carousel--initial': !this.dragging && !this.page
                }
            },
        },
        methods: {
            handleSlideClick({ index }) {
                this.$refs.carousel.goToPage(Number(index));
            },
            handlePageChanged(page) {
                if(!page) {
                    setTimeout(() => this.page = 0, this.speed);
                } else {
                    this.page = page;
                }
            }
        },
        mounted() {
            // prevent scrolling on carousel
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
            });
            this.$refs.carousel.$watch('dragging', dragging => {
                this.dragging = dragging;
            });
        }
    }
</script>