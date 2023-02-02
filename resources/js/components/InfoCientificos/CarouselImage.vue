<script>
export default {
    data() {
        return {};
    },
    props: {
        scientist: Object,
        index: Number,
        listLength: Number,
    },
    async mounted() {
        console.log(this.scientist);
    },
    methods: {},
    computed: {
        // crea un URL para usar como href eSn el img
        imageSource() {
            return new URL(
                `/public/src/img/password/${this.scientist.image}`,
                import.meta.url
            );
        },
        // carouselId() {
        //     return `carousel-${this.index}`;
        // },
        // forPrevious() {
        //     return this.index === 1
        //         ? `carousel-${this.index - 1}`
        //         : `carousel-${this.listLength}`;
        // },
        // forNext() {
        //     return this.index === this.listLength
        //         ? `carousel-${this.index + 1}`
        //         : `carousel-1`;
        // },
    },
};
</script>

<template>
    <div class="container">
        <div class="flex" id="carousel">
            <div>
                <br />
                <img :src="imageSource" alt="" />
                <br />
                <p class="p-7">{{ scientist.text }}</p>
                <br />
            </div>
        </div>
    </div>
</template>

<style scoped lang="scss">
img {
    height: 200px;
    float: left;
    margin: 10px;
}
#carousel {
    height: 70vh;
}
p {
    width: 600px;
    text-align: justify;
    font-size: 25px;
}
.container {
    background-color: aqua;
}
</style>
