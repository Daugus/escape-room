<script>
export default {
    props: {
        keyLetter: String,
    },
};
</script>

<template>
    <button :id="keyLetter">
        {{ keyLetter }}
    </button>
</template>

<style scoped lang="scss">
button {
    --color: #000;
    color: black;
    font-size: 1.4vw;
    font-weight: 700;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 4rem;
    height: 4rem;
    border: 0.3vw outset #a7a7a7;
    background-color: #999999;
    box-shadow: 0.25rem 0.25rem 1rem #00000080;
    margin: 0.5vw;
    position: relative;

    &:not(#ESC)::before {
        content: "";
        width: 0.3vw;
        height: 0.3vw;
        border-radius: 50%;
        position: absolute;
        top: 10%;
        left: 10%;
        background-color: var(--color);
        box-shadow: 0 0 0.5rem var(--color);
        transition: all 0.2s ease-in;
    }

    &::selection {
        display: none;
    }
}

/* Extra small devices (phones, 600px and down) */
@media only screen and (max-width: 600px) {
}
/* Small devices (portrait tablets and large phones, 600px and up) */
@media only screen and (max-width: 600px) {
}
/* Medium devices (landscape tablets, 768px and up) */
@media only screen and (max-width: 768px) {
}
/* Large devices (laptops/desktops, 992px and up) */
@media only screen and (max-width: 992px) {
}
/* Extra large devices (large laptops and desktops, 1200px and up) */
@media only screen and (max-width: 1500px) {
    button {
        width: 4vw;
        height: 8vh;
    }
}
</style>
