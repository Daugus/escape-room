<script setup>
import route from "ziggy";
</script>

<script>
export default {
    data() {
        return {
            session: {},
        };
    },
    mounted() {
        const sessionDiv = document.querySelector("#session");
        if (sessionDiv) {
            this.session = JSON.parse(sessionDiv.innerText);
            sessionDiv.remove();
        }
    },
};
</script>

<template>
    <div id="wrapper" class="flex justify-center py-12 md:p-28">
        <div class="grid grid-rows-3 gap-8">
            <!-- Boton atras -->
            <div class="grid grid-cols-3">
                <div class="flex items-stretch justify-center">
                    <a
                        class="self-center bg-orange-400 hover:bg-orange-500 text-white font-bold py-2 px-4 rounded"
                        :href="route('index')"
                        >Atras</a
                    >
                </div>
                <!-- Nombre grupo -->
                <div class="flex items-stretch">
                    <input
                        class="self-center appearance-none w-full h-12 text-gray-700 bg-slate-200 border rounded py-3 px-4"
                        type="text"
                        placeholder="NOMBRE GRUPO"
                    />
                </div>
                <div class="flex items-stretch justify-center">
                    <a
                        class="self-center bg-orange-400 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded flex justify-center"
                        :href="route('index')"
                        >Jugar</a
                    >
                </div>
            </div>

            <!-- Tarjetas -->
            <div class="row-span-3 grid grid-cols-1 gap-4 md:grid-cols-2">
                <!-- Tajeta 1 -->
                <div class="grid grid-cols-2 bg-slate-200 w-80 rounded-lg">
                    <div class="flex p-4 bg-orange-400 rounded-l-lg">
                        <img
                            class="self-center rounded-full"
                            src="@/src/img/password/prueba.jpg"
                        />
                    </div>
                    <div class="grid grid-rows-2">
                        <div class="flex px-4">
                            <p class="self-end">{{}}</p>
                        </div>
                        <div class="flex p-4">
                            <img
                                class="self-center"
                                src="@/src/img/sala-espera/ParasolCorporation.png"
                            />
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 2 -->
                <div class="grid grid-cols-2 bg-slate-200 w-80 rounded-lg">
                    <div class="flex p-4 bg-orange-400 rounded-l-lg">
                        <img
                            class="self-center rounded-full"
                            src="@/src/img/password/prueba.jpg"
                        />
                    </div>
                    <div class="grid grid-rows-2">
                        <div class="flex px-4">
                            <p class="self-end"></p>
                        </div>
                        <div class="flex p-4">
                            <img
                                class="self-center"
                                src="@/src/img/sala-espera/ParasolCorporation.png"
                            />
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 3 -->
                <div class="grid grid-cols-2 bg-slate-200 w-80 rounded-lg">
                    <div class="flex p-4 bg-orange-400 rounded-l-lg">
                        <img
                            class="self-center rounded-full"
                            src="@/src/img/password/prueba.jpg"
                        />
                    </div>
                    <div class="grid grid-rows-2">
                        <div class="flex px-4">
                            <p class="self-end">Opty</p>
                        </div>
                        <div class="flex p-4">
                            <img
                                class="self-center"
                                src="@/src/img/sala-espera/ParasolCorporation.png"
                            />
                        </div>
                    </div>
                </div>
                <!-- Tarjeta 4 -->
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
