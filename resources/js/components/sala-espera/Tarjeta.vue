<!--
    Comprobar si los nickname escritos existen de los nuevos jugadores
    Añadir jugadores
    Al eliminar cambiar de posiciones
    Arreglar el diseño cuando haya más de 3 tarjetas
    Hacer una consulta o algo para cuando busque el nickname me saque también su foto
    Sacar error
-->

<script setup>
import route from "ziggy";
</script>

<script>
export default {
    data() {
        return {
            nickname: "",
            csrf_token: "",
            error: {
                exists: false,
                mensaje: "",
            },
            pictureUrl: "",
            user: {},
        };
    },
    async mounted() {},
    methods: {
        async getUser() {
            const token = document
                .querySelector('meta[name="csrf-token"]')
                .getAttribute("content");
            const res = await fetch(
                `${window.location.origin}/api/sala-espera/getUser`,
                {
                    method: "POST",
                    headers: new Headers({
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": token,
                    }),
                    body: JSON.stringify({
                        nickname: this.nickname.toLowerCase(),
                    }),
                }
            );
            const userArray = await res.json();
            if (userArray.length === 0) {
                // error
            } else {
                this.user = userArray.shift();

                this.pictureUrl = new URL(
                    `/public/src/img/users/${this.user.picture}`,
                    import.meta.url
                );
            }
        },
    },
};
</script>

<template>
    <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
        <!-- Tajeta jugador nuevo -->
        <div
            class="grid grid-cols-2 bg-orange-500 rounded-lg w-96 h-1/2 border-2 border-black shadow-2xl"
        >
            <div class="flex p-4">
                <div class="border-2 border-black bg-white h-40 rounded-lg">
                    <!-- Foto del jugador nuevo -->
                    <img
                        class="self-top m-3 p-1 w-32 h-32 object-cover rounded-lg"
                        :src="pictureUrl"
                    />
                </div>
            </div>
            <div class="grid grid-rows-3">
                <div class="flex">
                    <!-- Buscar jugador por el nickname -->
                    <input
                        class="self-end appearance-none w-full h-12 text-gray-700 border rounded py-3 px-4 focus:outline-none"
                        type="text"
                        placeholder="Buscar jugador"
                        v-model="nickname"
                    />
                    <!-- Eliminar tarjeta -->
                    <button class="self-start text-lg font-bold m-3">X</button>
                </div>
                <div>
                    <!-- Boton de buscar -->
                    <button @click="getUser">BUSCAR</button>
                </div>
                <img
                    class="self-end mb-4"
                    src="@/src/img/sala-espera/ParasolCorporation.png"
                />
            </div>
        </div>
    </div>
</template>

<style></style>
