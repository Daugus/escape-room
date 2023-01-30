<script setup>
import route from "ziggy";
</script>

<script></script>

<template>
    <div id="wrapper" class="flex justify-center py-12 md:p-24">
        <div class="grid grid-col">
            <div class="flex justify-center">
                <button
                    class="text-white font-bold bg-orange-500 py-2 px-4 rounded focus:outline-none w-80"
                >
                    Atras
                </button>
            </div>
            <div class="grid grid-cols-2 gap-8">
                <div
                    class="border rounded-lg bg-slate-200 w-96 h-48 p-6 grid grid-cols-2 gap-4"
                >
                    <div
                        class="border border-neutral-900 rounded-lg grid grid-rows-2 gap-4"
                    >
                        <img
                            class="border rounded-full"
                            src="@/src/img/password/prueba.jpg"
                        />
                    </div>

                    <div class="border rounded-lg grid grid-rows-2 gap-4">
                        <div class="border border-neutral-900 rounded-lg p-4">
                            Optygd__
                        </div>
                        <div class="border border-neutral-900 rounded-lg">
                            <img
                                src="@/src/img/sobre-nosotros/ParasolCorporation.png"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <input
                    class="text-white font-bold bg-orange-500 py-2 px-4 rounded focus:outline-none w-80"
                    type="button"
                    value="Jugar"
                />
            </div>
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
</style>
