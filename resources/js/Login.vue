<script setup></script>

<template>
    <div id="wrapper" class="grid grid-cols-2 items-center pr-12 pl-8 pb-12">
        <div class="flex justify-center items-center" id="logoBorder">
            <img
                class="logo"
                src="../../public/src/img/menu/parasolCorporation.png"
            />
        </div>
        <div class="flex justify-center items-center">
            <form class="w-full max-w-sm">
                <div class="mb-4">
                    <label class="text-3xl font-bold" for="username">
                        Username
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full mt-2 py-2 px-3 leading-tight"
                        id="username"
                        type="text"
                        placeholder="Username"
                    />
                </div>
                <div class="mb-6">
                    <label class="text-3xl font-bold" for="password">
                        Password
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full mt-2 py-2 px-3 leading-tight"
                        id="password"
                        type="password"
                        placeholder="******************"
                    />
                </div>

                <div class="flex items-center justify-between mt-4">
                    <button
                        class="text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        id="btn-color"
                        type="submit"
                    >
                        Sign In
                    </button>
                    <a
                        class="inline-block align-baseline font-bold text-sm"
                        href="Registro.vue"
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

#username {
    background-color: #e5e7e6;
}

#password {
    background-color: #e5e7e6;
}

input,
label,
a {
    font-family: inter;
}
</style>
