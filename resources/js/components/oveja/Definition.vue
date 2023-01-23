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
            .querySelector(`#${this.getId}`)
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
    computed: {
        getId() {
            return `definition-${this.definitionInfo.id}`;
        },
    },
};
</script>

<template>
    <div class="fondo" :id="getId">
        <p class="altura">
            {{ definitionInfo.definition }} , {{ definitionInfo.id }}
        </p>
    </div>
</template>

<style scoped lang="scss">
.fondo {
    min-height: 300px;
    background-image: url("@/src/img/hoja.png");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    padding: 1.5rem;
}
.altura {
    background-color: aqua;
    min-height: 100%;
}
</style>
