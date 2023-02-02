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
    <div class="flex justify-start items-center gap-8">
        <a :href="rutaHref"
            ><img
                :src="imagen"
                class="h-[20vh] max-h-14 md:max-h-24 aspect-square"
        /></a>
        <a
            class="font-bold text-3xl text-left whitespace-nowrap"
            :href="rutaHref"
            >{{ texto }}</a
        >
    </div>
</template>

<style scoped lang="scss">
div {
    text-align: center;
    align-items: center;
}

a {
    font-family: inter;
}
</style>
