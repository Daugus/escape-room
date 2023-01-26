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
            movible: true,
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

            const concepts = [];
            const definitions = [];

            for await (const method of incubationMethods) {
                concepts.push({
                    id: method.id,
                    concept: method.concept,
                });

                definitions.push({
                    id: method.id,
                    definition: method.definition,
                });
            }

            // mezcla las cartas
            for (let i = concepts.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));

                [concepts[i], concepts[j]] = [concepts[j], concepts[i]];
            }
            for (let i = definitions.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));

                [definitions[i], definitions[j]] = [
                    definitions[j],
                    definitions[i],
                ];
            }

            this.conceptList = concepts;
            this.definitionList = definitions;
        },
        getCurrentDefinitionInfo(definitionInfo) {
            this.definitionRectList.push(definitionInfo);
        },
        getCurrentConceptInfo(conceptInfo) {
            const targetDefinitionInfo = this.definitionRectList.filter(
                (definition) => definition.id === conceptInfo.id
            )[0];

            if (
                conceptInfo.start.x >= targetDefinitionInfo.start.x &&
                conceptInfo.start.y >= targetDefinitionInfo.start.y &&
                conceptInfo.end.x <= targetDefinitionInfo.end.x &&
                conceptInfo.end.y <= targetDefinitionInfo.end.y
            ) {
                this.$refs.conceptos.filter(
                    (concepto) => concepto.id === conceptInfo.id
                )[0].movible = false;
            }
        },
        getConceptRef(id) {
            return `ref-${id}`;
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
                ref="conceptos"
            />
        </div>
        <div class="my-auto grid grid-cols-6 gap-6 auto-rows-max">
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
    grid-template-rows: 2fr 1fr;
}
</style>
