<script setup>
import Button from "./Button.vue";
</script>

<template>
    <!-- <div class="fondo">
        <img src="../../public/src/img/menu/fondoMenu.png" />
    </div> -->
    <div id="wrapper" class="grid grid-cols-2 items-center pr-8 pl-8 pb-12">
        <div class="flex justify-center items-center" id="logoBorder">
            <img class="logo" src="@/src/img/menu/ParasolCorporation.png" />
        </div>

        <div class="grid grid-rows-3 gap-y-10 pl-12">
            <Button
                ruta="user.create"
                imagen="src/img/menu/BTN1.png"
                texto="Nuevo Usuario"
            />
            <Button
                ruta="user.login"
                imagen="src/img/menu/BTN2.png"
                texto="Iniciar Sesión"
            />
            <Button
                ruta="hangman.index"
                imagen="src/img/menu/BTN3.png"
                texto="Demo"
            />
        </div>
    </div>
</template>

<style scoped lang="scss">
#wrapper {
    height: 100vh;
    width: 100%;
    background-image: url("@/src/img/menu/fondoMenu.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100vh;
}
.logo {
    width: 60%;
}
#logoBorder {
    border-right: solid 3px black;
}
</style>
