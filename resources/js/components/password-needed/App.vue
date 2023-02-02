<script setup>
import Button from "./Button.vue";
</script>

<script>
export default {
    data() {
        return {
            letras: [
                "A",
                "B",
                "C",
                "D",
                "E",
                "F",
                "G",
                "H",
                "I",
                "J",
                "K",
                "L",
                "M",
                "N",
                "Ñ",
                "O",
                "P",
                "Q",
                "R",
                "S",
                "T",
                "U",
                "V",
                "W",
                "X",
                "Y",
                "Z",
            ],
            numeros: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"],
        };
    },
};
</script>

<template>
    <Button :caracteres="letras"></Button>
    <Button :caracteres="numeros"></Button>
    <Button :caracteres="numeros"></Button>
    <Button :caracteres="numeros"></Button>
    <Button :caracteres="numeros"></Button>
</template>

<style scoped lang="scss"></style>
