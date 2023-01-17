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
            currentFileInfo: {},
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

            this.conceptList = await res.json();

            // mezcla los conceptos
            for (let i = this.conceptList.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));

                [this.conceptList[i], this.conceptList[j]] = [
                    this.conceptList[j],
                    this.conceptList[i],
                ];
            }
        },
        getCurrentFolderInfo(folderInfo) {
            this.folderInfoList.push(folderInfo);
        },
        getCurrentFileInfo(fileInfo) {
            this.currentFileInfo = fileInfo;
        },
    },
};
</script>

<template>
    <a
        class="underline text-blue-600 hover:text-blue-800 visited:text-purple-600"
        :href="route('index')"
        >Volver</a
    >

    <section class="grid grid-cols-3 gap-3">
        <div class="grid grid-cols-2 gap-3">
            <Folder @currentFolderInfo="currentFolderInfo" field="Análisis" />
            <Folder
                @currentFolderInfo="currentFolderInfo"
                field="Microbiología"
            />
            <Folder @currentFolderInfo="currentFolderInfo" field="Medida" />
            <Folder
                @currentFolderInfo="currentFolderInfo"
                field="Biotecnología"
            />
        </div>

        <div class="border-2 border-black col-span-2 p-2 relative">
            <p>Conceptos</p>
            <File
                v-for="concept in conceptList"
                :conceptInfo="concept"
                @getCurrentFileInfo="getCurrentFileInfo"
            />
        </div>
    </section>
</template>

<style scoped lang="scss"></style>
