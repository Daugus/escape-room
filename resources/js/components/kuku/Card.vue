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
            if (card.classList === "flipped") return;

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
    font-size: 1.2em;
    margin: 1% 0 0 1%;
    perspective: 100rem;
    transition: all 0.3s ease 0s;
    width: 100%;

    &:hover {
        cursor: pointer;
    }

    .card {
        background: #222;
        height: 300px;
        transform-style: preserve-3d;
        transition: transform 0.4s ease 0s;
        width: 100%;
        animation: flip 1s 1;

        .front,
        .back {
            backface-visibility: hidden;
            box-sizing: border-box;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 1.2em;
            padding: 5%;
            position: absolute;
            text-align: center;
            width: 100%;
            height: 100%;
        }

        .front {
            background-color: rgb(30, 30, 30);
        }

        .back {
            transform: rotateY(180deg);
            background-color: rgb(255, 255, 255);

            h1 {
                position: absolute;
                top: 3%;
                left: 3%;
                opacity: 0.05;
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
