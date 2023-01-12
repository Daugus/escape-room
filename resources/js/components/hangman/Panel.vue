<script>
export default {
    props: {
        secretWord: Array,
        letter: String,
    },
    data() {
        return {
            word: [],
            positions: [],
        };
    },
    methods: {},
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
            this.positions = [];
            for (let i = 0; i < this.secretWord.length; i++) {
                if (this.letter === this.secretWord[i]) {
                    this.positions.push(i);
                }
            }
            for (let i = 0; i < this.positions.length; i++) {
                this.word[this.positions[i]] = this.letter;
            }
        },
    },
};
</script>

<template>
    <div class="panel">
        <p class="word">{{ wordToString }}</p>
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
    min-width: 95%;
    max-width: max-content;
    box-shadow: 0 0 1rem #0f0 inset;
    background-color: darkgreen;
    position: relative;
    overflow: hidden;
    z-index: 1;
}

img {
    width: 100%;
    opacity: 0.1;
    position: absolute;
    pointer-events: none;
    z-index: 2;
}

.word {
    font-family: digital-7;
    font-size: 5rem;
    letter-spacing: 0.5rem;
    text-shadow: 0 0 1rem #0f0;
    color: #0f0;
    margin: 0.5rem 1rem;
    z-index: 3;
}
</style>
