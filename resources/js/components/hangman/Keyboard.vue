<script setup>
import Key from "./Key.vue";
</script>

<script>
export default {
    props: {
        secretWord: Array,
    },
    data() {
        return {
            letter: "",
        };
    },
    methods: {
        getLetterKey(char) {
            this.letter = char;
            this.$emit("getLetterKey", this.letter);
        },
    },
};
</script>

<template>
    <div class="plate">
        <div class="row">
            <Key
                keyLetter="Q"
                :secretWord="secretWord"
                @click="getLetterKey('Q')"
            />
            <Key
                keyLetter="W"
                :secretWord="secretWord"
                @click="getLetterKey('W')"
            />
            <Key
                keyLetter="E"
                :secretWord="secretWord"
                @click="getLetterKey('E')"
            />
            <Key
                keyLetter="R"
                :secretWord="secretWord"
                @click="getLetterKey('R')"
            />
            <Key
                keyLetter="T"
                :secretWord="secretWord"
                @click="getLetterKey('T')"
            />
            <Key
                keyLetter="Y"
                :secretWord="secretWord"
                @click="getLetterKey('Y')"
            />
            <Key
                keyLetter="U"
                :secretWord="secretWord"
                @click="getLetterKey('U')"
            />
            <Key
                keyLetter="I"
                :secretWord="secretWord"
                @click="getLetterKey('I')"
            />
            <Key
                keyLetter="O"
                :secretWord="secretWord"
                @click="getLetterKey('O')"
            />
            <Key
                keyLetter="P"
                :secretWord="secretWord"
                @click="getLetterKey('P')"
            />
        </div>
        <div class="row">
            <Key
                keyLetter="A"
                :secretWord="secretWord"
                @click="getLetterKey('A')"
            />
            <Key
                keyLetter="S"
                :secretWord="secretWord"
                @click="getLetterKey('S')"
            />
            <Key
                keyLetter="D"
                :secretWord="secretWord"
                @click="getLetterKey('D')"
            />
            <Key
                keyLetter="F"
                :secretWord="secretWord"
                @click="getLetterKey('F')"
            />
            <Key
                keyLetter="G"
                :secretWord="secretWord"
                @click="getLetterKey('G')"
            />
            <Key
                keyLetter="H"
                :secretWord="secretWord"
                @click="getLetterKey('H')"
            />
            <Key
                keyLetter="J"
                :secretWord="secretWord"
                @click="getLetterKey('J')"
            />
            <Key
                keyLetter="K"
                :secretWord="secretWord"
                @click="getLetterKey('K')"
            />
            <Key
                keyLetter="L"
                :secretWord="secretWord"
                @click="getLetterKey('L')"
            />
        </div>
        <div class="row">
            <Key
                keyLetter="Z"
                :secretWord="secretWord"
                @click="getLetterKey('Z')"
            />
            <Key
                keyLetter="X"
                :secretWord="secretWord"
                @click="getLetterKey('X')"
            />
            <Key
                keyLetter="C"
                :secretWord="secretWord"
                @click="getLetterKey('C')"
            />
            <Key
                keyLetter="V"
                :secretWord="secretWord"
                @click="getLetterKey('V')"
            />
            <Key
                keyLetter="B"
                :secretWord="secretWord"
                @click="getLetterKey('B')"
            />
            <Key
                keyLetter="N"
                :secretWord="secretWord"
                @click="getLetterKey('N')"
            />
            <Key
                keyLetter="M"
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
    width: 70%;
    overflow: hidden;
    z-index: 1;
    background-color: gray;
    padding: 1rem;

    .row {
        display: flex;
    }
}
</style>
