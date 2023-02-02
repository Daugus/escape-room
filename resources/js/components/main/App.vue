<script setup>
import Menu from "./Menu.vue";
</script>

<script>
export default {
    data() {
        return {
            buttons: [
                {
                    ruta: "user.create",
                    imagen: "src/img/menu/BTN1.png",
                    texto: "Nuevo Usuario",
                },
                {
                    ruta: "user.login",
                    imagen: "src/img/menu/BTN2.png",
                    texto: "Iniciar Sesión",
                },
                {
                    ruta: "prueba.hangman",
                    imagen: "src/img/menu/BTN3.png",
                    texto: "Demo",
                },
                {
                    ruta: "sobre-nosotros.index",
                    imagen: "src/img/menu/BTN5.png",
                    texto: "Sobre nosotros",
                },
            ],
        };
    },
};
</script>

<template>
    <Menu :buttons="buttons"></Menu>
</template>
