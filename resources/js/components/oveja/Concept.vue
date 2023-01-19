<script>
export default {
    data() {
        return {
            distanciaX: 0,
            distanciaY: 0,
        };
    },
    props: {
        conceptInfo: Object,
    },
    async mounted() {
        const dragable = document.getElementById(this.getDraggableId),
            dragzone = document.getElementById(this.getDragzoneId);

        this.dragElement(dragable, dragzone);
    },
    methods: {
        dragElement(concept, dragzone) {
            let pos1 = 0,
                pos2 = 0,
                pos3 = 0,
                pos4 = 0;

            const dragPointerUp = () => {
                document.onpointerup = null;
                document.onpointermove = null;

                concept.classList.remove("drag");
                // element.classList.add("z-0");

                const conceptRect = concept.getBoundingClientRect();

                const conceptInfo = {
                    id: this.conceptInfo.id,
                    dragzoneId: this.getDragzoneId,
                    start: {
                        x: conceptRect.x,
                        y: conceptRect.y,
                    },
                    end: {
                        x: conceptRect.x + conceptRect.width,
                        y: conceptRect.y + conceptRect.height,
                    },
                };
                this.$emit("getCurrentConceptInfo", conceptInfo);
            };

            const dragPointerMove = (event) => {
                event.preventDefault();

                pos1 = pos3 - event.clientX;
                pos2 = pos4 - event.clientY;
                pos3 = event.clientX;
                pos4 = event.clientY;

                this.distanciaX = `${concept.offsetLeft - pos1}`;
                this.distanciaY = `${concept.offsetTop - pos2}`;
            };

            const dragPointerDown = (event) => {
                event.preventDefault();

                const elementRect = concept.getBoundingClientRect();
                this.distanciaX = elementRect.x;
                this.distanciaY = elementRect.y;

                concept.classList.add("absolute");

                pos3 = event.clientX;
                pos4 = event.clientY;

                concept.classList.add("drag");
                // element.classList.remove("z-10");

                document.onpointerup = dragPointerUp;
                document.onpointermove = dragPointerMove;
            };

            dragzone.onpointerdown = dragPointerDown;
        },
    },
    computed: {
        getDraggableId() {
            return `draggable-${this.conceptInfo.id}`;
        },
        getDragzoneId() {
            return `dragzone-${this.conceptInfo.id}`;
        },
        getDistanciaXpx() {
            return `${this.distanciaX}px`;
        },
        getDistanciaYpx() {
            return `${this.distanciaY}px`;
        },
    },
};
</script>

<template>
    <div class="self-center" :id="getDraggableId">
        <div :id="getDragzoneId">
            <div class="wrapper">
                <p>{{ conceptInfo.concept }}</p>
            </div>
        </div>
    </div>
</template>

<style scoped lang="scss">
[id^="draggable"] {
    width: 10rem;

    border: 0.2rem solid red;
    border-radius: 0.2rem;
    box-shadow: 2px 4px 18px rgba(0, 0, 0, 0.2);
    transition: border-color 0.2s, box-shadow 0.2s;
    background-color: red;
    overflow: hidden;

    top: v-bind("getDistanciaYpx");
    left: v-bind("getDistanciaXpx");

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
