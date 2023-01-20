<script>
export default {
    emits: ["getNewWord", "getErrors"],
    props: {
        secretWord: Array,
        usedLetters: Array,
        letter: String,
        guessed: Boolean,
        quit: Boolean,
    },
    data() {
        return {
            errors: 0,
            time: 0,
            tries: 0,
            newWord: true,
        };
    },
    mounted() {
        // Comprobar si existen los datos guardados
        if (localStorage.getItem("intentos")) {
            this.tries = localStorage.getItem("intentos");

            // Borrar el item del localStorage
            localStorage.removeItem("intentos");
        }
    },
    computed: {
        errorProgress() {
            let progress = "";
            switch (this.errors) {
                case 0:
                    progress = "9%";
                    break;
                case 1:
                    progress = "25%";
                    break;
                case 2:
                    progress = "40%";
                    break;
                case 3:
                    progress = "60%";
                    break;
                case 4:
                    progress = "75%";
                    break;
                case 5:
                    progress = "91%";
                    break;
                case 6:
                    progress = "100%";

                    // Crear una cuenta regresiva en base al numero de intentos
                    this.tries = this.tries + 1;
                    this.time = this.tries * 120;

                    // Cambiar estilos del panel y de las teclas
                    let panel = document.querySelector(".panel");
                    let word = document.querySelector(".panel p");
                    let keys = document.querySelectorAll("button:not(#ESC)");
                    let smoke = document.querySelector(".gas-container");
                    let alarm = document.querySelector("audio");

                    // Activar gas y alarma
                    smoke.style.opacity = "1";
                    alarm.volume = 1;
                    alarm.play();

                    // Se ejecuta en 5 segundos (5000 milesimas)
                    setTimeout(() => {
                        progress = "9%";
                        this.errors = 0;
                        // Cambiar estilos del panel
                        panel.classList.add("default");
                        panel.classList.remove("fail");
                        // Cambiar la palabra del panel
                        word.innerText = "quaero verbum";
                        word.classList.add("charging");
                        // Quitar luces de las teclas y desactivarlas
                        keys.forEach((key) => {
                            key.style.setProperty("--color", "#000");
                        });
                        // Bajar volumen de la ala
                        alarm.volume = 0.1;
                    }, 5000);

                    // Mandar orden para generar nueva palabra y reiniciar errores
                    setTimeout(() => {
                        this.$emit("getNewWord", this.newWord);
                        this.$emit("getErrors", this.errors);
                        // Desactivar gas
                        smoke.style.opacity = "0";
                    }, this.tries * 120000);
            }
            return progress;
        },
        timer() {
            let timer = "";
            if (this.errors !== 0) {
                timer = "1s";
            } else {
                timer = this.tries * 120 + "s";
            }
            return timer;
        },
    },
    watch: {
        letter: function () {
            let exists = null;
            if (this.letter === "") return;
            exists = this.secretWord.includes(this.letter);
            if (exists === false) {
                this.errors = this.errors + 1;
            }
            this.$emit("getErrors", this.errors);
        },
        guessed: function () {
            if (this.wordGuessed === null) return;

            // Quitar barra de progreso
            let progressBar = document.querySelector(".progress");
            progressBar.style.setProperty("--errorProgress", "0%");

            // Se ejecuta en 5 segundos (5000 milesimas)
            setTimeout(() => {
                progressBar.style.setProperty("--bg", "#0b0");
                progressBar.style.setProperty("--accent", "#0f0");
                progressBar.style.setProperty("--errorProgress", "100%");
            }, 5000);
        },
        quit: function () {
            if (this.quit === null) return;

            // Parar alarma
            let alarm = document.querySelector("audio");
            alarm.pause();
            alarm.currentTime = 0;

            // Guardar los datos en localStorage
            localStorage.setItem("intentos", this.tries);

            // Redirigir al laboratorio
            // location.replace("https://www.google.es/");
            setTimeout(() => {
                location.replace("https://www.google.es/");
            }, 1000);
        },
    },
};
</script>

<template>
    <div class="capsule">
        <img src="@/src/img/Capsule.png" id="container" />
        <div class="bar">
            <div class="progress"></div>
        </div>
    </div>
    <div class="gas-container">
        <div class="smoke">
            <img src="@/src/img/smokes/smoke_1.png" id="smoke1" />
            <img src="@/src/img/smokes/smoke_2.png" id="smoke2" />
            <img src="@/src/img/smokes/smoke_3.png" id="smoke3" />
            <img src="@/src/img/smokes/smoke_4.png" id="smoke4" />
        </div>
    </div>
    <audio>
        <source src="@/src/img/alarm.mp3" type="audio/mpeg" />
    </audio>
</template>

<style scoped lang="scss">
.capsule {
    position: relative;
    width: 65%;
    display: flex;
    justify-content: center;
    align-items: center;

    #container {
        z-index: 3;
        position: relative;
    }

    .bar {
        z-index: 2;
        position: absolute;
        background-color: #5f5f5f;
        width: 25%;
        height: 15%;
        top: 20%;

        .progress {
            --errorProgress: v-bind("errorProgress");
            --bg: #b00;
            --accent: #f00;
            height: 100%;
            width: var(--errorProgress);
            background-color: var(--bg);
            box-shadow: 0 0 5rem #fff inset;
            animation: liquid 3s infinite ease-in-out;
            transition: all v-bind("timer") ease-out;
        }
    }
}

@keyframes liquid {
    0% {
        box-shadow: none;
    }
    50% {
        background-color: var(--accent);
        box-shadow: 0 0 5rem var(--accent);
    }
    100% {
        box-shadow: none;
    }
}

.gas-container {
    z-index: 4;
    overflow: hidden;
    position: absolute;
    width: 88.2%;
    height: 63%;
    top: 0;
    opacity: 0;
    rotate: 180deg;
    transition: all 10s ease-out;

    .smoke {
        height: 100%;
        position: relative;
        display: flex;
        justify-content: center;
        align-items: center;

        img {
            width: 100%;
            height: 100%;
            position: absolute;
            pointer-events: none;
        }
    }
}

#smoke1 {
    animation: smoke 12s infinite;
}
#smoke2 {
    animation: smoke 6s infinite;
}
#smoke3 {
    animation: movement-smoke 27s infinite;
}
#smoke4 {
    animation: movement-smoke 72s infinite;
}

@keyframes smoke {
    0% {
        opacity: 0.5;
    }
    50% {
        opacity: 0.7;
        filter: saturate(6);
        transform: scale(1.02);
    }
    100% {
        opacity: 0.5;
    }
}

@keyframes movement-smoke {
    0% {
        left: 0;
        top: 0;
        opacity: 0.3;
        transform: scale(0.9);
    }
    17% {
        opacity: 0.7;
        filter: saturate(7);
        transform: rotate(2deg);
    }
    34% {
        opacity: 0.3;
        filter: blur(1rem);
        filter: saturate(3);
    }
    51% {
        opacity: 0;
        transform: scale(1.1);
    }
    68% {
        opacity: 0.3;
        filter: blur(1rem);
        filter: saturate(5);
    }
    85% {
        opacity: 0.7;
        transform: rotate(-2deg);
    }
    100% {
        left: 0;
        top: 0;
        opacity: 0.3;
        transform: scale(0.9);
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
/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (max-width: 1500px) {
    .capsule {
        width: 55%;
    }
}
</style>
