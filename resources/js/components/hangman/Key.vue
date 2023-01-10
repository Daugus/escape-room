<script>
export default {
    props: {
        letter: String,
    },
};
</script>

<template>
    <button :id="letter">
        {{ letter }}
    </button>
</template>

<style scoped lang="scss">
button {
    color: black;
    font-size: 1.4rem;
    font-weight: bold;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 3rem;
    height: 3rem;
    border: 3px outset #a7a7a7;
    background-color: #999999;
    box-shadow: 0.25rem 0.25rem 1rem #00000080;
    margin: 0.3rem;
    position: relative;

    &:not(#ESC)::before {
        content: "";
        width: 4px;
        height: 4px;
        border-radius: 50%;
        position: absolute;
        background-color: #000;
        top: 0.2rem;
        left: 0.2rem;
    }
}
</style>
