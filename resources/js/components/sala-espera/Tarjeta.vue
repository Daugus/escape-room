<!--
    Comprobar si los nickname escritos existen de los nuevos jugadores
    Añadir jugadores
    Al eliminar cambiar de posiciones
    Arreglar el diseño cuando haya más de 3 tarjetas

-->

<script setup>
import route from "ziggy";
</script>

<script>
export default {
    props: {},
    computed: {},
};
</script>

<template>
    <div class="row-span-3 grid grid-cols-1 gap-4 md:grid-cols-2">
        <!-- Tajeta 1 -->
        <div
            class="grid grid-cols-2 bg-orange-400 rounded-lg w-96 h-1/2 border-2 border-black shadow-2xl"
        >
            <div class="flex p-4">
                <div class="border-2 border-black bg-white h-40 rounded-lg">
                    <img
                        class="self-top m-3 p-1 w-32 h-32 object-cover rounded-lg"
                        src="@/src/img/password/Peter-J-Hjelm.jpg"
                    />
                </div>
            </div>
            <div class="grid grid-rows-2">
                <div class="flex">
                    <input
                        class="self-center appearance-none w-full h-12 text-gray-700 border rounded py-3 px-4 focus:outline-none"
                        type="text"
                    />

                    <button class="self-start text-lg font-bold m-3">X</button>
                </div>
                <div class="flex mb-4 mr-6">
                    <img
                        class="self-end"
                        src="@/src/img/sala-espera/ParasolCorporation.png"
                    />
                </div>
            </div>
        </div>
        <!-- Añadir tarjeta -->
    </div>
</template>

<style scoped lang="scss"></style>
