<script>
export default {
    data() {
        return {
            folderInfo: {},
        };
    },
    props: {
        field: String,
    },
    // envía sus coordenadas y campo nada más ser montada
    mounted() {
        const articleRect = document
            .querySelector(`#${this.bdField}`)
            .getBoundingClientRect();

        const folderLimitOffset = 15;

        this.folderInfo = {
            field: this.bdField,
            start: {
                x: articleRect.x - folderLimitOffset,
                y: articleRect.y - folderLimitOffset,
            },
            end: {
                x: articleRect.x + articleRect.width + folderLimitOffset,
                y: articleRect.y + articleRect.height + folderLimitOffset,
            },
        };

        this.$emit("getCurrentFolderInfo", this.folderInfo);
    },
    computed: {
        // el campo en minúsculas para poder ser comparado con el folder
        bdField() {
            return this.field.toLowerCase();
        },
    },
};
</script>

<template>
    <article class="border-black border-3 aspect-square p-2" :id="bdField">
        <img src="@/src/img/agrupando/folder.png" />
        <p draggable="false">{{ field }}</p>
    </article>
</template>

<style scoped lang="scss">
article {
    width: 12%;
    height: max-content;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 1vh;

    img {
        width: 100%;
        filter: drop-shadow(0 0 0.5rem rgba(0, 0, 0, 0.25));
        pointer-events: none;
    }

    p {
        cursor: default;
        color: white;
        font-size: 1.5vh;
        text-shadow: 0 0 0.5rem black;

        &::selection {
            display: none;
        }
    }
}
</style>
