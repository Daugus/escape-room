<script setup>
import route from "ziggy";
</script>

<script>
export default {
    data() {
        return {
            i: 0,
        };
    },
    props: {
        caracteres: Array,
    },
    methods: {
        sumar() {
            this.i++;
            if (this.i >= this.caracteres.length) this.i = 0;
        },
        restar() {
            this.i--;
            if (this.i <= 0) this.i = this.caracteres.length - 1;
        },
        rutaHref() {
            return route(this.ruta);
        },
    },
};
</script>

<template>
    <div class="grid grid-cols-1 grid-rows-3 text-lg">
        <button @click="sumar">^</button>
        <p>{{ caracteres[i] }}</p>
        <button @click="restar">v</button>
    </div>
</template>

<style scoped lang="scss"></style>
