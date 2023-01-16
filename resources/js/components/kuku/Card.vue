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
        flip(e) {
            e.target.classList.add("flipped");
            this.$emit("getFlippedCard", e.target.dataset.id);
        },
    },
    computed: {
        imageSource() {
            return this.cardInfo.image
                ? new URL(
                      `/public/src/img/kuku/formulas/${this.cardInfo.image}`,
                      import.meta.url
                  )
                : null;
        },
    },
};
</script>

<template>
    <article
        class="border border-black flex flex-col justify-center items-center aspect-square"
        @click="flip"
        :data-id="cardInfo.id"
    >
        <p>{{ cardInfo.id }}</p>
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
