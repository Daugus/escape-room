<script setup>
import route from "ziggy";
import IncubationMethod from "./IncubationMethod.vue";
</script>

<script>
export default {
    data() {
        return {
            incubationMethodList: [],
            definitionArray: [],
            conceptArray: [],
            incubationDiv: null,
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

            setTimeout(this.separateMethods, 500);
        },

        separateMethods() {
            let thisElements = document.querySelectorAll("#vue div");
            console.log(thisElements);
        },

        getConcept(concept) {
            this.conceptArray.push(concept);
        },
        getDefinition(concept) {
            this.definitionArray.push(concept);
        },
    },
    // watch: {
    //     incubationDiv: function () {
    //         //
    //         console.log(this.incubationDiv);
    //         // this.incubationDiv = null;
    //     },
    // },
};
</script>

<template>
    <IncubationMethod
        v-for="incubationMethod in incubationMethodList"
        :incubationMethodInfo="incubationMethod"
        @getDefinition="getDefinition"
        @getConcept="getConcept"
    />
</template>

<style scoped lang="scss"></style>
