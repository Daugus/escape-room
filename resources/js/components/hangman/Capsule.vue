<script>
export default {
    props: {
        secretWord: Array,
        letter: String,
    },
    data() {
        return {
            errors: 0,
            exists: null,
        };
    },
    methods: {
        endGame() {
            // Crear final del juego
        },
    },
    computed: {
        errorProgress() {
            let progress = "";
            switch (this.errors) {
                case 0:
                    progress = "9%";
                    break;
                case 1:
                    progress = "25%";
                    break;
                case 2:
                    progress = "40%";
                    break;
                case 3:
                    progress = "60%";
                    break;
                case 4:
                    progress = "75%";
                    break;
                case 5:
                    progress = "91%";
                    break;
                case 6:
                    progress = "100%";
                    setTimeout(endGame(), 1.5 * 1000);
                    break;
            }
            return progress;
        },
    },
    watch: {
        letter: function () {
            if (this.letter === "") return;
            this.exists = null;
            this.exists = this.secretWord.includes(this.letter);
            if (this.exists === false) {
                this.errors = this.errors + 1;
            }
        },
    },
};
</script>

<template>
    <div class="capsule">
        <img src="@/src/img/Capsule.png" id="container" />
        <div class="bar">
            <div class="progress"></div>
        </div>
    </div>
</template>

<style scoped lang="scss">
.capsule {
    position: relative;
    width: 65%;
    top: 2rem;

    #container {
        z-index: 3;
        filter: drop-shadow();
    }

    .bar {
        z-index: 2;
        position: absolute;
        background-color: #5f5f5f;
        width: 27.5%;
        height: 15%;
        top: 25%;

        .progress {
            --errorProgress: v-bind("errorProgress");
            height: 100%;
            width: var(--errorProgress);
            background-color: #b00;
            box-shadow: 0 0 5rem #fff inset;
            animation: liquid 3s infinite ease-in-out;
            transition: all 1.5s ease-out;
        }
    }
}

@keyframes liquid {
    0% {
        box-shadow: 0 0 5rem transparent;
    }
    50% {
        background-color: #f00;
        box-shadow: 0 0 5rem #f00;
    }
    100% {
        box-shadow: 0 0 5rem transparent;
    }
}
</style>
