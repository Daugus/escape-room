<script>
export default {
    data() {
        return {
            id: Number,
            flipped: false,
        };
    },
    props: {
        cardInfo: Object,
    },
    methods: {
        // muestra la carta y la envía a App.vue si no está revelada
        flip(e) {
            if (document.querySelector(`#${this.getId}.flipped`))
                return console.log("econntardo");

            e.target.classList.add("flipped");
            console.log(e.targetc);
            this.$emit("getFlippedCard", e.target);
        },
    },
    computed: {
        // crea un URL para usar como href en el img
        imageSource() {
            return this.cardInfo.image
                ? new URL(
                      `/public/src/img/kuku/formulas/${this.cardInfo.image}`,
                      import.meta.url
                  )
                : null;
        },
        // genera una id para la carta usando su tipo e id en la bd
        getId() {
            return `${this.cardInfo.image ? "img" : "name"}-${
                this.cardInfo.id
            }`;
        },
    },
};
</script>

<template>
    <article
        class="border border-black flex flex-col justify-center items-center aspect-square"
        @click="flip"
        :data-id="cardInfo.id"
        :id="getId"
    >
        <p>{{ cardInfo.id }}</p>

        <!-- muestra un img o un p dependiendo del tipo de carta -->
        <img v-if="cardInfo.image" :src="imageSource" :alt="cardInfo.alt" />
        <p v-else class="text-center">{{ cardInfo.name }}</p>
    </article>
</template>

<style scoped lang="scss">
article {
    background-color: black;
    transform: rotate3d(0, 1, 0, 180deg);

    * {
        display: none;
    }
}

.flipped {
    background-color: white;
    transform: rotate3d(0, 0, 0, 0deg);

    * {
        display: initial;
    }
}
</style>
