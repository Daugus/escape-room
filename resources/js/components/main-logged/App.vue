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

        <div
            class="md:grid md:grid-rows-3 md:gap-y-2 md:ml-8 overflow-y-auto h-96 gap-8 flex flex-col"
        >
            <Button
                ruta="laboratorio.index"
                imagen="src/img/menu/BTN3.png"
                texto="Jugar"
            />
            <Button
                ruta="user.show"
                imagen="src/img/menu/BTN2.png"
                texto="Perfil Personal"
            />
            <Button
                ruta="ranking.index"
                imagen="src/img/menu/BTN6.png"
                texto="Ranking"
            />
            <Button
                ruta="sobre-nosotros.index"
                imagen="src/img/menu/BTN5.png"
                texto="Sobre nosotros"
            />
            <Button
                ruta="user.logout"
                imagen="src/img/menu/BTN4.png"
                texto="Cerrar Sesión"
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
