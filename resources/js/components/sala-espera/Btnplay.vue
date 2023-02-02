<script setup>
import route from "ziggy";
</script>

<script>
export default {
    props: {},
    computed: {},
};
</script>

<template>
    <div class="flex items-stretch justify-center">
        <a
            class="self-center bg-orange-400 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded flex justify-center"
            :href="route('laboratorio.index')"
            >Jugar</a
        >
    </div>
</template>

<style scoped lang="scss"></style>
