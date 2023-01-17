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
    mounted() {
        const articleRect = document
            .querySelector(`#${this.bdField}`)
            .getBoundingClientRect();

        this.folderInfo = {
            field: this.bdField,
            start: {
                x: articleRect.x,
                y: articleRect.y,
            },
            end: {
                x: articleRect.x + articleRect.width,
                y: articleRect.y + articleRect.height,
            },
        };

        this.$emit("getCurrentFolderInfo", this.folderInfo);
    },
    computed: {
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
        <pre>{{ folderInfo }}</pre>
    </article>
</template>

<style scoped lang="scss"></style>
