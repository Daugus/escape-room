<script setup>
import route from "ziggy";
</script>

<script>
export default {
    data() {
        return {};
    },
    methods: {},
    watch: {},
};
</script>

<template>
    <div id="wrapper" class="grid grid-cols-2 items-center pr-12 pl-8 pb-12">
        <div class="flex justify-center items-center" id="logoBorder">
            <img class="logo" src="@/src/img/menu/parasolCorporation.png" />
        </div>

        <div class="flex justify-center items-center"></div>
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

#username {
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
