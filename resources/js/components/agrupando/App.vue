<script setup>
import route from "ziggy";
</script>

<script>
export default {
    data() {
        return {
            concepts: [],
        };
    },
    async mounted() {
        await this.getConcepts();
    },
    methods: {
        async getConcepts() {
            const token = document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content");

            const res = await fetch(
                `${window.location.origin}/api/agrupando/getConcepts`,
                {
                    method: "POST",
                    headers: new Headers({
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": token,
                    }),
                }
            );

            this.concepts = await res.json();
        },
    },
};
</script>

<template>
    <a
        class="underline text-blue-600 hover:text-blue-800 visited:text-purple-600"
        :href="route('index')"
        >Volver</a
    >

    <section></section>
</template>

<style scoped lang="scss"></style>
