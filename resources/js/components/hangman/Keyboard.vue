<script setup>
import Key from "./Key.vue";
</script>

<script>
export default {
    emits: ["quitChallenge", "saveData", "getLetterKey"],
    props: {
        secretWord: Array,
        errors: Number,
        guessed: Boolean,
    },
    data() {
        return {
            usedLetters: [],
        };
    },
    mounted() {
        setTimeout(() => {
            // Añadir eventListener al documento para poder usar el teclado fisico
            document.addEventListener("keyup", this.pressedKey);

            // Añadir eventListener a los botones (teclas)
            const keys = document.querySelectorAll("button:not(#ESC)");
            keys.forEach((key) => {
                key.addEventListener("click", () => this.getLetterKey(key.id));
            });

            // Comprobar si existen los datos guardados
            if (localStorage.getItem("letras")) {
                // Comprobar las letras con la palabra
                const letters = localStorage.getItem("letras").split(",");

                console.log(letters);

                letters.forEach((letter) =>
                    setTimeout(() => {
                        this.getLetterKey(letter);
                    }, 500)
                );

                // Borrar el item del localStorage
                localStorage.removeItem("letras");
            }
        }, 500);
    },
    methods: {
        checkLetter(char) {
            let exists = this.secretWord.includes(char);
            let element = document.getElementById(char);
            let color = "";
            switch (exists) {
                case true:
                    color = "#0f0";
                    break;
                case false:
                    color = "#f00";
                    break;
            }
            element.style.setProperty("--color", color);
        },
        // Pasar el caracter de la letra
        getLetterKey(char) {
            if (this.usedLetters.includes(char) === true) return;

            this.usedLetters.push(char);
            this.checkLetter(char);
            this.$emit("getLetterKey", char);
        },
        // Pasar la tecla pulsada desde el teclado a "getLetterKey"
        pressedKey(event) {
            // Si la tecla pulsada es Escape
            if (
                event.key === "Escape" ||
                event.code === "Escape" ||
                event.keyCode === 27
            ) {
                this.quitChallenge();
                return;
            }
            if (/^[a-z]{1}$/.test(`${event.key}`) === false) return;
            let key = `${event.key}`.toUpperCase();
            this.getLetterKey(key);
        },
        quitChallenge() {
            // Emitir llamada a funcion "quitChallenge" de otros componentes
            this.$emit("quitChallenge", true);

            // Guardar los datos en localStorage
            localStorage.setItem("letras", this.usedLetters);
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
        errors: function () {
            if (this.errors === 6) {
                // Quitar eventListener al documento para poder usar el teclado fisico
                document.removeEventListener("keyup", this.pressedKey);

                // Quitar eventListener a los botones (teclas)
                const keys = document.querySelectorAll("button:not(#ESC)");
                keys.forEach((key) => {
                    key.removeEventListener("click", () =>
                        this.getLetterKey(key.id)
                    );
                });
            } else if (this.errors === 0) {
                // Añadir eventListener al documento para poder usar el teclado fisico
                document.addEventListener("keyup", this.pressedKey);

                // Añadir eventListener a los botones (teclas)
                const keys = document.querySelectorAll("button:not(#ESC)");
                keys.forEach((key) => {
                    key.addEventListener("click", () =>
                        this.getLetterKey(key.id)
                    );
                });
            }
            // Vaciar array de teclas usadas
            this.usedLetters = [];
        },
    },
};
</script>

<template>
    <div class="plate">
        <div class="row">
            <Key keyLetter="Q" />
            <Key keyLetter="W" />
            <Key keyLetter="E" />
            <Key keyLetter="R" />
            <Key keyLetter="T" />
            <Key keyLetter="Y" />
            <Key keyLetter="U" />
            <Key keyLetter="I" />
            <Key keyLetter="O" />
            <Key keyLetter="P" />
        </div>
        <div class="row">
            <Key keyLetter="A" />
            <Key keyLetter="S" />
            <Key keyLetter="D" />
            <Key keyLetter="F" />
            <Key keyLetter="G" />
            <Key keyLetter="H" />
            <Key keyLetter="J" />
            <Key keyLetter="K" />
            <Key keyLetter="L" />
        </div>
        <div class="row">
            <Key keyLetter="Z" />
            <Key keyLetter="X" />
            <Key keyLetter="C" />
            <Key keyLetter="V" />
            <Key keyLetter="B" />
            <Key keyLetter="N" />
            <Key keyLetter="M" />
            <Key keyLetter="ESC" @click="quitChallenge" />
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

    .row {
        display: flex;
    }
}
</style>
