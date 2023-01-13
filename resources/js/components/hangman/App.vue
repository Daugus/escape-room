<script setup>
import Keyboard from "./Keyboard.vue";
import Panel from "./Panel.vue";
import Capsule from "./Capsule.vue";
import route from "ziggy";
</script>

<script>
export default {
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
                `${window.location.origin}/api/hangman/getWord`,
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
        getLetterKey(letter) {
            this.letter = letter;
        },
    },
};
</script>

<template>
    <a
        class="underline text-blue-600 hover:text-blue-800 visited:text-purple-600"
        :href="route('index')"
        >Volver</a
    >

    <section>
        <div class="capsule">
            <Capsule :secretWord="wordArray" :letter="letter" />
        </div>
        <div class="word-panel">
            <Panel :secretWord="wordArray" :letter="letter" />
            <Keyboard :secretWord="wordArray" @getLetterKey="getLetterKey" />
            <img src="@/src/img/metal.jpg" />
        </div>
        <img src="@/src/img/Window.png" id="window" />
        <img src="@/src/img/Background.png" id="background" />
    </section>
</template>

<style scoped lang="scss">
*,
*::after,
*::before {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

section {
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

img {
    pointer-events: none;
}

#window,
#background {
    position: absolute;
    width: 100%;
    height: 100vh;
}

#window {
    z-index: 4;
}

#background {
    z-index: 0;
}

.capsule,
.word-panel {
    display: flex;
    justify-content: center;
    align-items: center;
}

.word-panel {
    z-index: 5;
    flex-direction: column;
    width: 70%;
    padding: 2rem;
    gap: 1.5rem;
    background-color: #ccc;
    overflow: hidden;
    position: relative;
    border: 0.7rem outset #9f9f9f;
    bottom: -75px;
    box-shadow: 0 0 1rem rgba(0, 0, 0, 0.176);

    img {
        position: absolute;
        opacity: 0.7;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }
}
</style>
