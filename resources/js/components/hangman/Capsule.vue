<script setup></script>

<script></script>

<template>
    <div class="capsule">
        <img src="../../../../public/src/img/Capsule.png" />
        <div class="bar">
            <div class="progress"></div>
        </div>
    </div>
</template>

<style scoped lang="scss">
.capsule {
    position: relative;
    width: 75%;

    img {
        z-index: 3;
    }

    .bar {
        z-index: 2;
        position: absolute;
        background-color: #5f5f5f;
        width: 27.5%;
        height: 15%;
        top: 25%;

        .progress {
            --error: 75%;
            height: 100%;
            width: var(--error);
            background-color: #b00;
            box-shadow: 0 0 5rem #fff inset;
            animation: liquid 3s infinite ease-in-out;
        }
    }
}

@keyframes liquid {
    0% {
        box-shadow: 0 0 5rem transparent;
    }
    50% {
        background-color: #f00;
        box-shadow: 0 0 5rem #f00;
    }
    100% {
        box-shadow: 0 0 5rem transparent;
    }
}
</style>
