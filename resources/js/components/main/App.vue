<script setup>
import Button from "./Button.vue";
</script>

<template>
    <div
        id="borde-monitor"
        class="grid grid-cols-1 md:grid-cols-2 items-center py-24 px-10 md:p-14"
    >
        <div class="flex justify-center md:border-r-4">
            <img class="logo" src="@/src/img/menu/ParasolCorporation.png" />
        </div>

        <div class="grid grid-rows-3 gap-y-10 md:pl-12">
            <Button
                ruta="user.create"
                imagen="src/img/menu/BTN1.png"
                texto="Nuevo
                Usuario"
            >
            </Button>
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
.logo {
    width: 60%;
}
#logoBorder {
    border-right: solid 3px black;
}
</style>
