<script setup>
import route from "ziggy";
</script>

<script></script>

<template>
    <div id="borde-monitor" class="grid items-center py-12 md:p-16">
        <div class="m-12 p-6 overflow-y-scroll h-4/5">
            <div class="flex justify-center mb-8">
                <a class="w-full md:w-3/6" :href="route('index')">
                    <img
                        src="@/src/img/sobre-nosotros/parasolCorporation.png"
                    />
                </a>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3">
                <div>
                    <h1 class="text-4xl font-bold mb-2">¿Qué tenía el vial?</h1>
                    <img
                        src="@/src/img/sobre-nosotros/vial.png"
                        class="flex justify-center w-3/6 md:w-36"
                    />
                </div>
                <div class="col-span-2 p-4 rounded-lg" id="bg-text">
                    <p class="text-base">
                        En un laboratorio de máxima seguridad biológica, ha
                        ocurrido un terrible accidente. A una persona se le ha
                        roto un vial cuando lo transportaba el cual, contiene
                        agentes biológicos del grupo IV. Esto supone un peligro
                        para las personas trabajadoras, con muchas
                        probabilidades de que se propague a la colectividad y
                        sin que exista, generalmente, una profilaxis o un
                        tratamiento eficaz.
                    </p>
                    <br />
                    <p>
                        Desgraciadamente, la persona encargada ha olvidado
                        etiquetar este vial. No sabemos de qué microorganismo se
                        trata ni el tratamiento, antibiótico o antídoto que
                        debemos utilizar…
                    </p>
                    <br />
                    <p>
                        Menos mal que ha reaccionado con rapidez al romper el
                        vial y se ha apresurado a presionar el botón de alarma y
                        las puertas blindadas se han cerrado a tiempo para
                        impedir la expansión del agente biológico.
                    </p>
                    <br />
                    <p>
                        A partir de este momento hay 60 minutos para determinar
                        el antídoto, ingerirlo y acabar con el microorganismo
                        mortal. Para conseguirlo deberá realizar una serie de
                        pruebas, que le permitirán obtener los códigos secretos
                        que abren las puertas de otras salas y almacenes de
                        reactivos. ¿Le ayudas a conseguirlo?
                    </p>
                </div>
            </div>
            <br /><br />
            <h1 class="border-b-4 border-black text-3xl font-bold">
                Sobre nosotros
            </h1>
            <p class="p-4">
                Parasol corporation nace apartir de un proyecto con el objetivo
                de crear una escape room para el departamento de quimica del
                centro FP Txurdinaga, Bilbao.
            </p>
            <p class="p-4">
                Tanto el diseño como el código se han hecho completamente desde
                cero por Luka Carmona, Augusto de la Camara, Carmen Gabiola y
                Iker González, alumnos del ciclo de Diseño de Aplicaciones Web
                del mismo centro.
            </p>
        </div>

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
#bg-text {
    background-color: #e6a002;
}

P {
    text-align: justify;
}
</style>
