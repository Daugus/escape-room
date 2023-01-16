<script>
export default {
    props: {
        secretWord: Array,
        usedLetters: Array,
        letter: String,
    },
    data() {
        return {
            errors: 0,
            time: 0,
            tries: 0,
            newWord: true,
        };
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

                    // Crear una cuenta regresiva en base al numero de intentos
                    this.tries = this.tries + 1;
                    this.time = this.tries * 120;

                    // Cambiar estilos del panel y de las teclas
                    let panel = document.querySelector(".panel");
                    let word = document.querySelector(".panel p");
                    let keys = document.querySelectorAll("button");

                    // Se ejecuta en 5 segundos (5000 milesimas)
                    setTimeout(() => {
                        this.errors = 0;
                        progress = "9%";
                        // Cambiar estilos del panel
                        panel.classList.add("default");
                        panel.classList.remove("fail");
                        // Cambiar la palabra del panel
                        word.innerText = "quaero verbum";
                        word.classList.add("charging");
                        // Quitar luces de las teclas y desactivarlas
                        keys.forEach((key) => {
                            key.style.setProperty("--color", "#000");
                        });
                    }, 5000);

                    // Mandar orden para generar nueva palabra y reiniciar errores
                    setTimeout(() => {
                        this.$emit("getNewWord", this.newWord);
                        this.$emit("getErrors", this.errors);
                    }, this.tries * 120000);
            }
            return progress;
        },
        timer() {
            let timer = "";
            if (this.errors !== 0) {
                timer = "1s";
            } else {
                timer = this.tries * 120 + "s";
            }
            return timer;
        },
    },
    watch: {
        letter: function () {
            let exists = null;
            if (this.letter === "") return;
            exists = this.secretWord.includes(this.letter);
            if (exists === false) {
                this.errors = this.errors + 1;
            }
            this.$emit("getErrors", this.errors);
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
            border-radius: 1rem;
            width: var(--errorProgress);
            background-color: #b00;
            box-shadow: 0 0 5rem #fff inset;
            animation: liquid 3s infinite ease-in-out;
            transition: all v-bind("timer") ease-out;
        }
    }
}

@keyframes liquid {
    0% {
        box-shadow: none;
    }
    50% {
        background-color: #f00;
        box-shadow: 0 0 5rem #f00;
    }
    100% {
        box-shadow: none;
    }
}
</style>
