<script>
export default {
    expose: ["id", "movible"],
    data() {
        return {
            id: 0,
            distanciaX: 0,
            distanciaY: 0,
            movible: true,
        };
    },
    props: {
        conceptInfo: Object,
        index: Number,
    },
    async mounted() {
        const dragable = document.getElementById(this.getDraggableId),
            dragzone = document.getElementById(this.getDragzoneId),
            wrapper = document.querySelector(
                `#${this.getDraggableId} .wrapper`
            );

        this.dragElement(dragable, dragzone);

        this.id = this.conceptInfo.id;

        let methodIMG = new URL(
            `/public/src/img/oveja/methods/${this.index}.png`,
            import.meta.url
        );
        let methodURL = "url(" + methodIMG + ")";
        dragable.style.backgroundImage = methodURL;

        let random = Math.floor(Math.random() * 4);
        let placaIMG = new URL(
            `/public/src/img/oveja/placas/${random + 1}.png`,
            import.meta.url
        );
        let placaURL = "url(" + placaIMG + ")";
        wrapper.style.backgroundImage = placaURL;
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

                if (!this.movible) return;

                const elementRect = concept.getBoundingClientRect();
                this.distanciaX = elementRect.x;
                this.distanciaY = elementRect.y;

                concept.classList.add("absolute");

                pos3 = event.clientX;
                pos4 = event.clientY;

                concept.classList.add("drag");

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
    <div class="fondo self-center" :id="getDraggableId">
        <div :id="getDragzoneId">
            <div class="wrapper">
                <p class="text-center">
                    {{ conceptInfo.concept }} {{ conceptInfo.id }}
                </p>
            </div>
        </div>
    </div>
</template>

<style scoped lang="scss">
[id^="draggable"] {
    max-width: 20%;

    box-shadow: 2px 4px 18px rgba(0, 0, 0, 0.2);
    transition: border-color 0.2s, box-shadow 0.2s;
    overflow: hidden;

    top: v-bind("getDistanciaYpx");
    left: v-bind("getDistanciaXpx");

    transition: transform 0.2s ease-in-out;

    &.drag {
        box-shadow: 3px 6px 24px rgba(0, 0, 0, 0.5);
        transform: scale(1.2);
    }

    & [id^="dragzone"] {
        height: 100%;

        cursor: move;
        z-index: 10;
    }
}

.fondo {
    z-index: 11;
    width: 25vh;
    height: 25vh;
    border-radius: 50%;

    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;

    .wrapper {
        width: 100%;
        height: 100%;

        display: flex;
        text-align: center;
        align-items: center;
        justify-content: center;

        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;

        p {
            max-width: 70%;
            max-height: 34%;
            font-size: 2.35vh;
            font-weight: 600;
        }
    }
}
</style>
