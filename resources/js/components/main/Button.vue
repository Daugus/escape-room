<script setup>
import route from "ziggy";
</script>

<script>
export default {
    props: {
        ruta: String,
        imagen: String,
        texto: String,
    },
    computed: {
        rutaIndex() {
            return route(`${this.ruta}.index`);
        },
    },
};
</script>

<template>
    <div class="flex">
        <a :href="rutaIndex"><img :src="imagen" /></a>
        <a class="font-bold text-3xl" :href="rutaIndex">{{ texto }}</a>
    </div>
</template>

<style scoped lang="scss">
img {
    width: 65%;
}
div {
    text-align: center;
    align-items: center;
}

a {
    font-family: inter;
}
</style>
