<template>
    <div class="relative">
        <carousel class="carousel" :per-page="1">
            <slide class="slide" v-for="(image,i) in images" :key="i">
                <div v-html="image.outerHTML"></div>
            </slide>
        </carousel>
    </div>
</template>

<script>
    import { Carousel, Slide } from 'vue-carousel';

    export default {
        props: {
            images: Array
        },
        components: {
            Carousel,
            Slide
        }
    }
</script>