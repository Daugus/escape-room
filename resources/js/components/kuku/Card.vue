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
        class="border border-black flex flex-col justify-center items-center"
    >
        <p>{{ cardInfo.id }}</p>
        <img v-if="cardInfo.image" :src="imageSource" :alt="cardInfo.name" />
        <p v-else class="text-center">{{ cardInfo.name }}</p>
    </article>
</template>

<style scoped lang="scss"></style>
