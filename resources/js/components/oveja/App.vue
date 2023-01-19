<script setup>
import route from "ziggy";
import Concept from "./Concept.vue";
import Definition from "./Definition.vue";
</script>

<script>
export default {
    data() {
        return {
            incubationMethodList: [],
            definitionList: [],
            conceptList: [],
            definitionRectList: [],
        };
    },
    async mounted() {
        await this.getIncubationMethods();
        document.body.classList.add("overflow-clip");
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

            for await (const method of incubationMethods) {
                this.conceptList.push({
                    id: method.id,
                    concept: method.concept,
                });

                this.definitionList.push({
                    id: method.id,
                    definition: method.definition,
                });
            }

            // mezcla las cartas
            for (let i = this.conceptList.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));

                [this.conceptList[i], this.conceptList[j]] = [
                    this.conceptList[j],
                    this.conceptList[i],
                ];
            }
            for (let i = this.definitionList.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));

                [this.definitionList[i], this.definitionList[j]] = [
                    this.definitionList[j],
                    this.definitionList[i],
                ];
            }
        },
        getCurrentDefinitionInfo(definitionInfo) {
            this.definitionRectList.push(definitionInfo);
        },
        getCurrentConceptInfo(conceptInfo) {
            const targetDefinitionInfo = this.definitionRectList.filter(
                (definition) => definition.id === conceptInfo.id
            )[0];

            console.log(this.definitionRectList);
        },
    },
};
</script>

<template>
    <div class="grid h-screen grid-oveja p-6">
        <div class="grid grid-cols-6 gap-6">
            <Concept
                v-for="concept in conceptList"
                :conceptInfo="concept"
                @getCurrentConceptInfo="getCurrentConceptInfo"
            />
        </div>
        <div class="grid grid-cols-6 gap-6 auto-rows-max">
            <Definition
                v-for="definition in definitionList"
                :definitionInfo="definition"
                @getCurrentDefinitionInfo="getCurrentDefinitionInfo"
            />
        </div>
    </div>
</template>

<style scoped lang="scss">
.grid-oveja {
    grid-template-rows: auto 1fr;
}
</style>
