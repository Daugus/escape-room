<script setup>
import route from "ziggy";
import File from "./File.vue";
import Folder from "./Folder.vue";
import Tab from "./Tab.vue";
import Pin from "./Pin.vue";
</script>

<script>
export default {
    data() {
        return {
            conceptList: [],
            folderInfoList: [],
            error: false,
            guessedFiles: 0,
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

                setTimeout(() => {
                    document
                        .querySelector(`#${fileInfo.id}`)
                        .classList.add("hidden");
                }, 400);

                this.guessedFiles++;

                if (this.guessedFiles === 20) {
                    setTimeout(() => {
                        localStorage.setItem("agrupando", "superado");
                    }, 3000);
                }
            } else {
                document
                    .querySelector(`#${fileInfo.id}`)
                    .classList.remove("correct");
            }
        },
    },
    computed: {
        success() {
            return localStorage.getItem("agrupando") != null;
        },
        pin() {
            return localStorage.getItem("pin") != null;
        },
    },
};
</script>

<template>
    <div v-if="error" id="ERROR"></div>

    <div class="bg">
        <!-- PIN -->
        <section id="pin" v-if="pin === true">
            <div>
                <Pin />
            </div>
        </section>

        <!-- CAROUSEL -->
        <section id="tab" v-else-if="success === true">
            <div>
                <Tab />
            </div>
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
#ERROR {
    height: 100vh;
    width: 100%;
    background-image: url("@/src/img/menu/ERROR.png");
    background-repeat: no-repeat;
    background-size: 100% 100vh;
}
.bg {
    height: 100vh;
    width: 100vw;

    background-image: url("@/src/img/agrupando/bg.png");
    background-size: contain;
    background-repeat: no-repeat;

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;

    position: relative;
}

section {
    position: absolute;
    inset: 8.5% 19.6% 28.5% 19.4%;

    &:not(#pin) {
        background-image: url("@/src/img/agrupando/windows_bg.jpg");
        background-size: contain;
        background-repeat: no-repeat;
    }
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

#pin,
#tab {
    display: flex;
    justify-content: center;
    align-items: center;
}

#tab div {
    height: 80%;
    width: 80%;

    box-shadow: 0 0 1rem rgba(0, 0, 0, 0.5);
    border-radius: 1vh;
    overflow: hidden;
}

#pin div {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 2vh;
}
</style>
