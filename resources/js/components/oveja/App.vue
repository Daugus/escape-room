<script setup>
import route from "ziggy";
import IncubationMethod from "./IncubationMethod.vue";
</script>

<script>
export default {
    data() {
        return {
            incubationMethodList: [],
        };
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

            const incubationMethods = await res.json();
            for await (const incubationMethod of incubationMethods) {
                this.incubationMethodList.push({
                    id: incubationMethod.id,
                    concept: incubationMethod.concept,
                });

                this.incubationMethodList.push({
                    id: incubationMethod.id,
                    definition: incubationMethod.definition,
                });
            }

            // mezcla las cartas
            for (let i = this.incubationMethodList.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));

                [this.incubationMethodList[i], this.incubationMethodList[j]] = [
                    this.incubationMethodList[j],
                    this.incubationMethodList[i],
                ];
            }

            console.log(this.incubationMethodList);
        },
    },
};
</script>

<template>
    <IncubationMethod
        v-for="incubationMethod in incubationMethodList"
        :incubationMethodInfo="incubationMethod"
    />
</template>

<style scoped lang="scss"></style>
