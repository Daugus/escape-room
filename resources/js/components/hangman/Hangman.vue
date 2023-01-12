<script setup>
import Keyboard from "./Keyboard.vue";
import Panel from "./Panel.vue";
import Capsule from "./Capsule.vue";
</script>

<script>
export default {
    props: {
        pressLetter: String,
    },
    data() {
        return {
            wordArray: [],
            letter: "",
        };
    },
    async mounted() {
        await this.getWord();
    },
    methods: {
        // Coger una palabra aleatoria desde un JSON
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
            let word = data[0].microorganism;
            this.wordArray = word.toUpperCase().split("");
        },
    },
};
</script>

<template>
    <section>
        <div class="capsule">
            <Capsule />
        </div>
        <div class="word-panel">
            <Panel :secretWord="wordArray" :letter="letter" />
            <Keyboard />
            <img src="../../../../public/src/img/metal.jpg" />
        </div>
    </section>
</template>

<style scoped lang="scss">
section {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.capsule {
    display: flex;
    justify-content: center;
}

.word-panel {
    width: 70%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding: 2rem;
    gap: 2rem;
    background-color: #ccc;
    overflow: hidden;
    position: relative;
    border: 0.7rem outset #9f9f9f;

    img {
        position: absolute;
        opacity: 0.7;
        width: 100%;
        height: 100%;
    }
}
</style>
