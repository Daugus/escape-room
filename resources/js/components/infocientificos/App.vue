<script setup>
import route from "ziggy";
import Carouselmage from "./CarouselImage.vue";
</script>

<script>
export default {
    data() {
        return {
            scientistlist: [],
        };
    },
    async mounted() {
        await this.getScientist();
    },
    methods: {
        async getScientist() {
            const token = document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content");
            const res = await fetch(
                `${window.location.origin}/api/password/getScientist`,
                {
                    method: "POST",
                    headers: new Headers({
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": token,
                    }),
                }
            );

            this.scientistlist = await res.json();
        },
    },
    computed: {},
};
</script>

<template>
    <div id="contenedor">
        <Carouselmage
            v-for="scientist in scientistlist"
            :scientist="scientist"
        />
    </div>

    <br />

    <div style="text-align: center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>
</template>

<style scoped lang="scss">
#contenedor {
    display: flex;
    height: 200vh;
    align-items: center;
    margin-top: 5%;
}
body {
    min-height: 100%;
}
</style>
