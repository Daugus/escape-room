<script>
export default {
    props: {
        word: String,
    },
};
</script>

<template>
    <div class="panel">
        <p class="word">{{ word }}</p>
        <img src="../../../../public/src/img/ruido.gif" />
    </div>
</template>

<style scoped lang="scss">
@font-face {
    font-family: digital-7;
    src: url(../../../../public/src/fonts/digital-7.ttf);
}

.panel {
    display: flex;
    justify-content: center;
    text-align: center;
    width: max-content;
    box-shadow: 0 0 2.5rem #acff2f80;
    background-color: darkgreen;
    position: relative;
    overflow: hidden;
    z-index: 1;
}

img {
    width: 100%;
    opacity: 0.1;
    position: absolute;
    pointer-events: none;
    z-index: 2;
}

.word {
    font-family: digital-7;
    font-size: 4rem;
    letter-spacing: 0.3rem;
    text-shadow: 0 0 1rem greenyellow;
    color: yellowgreen;
    margin: 0.5rem 1rem;
    z-index: 3;
}
</style>
