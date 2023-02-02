<script setup>
import route from "ziggy";
import File from "./File.vue";
import Folder from "./Folder.vue";
</script>

<script>
export default {
    data() {
        return {
            conceptList: [],
            folderInfoList: [],
            error: false,
        };
    },
    async mounted() {
        if (screen.width < 1024) {
            localStorage.setItem("agrupando", "superado");
            this.error = true;
            setTimeout(
                () => location.replace(route("laboratorio.index")),
                5000
            );
        } else {
            await this.getConcepts();
        }
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
    <div v-if="error" id="ERROR"></div>
    <section class="grid grid-cols-2 gap-3">
        <div class="grid grid-cols-2 gap-3">
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

        <div class="border-2 border-black p-2 relative">
            <p>Conceptos</p>
            <File
                v-for="(concept, index) in conceptList"
                :conceptInfo="concept"
                :conceptListIndex="index"
                @getCurrentFileInfo="getCurrentFileInfo"
            />
        </div>
    </section>
</template>

<style scoped lang="scss">
#ERROR {
    height: 100vh;
    width: 100%;
    background-image: url("@/src/img/menu/ERROR.png");
    background-repeat: no-repeat;
    background-size: 100% 100vh;
}
</style>
