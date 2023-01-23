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
    <article
        class="border-2 border-black border-3 aspect-square p-2"
        :id="bdField"
    >
        <p>{{ field }}</p>
    </article>
</template>

<style scoped lang="scss"></style>
