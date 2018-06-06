<template>
    <div class="stack">
        <div class="stack-part"></div>
        <div class="stack-top" v-html="slides[0].image.outerHTML" @click="handleStackClicked"></div>
        <div v-if="showCarousel" class="fixed pin z-30 flex items-center" style="background: rgba(0,0,0,.5)" @click="handleBackdropClicked">
            <carousel :per-page="1">
                <slide v-for="(slide,i) in slides" :key="i">
                    <div v-html="slide.image.outerHTML"></div>
                    <div class="legend leading-normal pl-2" style="background: rgba(0,0,0,.5)">{{slide.legend}}</div>
                </slide>
            </carousel>
        </div>
    </div>
</template>

<script>
    import { Carousel, Slide } from 'vue-carousel';
    export default {
        components: {
            Carousel, Slide
        },
        props: {
            slides: Array,
        },
        data() {
            return {
                showCarousel: false
            }
        },
        methods: {
            handleStackClicked() {
                this.showCarousel = true;
            },
            handleBackdropClicked() {
                this.showCarousel = false;
            }
        }
    }
</script>