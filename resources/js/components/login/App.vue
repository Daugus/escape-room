<script setup>
import route from "ziggy";
</script>

<script>
export default {
    data() {
        return {
            csrf_token: "",
            user: "",
            pass: "",
            error: false,
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

            if (this.validateForm())
                document.querySelector("#form-login").submit();
        },
        validateUser(user) {
            const input = document.querySelector("#username");

            if (user === "") {
                this.error = true;
                input.style.borderColor = "red";
            } else {
                this.error = false;
                input.style.borderColor = "green";
            }
        },
        validatePassword(pass) {
            const input = document.querySelector("#pass");

            if (pass === "") {
                this.error = true;
                input.style.borderColor = "red";
            } else {
                this.error = false;
                input.style.borderColor = "green";
            }
        },
        validateForm() {
            // Comprobar las validaciones
            this.validateUser(this.user);
            this.validatePassword(this.pass1);

            return !this.error;
        },
        validateForm() {
            // Comprobar las validaciones
            this.validateUser(this.user);
            this.validatePassword(this.pass1);

            return !this.error;
        },
    },
};
</script>

<template>
    <div
        id="borde-monitor"
        class="grid grid-cols-1 md:grid-cols-2 items-center py-32 px-12 md:p-14"
    >
        <div class="flex justify-center md:border-r-4">
            <a class="logo" :href="route('index')"
                ><img src="@/src/img/menu/parasolCorporation.png"
            /></a>
        </div>

        <div class="flex justify-center items-center">
            <form
                class="w-full max-w-sm"
                id="form-login"
                :action="route('user.login')"
                method="POST"
            >
                <input type="hidden" name="_token" :value="csrf_token" />

                <div class="w-full mb-6">
                    <label class="text-2xl font-bold" for="username">
                        Username
                    </label>
                    <input
                        class="appearance-none w-full text-gray-700 border rounded py-3 px-4 focus:outline-none"
                        v-model="user"
                        id="username"
                        type="text"
                        placeholder="Username"
                        name="nickname"
                        @keyup="validateUser(this.user)"
                    />
                </div>
                <div class="w-full mb-6">
                    <label class="text-2xl font-bold" for="password">
                        Password
                    </label>
                    <input
                        class="appearance-none w-full text-gray-700 border rounded py-3 px-4 focus:outline-none"
                        v-model="pass"
                        id="pass"
                        type="password"
                        placeholder="**********"
                        name="password"
                        @keyup="validatePassword(this.pass)"
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
                        :href="route('user.create')"
                    >
                        ¿No tienes cuenta?
                        <span class="underline">Registrate!</span>
                    </a>
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
[type="password"] {
    background-color: #e5e5e5;
}

input,
label,
a {
    font-family: inter;
}
</style>
