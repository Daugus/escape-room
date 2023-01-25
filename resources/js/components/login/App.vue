<script setup>
import route from "ziggy";
</script>

<script>
export default {
    data() {
        return {
            username: "",
            pass: "",
            error: "",
        };
    },

    methods: {
        onSubmit(event) {
            event.preventDefault();

            if (this.error.exists) return console.log("ERROR");

            document.querySelector("#form-login").submit();
        },

        validateUsername(username) {
            document.getElementById("username").style.borderColor = "green";
        },

        validatePassword(pass) {
            document.getElementById("password").classList;
        },
    },

    watch: {},
};
</script>

<template>
    <div
        id="wrapper"
        class="grid grid-cols-1 md:grid-cols-2 items-center py-32 px-12 md:p-14"
    >
        <div class="flex justify-center md:border-r-4">
            <a class="logo" :href="route('index')"
                ><img src="@/src/img/menu/parasolCorporation.png"
            /></a>
        </div>

        <div class="flex justify-center items-center">
            <form class="w-full max-w-sm" id="form-login">
                <div class="w-full mb-6">
                    <label class="text-2xl font-bold" for="username">
                        Username
                    </label>
                    <input
                        class="appearance-none w-full text-gray-700 border rounded py-3 px-4 focus:outline-none"
                        id="username"
                        type="text"
                    />
                </div>
                <div class="w-full mb-6">
                    <label class="text-2xl font-bold" for="password">
                        Password
                    </label>
                    <input
                        class="appearance-none w-full text-gray-700 border rounded py-3 px-4 focus:outline-none"
                        id="pass"
                        type="password"
                        placeholder="**********"
                    />
                </div>

                <div class="w-full mb-6">
                    <button
                        class="appearance-none block text-white font-bold py-2 px-4 rounded focus:outline-none"
                        id="btn-color"
                        type="submit"
                    >
                        Sign In
                    </button>
                </div>
                <div class="w-full mb-6">
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

#btn-color {
    background-color: #fca100;
}

#btn-color:hover {
    background-color: #ff7b26;
}

input[type="text"],
[type="password"] {
    background-color: #e5e5e5;
}

input,
label,
a {
    font-family: inter;
}
</style>
