<script setup>
import route from "ziggy";
import Button from "./Button.vue";
</script>

<script>
export default {
    data() {
        return {
            password: "",
            win: false,
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
            numeros: ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"],
        };
    },
    methods: {
        checkPassword() {
            const chars = document.querySelectorAll(".password p");
            let ligth;

            chars.forEach((char) => {
                this.password = this.password + char.innerText;
            });

            if (localStorage.getItem("codigoPuerta") === this.password) {
                ligth = document.getElementById("green");
                ligth.style.backgroundColor = "#0f0";
                ligth.style.boxShadow = "0 0 1rem #7f7";
                setTimeout(() => {
                    this.win = true;
                    setTimeout(() => {
                        localStorage.clear();
                        location.replace(route("user.puntuaciones"));
                    }, 4000);
                }, 1000);
            } else {
                ligth = document.getElementById("red");
                ligth.style.backgroundColor = "#f00";
                ligth.style.boxShadow = "0 0 5rem #f77 inset";
                setTimeout(() => {
                    ligth.style.backgroundColor = "#900";
                    ligth.style.boxShadow = "none";
                }, 1000);
            }
        },
    },
};
</script>

<template>
    <div v-if="win" id="WIN"></div>
    <section v-else>
        <div class="luces">
            <span id="red"></span>
            <span id="green"></span>
        </div>
        <div class="panel">
            <div class="tactil">
                <Button :caracteres="letras"></Button>
                <Button :caracteres="numeros"></Button>
                <Button :caracteres="numeros"></Button>
                <Button :caracteres="numeros"></Button>
                <Button :caracteres="numeros"></Button>
            </div>
            <div class="actions">
                <button @click="checkPassword()">ABRIR PUERTA</button>
                <a :href="route('laboratorio.index')">SALIR</a>
            </div>
            <img src="@/src/img/hangman/ruido.gif" />
        </div>
    </section>
</template>

<style scoped lang="scss">
#WIN {
    height: 100vh;
    width: 100%;
    background-image: url("@/src/img/menu/winscreen.png");
    background-repeat: no-repeat;
    background-size: 100% 100vh;
}
section {
    position: relative;
    height: 100vh;
    background-image: url("@/src/img/password-needed/bg.png");
    background-size: cover;
    overflow: hidden;

    .luces {
        position: absolute;
        inset: 35.8% 80.7% 41% 6.3%;

        display: flex;
        justify-content: center;
        align-items: center;

        span {
            height: 100%;
            width: 100%;
            transition: all 0.5s ease-in-out;
        }

        #red {
            border: 0.5vw outset #800;
            background-color: #900;
        }

        #green {
            border: 0.5vw outset #080;
            background-color: #090;
        }
    }

    .panel {
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: 3fr 1fr;
        grid-column-gap: 0px;
        grid-row-gap: 0px;

        box-shadow: 0 0 1rem #aaa inset;
        background-color: #222;

        position: absolute;
        inset: 33.2% 6.7% 36.7% 59.9%;

        overflow: hidden;
        z-index: 1;

        img {
            width: 100%;
            opacity: 0.1;
            position: absolute;
            pointer-events: none;
            z-index: 2;
        }

        .actions {
            grid-area: 2 / 1 / 3 / 2;

            font-family: "Digital7";
            font-size: 4vh;
            color: white;
            filter: drop-shadow(0 0 1rem #fff);

            display: flex;
            justify-content: space-between;
            align-items: center;
            text-align: center;

            padding-inline: 3vh;
        }

        .tactil {
            grid-area: 1 / 1 / 2 / 3;

            display: flex;

            width: 100%;
            height: 100%;
        }
    }
}
</style>
