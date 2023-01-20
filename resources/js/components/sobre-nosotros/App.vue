<script setup>
import route from "ziggy";
</script>

<script></script>

<template>
    <div id="wrapper" class="grid items-center p-16">
        <div class="grid grid-cols-1 grid-rows-1 items-center m-10">
            <div class="px-8 scrollbar-thin overflow-y-scroll" id="altura">
                <div class="flex justify-center items-center" id="logoBorder">
                    <img
                        class="logo"
                        src="@/src/img/sobre-nosotros/ParasolCorporation.png"
                    />
                </div>
                <div class="grid grid-cols-2 items-center">
                    <div>¿Qué tenía el vial?</div>
                    <div>
                        <img
                            src="@/src/img/sobre-nosotros/ParasolCorporation.png"
                        />
                    </div>
                </div>
                <h1 class="border-b-4 border-black mb-4">
                    ¿Qué tenía el vial?
                </h1>
                <p>
                    En un laboratorio de máxima seguridad biológica, seguridad
                    de nivel 4, ha ocurrido un terrible accidente. A una persona
                    trabajadora del mismo, Eider, se le ha roto un vial cuando
                    lo transportaba. Dicho vial contiene agentes biológicos del
                    grupo IV. Esto quiere decir, como sabes, que supone un serio
                    peligro para las personas trabajadoras, con muchas
                    probabilidades de que se propague a la colectividad y sin
                    que exista, generalmente, una profilaxis o un tratamiento
                    eficaz.
                </p>
                <br />
                <p>
                    Desgraciadamente, la persona encargada de la gestión del
                    vial ha olvidado etiquetar este. No sabemos de qué
                    microorganismo se trata ni el tratamiento, antibiótico o
                    antídoto que debemos utilizar…
                </p>
                <br />
                <p>
                    Menos mal que Eider ha reaccionado con rapidez al romper el
                    vial y se ha apresurado a presionar el botón de alarma y las
                    puertas blindadas se han cerrado a tiempo para impedir la
                    expansión del agente biológico.
                </p>
                <br />
                <p>
                    Eider tiene a partir de este momento 60 minutos para
                    determinar el antídoto, ingerirlo y acabar con el
                    microorganismo mortal. Para conseguirlo deberá realizar una
                    serie de pruebas, que le permitirán obtener los códigos
                    secretos que abren las puertas de otras salas y almacenes de
                    reactivos. ¿Le ayudas a conseguirlo?
                </p>

                <h1 class="border-b-4 border-black">Juego</h1>

                <h1 class="border-b-4 border-black">Recomendaciones</h1>
                <p class="p-4"></p>

                <h1 class="border-b-4 border-black">Sobre nosotros</h1>
                <p class="p-4"></p>

                <h1 class="border-b-4 border-black">Terminos etc(?</h1>
                <p class="p-4"></p>
            </div>
        </div>
        <!-- <div class="flex" id="logoBorder">
            <img
                class="logo"
                src="@/src/img/sobre-nosotros/ParasolCorporation.png"
            />
        </div> -->

        <!--
            -Sobre nosotros
            -Historia del juego
            -Que será necesario
            -Como puedes jugar
            -Terminos etc...(?
        -->
    </div>
</template>

<style scoped>
#wrapper {
    height: 100vh;
    width: 100%;
    background-image: url("@/src/img/menu/fondoMenu.jpg");
    background-repeat: no-repeat;
    background-size: 100% 100vh;
}

.logo {
    width: 50%;
}

.flex {
    display: flex;
    align-content: flex-start;
}

#altura {
    height: 570px;
}
</style>
