<script setup>
import route from "ziggy";
</script>

<script>
export default {
    data() {
        return {};
    },
    async mounted() {
        await this.getScientist();
        document.body.classList.add("overflow-clip");
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

            const incubationMethods = await res.json();

    },
};
</script>

<template></template>

<style scoped lang="scss"></style>
