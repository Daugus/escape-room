<script setup>
import route from "ziggy";
import File from "./File.vue";
import Folder from "./Folder.vue";
import Tab from "./Tab.vue";
</script>

<script>
export default {
    data() {
        return {
            conceptList: [],
            folderInfoList: [],
            guessedFiles: 0,
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

            // guardar en array y mezclar los conceptos
            // ya que vienen ordenados por campo
            const concepts = await res.json();

            for (let i = concepts.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));

                [concepts[i], concepts[j]] = [concepts[j], concepts[i]];
            }

            this.conceptList = concepts;
        },
        // carga los datos emitidos por cada Folder
        getCurrentFolderInfo(folderInfo) {
            this.folderInfoList.push(folderInfo);
        },
        // carga los datos del File soltado
        getCurrentFileInfo(fileInfo) {
            // busca la Folder correspondiente
            const targetFolderInfo = this.folderInfoList.filter(
                (folder) => folder.field === fileInfo.field
            )[0];

            // comprueba que el File esté dentro de los límites del Folder
            if (
                fileInfo.start.x >= targetFolderInfo.start.x &&
                fileInfo.start.y >= targetFolderInfo.start.y &&
                fileInfo.end.x <= targetFolderInfo.end.x &&
                fileInfo.end.y <= targetFolderInfo.end.y
            ) {
                document
                    .querySelector(`#${fileInfo.id}`)
                    .classList.add("correct");

                setTimeout(() => {
                    document
                        .querySelector(`#${fileInfo.id}`)
                        .classList.add("hidden");
                }, 400);

                this.guessedFiles++;
            } else {
                document
                    .querySelector(`#${fileInfo.id}`)
                    .classList.remove("correct");
            }
        },
    },
};
</script>

<template>
    <div class="bg">
        <!-- CAROUSEL -->
        <section id="carousel" v-if="guessedFiles === 20">
            <Tab />
        </section>
        <!-- PRUEBA: AGRUPANDO -->
        <section id="agrupando" v-else>
            <div>
                <Folder
                    @getCurrentFolderInfo="getCurrentFolderInfo"
                    field="Análisis"
                />
                <Folder
                    @getCurrentFolderInfo="getCurrentFolderInfo"
                    field="Microbiología"
                />
                <Folder
                    @getCurrentFolderInfo="getCurrentFolderInfo"
                    field="Medida"
                />
                <Folder
                    @getCurrentFolderInfo="getCurrentFolderInfo"
                    field="Biotecnología"
                />
            </div>

            <div>
                <File
                    v-for="(concept, index) in conceptList"
                    :conceptInfo="concept"
                    :conceptListIndex="index"
                    @getCurrentFileInfo="getCurrentFileInfo"
                />
            </div>
        </section>
    </div>
</template>

<style scoped lang="scss">
.bg {
    height: 100vh;
    width: 100vw;

    background-image: url("@/src/img/agrupando/bg.png");
    background-size: cover;

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;

    position: relative;
}

section {
    position: absolute;
    background-image: url("@/src/img/agrupando/windows_bg.jpg");
    background-size: cover;
    inset: 8.5% 19.6% 28.5% 19.4%;
}

#agrupando {
    padding: 2%;
    & > :nth-child(1) {
        height: max-content;
        display: flex;
        flex-direction: row;
        height: 55%;
        gap: 1%;
    }

    & > :nth-child(2) {
        height: 45%;

        display: grid;
        grid-template-columns: repeat(10, 1fr);
        grid-template-rows: repeat(2, 1fr);
    }
}

#carousel {
    background-color: rgba(255, 0, 0, 0.467);
}
</style>
