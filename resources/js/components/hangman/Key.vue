<script>
export default {
    props: {
        keyLetter: String,
    },
    data() {
        return {
            clickedLetter: "",
        };
    },
    methods: {
        getKey(letter) {
            this.clickedLetter = letter;
            console.log(letter);
            console.log(this.clickedLetter);
        },
    },
    watch: {
        //esta funcion observa en todo momento si la variable clickedLetter se modifica
        nombre: function () {
            return this.$emit("clickedLetter", this.clickedLetter);
        },
    },
    mounted() {
        //esta funcion se ejecuta después de que la instancia VUE y el DOM ya está montado
        this.$emit("clickedLetter", this.clickedLetter); //de esta manera emito el evento hacia el componente padre
    },
};
</script>

<template>
    <button @click="getKey(keyLetter)" :id="keyLetter">
        {{ keyLetter }}
    </button>
</template>

<style scoped lang="scss">
button {
    --bg: black;
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
        background-color: var(--bg);
        box-shadow: 0 0 0.5rem var(--bg);
    }
}
</style>
