p
<script>
export default {
    data() {
        return {
            color: "red",
            distanciaX: 10,
            distanciaY: 10,
        };
    },
    props: {
        incubationMethodInfo: Object,
    },
    async mounted() {
        const dragable = document.getElementById(this.getDraggableId),
            dragzone = document.getElementById(this.getDragzoneId);

        // this.getIncubationMethod(this.getDraggableId);

        // this.getIncubationMethod();
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

                this.distanciaX = `${element.offsetTop - pos2}`;
                this.distanciaY = `${element.offsetLeft - pos1}`;
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

        getIncubationMethod() {
            // let thisElement = document.querySelector("#" + id);
            let thisElements = document.querySelectorAll("#vue div");
            console.log(thisElements);

            // if (thisElement.id.includes("concept") === true) {
            //     console.log("esto es un concepto");
            //     this.$emit("getConcept", thisElement);
            // } else {
            //     console.log("esto es una definicion");
            //     this.$emit("getDefinition", thisElement);
            // }

            // console.log("se ha pasado al padre");
        },

        // placeMethod() {
        //     let thisElement = document.querySelector("#" + this.getDraggableId);

        //     // if (thisElement.previousSibling + "" !== "[object HTMLDivElement]")
        //     //     return;

        //     // let previousElement = thisElement.previousSibling;

        //     // console.log(previousElement.distanciaX);

        //     // for (let i = 0; i < 6; i++) {
        //     //     this.distanciaX = this.distanciaX + 15 * i;
        //     //     for (let j = 0; j < 2; j++) {
        //     //         this.distanciaY = this.distanciaY + 15 * i;
        //     //     }
        //     // }
        // },
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
        getDistanciaXpx() {
            return `${this.distanciaX}px`;
        },
        getDistanciaYpx() {
            return `${this.distanciaY}px`;
        },
    },
};
// Coger una palabra aleatoria desde un JSON
</script>

<template>
    <div :id="getDraggableId">
        <div :id="getDragzoneId">
            <div class="wrapper">
                <p v-if="this.incubationMethodInfo.concept">
                    {{ this.incubationMethodInfo.concept }}
                </p>
                <p v-else>{{ this.incubationMethodInfo.definition }}</p>
            </div>
        </div>
    </div>
</template>

<style scoped lang="scss">
[id^="draggable"] {
    width: 10rem;

    border: 0.2rem solid v-bind("color");
    border-radius: 0.2rem;
    box-shadow: 2px 4px 18px rgba(0, 0, 0, 0.2);
    transition: border-color 0.2s, box-shadow 0.2s;
    background-color: red;
    overflow: hidden;

    z-index: 9;
    position: absolute;
    top: v-bind("getDistanciaXpx");
    left: v-bind("getDistanciaYpx");

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
