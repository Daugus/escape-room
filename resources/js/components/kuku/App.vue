<script setup>
import Card from "./Card.vue";
import route from "ziggy";

import { encryptStorage } from "#/utils/encrypt.js";
</script>

<script>
export default {
    data() {
        return {
            cardList: [],
            flippedCards: [],
            guessedCards: 0,
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

            // llena el array con dos cartas (una con la imagen y
            // otra con el texto) por cada resultado de la bd
            for await (const card of cards) {
                this.cardList.push({ id: card.id, name: card.name });

                this.cardList.push({
                    id: card.id,
                    alt: card.name,
                    image: card.image,
                });
            }

            // mezcla las cartas
            for (let i = this.cardList.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));

                [this.cardList[i], this.cardList[j]] = [
                    this.cardList[j],
                    this.cardList[i],
                ];
            }
        },
        // recibe el elemento html de la carta
        getFlippedCard(card) {
            const firstCard = this.flippedCards[0];
            this.flippedCards.push(card);

            // si la carta nueva es la misma que la primera se quita del array
            if (firstCard && firstCard.id === card.id)
                this.flippedCards.shift();

            if (this.flippedCards.length === 2) {
                const secondCard = this.flippedCards[1];

                // si la id de las cartas (el id de la fila en la bd) no coincide, se ocultan ambas
                if (firstCard.dataset.id !== secondCard.dataset.id) {
                    setTimeout(() => {
                        firstCard.lastChild.classList.remove("flipped");
                        secondCard.lastChild.classList.remove("flipped");
                    }, 500);
                } else {
                    this.guessedCards++;
                    this.guessedCards++;

                    if (this.guessedCards === 18) {
                        setTimeout(() => {
                            encryptStorage.setItem("kuku", "superado");
                            location.replace(route("laboratorio.index"));
                        }, 2500);
                    }
                }

                this.flippedCards = [];
            }
        },
    },
};
</script>

<template>
    <div class="bg">
        <section>
            <div class="grid grid-cols-6 gap-5 mx-28" id="grid">
                <Card
                    v-for="card in cardList"
                    :cardInfo="card"
                    @getFlippedCard="getFlippedCard"
                />
            </div>
        </section>
    </div>
</template>

<style scoped lang="scss">
.bg {
    height: 100vh;
    background-image: url("@/src/img/kuku/table.png");
    background-size: contain;

    section {
        padding-top: 1.5%;
        height: 50%;
    }
}
</style>
