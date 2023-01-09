<script setup>
import Key from "./Key.vue";
</script>

<template>
    <div class="plate">
        <div class="row">
            <Key letter="Q" />
            <Key letter="W" />
            <Key letter="E" />
            <Key letter="R" />
            <Key letter="T" />
            <Key letter="Y" />
            <Key letter="U" />
            <Key letter="I" />
            <Key letter="O" />
            <Key letter="P" />
        </div>
        <div class="row">
            <Key letter="A" />
            <Key letter="S" />
            <Key letter="D" />
            <Key letter="F" />
            <Key letter="G" />
            <Key letter="H" />
            <Key letter="J" />
            <Key letter="K" />
            <Key letter="L" />
        </div>
        <div class="row">
            <Key letter="Z" />
            <Key letter="X" />
            <Key letter="C" />
            <Key letter="V" />
            <Key letter="B" />
            <Key letter="N" />
            <Key letter="M" />
            <Key letter="ESC" />
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
    max-width: max-content;
    overflow: hidden;
    padding: 1rem;

    .row {
        display: flex;
    }
}
</style>
