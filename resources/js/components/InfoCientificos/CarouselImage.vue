<script>
export default {
    data() {
        return {};
    },
    props: {
        scientist: Object,
    },
    async mounted() {
        console.log(this.scientist);
    },
    methods: {},
    computed: {
        // crea un URL para usar como href en el img
        imageSource() {
            return new URL(
                `/public/src/img/password/${this.scientist.image}`,
                import.meta.url
            );
        },
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
