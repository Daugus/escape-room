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
        rutaHref() {
            return route(this.ruta);
        },
    },
};
</script>

<template>
    <div class="flex">
        <a :href="rutaHref"><img :src="imagen" /></a>
        <a class="font-bold text-3xl" :href="rutaHref">{{ texto }}</a>
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
