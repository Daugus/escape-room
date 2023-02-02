<script setup>
import route from "ziggy";
import Tarjeta from "./Tarjeta.vue";
</script>

<script>
export default {
    data() {
        return {
            csrf_token: "",
            session: {},
            users: [],
            group: "",
            difficulty: "1",
        };
    },
    mounted() {
        this.csrf_token = document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content");

        // Trae los datos de la sesión logeada
        const sessionDiv = document.querySelector("#session");
        if (sessionDiv) {
            this.session = JSON.parse(sessionDiv.innerText);
            sessionDiv.remove();
        }
    },
    computed: {
        // Trae la imagen del usuario
        imageSource() {
            return this.session.picture
                ? new URL(
                      `/public/src/img/users/${this.session.picture}`,
                      import.meta.url
                  )
                : null;
        },
        usedNicknames() {
            return this.users
                .filter((user) => user.nickname !== undefined)
                .map((user) => user.nickname.toLowerCase())
                .concat(this.session.nickname);
        },
        userIds() {
            return this.users
                .filter((user) => user.id !== undefined)
                .map((user) => user.id)
                .concat(this.session.id);
        },
    },
    methods: {
        async empezarPartida() {
            if (this.group === "") return;

            for (let i = 0; i < this.users.length; i++)
                if (Object.keys(this.users[i]).length === 0) return;

            try {
                const token = document
                    .querySelector('meta[name="csrf-token"]')
                    .getAttribute("content");

                const res = await fetch(
                    `${window.location.origin}/api/sala-espera/crearPartida`,
                    {
                        method: "POST",
                        headers: new Headers({
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": token,
                        }),
                        body: JSON.stringify({
                            userIds: this.userIds,
                            groupName: this.group,
                            difficulty: this.difficulty,
                        }),
                    }
                );

                let minutos = 0;

                switch (parseInt(this.difficulty)) {
                    case 1:
                        minutos = 30;
                        break;
                    case 2:
                        minutos = 20;
                        break;
                    case 3:
                        minutos = 10;
                        break;
                }

                localStorage.setItem("dificultad", minutos * 60 * 1000);

                location.replace("/jugar/lab");
            } catch (error) {
                return;
            }
        },
        agregarTarjeta() {
            this.users.push({});
        },
        agregarUsuario([userIndex, user]) {
            this.users[userIndex] = user;
        },
        eliminarTarjeta(index) {
            const tmpUsers = this.users;
            this.users = [];
            tmpUsers.splice(index, 1);

            // timeout para hacer que rehaga el v-for de tarjetas
            setTimeout(() => (this.users = tmpUsers), 10);
        },
    },
};
</script>

<template>
    <div
        class="flex items-center flex-col gap-12 h-screen py-36"
        id="borde-monitor"
    >
        <div class="flex justify-center md:gap-8">
            <!-- Boton atras -->
            <div class="flex items-center">
                <a
                    class="bg-amber-500 hover:bg-amber-400 text-white font-bold py-2 px-4 rounded"
                    :href="route('index')"
                    >Atras</a
                >
            </div>
            <!-- Nombre de grupo -->
            <div class="flex items-center">
                <input
                    class="appearance-none md:w-full h-12 text-gray-700 bg-slate-200 border rounded py-3 px-4"
                    type="text"
                    placeholder="Nombre de grupo"
                    v-model="group"
                />
            </div>
            <!-- Dificultad -->
            <div class="flex items-center">
                <select
                    class="md:w-full h-12 text-gray-700 bg-slate-200 border rounded py-3 px-4"
                    v-model="difficulty"
                >
                    <option value="1">Fácil</option>
                    <option value="2">Normal</option>
                    <option value="3">Difícil</option>
                </select>
            </div>
            <!-- Boton jugar -->
            <div class="flex items-center">
                <button
                    class="bg-amber-500 hover:bg-amber-400 text-white font-bold py-2 px-4 rounded"
                    @click="empezarPartida"
                >
                    Jugar
                </button>
            </div>
        </div>

        <!-- grid tarjetas -->
        <div class="grid grid-cols-2 grid-rows-2 gap-6 w-max">
            <!-- tarjeta -->
            <div
                class="grid grid-cols-3 grid-rows-2 bg-amber-500 rounded-lg border-2 border-black shadow-2xl p-4 gap-4 max-w-lg"
            >
                <div class="row-span-2">
                    <img
                        class="border-2 border-black bg-white rounded-lg"
                        :src="imageSource"
                    />
                </div>

                <div class="col-span-2 flex justify-center items-center">
                    <p class="text-2xl border-black">
                        {{ session.nickname }}
                    </p>
                </div>

                <img
                    class="max-w-xs border-2 border-black bg-white rounded-lg p-2"
                    src="@/src/img/sala-espera/ParasolCorporation.png"
                />
            </div>

            <Tarjeta
                v-for="(user, index) in users"
                :existingUser="user"
                :userIndex="index"
                :usedNicknames="usedNicknames"
                @agregarUsuario="agregarUsuario"
                @eliminarTarjeta="eliminarTarjeta"
            />

            <!-- Añadir tarjeta -->
            <button
                v-if="users.length < 3"
                class="h-12 w-12 bg-amber-500 rounded-lg self-center justify-self-center"
                @click="agregarTarjeta"
            >
                +
            </button>
        </div>
    </div>
</template>

<style scoped lang="scss"></style>
