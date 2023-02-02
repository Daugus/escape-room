<script setup>
import route from "ziggy";
</script>

<script>
export default {
    data() {
        return {
            i: 0,
        };
    },
    props: {
        caracteres: Array,
    },
    methods: {
        sumar() {
            this.i++;
            if (this.i >= this.caracteres.length) this.i = 0;
        },
        restar() {
            this.i--;
            if (this.i <= 0) this.i = this.caracteres.length - 1;
        },
        rutaHref() {
            return route(this.ruta);
        },
    },
};
</script>

<template>
    <div class="password grid grid-cols-1 grid-rows-3">
        <button @click="sumar"><i class="fa-solid fa-chevron-up"></i></button>
        <p>{{ caracteres[i] }}</p>
        <button @click="restar">
            <i class="fa-solid fa-chevron-down"></i>
        </button>
    </div>
</template>

<style scoped lang="scss">
.password {
    width: 100%;
    height: 100%;

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;

    button,
    p {
        text-shadow: 0 0 1rem #fff;
        color: #fff;
    }

    button {
        font-size: 3vh;
    }

    p {
        font-family: "Digital7";
        font-size: 6vh;
    }
}
</style>
