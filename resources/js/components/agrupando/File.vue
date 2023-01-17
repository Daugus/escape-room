<script>
export default {
    data() {
        return {};
    },
    props: {
        conceptInfo: {},
    },
    mounted() {
        const dragable = document.getElementById(this.draggableId),
            dragzone = document.getElementById(this.dragzoneId);

        this.dragElement(dragable, dragzone);
    },
    methods: {
        dragElement(element, dragzone) {
            let pos1 = 0,
                pos2 = 0,
                pos3 = 0,
                pos4 = 0;

            const dragPointerUp = () => {
                document.onpointerup = null;
                document.onpointermove = null;

                element.classList.remove("drag");
            };

            const dragPointerMove = (event) => {
                event.preventDefault();

                pos1 = pos3 - event.clientX;
                pos2 = pos4 - event.clientY;
                pos3 = event.clientX;
                pos4 = event.clientY;

                element.style.top = `${element.offsetTop - pos2}px`;
                element.style.left = `${element.offsetLeft - pos1}px`;
            };

            const dragPointerDown = (event) => {
                event.preventDefault();

                pos3 = event.clientX;
                pos4 = event.clientY;

                element.classList.add("drag");

                document.onpointerup = dragPointerUp;
                document.onpointermove = dragPointerMove;

                const fileRect = document
                    .querySelector(`#${this.draggableId}`)
                    .getBoundingClientRect();

                const fileInfo = {
                    field: this.conceptInfo.field,
                    start: {
                        x: fileRect.x,
                        y: fileRect.y,
                    },
                    end: {
                        x: fileRect.x + fileRect.width,
                        y: fileRect.y + fileRect.height,
                    },
                };

                this.$emit("getCurrentFileInfo", fileInfo);
            };

            dragzone.onpointerdown = dragPointerDown;
        },
    },
    computed: {
        draggableId() {
            return `draggable-${this.conceptInfo.id}`;
        },
        dragzoneId() {
            return `dragzone-${this.conceptInfo.id}`;
        },
    },
};
</script>

<template>
    <div :id="draggableId">
        <header :id="dragzoneId">
            <div
                class="wrapper flex justify-center items-center flex-col h-full"
            >
                <p>{{ conceptInfo.concept }}</p>
                <!-- !!! quitar -->
                <pre>{{ conceptInfo.field }}</pre>
            </div>
        </header>
    </div>
</template>

<style scoped lang="scss">
[id^="draggable"] {
    width: 10rem;
    height: 10rem;
    border: 0.2rem solid #0f2c65;
    border-radius: 0.2rem;
    box-shadow: 2px 4px 18px rgba(0, 0, 0, 0.2);
    transition: border-color 0.2s, box-shadow 0.2s;

    z-index: 9;
    position: absolute;
    top: 4rem;
    left: 2rem;

    &.drag {
        border-color: white;
        box-shadow: 3px 6px 24px rgba(0, 0, 0, 0.5);
    }
}

[id^="dragzone"] {
    width: 100%;
    height: 100%;

    cursor: move;
    z-index: 10;
    background-color: #0f2c65;
    color: white;
}

.wrapper {
    position: relative;
    border-radius: 10px;
}
</style>
