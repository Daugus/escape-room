<script setup>
import Key from "./Key.vue";
</script>

<script>
export default {
    props: {
        secretWord: Array,
        errors: Number,
        guessed: Boolean,
    },
    data() {
        return {
            usedLetters: [],
            letter: "",
        };
    },
    mounted() {
        document.addEventListener("keypress", this.pressedKey);
    },
    methods: {
        getLetterKey(char) {
            if (this.errors === 6) {
                this.usedLetters = [];
                let keys = document.querySelectorAll("button:not(#ESC)");
                keys.forEach((key) => {
                    this.usedLetters.push(key.id);
                });
            } else if (this.errors === 0) {
                this.usedLetters = [];
            }

            if (this.usedLetters.includes(char) === true) return;

            this.letter = char;
            this.usedLetters.push(char);
            this.$emit("getLetterKey", char);
        },
        pressedKey(event) {
            let key = `${event.key}`.toUpperCase();
            this.getLetterKey(key);
        },
    },
    watch: {
        guessed: function () {
            if (this.wordGuessed === null) return;
            this.usedLetters = [];
            let keys = document.querySelectorAll("button:not(#ESC)");
            keys.forEach((key) => {
                this.usedLetters.push(key.id);
            });
        },
    },
};
</script>

<template>
    <div class="plate">
        <div class="row">
            <Key
                keyLetter="Q"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('Q')"
            />
            <Key
                keyLetter="W"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('W')"
            />
            <Key
                keyLetter="E"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('E')"
            />
            <Key
                keyLetter="R"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('R')"
            />
            <Key
                keyLetter="T"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('T')"
            />
            <Key
                keyLetter="Y"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('Y')"
            />
            <Key
                keyLetter="U"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('U')"
            />
            <Key
                keyLetter="I"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('I')"
            />
            <Key
                keyLetter="O"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('O')"
            />
            <Key
                keyLetter="P"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('P')"
            />
        </div>
        <div class="row">
            <Key
                keyLetter="A"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('A')"
            />
            <Key
                keyLetter="S"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('S')"
            />
            <Key
                keyLetter="D"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('D')"
            />
            <Key
                keyLetter="F"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('F')"
            />
            <Key
                keyLetter="G"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('G')"
            />
            <Key
                keyLetter="H"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('H')"
            />
            <Key
                keyLetter="J"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('J')"
            />
            <Key
                keyLetter="K"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('K')"
            />
            <Key
                keyLetter="L"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('L')"
            />
        </div>
        <div class="row">
            <Key
                keyLetter="Z"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('Z')"
            />
            <Key
                keyLetter="X"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('X')"
            />
            <Key
                keyLetter="C"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('C')"
            />
            <Key
                keyLetter="V"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('V')"
            />
            <Key
                keyLetter="B"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('B')"
            />
            <Key
                keyLetter="N"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('N')"
            />
            <Key
                keyLetter="M"
                :letter="letter"
                :secretWord="secretWord"
                @click="getLetterKey('M')"
            />
            <Key keyLetter="ESC" />
        </div>
    </div>
</template>

<style scoped lang="scss">
.plate {
    background-color: #5c5c5c;
    box-shadow: 0 0 1rem rgba(0, 0, 0, 0.75) inset;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    width: max-content;
    padding: 0.5rem;
    overflow: hidden;
    z-index: 1;
    background-color: gray;
    // padding: 0.5rem;

    .row {
        display: flex;
    }
}
</style>
