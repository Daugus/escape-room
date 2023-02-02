<script setup>
import Button from "./Button.vue";
</script>

<script>
export default {
    props: {
        buttons: Array,
    },
};
</script>

<template>
    <div
        id="borde-monitor"
        class="grid grid-cols-1 md:grid-cols-2 items-center gap-y-12 pt-24 pb-40 md:py-24 px-10 md:p-14"
    >
        <div class="flex justify-center md:border-r-4">
            <img class="logo" src="@/src/img/menu/ParasolCorporation.png" />
        </div>

        <div
            class="md:grid md:grid-rows-3 md:gap-y-2 md:ml-8 max-h-[40vh] md:max-h-[unset] overflow-y-auto gap-8 flex flex-col"
        >
            <Button
                v-for="button in buttons"
                :ruta="button.ruta"
                :imagen="button.imagen"
                :texto="button.texto"
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
