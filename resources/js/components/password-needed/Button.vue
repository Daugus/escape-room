<script setup>
import route from "ziggy";
</script>

<script>
export default {
    props: {
        caracteres: Array,
        i: 0,
    },
    computed: {
        sumar() {
            this.i = this.i++;
        },
        restar() {
            this.i = this.i--;
        },
        rutaHref() {
            return route(this.ruta);
        },
    },
};
</script>

<template>
    <div class="grid grid-cols-1 grid-rows-3">
        <button @click="sumar"></button>
        <p>{{ caracteres[i] }}</p>
        <button @click="restar"></button>
    </div>
</template>

<style scoped lang="scss"></style>
