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
            user: {},
            imageName: "",
        };
    },
    props: {
        existingUser: Object,
        userIndex: Number,
        usedNicknames: Array,
    },
    mounted() {
        if (this.existingUser.nickname) {
            this.nickname = this.existingUser.nickname;
            this.user = this.existingUser;
            this.imageName = this.user.picture;
        }
    },
    computed: {
        pictureUrl() {
            return new URL(
                `/public/src/img/users/${this.imageName}`,
                import.meta.url
            );
        },
    },
    methods: {
        async getUser() {
            if (this.usedNicknames.includes(this.nickname.toLowerCase()))
                return;

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
            } else {
                this.user = userArray.shift();

                this.imageName = this.user.picture;

                this.$emit("agregarUsuario", [this.userIndex, this.user]);
            }
        },
        eliminarTarjeta() {
            this.$emit("eliminarTarjeta", this.userIndex);
        },
    },
};
</script>

<template>
    <div
        class="grid grid-cols-3 grid-rows-2 bg-amber-500 rounded-lg border-2 border-black shadow-2xl p-4 gap-4 max-w-lg"
    >
        <div class="row-span-2">
            <img
                class="border-2 border-black bg-white rounded-lg"
                :src="pictureUrl"
            />
        </div>

        <div class="col-span-2 gap-4 flex justify-center items-center">
            <input
                class="appearance-none text-gray-700 border-2 border-black rounded-xl p-2 focus:outline-none"
                type="text"
                placeholder="Buscar jugador"
                v-model="nickname"
            />

            <button
                v-if="nickname === '' || user.nickname"
                @click="eliminarTarjeta"
                class="bg-white basis-8 h-8 text-xl border-2 border-black rounded-full"
            >
                x
            </button>

            <button
                v-else
                @click="getUser"
                class="bg-white basis-8 h-8 text-xl border-2 border-black rounded-full"
            >
                +
            </button>
        </div>

        <img
            class="max-w-xs border-2 border-black bg-white rounded-lg p-2"
            src="@/src/img/sala-espera/parasolCorporation.png"
        />
    </div>
</template>

<style></style>
