<script setup>
import Card from "./Card.vue";
import route from "ziggy";
</script>

<script>
export default {
    data() {
        return {
            cardList: [],
            flippedCards: [],
        };
    },
    async mounted() {
        await this.getCards();
    },
    methods: {
        async getCards() {
            const token = document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content");

            const res = await fetch(
                `${window.location.origin}/api/kuku/getCards`,
                {
                    method: "POST",
                    headers: new Headers({
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": token,
                    }),
                }
            );

            const cards = await res.json();

            for await (const card of cards) {
                this.cardList.push({ id: card.id, name: card.name });

                this.cardList.push({
                    id: card.id,
                    alt: card.name,
                    image: card.image,
                });
            }
        },
        getFlippedCard(cardId) {
            this.flippedCards.push(cardId);

            if (this.flippedCards.length === 2) {
                if (this.flippedCards[0] === this.flippedCards[1]) {
                }
                this.flippedCards = [];
            }
        },
    },
};
</script>

<template>
    <a
        class="underline text-blue-600 hover:text-blue-800 visited:text-purple-600"
        :href="route('index')"
        >Volver</a
    >

    <section>
        <div class="grid grid-cols-6 gap-5 mx-28" id="grid">
            <Card
                v-for="card in cardList"
                :cardInfo="card"
                @getFlippedCard="getFlippedCard"
            />
        </div>
    </section>
</template>

<style scoped lang="scss"></style>
