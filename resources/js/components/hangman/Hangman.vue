<script setup>
import Keyboard from "./Keyboard.vue";
import Panel from "./Panel.vue";
import Capsule from "./Capsule.vue";
</script>

<script>
export default {
    data() {
        return {
            hangman: {},
            wordArray: [],
            letter: "",
            errors: 0,
            newWord: false,
            guessed: null,
            quit: null,
        };
    },
    async mounted() {
        // Comprobar si existen los datos guardados
        if (localStorage.getItem("palabra")) {
            this.wordArray = localStorage.getItem("palabra").split("");

            // Borrar el item del localStorage
            localStorage.removeItem("palabra");
        } else {
            // Sino, generar una palabra aleatoria nueva
            await this.getWord();
        }
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
        // Hacer llamada para generar una nueva palabra
        getNewWord(newWord) {
            this.newWord = newWord;
        },
        // Recoger letra pulsada
        getLetterKey(letter) {
            this.letter = letter;
        },
        // Recoger numero de errores
        getErrors(errors) {
            this.errors = errors;
        },
        // Recoger si la palabra ha sido acertada o no
        wordGuessed(guessed) {
            this.guessed = guessed;
        },
        // Llamada a los hijos para generar objetos con data necesaria
        quitChallenge(call) {
            // Cambiar la variable "quit" para que se pueda ejecutar el "saveData" de Capsule y Panel
            this.quit = call;

            // Guardar los datos en localStorage
            localStorage.setItem("palabra", this.wordArray.join(""));
        },
    },
    watch: {
        // Llamar a funcion que genera una palabra desde la base de datos
        newWord: function () {
            if (this.newWord === true) {
                this.getWord();
                let word = document.querySelector(".panel p");
                word.classList.remove("charging");
            }
            this.newWord = false;
        },
    },
};
</script>

<template>
    <section>
        <div class="capsule">
            <Capsule
                :secretWord="wordArray"
                :letter="letter"
                :guessed="guessed"
                :quit="quit"
                @getErrors="getErrors"
                @getNewWord="getNewWord"
            />
        </div>
        <div class="word-panel">
            <Panel
                :secretWord="wordArray"
                :letter="letter"
                :errors="errors"
                :quit="quit"
                @wordGuessed="wordGuessed"
            />
            <Keyboard
                :secretWord="wordArray"
                :errors="errors"
                :guessed="guessed"
                @getLetterKey="getLetterKey"
                @quitChallenge="quitChallenge"
            />
            <img src="@/src/img/metal.jpg" id="metal" />
        </div>
    </section>
    <img src="@/src/img/Window.png" id="window" />
    <img src="@/src/img/Background.png" id="background" />
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
    position: absolute;
}

img {
    pointer-events: none;
}

#window,
#background,
#metal {
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
    bottom: 0;
    box-shadow: 0 0 1rem rgba(0, 0, 0, 0.176);

    img {
        position: absolute;
        opacity: 0.7;
        width: 100%;
    }
}

/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (max-width: 600px) {
}
/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (max-width: 768px) {
}
/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (max-width: 992px) {
}
/* Extra large devices (large laptops and desktops, 1500px and down) */
@media only screen and (max-width: 1500px) {
    .section {
        padding: 0.5rem;
    }
    .word-panel {
        padding: 1vw;
        gap: 1vw;
        border: 0.5vw outset #9f9f9f;
    }
}
</style>
