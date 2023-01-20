<script setup>
import route from "ziggy";
</script>

<script>
export default {
    data() {
        return {
            csrf_token: "",
            nickname: "",
            pass: "",
            error: "",
        };
    },
    mounted() {
        this.csrf_token = document
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content");
    },
    methods: {
        onSubmit(event) {
            event.preventDefault();

            if (this.error.exists) return console.log("ERROR");

            document.querySelector("#form-login").submit();
        },

        validateNickname(nickname) {
            document.getElementById("nickname").style.borderColor = "green";
        },

        validatePassword(pass) {
            document.getElementById("password").classList;
        },
    },
    watch: {},
};
</script>

<template>
    <div id="wrapper" class="grid grid-cols-2 items-center pr-12 pl-8 pb-12">
        <div class="flex justify-center items-center" id="logoBorder">
            <img class="logo" src="@/src/img/menu/parasolCorporation.png" />
        </div>

        <div class="flex justify-center items-center">
            <form
                class="w-full max-w-sm"
                method="POST"
                :action="route('login.validate')"
                id="form-login"
            >
                <input type="hidden" name="_token" :value="csrf_token" />

                <div class="mb-4">
                    <label class="text-3xl font-bold" for="nickname">
                        Usuario
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full mt-2 py-2 px-3 leading-tight focus:outline-none"
                        id="nickname"
                        name="nickname"
                        type="text"
                        placeholder="Usuario"
                    />
                </div>
                <div class="mb-6">
                    <label class="text-3xl font-bold" for="password">
                        Contraseña
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full mt-2 py-2 px-3 leading-tight focus:outline-none"
                        id="pass"
                        name="password"
                        type="password"
                        placeholder="Contraseña"
                    />
                </div>

                <div class="flex items-center justify-between mt-4">
                    <button
                        class="text-white font-bold py-2 px-4 rounded focus:outline-none"
                        id="btn-color"
                        type="submit"
                    >
                        Sign In
                    </button>
                    <a
                        class="inline-block align-baseline font-bold text-l"
                        :href="route('registro.index')"
                    >
                        No tienes cuenta? Registrate!
                    </a>
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

#nickname {
    background-color: #e5e7e6;
}

#pass {
    background-color: #e5e7e6;
}

input,
label,
a {
    font-family: inter;
}
</style>
