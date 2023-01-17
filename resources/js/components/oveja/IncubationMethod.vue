p
<script>
export default {
    data() {
        return {};
    },
    props: {
        incubationMethodInfo: Object,
    },
    async mounted() {
        const dragable = document.getElementById(this.getDraggableId),
            dragzone = document.getElementById(this.getDragzoneId);

        this.dragElement(dragable, dragzone);
    },
    methods: {
        dragElement(element, dragzone) {
            let pos1 = 0,
                pos2 = 0,
                pos3 = 0,
                pos4 = 0;

            const dragMouseUp = () => {
                document.onmouseup = null;
                document.onmousemove = null;

                element.classList.remove("drag");
            };

            const dragMouseMove = (event) => {
                event.preventDefault();

                pos1 = pos3 - event.clientX;
                pos2 = pos4 - event.clientY;
                pos3 = event.clientX;
                pos4 = event.clientY;

                element.style.top = `${element.offsetTop - pos2}px`;
                element.style.left = `${element.offsetLeft - pos1}px`;
            };

            const dragMouseDown = (event) => {
                event.preventDefault();

                pos3 = event.clientX;
                pos4 = event.clientY;

                element.classList.add("drag");

                document.onmouseup = dragMouseUp;
                document.onmousemove = dragMouseMove;
            };

            dragzone.onmousedown = dragMouseDown;
        },
    },
    computed: {
        getDraggableId() {
            return `draggable-${
                this.incubationMethodInfo.concept ? "concept" : "definition"
            }-${this.incubationMethodInfo.id}`;
        },
        getDragzoneId() {
            return `dragzone-${
                this.incubationMethodInfo.concept ? "concept" : "definition"
            }-${this.incubationMethodInfo.id}`;
        },
    },
};
// Coger una palabra aleatoria desde un JSON
</script>

<template>
    <div :id="getDraggableId">
        <header :id="getDragzoneId">
            <div class="wrapper">
                <p v-if="this.incubationMethodInfo.concept">
                    {{ this.incubationMethodInfo.concept }}
                </p>
                <p v-else>{{ this.incubationMethodInfo.definition }}</p>
            </div>
        </header>
    </div>
</template>

<style scoped lang="scss">
[id^="draggable"] {
    width: 10rem;
    border: 0.2rem solid #0004ff;
    border-radius: 0.2rem;
    box-shadow: 2px 4px 18px rgba(0, 0, 0, 0.2);
    transition: border-color 0.2s, box-shadow 0.2s;
    background-color: red;
    overflow: hidden;

    z-index: 9;
    position: absolute;

    &.drag {
        border-color: white;
        box-shadow: 3px 6px 24px rgba(0, 0, 0, 0.5);
    }

    & [id^="dragzone"] {
        height: 100%;

        cursor: move;
        z-index: 10;
        background-color: #0055ff;
    }
}

.wrapper {
    position: relative;
    border-radius: 10px;
}
</style>
