<script>
export default {
    props: {
        secretWord: Array,
        usedLetters: Array,
        letter: String,
        errors: Number,
    },
    data() {
        return {
            word: [],
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
        <p>{{ wordToString }}</p>
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
        font-size: 4rem;
        letter-spacing: 0.3rem;
        margin: 0.5rem 1rem;
        z-index: 3;
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
    animation: flicker 0.5s 3;

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
</style>
