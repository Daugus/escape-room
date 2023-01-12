<script setup>
import Key from "./Key.vue";
</script>

<script>
export default {
    data() {
        return {
            letter: "",
        };
    },
};
</script>

<template>
    <h1>{{ letter }}</h1>
    <div class="plate">
        <div class="row">
            <Key keyLetter="Q" @clickedLetter="letter = $event" />
            <Key keyLetter="W" @clickedLetter="letter = $event" />
            <Key keyLetter="E" @clickedLetter="letter = $event" />
            <Key keyLetter="R" @clickedLetter="letter = $event" />
            <Key keyLetter="T" @clickedLetter="letter = $event" />
            <Key keyLetter="Y" @clickedLetter="letter = $event" />
            <Key keyLetter="U" @clickedLetter="letter = $event" />
            <Key keyLetter="I" @clickedLetter="letter = $event" />
            <Key keyLetter="O" @clickedLetter="letter = $event" />
            <Key keyLetter="P" @clickedLetter="letter = $event" />
        </div>
        <div class="row">
            <Key keyLetter="A" @clickedLetter="letter = $event" />
            <Key keyLetter="S" @clickedLetter="letter = $event" />
            <Key keyLetter="D" @clickedLetter="letter = $event" />
            <Key keyLetter="F" @clickedLetter="letter = $event" />
            <Key keyLetter="G" @clickedLetter="letter = $event" />
            <Key keyLetter="H" @clickedLetter="letter = $event" />
            <Key keyLetter="J" @clickedLetter="letter = $event" />
            <Key keyLetter="K" @clickedLetter="letter = $event" />
            <Key keyLetter="L" @clickedLetter="letter = $event" />
        </div>
        <div class="row">
            <Key keyLetter="Z" @clickedLetter="letter = $event" />
            <Key keyLetter="X" @clickedLetter="letter = $event" />
            <Key keyLetter="C" @clickedLetter="letter = $event" />
            <Key keyLetter="V" @clickedLetter="letter = $event" />
            <Key keyLetter="B" @clickedLetter="letter = $event" />
            <Key keyLetter="N" @clickedLetter="letter = $event" />
            <Key keyLetter="M" @clickedLetter="letter = $event" />
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
    padding: 1rem;
    z-index: 1;
    background-color: gray;
    padding: 1rem;

    .row {
        display: flex;
    }
}
</style>
