<script setup></script>
<script>
export default {
    data() {
        return {
            email: "",
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
        validateEmail(email) {
            if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email)) {
                this.error.exists = false;
            } else {
                this.error.exists = true;
                document.getElementById("grid-email").style.backgroundColor =
                    "red";
            }
        },
    },
    watch: {
        email(value) {
            this.email = value;
            this.validateEmail(value);
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
            <form id="form-registro" class="w-full max-w-">
                <div class="grid grid-cols-2 items-center px-12">
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-name"
                        >
                            Nombre
                        </label>
                        <input
                            class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-name"
                            type="text"
                        />
                    </div>
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-surname"
                        >
                            Apellido
                        </label>
                        <input
                            class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-surname"
                            type="text"
                        />
                    </div>
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-username"
                        >
                            Username
                        </label>
                        <input
                            class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-username"
                            type="text"
                        />
                    </div>
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-email"
                        >
                            Correo
                        </label>
                        <input
                            class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-email"
                            type="email"
                            v-model="email"
                            required
                        />
                    </div>
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-first-pass"
                        >
                            Contraseña
                        </label>
                        <input
                            class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-first-pass"
                            type="password"
                            placeholder="******************"
                        />
                    </div>
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <label
                            class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="grid-second-pass"
                        >
                            Repetir contraseña
                        </label>
                        <input
                            class="appearance-none block w-full text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                            id="grid-second-pass"
                            type="password"
                            placeholder="******************"
                        />
                    </div>
                    <div class="w-full px-3 mb-6 md:mb-0">
                        <select
                            class="block appearance-none w-full border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none"
                            id="grid-state"
                        >
                            <option>Profesor</option>
                            <option>Alumno</option>
                        </select>
                    </div>
                    <div class="flex items-center justify-center w-full">
                        <!-- <label
                            for="dropzone-file"
                            class="flex flex-col items-center justify-center w-full h-30 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600"
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
                                    class="text-xs text-gray-500 dark:text-gray-400"
                                >
                                    PNG or JPG (MAX. 800x400px)
                                </p>
                            </div>
                            <input
                                id="dropzone-file"
                                type="file"
                                class="hidden"
                            />
                        </label> -->
                        <input
                            class="flex flex-col items-center justify-center mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                            id="default_size"
                            type="file"
                        />
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
                            class="inline-block align-baseline font-bold text-sm"
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
</style>
