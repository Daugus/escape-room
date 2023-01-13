<script>
export default {
    props: {
        keyLetter: String,
        secretWord: Array,
    },
    methods: {
        ligthChanger(key) {
            let exists = this.secretWord.includes(key);
            let element = document.getElementById(key);
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
    },
};
</script>

<template>
    <button :id="keyLetter" @click="ligthChanger(keyLetter)">
        {{ keyLetter }}
    </button>
</template>

<style scoped lang="scss">
button {
    --color: #000;
    color: black;
    font-size: 1.5rem;
    font-weight: 700;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 4rem;
    height: 4rem;
    border: 6px outset #a7a7a7;
    background-color: #999999;
    box-shadow: 0.25rem 0.25rem 1rem #00000080;
    margin: 0.5rem;
    position: relative;

    &:not(#ESC)::before {
        content: "";
        width: 6px;
        height: 6px;
        border-radius: 50%;
        position: absolute;
        top: 10%;
        left: 10%;
        background-color: var(--color);
        box-shadow: 0 0 0.5rem var(--color);
        transition: all 0.2s ease-in;
    }
}
</style>
