<template>
    <div class="app-content">
        <vue-range-slider v-model="value" :min="min" :max="max" :formatter="formatter" ></vue-range-slider>
    </div>
</template>
<script>
import 'vue-range-component/dist/vue-range-slider.css'
import VueRangeSlider from 'vue-range-component'

export default {
    name: "Slider_range_shop",
    data() {
        return {
            value: [0, 100]
        }
    },
    components: {
        VueRangeSlider
    },
    created() {
        this.min = 0
        this.max = 250
        this.formatter = value => `$ ${value}`
    }
}
</script>













<!--<template>-->
<!--    <range-slider-->
<!--        class="slider"-->
<!--        min="10"-->
<!--        max="1000"-->
<!--        step="10"-->
<!--        v-model="sliderValue">-->
<!--    </range-slider>-->
<!--</template>-->

<!--<script>-->
<!--import RangeSlider from 'vue-range-slider'-->
<!--// you probably need to import built-in style-->
<!--import 'vue-range-slider/dist/vue-range-slider.css'-->

<!--export default {-->
<!--    name: "Slider_range_shop",-->
<!--    data () {-->
<!--        return {-->
<!--            sliderValue: 50-->
<!--        }-->
<!--    },-->
<!--    components: {-->
<!--        RangeSlider-->
<!--    }-->
<!--}-->
<!--</script>-->

<!--<style>-->
<!--.slider {-->
<!--    /* overwrite slider styles */-->
<!--    width: 200px;-->
<!--}-->
<!--</style>-->
















