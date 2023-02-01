<script>
export default {
    data() {
        return {
            distanceTop: 0,
            distanceLeft: 0,
        };
    },
    props: {
        conceptInfo: Object,
        conceptListIndex: Number,
    },
    mounted() {
        const file = document.getElementById(this.draggableId);
        const dragzone = document.getElementById(this.dragzoneId);

        this.distanceTop = dragzone.offsetTop + "px";
        this.distanceLeft = dragzone.offsetLeft + "px";

        setTimeout(() => {
            file.style.position = "absolute";
            this.dragElement(file, dragzone);
        }, 500);
    },
    methods: {
        // permite que el File sea arrastrado
        dragElement(file, dragzone) {
            let pos1 = 0,
                pos2 = 0,
                pos3 = 0,
                pos4 = 0;

            const dragPointerUp = () => {
                document.onmouseup = null;
                document.onmousemove = null;

                document.ontouchend = null;
                document.ontouchmove = null;

                file.classList.remove("drag");

                // envía sus coordenadas, campo e id a App
                const fileRect = document
                    .querySelector(`#${this.draggableId}`)
                    .getBoundingClientRect();

                const fileInfo = {
                    id: this.draggableId,
                    field: this.conceptInfo.field,
                    listIndex: this.conceptListIndex,
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

            const dragPointerMove = (e) => {
                e.preventDefault();

                pos1 = pos3 - e.clientX;
                pos2 = pos4 - e.clientY;
                pos3 = e.clientX;
                pos4 = e.clientY;

                this.distanceTop = `${file.offsetTop - pos2}px`;
                this.distanceLeft = `${file.offsetLeft - pos1}px`;
            };

            const dragPointerDown = (e) => {
                e.preventDefault();

                pos3 = e.clientX;
                pos4 = e.clientY;

                file.classList.add("drag");

                document.onmouseup = dragPointerUp;
                document.onmousemove = dragPointerMove;

                document.ontouchend = dragPointerUp;
                document.ontouchmove = dragPointerMove;
            };

            dragzone.onmousedown = dragPointerDown;
            dragzone.ontouchstart = dragPointerDown;
        },
    },
    // genera las id únicas que van a usar el template
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
        <div :id="dragzoneId">
            <img src="@/src/img/agrupando/file.png" />
            <p draggable="nones">{{ conceptInfo.concept }}</p>
            <!-- <pre>{{ conceptInfo.field }}</pre> -->
        </div>
    </div>
</template>

<style scoped lang="scss">
// estiliza todos los elementos que empiecen por "draggable"
[id^="draggable"] {
    width: 10vh;
    padding: 1%;
    z-index: 9;
    top: v-bind("distanceTop");
    left: v-bind("distanceLeft");

    &:hover {
        background-color: rgba(0, 255, 255, 0.2);
        border: 1px solid rgba(0, 255, 255, 0.75);
        border-radius: 5%;
    }

    img {
        width: 50%;
        filter: drop-shadow(0 0 0.5rem rgba(0, 0, 0, 0.25));
        pointer-events: none;
    }

    p,
    pre {
        cursor: default;
        max-width: 100%;
        overflow: hidden;
        text-overflow: ellipsis;
        color: white;
        font-size: 1.5vh;
        text-shadow: 0 0 0.5rem black;

        &::selection {
            display: none;
        }
    }
}

// estiliza todos los elementos que empiecen por "dragzone"
[id^="dragzone"] {
    z-index: 10;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.hidden {
    display: none;
}

.correct {
    animation: disappear 0.5s 1;
}

@keyframes disappear {
    0% {
        transform: scale(1);
    }

    100% {
        transform: scale(0);
    }
}
</style>
