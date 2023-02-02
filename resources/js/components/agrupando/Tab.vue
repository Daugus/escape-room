<script>
export default {
    data() {
        return {
            scientistlist: [],
        };
    },
    async mounted() {
        await this.getScientist();
        this.changeData(0);
    },
    methods: {
        async getScientist() {
            if (localStorage.getItem("cientificos")) {
                this.scientistlist = JSON.parse(
                    localStorage.getItem("cientificos")
                );
            } else {
                const token = document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content");
                const res = await fetch(
                    `${window.location.origin}/api/password/getScientists`,
                    {
                        method: "POST",
                        headers: new Headers({
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": token,
                        }),
                    }
                );

                let data = await res.json();

                localStorage.setItem("codigoPuerta", data[0].code);

                for (let i = data.length - 1; i > 0; i--) {
                    const j = Math.floor(Math.random() * (i + 1));

                    [data[i], data[j]] = [data[j], data[i]];
                }

                this.scientistlist = data;
            }
        },
        changeData(id) {
            const buttons = document.querySelectorAll("button:not(#close)");
            const button = document.getElementById(id);
            const name = document.getElementById("name");
            const element_year = document.getElementById("element-year");
            const text = document.getElementById("text");
            const img = document.querySelector(".picture img");

            let url = new URL(
                `/public/src/img/password/${this.scientistlist[id].image}`,
                import.meta.url
            );

            buttons.forEach((button) => {
                button.classList.remove("show");
            });

            button.classList.add("show");

            name.innerText = this.scientistlist[id].name;
            element_year.innerText =
                this.scientistlist[id].element +
                " - " +
                this.scientistlist[id].discovery_year;
            text.innerText = this.scientistlist[id].text;
            img.src = url;
        },
        quit() {
            const cientificosString = JSON.stringify(this.scientistlist);
            localStorage.setItem("cientificos", cientificosString);

            // Redirigir al laboratorio
            setTimeout(() => {
                location.replace(route("laboratorio.index"));
            }, 500);
        },
    },
};
</script>

<template>
    <nav>
        <div class="scientist">
            <button
                class=""
                v-for="(scientist, index) in scientistlist"
                :id="index"
                @click="changeData(index)"
            >
                {{ scientist.name }}
            </button>
        </div>
        <div class="actions">
            <button id="close" @click="quit()">x</button>
        </div>
    </nav>
    <section>
        <div class="picture">
            <img src="" />
        </div>
        <div class="data">
            <h1 id="name"></h1>
            <h2 id="element-year"></h2>
            <p id="text"></p>
        </div>
    </section>
</template>

<style scoped lang="scss">
nav {
    display: flex;
    justify-content: space-between;
    background-color: rgb(25, 25, 25);
    width: 100%;
    height: 6%;
    overflow: hidden;

    button {
        padding: 0.5vh 1vh;
        color: white;
    }

    button:not(#close) {
        border-top-left-radius: 1vh;
        border-top-right-radius: 1vh;

        border-right: 1px solid rgb(50, 50, 50);
    }

    #close {
        font-weight: bold;
        transition: 0.1s ease-in-out;

        &:hover {
            background-color: rgb(220, 20, 20);
        }
    }

    .show {
        background-color: white;
        color: black;
    }
}

section {
    background-color: white;
    height: 94%;
    color: black;
    display: flex;
    padding: 2%;
    .picture {
        width: 40%;
        display: flex;
        justify-content: center;
        align-items: center;

        img {
            width: 90%;
        }
    }

    .data {
        width: 60%;
        display: flex;
        flex-direction: column;
        text-align: start;

        h1 {
            font-size: 4vh;
            font-weight: bold;
        }

        h2 {
            font-size: 2.5vh;
            font-weight: 600;
        }

        p {
            margin-top: 1.5vh;
            font-size: 1.5vh;
            float: left;
        }
    }
}
</style>
