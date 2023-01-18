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
            this.conceptList = await res.json();

            for (let i = this.conceptList.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));

                [this.conceptList[i], this.conceptList[j]] = [
                    this.conceptList[j],
                    this.conceptList[i],
                ];
            }
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
            // Opción 1: cambiar estilo
            // if (
            //     fileInfo.start.x >= targetFolderInfo.start.x &&
            //     fileInfo.start.y >= targetFolderInfo.start.y &&
            //     fileInfo.end.x <= targetFolderInfo.end.x &&
            //     fileInfo.end.y <= targetFolderInfo.end.y
            // ) {
            //     document
            //         .querySelector(`#${fileInfo.id}`)
            //         .classList.add("correct");
            // } else {
            //     document
            //         .querySelector(`#${fileInfo.id}`)
            //         .classList.remove("correct");
            // }

            // Opción 2: eliminar File
            if (
                fileInfo.start.x >= targetFolderInfo.start.x &&
                fileInfo.start.y >= targetFolderInfo.start.y &&
                fileInfo.end.x <= targetFolderInfo.end.x &&
                fileInfo.end.y <= targetFolderInfo.end.y
            ) {
                this.conceptList.splice(fileInfo.listIndex, 1);
            }
        },
    },
};
</script>

<template>
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

<style scoped lang="scss"></style>
