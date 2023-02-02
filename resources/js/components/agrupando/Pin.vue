<script>
export default {
    data() {
        return {
            pin: 0,
        };
    },
    mounted() {
        if (localStorage.getItem("pin")) {
            this.pin = localStorage.getItem("pin");
        }
    },
    methods: {},
};
</script>

<template>
    <img src="@/src/img/agrupando/ParasolCorporation.png" />
    <div class="panel">
        <div class="row">
            <button>1</button>
            <button>2</button>
            <button>3</button>
        </div>
        <div class="row">
            <button>4</button>
            <button>5</button>
            <button>6</button>
        </div>
        <div class="row">
            <button>7</button>
            <button>8</button>
            <button>9</button>
        </div>
        <div class="row">
            <button></button>
            <button>0</button>
            <button></button>
        </div>
    </div>
</template>

<style scoped lang="scss">
img {
    width: 40%;
    padding: 1vh;
}

.panel {
    background: #0f0;
    width: 30%;
    height: 40vh;

    button {
        width: 33%;
        height: 100%;

        background: #f00;
    }
}
</style>
