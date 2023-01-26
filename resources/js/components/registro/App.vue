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
    <div id="wrapper" class="grid grid-cols-2 items-center pr-12 pl-8 pb-12">
        <div class="flex justify-center items-center" id="logoBorder">
            <img class="logo" src="@/src/img/menu/parasolCorporation.png" />
        </div>

        <div class="flex justify-center items-center">
            <form
                class="w-full max-w-"
                id="form-registro"
                :action="route('user.store')"
                method="POST"
                enctype="multipart/form-data"
            >
                <input type="hidden" name="_token" :value="csrf_token" />

                <div class="grid grid-cols-2 items-center px-12">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-l font-bold mb-2"
                            for="grid-first-name"
                        >
                            Nombre
                        </label>
                        <input
                            class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name"
                            v-model="name"
                            @keyup="validateName(this.name)"
                            type="text"
                            placeholder="Nombre"
                            name="name"
                            maxlength="200"
                        />
                    </div>

                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-l font-bold mb-2"
                            for="grid-surname"
                        >
                            Apellido
                        </label>
                        <input
                            class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-surname"
                            v-model="surname"
                            @keyup="validateSurname(this.surname)"
                            type="text"
                            placeholder="Apellido"
                            name="surname"
                            maxlength="200"
                        />
                    </div>

                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-l font-bold mb-2"
                            for="grid-username"
                        >
                            Username
                        </label>
                        <input
                            class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-username"
                            v-model="user"
                            @keyup="validateUser(this.user)"
                            type="text"
                            placeholder="Username"
                            name="nickname"
                            maxlength="50"
                        />
                    </div>

                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-l font-bold mb-2"
                            for="grid-email"
                        >
                            Correo
                        </label>
                        <input
                            class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none"
                            id="grid-email"
                            type="email"
                            placeholder="Email"
                            v-model="email"
                            @keyup="validateEmail(this.email)"
                            name="email"
                            maxlength="200"
                        />
                    </div>

                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-l font-bold mb-2"
                            for="grid-first-pass"
                        >
                            Contraseña
                        </label>
                        <input
                            class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none"
                            id="grid-first-pass"
                            type="password"
                            v-model="pass1"
                            @keyup="validatePassword(this.pass1)"
                            placeholder="******************"
                            name="password"
                            maxlength="200"
                        />
                    </div>

                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-l font-bold mb-2"
                            for="grid-second-pass"
                        >
                            Repetir contraseña
                        </label>
                        <input
                            class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none"
                            id="grid-second-pass"
                            type="password"
                            v-model="pass2"
                            @keyup="comparePasswords(this.pass1, this.pass2)"
                            placeholder="******************"
                            maxlength="200"
                        />
                    </div>

                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-l font-bold mb-2"
                            for="grid-role"
                        >
                        </label>
                        <select
                            class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none"
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

                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-l font-bold mb-2"
                            for="picture"
                        >
                        </label>
                        <input
                            class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none"
                            name="picture"
                            id="picture"
                            type="file"
                            accept=".jpg,.jpeg,.png"
                        />
                    </div>

                    <div class="flex items-center justify-between mt-4 ml-3">
                        <button
                            class="appearance-none block text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            id="btn-color"
                            type="submit"
                            @click="sendForm"
                            required
                        >
                            Registrarse
                        </button>
                    </div>

                    <div class="flex items-center justify-between mt-4">
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
#wrapper {
    height: 100vh;
    width: 100%;
    background-image: url("@/src/img/menu/fondoMenu.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100vh;
}

.logo {
    width: 60%;
}

#logoBorder {
    border-right: solid 3px black;
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
