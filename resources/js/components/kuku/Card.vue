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
        flip() {
            let card = document.querySelector(`#${this.getId} .card`);
            if (card.classList.contains("flipped")) return;

            card.classList.add("flipped");
            this.$emit("getFlippedCard", card.parentElement);
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
    <div class="cardBox" @click="flip" :data-id="cardInfo.id" :id="getId">
        <div class="card">
            <div class="front">
                <img src="@/src/img/kuku/ParasolCorporation.png" />
            </div>
            <div class="back">
                <h1>{{ cardInfo.id }}</h1>

                <!-- muestra un img o un p dependiendo del tipo de carta -->
                <img
                    v-if="cardInfo.image"
                    :src="imageSource"
                    :alt="cardInfo.alt"
                />
                <p v-else class="text-center">{{ cardInfo.name }}</p>
            </div>
        </div>
    </div>
</template>

<style scoped lang="scss">
.cardBox {
    margin: 1% 0 0 1%;
    perspective: 100rem;
    transition: all 0.3s ease 0s;

    height: 22vh;

    &:hover {
        cursor: pointer;
    }

    .card {
        background: #222;
        height: 100%;
        width: 100%;
        transform-style: preserve-3d;
        transition: transform 0.4s ease 0s;
        animation: flip 1s 1;
        position: relative;

        .front,
        .back {
            backface-visibility: hidden;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-size: 1.2em;
            padding: 5%;
            width: 100%;
            height: 100%;
        }

        .front {
            background-color: rgb(30, 30, 30);
            position: absolute;

            img {
                width: 80%;
            }
        }

        .back {
            transform: rotateY(180deg);
            background-color: rgb(255, 255, 255);
            word-wrap: break-word;

            h1 {
                position: absolute;
                top: 3%;
                left: 3%;
                opacity: 0.05;
                z-index: 11;
                font-size: 1.5vh;
            }

            p {
                text-transform: uppercase;
                word-break: break-all;
            }

            img {
                filter: grayscale(1);
            }
        }
    }
}

@keyframes flip {
    from {
        transform: rotateY(180deg);
    }
    to {
        transform: rotateY(0deg);
    }
}

// .cardBox:hover .card,
.flipped {
    transform: rotateY(180deg);
}
</style>
