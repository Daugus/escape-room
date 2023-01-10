<script setup>
import Keyboard from "./components/hangman/Keyboard.vue";
import Panel from "./components/hangman/Panel.vue";
</script>

<script>
export default {
    data() {
        return {
            word: "",
        };
    },
    async mounted() {
        await this.getWord();
    },
    methods: {
        async getWord() {
            const token = document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content");
            const res = await fetch(
                window.location.origin + "/api/hangman/getWord",
                {
                    method: "POST",
                    headers: new Headers({
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": token,
                    }),
                }
            );
            const data = await res.json();
            console.log(data);
            this.word = data.microorganism;
        },
    },
};
</script>

<template>
    <div class="capsule"></div>
    <div class="word-panel">
        <Panel :word="word" />
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
