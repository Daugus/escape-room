<script setup>
import route from "ziggy";
</script>

<script>
export default {
    data() {
        return {};
    },
    async mounted() {
        await this.getIncubationMethods();
    },
    methods: {
        // Coger una palabra aleatoria desde un JSON
        async getIncubationMethods() {
            const token = document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content");
            const res = await fetch(
                `${window.location.origin}/api/oveja/getIncubationMethods`,
                {
                    method: "POST",
                    headers: new Headers({
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": token,
                    }),
                }
            );
            const data = await res.json();
            console.log(data);
        },
    },
};
</script>

<template></template>

<style scoped lang="scss"></style>
