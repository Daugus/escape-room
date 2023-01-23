<script>
export default {
    props: {
        secretWord: Array,
        letter: String,
        errors: Number,
        quit: Boolean,
    },
    data() {
        return {
            word: [],
            rigthLetters: [],
            wordGuessed: false,
        };
    },
    computed: {
        // Cambiar la Array a String
        wordToString() {
            return this.word.join("");
        },
    },
    watch: {
        // Generar una array con "_" por cada letra
        secretWord: function () {
            this.word = this.secretWord.map((letter) =>
                letter.replace(/[A-Za-z]/g, "_").split("")
            );
        },
        // Cambiar _ por letra en "word"
        letter: function () {
            if (this.letter === "") return;
            if (this.secretWord.includes(this.letter) === false) return;
            let positions = [];
            // Guardar posiciones de la letra
            for (let i = 0; i < this.secretWord.length; i++) {
                if (this.letter === this.secretWord[i]) {
                    positions.push(i);
                }
            }
            // Cambiar letra en posiciones
            for (let i = 0; i < positions.length; i++) {
                this.word[positions[i]] = this.letter;
            }

            this.rigthLetters.push(this.letter);

            // Comparar la palabra secreta y la del panel
            if (this.word.join("") === this.secretWord.join("")) {
                this.wordGuessed = true;
                let panel = document.querySelector(".panel");
                let keys = document.querySelectorAll("button:not(#ESC)");

                // Cambiar estilos del panel
                panel.classList.add("success");
                panel.classList.remove("default");

                // Quitar luces de las teclas incorrectas
                keys.forEach((key) => {
                    if (this.rigthLetters.includes(key.id) === false) {
                        key.style.setProperty("--color", "#000");
                    }
                });
                this.$emit("wordGuessed", this.wordGuessed);
            }
        },
        // Comprobar el marcador de errores
        errors: function () {
            let element = document.querySelector(".panel");
            if (this.errors === 6) {
                element.classList.remove("default");
                element.classList.add("fail");
            }
        },
    },
};
</script>

<template>
    <div class="panel default">
        <p draggable="false">{{ wordToString }}</p>
        <img src="@/src/img/ruido.gif" />
    </div>
</template>

<style scoped lang="scss">
@font-face {
    font-family: digital-7;
    src: url("@/src/fonts/digital-7.ttf");
}

.panel {
    display: flex;
    justify-content: center;
    text-align: center;
    min-width: 100%;
    max-width: max-content;
    position: relative;
    overflow: hidden;
    z-index: 1;

    img {
        width: 100%;
        opacity: 0.1;
        position: absolute;
        pointer-events: none;
        z-index: 2;
    }

    p {
        font-family: digital-7;
        font-size: 4vw;
        letter-spacing: 0.3rem;
        margin: 0.5rem 1rem;
        z-index: 3;

        &::selection {
            display: none;
        }

        &:hover {
            cursor: default;
        }
    }
}

.default {
    box-shadow: 0 0 1rem #aaa inset;
    background-color: #222;

    p {
        text-shadow: 0 0 1rem #fff;
        color: #fff;
    }
}

.fail {
    --bg: darkred;
    --accent: #f00;
    animation: flicker 0.5s infinite linear;

    box-shadow: 0 0 2rem var(--accent);
    background-color: var(--bg);
    text-shadow: 0 0 1rem var(--accent);
    color: var(--accent);
}

.success {
    --bg: darkgreen;
    --accent: #0f0;
    animation: flicker 0.5s 6 linear;

    box-shadow: 0 0 2rem var(--accent);
    background-color: var(--bg);
    text-shadow: 0 0 1rem var(--accent);
    color: var(--accent);
}

@keyframes flicker {
    0% {
        box-shadow: 0 0 2rem #aaa inset;
        background-color: #222;
        text-shadow: 0 0 1rem #fff;
        color: #fff;
    }

    50% {
        box-shadow: 0 0 1rem var(--accent);
        background-color: var(--bg);
        text-shadow: 0 0 1rem var(--accent);
        color: var(--accent);
    }

    100% {
        box-shadow: 0 0 2rem #aaa inset;
        background-color: #222;
        text-shadow: 0 0 1rem #fff;
        color: #fff;
    }
}

.charging::after {
    content: "";
    animation: charging 3s infinite;
}

@keyframes charging {
    0% {
        content: "";
    }
    25% {
        content: ".";
    }
    50% {
        content: "..";
    }
    75% {
        content: "...";
    }
    100% {
        content: "";
    }
}

/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
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
/* Extra large devices (large laptops and desktops, 1200px and down) */
@media only screen and (max-width: 1500px) {
    .panel {
        min-width: 100%;
        max-width: max-content;

        p {
            font-size: 4vw;
            letter-spacing: 0.3rem;
            margin: 0;
        }
    }
}
</style>
