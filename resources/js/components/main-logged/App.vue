<script setup>
import Menu from "../main/Menu.vue";
</script>

<script>
export default {
    data() {
        return {
            buttons: [
                {
                    ruta: "sala-espera.index",
                    imagen: "src/img/menu/BTN3.png",
                    texto: "Jugar",
                },
                {
                    ruta: "user.show",
                    imagen: "src/img/menu/BTN2.png",
                    texto: "Perfil Personal",
                },
                {
                    ruta: "ranking.index",
                    imagen: "src/img/menu/BTN6.png",
                    texto: "Ranking",
                },
                {
                    ruta: "sobre-nosotros.index",
                    imagen: "src/img/menu/BTN5.png",
                    texto: "Sobre nosotros",
                },
                {
                    ruta: "user.logout",
                    imagen: "src/img/menu/BTN4.png",
                    texto: "Cerrar Sesión",
                },
            ],
        };
    },
};
</script>

<template>
    <Menu :buttons="buttons"></Menu>
</template>
