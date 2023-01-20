<script>
export default {
    data() {
        return {
            distanceTop: "4rem",
            distanceLeft: "2rem",
        };
    },
    props: {
        conceptInfo: Object,
        conceptListIndex: Number,
    },
    mounted() {
        this.dragElement(
            document.getElementById(this.draggableId),
            document.getElementById(this.dragzoneId)
        );
    },
    methods: {
        // permite que el File sea arrastrado
        dragElement(file, dragzone) {
            let pos1 = 0,
                pos2 = 0,
                pos3 = 0,
                pos4 = 0;

            const dragPointerUp = () => {
                document.onpointerup = null;
                document.onpointermove = null;

                file.classList.remove("drag");

                // envía sus coordenadas, campo e id a App
                const fileRect = file.getBoundingClientRect();

                const fileInfo = {
                    id: this.dragzoneId,
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

                document.onpointerup = dragPointerUp;
                document.onpointermove = dragPointerMove;
            };

            dragzone.onpointerdown = dragPointerDown;
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
            <div
                class="wrapper flex justify-center items-center flex-col h-full"
            >
                <p>{{ conceptInfo.concept }}</p>
                <pre>{{ conceptInfo.field }}</pre>
            </div>
        </div>
    </div>
</template>

<style scoped lang="scss">
// estiliza todos los elementos que empiecen por "draggable"
[id^="draggable"] {
    width: 10rem;
    height: 10rem;
    border: 0.2rem solid #0f2c65;
    border-radius: 0.2rem;
    box-shadow: 2px 4px 18px rgba(0, 0, 0, 0.2);
    transition: border-color 0.2s, box-shadow 0.2s;

    position: absolute;
    top: v-bind("distanceTop");
    left: v-bind("distanceLeft");

    &.drag {
        border-color: white;
        box-shadow: 3px 6px 24px rgba(0, 0, 0, 0.5);
    }
}

// estiliza todos los elementos que empiecen por "dragzone"
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

.correct {
    background-color: green;
}
</style>
