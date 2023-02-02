<script>
export default {
    data() {
        return {
            lsPin: 0,
            numbersCounter: 0,
            pin: ["-", "-", "-"],
        };
    },
    mounted() {
        if (localStorage.getItem("pin")) {
            this.lsPin = localStorage.getItem("pin");
        }

        const buttons = document.querySelectorAll("button:not(#delete)");
        buttons.forEach((button) => {
            button.addEventListener("click", () =>
                this.pinCheck(button.innerText)
            );
        });
    },
    computed: {
        pinString() {
            return this.pin.join(" ");
        },
    },
    methods: {
        pinCheck(number) {
            console.log(number);
            this.numbersCounter++;
        },
    },
    watch: {
        numbersCounter: function () {
            if (this.numbersCounter === 3) {
                if (this.pin + "" === this.pin.join("")) {
                } else {
                }
            }
        },
    },
};
</script>

<template>
    <img src="@/src/img/agrupando/ParasolCorporation.png" />
    <div class="panel">
        <div class="password">
            <h1>{{ pinString }}</h1>
        </div>
        <div class="numbers">
            <button>1</button>
            <button>2</button>
            <button>3</button>
            <button>4</button>
            <button>5</button>
            <button>6</button>
            <button>7</button>
            <button>8</button>
            <button>9</button>
            <a href=""><i class="fa-solid fa-right-from-bracket"></i></a>
            <button>0</button>
            <button id="delete"><i class="fa-solid fa-delete-left"></i></button>
        </div>
    </div>
</template>

<style scoped lang="scss">
img {
    width: 50%;
}

.panel {
    // background: #0f0;
    width: 30%;
    height: 40vh;
    color: white;
    border: 2.5px solid rgb(50, 50, 50);
    border-radius: 1rem;
    padding: 2%;

    .password {
        // background-color: #00f;
        border-bottom: 2.5px solid rgb(50, 50, 50);
        height: 20%;
        display: flex;
        justify-content: center;
        align-items: center;

        font-size: 5vh;
        font-family: "Spaceport";

        h1 {
            animation: error 0.15s 2;
        }
    }

    .numbers {
        height: 80%;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(4, 1fr);
        padding: 5%;
        grid-column-gap: 5%;
        grid-row-gap: 5%;

        button,
        a {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;

            font-family: "Spaceport";
            font-size: 3vh;
        }
    }
}

@keyframes error {
    0% {
        color: red;
        transform: translateX(0%);
    }

    33% {
        color: red;
        transform: translateX(5%);
    }

    66% {
        color: red;
        transform: translateX(-5%);
    }

    100% {
        color: red;
        transform: translateX(0%);
    }
}
</style>
