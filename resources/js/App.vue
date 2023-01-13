<script>
//email -> /^[^\s@]+@[^\s@]+\.[^\s@]+$/
//password -> /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,}$/
export default {
    data() {
        return {
            name: "",
            surname: "",
            user: "",
            email: "",
            pass1: "",
            pass2: "",
            error: {
                exists: false,
                mensaje: "",
            },
        };
    },
    methods: {
        onSubmit(event) {
            event.preventDefault();

            if (this.error.exists) return console.log("ERROR");

            document.querySelector("#form-registro").submit();
        },

        validateName(name) {
            if (name === "") {
                document.getElementById("grid-first-name").style.borderColor =
                    "blue";
            } else if (/^[a-zA-Z0-9]{0,15}$/.test(name)) {
                this.error.exists = false;
                document.getElementById("grid-first-name").style.borderColor =
                    "green";
            } else {
                this.error.exists = true;
                document.getElementById("grid-first-name").style.borderColor =
                    "red";
            }
        },

        validateUser(user) {
            if (user === "") {
                document.getElementById("grid-username").style.borderColor =
                    "blue";

                document.getElementsByTagName;
            } else if (
                /^[a-zA-Z0-9]([._-](?![._-])|[a-zA-Z0-9]){1,15}[a-zA-Z0-9]$/.test(
                    user
                )
            ) {
                this.error.exists = false;
                document.getElementById("grid-username").style.borderColor =
                    "green";
            } else {
                this.error.exists = true;
                document.getElementById("grid-username").style.borderColor =
                    "red";
            }
        },

        validateEmail(email) {
            if (email === "") {
                document.getElementById("grid-email").style.borderColor =
                    "blue";
            } else if (/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g.test(email)) {
                this.error.exists = false;
                document.getElementById("grid-email").style.borderColor =
                    "green";
            } else {
                this.error.exists = true;
                document.getElementById("grid-email").style.borderColor = "red";
            }
        },

        validatePassword(pass1) {
            if (pass1 === "") {
                document.getElementById("grid-first-pass").style.borderColor =
                    "blue";
            } else if (
                /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,}$/.test(
                    pass1
                )
            ) {
                this.error.exists = false;
                document.getElementById("grid-first-pass").style.borderColor =
                    "green";
            } else {
                this.error.exist = true;
                document.getElementById("grid-first-pass").style.borderColor =
                    "red";
            }
        },

        compareTo(pass2) {
            if (pass1 === pass2) {
            }
        },
    },
    watch: {
        name(value) {
            this.name = value;
            this.validateName(value);
        },

        user(value) {
            this.user = value;
            this.validateUser(value);
        },
        email(value) {
            this.email = value;
            this.validateEmail(value);
        },

        pass(value) {
            this.pass = value;
            this.validatePassword(value);
        },
    },
};
</script>

<template>
    <div id="wrapper" class="grid grid-cols-2 items-center pr-12 pl-8 pb-12">
        <div class="flex justify-center items-center" id="logoBorder">
            <img
                class="logo"
                src="../../public/src/img/menu/parasolCorporation.png"
            />
        </div>
        <div class="flex justify-center items-center">
            <form class="w-full max-w-" id="form-registro">
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
                            type="text"
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
                            class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-email"
                            type="email"
                            v-model="email"
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
                            @keyup="validatePassword(this.pass1)"
                            placeholder="******************"
                        />
                    </div>
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-l font-bold mb-2"
                            for="grid-second-pass"
                        >
                            Rol
                        </label>
                        <select
                            class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none"
                            id="grid-role"
                        >
                            <option>Profesor</option>
                            <option>Alumno</option>
                        </select>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <label
                            for="dropzone-file"
                            class="flex flex-col items-center justify-center w-full h-30 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600"
                        >
                            <div
                                class="flex flex-col items-center justify-center pt-5 pb-6"
                            >
                                <p
                                    class="mb-2 text-sm text-gray-500 dark:text-gray-400"
                                >
                                    <span class="font-semibold">
                                        Click to upload
                                    </span>
                                    or drag and drop
                                </p>
                                <p
                                    class="text-l text-gray-500 dark:text-gray-400"
                                >
                                    PNG or JPG (MAX. 800x400px)
                                </p>
                            </div>
                            <input
                                id="dropzone-file"
                                type="file"
                                class="hidden"
                            />
                        </label>
                        <!-- <input
                            class="flex flex-col items-center justify-center mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="default_size"
                            type="file"
                        /> -->
                    </div>
                    <div class="flex items-center justify-between mt-4 ml-3">
                        <button
                            class="appearance-none block text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            id="btn-color"
                            type="submit"
                            @click="onSubmit"
                        >
                            Sign In
                        </button>
                    </div>
                    <div class="flex items-center justify-between mt-4">
                        <a
                            class="inline-block align-baseline font-bold text-l"
                            href="Registro.vue"
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
    background-image: url("../../public/src/img/menu/fondoMenu.jpg");
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
