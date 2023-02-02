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
            indexes: [1, 2, 3, 4, 5, 6],
            guessedCouples: 0,
            error: false,
        };
    },
    async mounted() {
        if (screen.width < 1024) {
            this.error = true;
            localStorage.setItem("oveja", "superado");
            setTimeout(
                () => location.replace(route("laboratorio.index")),
                5000
            );
        } else {
            for (let i = this.indexes.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));

                [this.indexes[i], this.indexes[j]] = [
                    this.indexes[j],
                    this.indexes[i],
                ];
            }

            await this.getIncubationMethods();
            document.body.classList.add("overflow-clip");
        }
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

            const concept = document.querySelector(
                `#draggable-${conceptInfo.id}`
            );
            if (
                conceptInfo.start.x >= targetDefinitionInfo.start.x &&
                conceptInfo.start.y >= targetDefinitionInfo.start.y &&
                conceptInfo.end.x <= targetDefinitionInfo.end.x &&
                conceptInfo.end.y <= targetDefinitionInfo.end.y
            ) {
                this.$refs.conceptos.filter(
                    (concepto) => concepto.id === conceptInfo.id
                )[0].movible = false;

                concept.classList.add("bg-lime-600");
                concept.classList.remove("bg-red-600");

                this.guessedCouples++;
                if (this.guessedCouples === 6) {
                    setTimeout(() => {
                        localStorage.setItem("oveja", "superado");
                        location.replace(route("laboratorio.index"));
                    }, 2500);
                }
            } else {
                concept.classList.add("bg-red-600");
            }
        },
        getConceptRef(id) {
            return `ref-${id}`;
        },
    },
};
</script>

<template>
    <div v-if="error" id="ERROR"></div>
    <div v-else class="grid-oveja grid">
        <div class="definitions">
            <Definition
                v-for="definition in definitionList"
                :definitionInfo="definition"
                @getCurrentDefinitionInfo="getCurrentDefinitionInfo"
            />
        </div>
        <div class="methods">
            <Concept
                v-for="(concept, index) in conceptList"
                :conceptInfo="concept"
                :index="indexes[index]"
                @getCurrentConceptInfo="getCurrentConceptInfo"
                ref="conceptos"
            />
        </div>
    </div>
</template>

<style scoped lang="scss">
.grid-oveja {
    grid-template-rows: 1fr 1fr;
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 100vh;

    background-image: url("@/src/img/oveja/table.png");
    background-size: contain;
    box-shadow: 0 0 5rem black;

    .methods,
    .definitions {
        width: 100%;
        margin-block: 1%;
        display: flex;
    }

    .methods {
        justify-content: space-around;
    }

    .definitions {
        margin-inline: 1rem;
    }
}
#ERROR {
    height: 100vh;
    width: 100%;
    background-image: url("@/src/img/menu/ERROR.png");
    background-repeat: no-repeat;
    background-size: 100% 100vh;
}
</style>
