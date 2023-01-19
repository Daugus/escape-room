<script>
export default {
    data() {
        return {
            definitionRectInfo: {},
        };
    },
    props: {
        definitionInfo: Object,
    },
    async mounted() {
        const definitionRect = document
            .querySelector(`#${definitionInfo.id}`)
            .getBoundingClientRect();

        const limitOfSett = 15;

        this.definitionRectInfo = {
            id: this.definitionInfo.id,
            start: {
                x: definitionRect.x - limitOfSett,
                y: definitionRect.y - limitOfSett,
            },
            end: {
                x: definitionRect.x + definitionRect.width + limitOfSett,
                y: definitionRect.y + definitionRect.height + limitOfSett,
            },
        };

        this.$emit("getCurrentDefinitionInfo", this.definitionRectInfo);
    },
    methods: {},
    computed: {},
};
</script>

<template>
    <div class="self-end" :id="definitionInfo.id">
        <p class="border-2 border-black p-3">{{ definitionInfo.definition }}</p>
    </div>
</template>

<style scoped lang="scss"></style>
