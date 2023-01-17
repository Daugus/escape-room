<script>
export default {
    props: {
        secretWord: Array,
        usedLetters: Array,
        letter: String,
        guessed: Boolean,
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
                    let keys = document.querySelectorAll("button:not(#ESC)");

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
        guessed: function () {
            if (this.wordGuessed === null) return;

            // Quitar barra de progreso
            let progressBar = document.querySelector(".progress");
            progressBar.style.setProperty("--errorProgress", "0%");

            // Se ejecuta en 5 segundos (5000 milesimas)
            setTimeout(() => {
                progressBar.style.setProperty("--bg", "#0b0");
                progressBar.style.setProperty("--accent", "#0f0");
                progressBar.style.setProperty("--errorProgress", "100%");
            }, 5000);
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
    width: 70%;

    #container {
        z-index: 3;
    }

    .bar {
        z-index: 2;
        position: absolute;
        background-color: #5f5f5f;
        width: 25%;
        height: 15%;
        top: 20%;

        .progress {
            --errorProgress: v-bind("errorProgress");
            --bg: #b00;
            --accent: #f00;
            height: 100%;
            width: var(--errorProgress);
            background-color: var(--bg);
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
        background-color: var(--accent);
        box-shadow: 0 0 5rem var(--accent);
    }
    100% {
        box-shadow: none;
    }
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (max-width: 600px) {
}
/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (max-width: 768px) {
}
/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (max-width: 992px) {
}
/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (max-width: 1200px) {
    .capsule {
        width: 55%;
    }
}
</style>
