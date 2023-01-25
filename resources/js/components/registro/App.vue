<script setup>
import route from "ziggy";
</script>

<script>
export default {
    data() {
        return {
            name: "",
            surname: "",
            user: "",
            email: "",
            pass1: "",
            pass2: "",
            picture: "",
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
    },

    methods: {
        sendForm(event) {
            event.preventDefault();

            if (this.validateFormCompletely()) {
                document.querySelector("#form-registro").submit();
                console.log("Todo correcto. Procedemos a enviar el FORM");
            } else {
                console.log("ERROR. Algunos de los campos no son válidos");
            }
        },

        validateName(name) {
            if (name !== "") {
                this.error = false;
                document.getElementById("grid-first-name").style.borderColor =
                    "green";
            } else if (name === "") {
                this.error = true;
                document.getElementById("grid-first-name").style.borderColor =
                    "blue";
            } else {
                this.error = true;
                document.getElementById("grid-first-name").style.borderColor =
                    "red";
            }
        },

        validateSurname(surname) {
            if (surname !== "") {
                this.error = false;
                document.getElementById("grid-surname").style.borderColor =
                    "green";
            } else if (surname === "") {
                this.error = true;
                document.getElementById("grid-surname").style.borderColor =
                    "blue";
            } else {
                this.error = true;
                document.getElementById("grid-surname").style.borderColor =
                    "red";
            }
        },

        validateUser(user) {
            if (user !== "") {
                this.error = false;
                document.getElementById("grid-username").style.borderColor =
                    "green";
            } else if (user === "") {
                this.error = true;
                document.getElementById("grid-username").style.borderColor =
                    "blue";
                document.getElementsByTagName;
            } else {
                this.error = true;
                document.getElementById("grid-username").style.borderColor =
                    "red";
            }
        },

        validateEmail(email) {
            if (/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g.test(email)) {
                this.error = false;
                document.getElementById("grid-email").style.borderColor =
                    "green";
            } else if (email === "") {
                this.error = true;
                document.getElementById("grid-email").style.borderColor =
                    "blue";
            } else {
                this.error = true;
                document.getElementById("grid-email").style.borderColor = "red";
            }
        },

        validatePassword(pass1) {
            if (
                /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,}$/.test(
                    pass1
                )
            ) {
                this.error = false;
                document.getElementById("grid-first-pass").style.borderColor =
                    "green";
            } else if (pass1 === "") {
                this.error = true;
                document.getElementById("grid-first-pass").style.borderColor =
                    "blue";
            } else {
                this.error = true;
                document.getElementById("grid-first-pass").style.borderColor =
                    "red";
            }
            this.comparePasswords(this.pass1, this.pass2);
        },

        comparePasswords(pass1, pass2) {
            if (pass1 === pass2 && pass1 !== "") {
                this.error = false;
                document.getElementById("grid-second-pass").style.borderColor =
                    "green";
            } else if (pass2 === "") {
                this.error = true;
                document.getElementById("grid-second-pass").style.borderColor =
                    "blue";
            } else {
                this.error = true;
                document.getElementById("grid-second-pass").style.borderColor =
                    "red";
            }
        },

        validateFormCompletely() {
            console.log("Comprobamos todo");

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

    watch: {
        name(value) {
            this.name = value;
            this.validateName(value);
        },

        surname(value) {
            this.surname = value;
            this.validateSurname(value);
        },

        user(value) {
            this.user = value;
            this.validateUser(value);
        },

        email(value) {
            this.email = value;
            this.validateEmail(value);
        },

        pass1(value) {
            this.pass1 = value;
            this.validatePassword(value);
        },

        pass2(value) {
            this.pass2 = value;
            this.comparePasswords(value);
        },
    },
};
</script>

<template>
    <div
        id="wrapper"
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
                :action="route('registro.store')"
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
                        />
                    </div>
                    <div class="w-full px-3 mb-6">
                        <select
                            class="appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 rounded focus:outline-none"
                            name="role"
                            id="grid-role"
                        >
                            <option>Alumno</option>
                            <option>Profesor</option>
                        </select>
                    </div>
                    <div class="w-full px-3 mb-6">
                        <input
                            class="appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 rounded focus:outline-none"
                            name="picture"
                            id="picture"
                            type="file"
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
                            :href="route('login.index')"
                        >
                            Tienes cuenta? Inciar sesión
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
