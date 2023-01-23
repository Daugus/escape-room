<script setup>
import route from "ziggy";
</script>

<script>
export default {
    data() {
        return {
            formulaList: [],
        };
    },
    async mounted() {
        await this.getFormulas();
    },
    methods: {
        async getFormulas() {
            const token = document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content");

            const res = await fetch(
                `${window.location.origin}/api/equilibrado/getFormulas`,
                {
                    method: "POST",
                    headers: new Headers({
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": token,
                    }),
                }
            );

            this.formulaList = await res.json();
        },
    },
};
</script>

<template>
    <section class=""></section>
</template>

<style scoped lang="scss"></style>
