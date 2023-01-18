<script>
export default {
    props: {
        imagen: String,
        texto: String,
    },
};
</script>

<template>
    <div class="flex">
        <a href=""><img :src="imagen" /></a>
        <a class="font-bold text-3xl" href="">{{ texto }}</a>
    </div>
</template>

<style scoped lang="scss">
img {
    width: 65%;
}
div {
    text-align: center;
    align-items: center;
}

a {
    font-family: inter;
}
</style>
