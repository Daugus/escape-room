<script setup>
import route from "ziggy";
import tarjeta from "./Tarjeta.vue";
</script>

<script>
export default {
    data() {
        return {
            session: {},
        };
    },

    mounted() {
        // Trae los datos de la sesión logeada
        const sessionDiv = document.querySelector("#session");
        if (sessionDiv) {
            this.session = JSON.parse(sessionDiv.innerText);
            sessionDiv.remove();
        }
    },

    computed: {
        // Traer la imagen del usuario
        imageSource() {
            return this.session.picture
                ? new URL(
                      `/public/src/img/users/${this.session.picture}`,
                      import.meta.url
                  )
                : null;
        },
    },
    //
};
</script>

<template>
    <div id="wrapper" class="flex justify-center py-12 md:px-28">
        <div class="grid grid-rows-3">
            <!-- Boton atras -->
            <div class="grid grid-cols-1 md:grid-cols-4 md:gap-8">
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
                        class="self-center appearance-none md:w-full h-12 text-gray-700 bg-slate-200 border rounded py-3 px-4"
                        type="text"
                        placeholder="NOMBRE DE GRUPO"
                    />
                </div>
                <!-- Dificultad -->
                <div class="flex items-stretch">
                    <select
                        class="self-center appearance-none md:w-full h-12 text-gray-700 bg-slate-200 border rounded py-3 px-4"
                    >
                        <option value="facil">Facil</option>
                        <option value="normal">Normal</option>
                        <option value="dificil">Difícil</option>
                    </select>
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
                <!-- <div
                    class="grid grid-cols-2 bg-orange-400 rounded-lg w-96 h-1/2 border-2 border-black shadow-2xl"
                >
                    <div class="flex p-4">
                        <div
                            class="border-2 border-black bg-white h-40 rounded-lg"
                        >
                            <img
                                class="self-top m-3 p-1 w-32 h-32 object-cover rounded-lg"
                                :src="imageSource"
                            />
                        </div>
                    </div>
                    <div class="grid grid-rows-2">
                        <div class="flex px-4">
                            <p
                                class="self-center text-2xl border-b-4 border-black"
                                id="tipography"
                            >
                                {{ session.nickname }}
                            </p>
                        </div>
                        <div class="flex mb-4 mr-6">
                            <img
                                class="self-end"
                                src="@/src/img/sala-espera/ParasolCorporation.png"
                            />
                        </div>
                    </div>
                </div> -->
                <!-- Añadir tarjeta -->
                <div>
                    <button class="h-12 w-12 bg-orange-400 rounded-lg">
                        +
                    </button>
                </div>
                <tarjeta />
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

#tipography {
    font-family: Eurostile;
}
</style>
