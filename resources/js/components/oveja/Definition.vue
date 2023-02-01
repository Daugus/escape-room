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
        setTimeout(() => {
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
        }, 100);
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
    <div class="zone" :id="getId">
        <div class="container">
            <p>{{ definitionInfo.definition }}</p>
            <img src="@/src/img/oveja/hoja.png" />
        </div>
    </div>
</template>

<style scoped lang="scss">
.zone {
    width: 100%;
}

.container {
    width: 100%;
    height: 100%;

    position: relative;
    display: inline-block;

    p {
        position: absolute;
        width: 100%;
        height: 100%;
        padding: 17% 15%;

        transform: rotate(1deg);
        font-size: 1.75vh;
    }

    img {
        width: 100%;
    }
}
</style>
