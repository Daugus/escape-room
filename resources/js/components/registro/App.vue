<script setup>
import route from "ziggy";
</script>

<script>
export default {
    data() {
        return {
            rg: {
                name: /^[A-Za-zÀ-ÖØ-öø-ÿ\- ]{1,200}$/,
                surname: /^[A-Za-zÀ-ÖØ-öø-ÿ\- ]{1,200}$/,
                username: /^[A-Za-z0-9_-]{1,50}$/,
                email: /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/,
                pass: /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,}$/,
            },
            name: "",
            surname: "",
            user: "",
            email: "",
            pass1: "",
            pass2: "",
            picture: "",
            role: "",
            csrf_token: "",
            error: {
                exists: false,
                mensaje: "",
            },
        };
    },
    mounted() {
        this.csrf_token = document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content");

        const oldDiv = document.querySelector("#old");
        if (oldDiv) {
            const oldData = JSON.parse(oldDiv.innerText);

            if (oldData.name) {
                this.name = oldData.name;
                this.role = oldData.role;
                this.surname = oldData.surname;
                this.email = oldData.email;
                this.user = oldData.nickname;
            }

            oldDiv.remove();
        }
    },
    methods: {
        sendForm(event) {
            event.preventDefault();

            if (this.validateForm())
                document.querySelector("#form-registro").submit();
        },

        validateName(name) {
            const input = document.getElementById("grid-first-name");

            if (this.rg.name.test(name)) {
                this.error = false;
                input.style.borderColor = "green";
            } else {
                this.error = true;
                input.style.borderColor = name === "" ? "blue" : "red";
            }
        },

        validateSurname(surname) {
            const input = document.getElementById("grid-surname");

            if (this.rg.surname.test(surname)) {
                this.error = false;
                input.style.borderColor = "green";
            } else {
                this.error = true;
                input.style.borderColor = surname === "" ? "blue" : "red";
            }
        },

        validateUser(user) {
            const input = document.getElementById("grid-username");

            if (this.rg.username.test(user)) {
                this.error = false;
                input.style.borderColor = "green";
            } else {
                this.error = true;
                input.style.borderColor = user === "" ? "blue" : "red";
            }
        },

        validateEmail(email) {
            const input = document.getElementById("grid-email");

            if (this.rg.email.test(email)) {
                this.error = false;
                input.style.borderColor = "green";
            } else {
                this.error = true;
                input.style.borderColor = email === "" ? "blue" : "red";
            }
        },

        validatePassword(pass1) {
            const input = document.getElementById("grid-first-pass");

            if (this.rg.pass.test(pass1)) {
                this.error = false;
                input.style.borderColor = "green";
            } else {
                this.error = true;
                input.style.borderColor = pass1 === "" ? "blue" : "red";
            }

            this.comparePasswords(this.pass1, this.pass2);
        },

        comparePasswords(pass1, pass2) {
            const input = document.getElementById("grid-second-pass");

            if (pass1 === pass2 && pass1 !== "") {
                this.error = false;
                input.style.borderColor = "green";
            } else {
                this.error = true;
                input.style.borderColor = pass2 === "" ? "blue" : "red";
            }
        },

        validateForm() {
            // Comprobar las validaciones
            this.validateName(this.name);
            this.validateSurname(this.surname);
            this.validateUser(this.user);
            this.validateEmail(this.email);
            this.validatePassword(this.pass1);
            this.comparePasswords(this.pass1, this.pass2);

            return !this.error;
        },
    },
};
</script>

<template>
    <div
        id="borde-monitor"
        class="grid grid-cols-1 md:grid-cols-2 items-center py-24 px-10 md:p-14"
    >
        <div class="flex justify-center md:border-r-4">
            <a class="logo" :href="route('index')"
                ><img src="@/src/img/menu/parasolCorporation.png"
            /></a>
        </div>
        <div class="flex justify-center">
            <form
                class="w-full"
                id="form-registro"
                :action="route('user.store')"
                method="POST"
                enctype="multipart/form-data"
            >
                <input type="hidden" name="_token" :value="csrf_token" />
                <div
                    class="grid md:grid-cols-2 px-0 md:px-12 overflow-y-auto h-80 md:overflow-visible"
                >
                    <div class="w-full px-3 mb-6">
                        <input
                            class="appearance-none w-full text-gray-700 border rounded py-3 px-4 focus:outline-none"
                            id="grid-first-name"
                            v-model="name"
                            @keyup="validateName(this.name)"
                            type="text"
                            placeholder="Nombre"
                            name="name"
                            maxlength="200"
                        />
                    </div>
                    <div class="w-full px-3 mb-6">
                        <input
                            class="appearance-none w-full text-gray-700 border rounded py-3 px-4 focus:outline-none"
                            id="grid-surname"
                            v-model="surname"
                            @keyup="validateSurname(this.surname)"
                            type="text"
                            placeholder="Apellido"
                            name="surname"
                            maxlength="200"
                        />
                    </div>
                    <div class="w-full px-3 mb-6">
                        <input
                            class="appearance-none w-full text-gray-700 border rounded py-3 px-4 focus:outline-none"
                            id="grid-username"
                            v-model="user"
                            @keyup="validateUser(this.user)"
                            type="text"
                            placeholder="Username"
                            name="nickname"
                            maxlength="50"
                        />
                    </div>
                    <div class="w-full px-3 mb-6">
                        <input
                            class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 focus:outline-none"
                            id="grid-email"
                            type="email"
                            placeholder="Email"
                            v-model="email"
                            @keyup="validateEmail(this.email)"
                            name="email"
                            maxlength="200"
                        />
                    </div>
                    <div class="w-full px-3 mb-6">
                        <input
                            class="appearance-none w-full text-gray-700 border rounded py-3 px-4 focus:outline-none"
                            id="grid-first-pass"
                            type="password"
                            v-model="pass1"
                            @keyup="validatePassword(this.pass1)"
                            placeholder="******"
                            name="password"
                            maxlength="200"
                        />
                    </div>
                    <div class="w-full px-3 mb-6">
                        <input
                            class="appearance-none w-full text-gray-700 border rounded py-3 px-4 focus:outline-none"
                            id="grid-second-pass"
                            type="password"
                            v-model="pass2"
                            @keyup="comparePasswords(this.pass1, this.pass2)"
                            placeholder="******"
                            maxlength="200"
                        />
                    </div>
                    <div class="w-full px-3 mb-6">
                        <select
                            class="appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 rounded focus:outline-none"
                            name="role"
                            id="grid-role"
                        >
                            <option :selected="role === 'Alumno'">
                                Alumno
                            </option>
                            <option :selected="role === 'Profesor'">
                                Profesor
                            </option>
                        </select>
                    </div>
                    <div class="w-full px-3 mb-6">
                        <input
                            class="appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 rounded focus:outline-none"
                            name="picture"
                            id="picture"
                            type="file"
                            accept=".jpg,.jpeg,.png"
                        />
                    </div>
                    <div class="w-full px-3 mb-6">
                        <button
                            class="appearance-none block text-white font-bold py-2 px-4 rounded focus:outline-none"
                            id="btn-color"
                            type="submit"
                            @click="sendForm"
                            required
                        >
                            Registrarse
                        </button>
                    </div>
                    <div class="w-full px-3 mb-6">
                        <a
                            class="inline-block align-baseline font-bold text-l"
                            :href="route('user.login')"
                        >
                            ¿Tienes cuenta?
                            <span class="underline">Iniciar sesión</span>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</template>

<style scoped>
.logo {
    width: 60%;
}

#btn-color {
    background-color: #fca100;
}

#btn-color:hover {
    background-color: #ff7b26;
}

input[type="text"],
[type="email"],
[type="password"],
[type="file"],
select {
    background-color: #e5e5e5;
}
</style>
