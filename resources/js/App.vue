<script setup>
import Keyboard from "./components/hangman/Keyboard.vue";
import Panel from "./components/hangman/Panel.vue";
</script>

<template>
    <div class="capsule"></div>
    <div class="word-panel">
        <Panel word="STREPTOCOCCUS THERMOPHILUS" />
        <Keyboard />
    </div>
</template>

<style scoped lang="scss">
.word-panel {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 2rem;
    gap: 2rem;
    background-color: #ccc;
}
</style>
