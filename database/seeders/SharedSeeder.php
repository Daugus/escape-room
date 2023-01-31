<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SharedSolution;

class SharedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //CADA OBEJA CON SU PAREJA
        $obeja1 = new SharedSolution();
        $obeja1->question = 'PCA';
        $obeja1->answer = 'Recuento de mesófilos, aerobios y heterótrofos';
        $obeja1->challenge_id = '1';

        $obeja2 = new SharedSolution();
        $obeja2->question = 'McConkey';
        $obeja2->answer = 'Detección de Coliformes, los de fermentación lenta tardan en crecer';
        $obeja2->challenge_id = '1';

        $obeja3 = new SharedSolution();
        $obeja3->question = 'CCA';
        $obeja3->answer = 'Detección y recuento de E. coli y coliformes';
        $obeja3->challenge_id = '1';

        $obeja4 = new SharedSolution();
        $obeja4->question = 'KAA';
        $obeja4->answer = 'Para la confirmación de enterococos';
        $obeja4->challenge_id = '1';

        $obeja5 = new SharedSolution();
        $obeja5->question = 'VRBG';
        $obeja5->answer = 'Detección y recuento de coliformes en agua, alimentos…';
        $obeja5->challenge_id = '1';

        $obeja6 = new SharedSolution();
        $obeja6->question = 'Hektoen';
        $obeja6->answer = 'Se usa para el aislamiento y el cultivo de microorganismos Gram - entéricos, y especialmente para el aislamiento de especies de Shigella y Salmonella';
        $obeja6->challenge_id = '1';

        $obeja7 = new SharedSolution();
        $obeja7->question = 'TSA';
        $obeja7->answer = 'Crecimiento general. Recuento de totales';
        $obeja7->challenge_id = '1';

        $obeja8 = new SharedSolution();
        $obeja8->question = 'KIA';
        $obeja8->answer = 'Diferenciación de enterobacterias en base a la fermentación de hidratos de carbono y a la producción de ácido sulfhídrico';
        $obeja8->challenge_id = '1';

        $obeja9 = new SharedSolution();
        $obeja9->question = 'Citrato Simmons';
        $obeja9->answer = 'Diferenciación de enterobacterias en base a la capacidad de usar citrato como única fuente de carbono y energía';
        $obeja9->challenge_id = '1';

        $obeja10 = new SharedSolution();
        $obeja10->question = 'Lauril sulfato con MUG';
        $obeja10->answer = 'Se utiliza para la detección de coliformes y la detección fluorogénica de Escherichia coli en un entorno de laboratorio';
        $obeja10->challenge_id = '1';

        $obeja11 = new SharedSolution();
        $obeja11->question = 'Caldo de glucosa azida (ROTHE)';
        $obeja11->answer = 'Es ideal para la enumeración de enterococos mediante el método de dilución en serie (NMP)';
        $obeja11->challenge_id = '1';

        $obeja12 = new SharedSolution();
        $obeja12->question = 'Agar SLANETZ y BARTLEY';
        $obeja12->answer = 'Aislamiento y recuento de enterococos';
        $obeja12->challenge_id = '1';

        $obeja13 = new SharedSolution();
        $obeja13->question = 'Agar Sangre';
        $obeja13->answer = 'Al ser con sangre permite crecimiento de organismos nutricionalmente exigentes y la clara visualización de la hemólisis';
        $obeja13->challenge_id = '1';

        $obeja14 = new SharedSolution();
        $obeja14->question = 'MCP';
        $obeja14->answer = 'Aislamiento y recuento selectivo de Clostridium perfringens y sus esporas. Colonias amarillo-verdosas';
        $obeja14->challenge_id = '1';

        $obeja15 = new SharedSolution();
        $obeja15->question = 'TSC';
        $obeja15->answer = 'Aislamiento  y recuento de Clostridium perfringens en agua, alimentos…';
        $obeja15->challenge_id = '1';

        $obeja16 = new SharedSolution();
        $obeja16->question = 'Agua de peptona';
        $obeja16->answer = 'Diluyente y enriquecimiento bacteriano Se usa en la prueba INDOL y ONPG';
        $obeja16->challenge_id = '1';

        $obeja17 = new SharedSolution();
        $obeja17->question = 'Mueller-Hilton';
        $obeja17->answer = 'Para analizar la sensibilidad de cepas aisladas a partir de agentes antimicrobianos ANTIBIOGRAMAS';
        $obeja17->challenge_id = '1';

        $obeja18 = new SharedSolution();
        $obeja18->question = 'EMB';
        $obeja18->answer = 'Diferenciación de la fermentación de lactosa  de tipo butanodiólica y ácido mixta (Diferenciar Serratia-E.coli)';
        $obeja18->challenge_id = '1';

        $obeja19 = new SharedSolution();
        $obeja19->question = 'Bacto 2R';
        $obeja19->answer = 'Se utiliza para el cultivo de microorganismos heterótrofos';
        $obeja19->challenge_id = '1';

        $obeja20 = new SharedSolution();
        $obeja20->question = 'Chapman TTC';
        $obeja20->answer = 'Medio selectivo y diferencial utilizado para el control presuntivo de E. coli y coliformes en aguas';
        $obeja20->challenge_id = '1';

        $obeja21 = new SharedSolution();
        $obeja21->question = 'TSB';
        $obeja21->answer = 'Es utilizado en el control de esterilidad de productos biológicos, farmacéuticos y cosméticos';
        $obeja21->challenge_id = '1';

        $obeja22 = new SharedSolution();
        $obeja22->question = 'm-FC';
        $obeja22->answer = 'Medio selectivo y diferencial para enumeración de coliformes fecales por la técnica de Filtración de Membrana, en aguas';
        $obeja22->challenge_id = '1';

        $obeja23 = new SharedSolution();
        $obeja23->question = 'Salmonella-Shigella';
        $obeja23->answer = 'Este medio se utiliza para el aislamiento primario de Salmonella a partir de muestras fecales humanas';
        $obeja23->challenge_id = '1';

        $obeja24 = new SharedSolution();
        $obeja24->question = 'ENDO';
        $obeja24->answer = 'La selectividad se debe al sulfito de sodio, supresión parcial de los microorganismos Gram +';
        $obeja24->challenge_id = '1';

        $obeja25 = new SharedSolution();
        $obeja25->question = 'Estreptococos - KF';
        $obeja25->answer = 'Medio para la detección y recuento de enterococos';
        $obeja25->challenge_id = '1';

        $obeja26 = new SharedSolution();
        $obeja26->question = 'Sabouraud con cloranfenicol';
        $obeja26->answer = 'Se usa para el aislamiento de hongos';
        $obeja26->challenge_id = '1';

        $obeja27 = new SharedSolution();
        $obeja27->question = 'Luria';
        $obeja27->answer = 'Es un medio nutricionalmente rico que se utiliza principalmente para el cultivo de bacterias';
        $obeja27->challenge_id = '1';

        $obeja28 = new SharedSolution();
        $obeja28->question = 'TSX';
        $obeja28->answer = 'Recuento y detección de E. coli en alimentos';
        $obeja28->challenge_id = '1';

        $obeja29 = new SharedSolution();
        $obeja29->question = 'LIA';
        $obeja29->answer = 'Medio de cultivo utilizado para diferenciar microorganismos, especialmente Salmonella spp., basado en la descarboxilación y desaminación de la lisina y en la producción de ácido sulfhídrico';
        $obeja29->challenge_id = '1';

        $obeja30 = new SharedSolution();
        $obeja30->question = 'Clark y Lubs';
        $obeja30->answer = 'Medio para ensayos de Rojo de metilo y Voges-Proskauer (APHA) para la identificación acorde al IMVIC';
        $obeja30->challenge_id = '1';

        //KUKU
        $kuku1 = new SharedSolution();
        $kuku1->question = 'Formaldehído';
        $kuku1->answer = 'formaldehido.png';
        $kuku1->challenge_id = '2';

        $kuku2 = new SharedSolution();
        $kuku2->question = 'Galactosa';
        $kuku2->answer = 'galactosa.png';
        $kuku2->challenge_id = '2';

        $kuku3 = new SharedSolution();
        $kuku3->question = 'Ribosa';
        $kuku3->answer = 'ribosa.png';
        $kuku3->challenge_id = '2';

        $kuku4 = new SharedSolution();
        $kuku4->question = 'Fructosa';
        $kuku4->answer = 'fructosa.png';
        $kuku4->challenge_id = '2';

        $kuku5 = new SharedSolution();
        $kuku5->question = 'Piruvato';
        $kuku5->answer = 'piruvato.png';
        $kuku5->challenge_id = '2';

        $kuku6 = new SharedSolution();
        $kuku6->question = 'Glucosa';
        $kuku6->answer = 'glucosa.png';
        $kuku6->challenge_id = '2';

        $kuku7 = new SharedSolution();
        $kuku7->question = 'Ácido láctico';
        $kuku7->answer = 'acido-lactico.png';
        $kuku7->challenge_id = '2';

        $kuku8 = new SharedSolution();
        $kuku8->question = 'Cloruro de bencilo';
        $kuku8->answer = 'cloruro-de-bencilo.png';
        $kuku8->challenge_id = '2';

        $kuku9 = new SharedSolution();
        $kuku9->question = '3-metilhexano';
        $kuku9->answer = '3-metilhexano.png';
        $kuku9->challenge_id = '2';

        $kuku10 = new SharedSolution();
        $kuku10->question = '2,3-dimetilbutano';
        $kuku10->answer = '2-3-dimetilbutano.png';
        $kuku10->challenge_id = '2';

        $kuku11 = new SharedSolution();
        $kuku11->question = '3,4,5-trimetilciclohexeno';
        $kuku11->answer = '3-4-5-trimetilciclohexeno.png';
        $kuku11->challenge_id = '2';

        $kuku12 = new SharedSolution();
        $kuku12->question = 'm-dibromobenceno';
        $kuku12->answer = 'm-dibromobenceno.png';
        $kuku12->challenge_id = '2';

        $kuku13 = new SharedSolution();
        $kuku13->question = '2,2,4-trimetilpentano';
        $kuku13->answer = '2-2-4-trimetilpentano.png';
        $kuku13->challenge_id = '2';

        $kuku14 = new SharedSolution();
        $kuku14->question = '4-etil-4,5-dimetilciclohexeno';
        $kuku14->answer = '4-etil-4-5-dimetilciclohexeno.png';
        $kuku14->challenge_id = '2';

        $kuku15 = new SharedSolution();
        $kuku15->question = '1-etil-2,5-dimetil-4-propilbenceno';
        $kuku15->answer = '1-etil-2-5-dimetil-4-propilbenceno.png';
        $kuku15->challenge_id = '2';

        $kuku16 = new SharedSolution();
        $kuku16->question = '4-etil-2-metil-5-propiloctano';
        $kuku16->answer = '4-etil-2-metil-5-propiloctano.png';
        $kuku16->challenge_id = '2';

        $kuku17 = new SharedSolution();
        $kuku17->question = '5-isopropil-3-metiloctano';
        $kuku17->answer = '5-isopropil-3-metiloctano.png';
        $kuku17->challenge_id = '2';

        $kuku18 = new SharedSolution();
        $kuku18->question = '5-(1,2-dimetilpropil)-4-etil-2-metilnonano';
        $kuku18->answer = '5-1-2-dimetilpropil-4-etil-2-metilnonano.png';
        $kuku18->challenge_id = '2';

        $kuku19 = new SharedSolution();
        $kuku19->question = '4-etil-5-metiloctano';
        $kuku19->answer = '4-etil-5-metiloctano.png';
        $kuku19->challenge_id = '2';

        $kuku20 = new SharedSolution();
        $kuku20->question = '3-metilpentano';
        $kuku20->answer = '3-metilpentano.png';
        $kuku20->challenge_id = '2';

        $kuku21 = new SharedSolution();
        $kuku21->question = '4-etil-2,4-dimetilhexano';
        $kuku21->answer = '4-etil-2-4-dimetilhexano.png';
        $kuku21->challenge_id = '2';

        $kuku22 = new SharedSolution();
        $kuku22->question = '3-isopropil-2,5-dimetilheptano';
        $kuku22->answer = '3-isopropil-2-5-dimetilheptano.png';
        $kuku22->challenge_id = '2';

        $kuku23 = new SharedSolution();
        $kuku23->question = 'isobutano';
        $kuku23->answer = 'isobutano.png';
        $kuku23->challenge_id = '2';

        $kuku24 = new SharedSolution();
        $kuku24->question = 'isopentano';
        $kuku24->answer = 'isopentano.png';
        $kuku24->challenge_id = '2';

        $kuku25 = new SharedSolution();
        $kuku25->question = 'isohexano';
        $kuku25->answer = 'isohexano.png';
        $kuku25->challenge_id = '2';

        $kuku26 = new SharedSolution();
        $kuku26->question = 'Propadieno-Aleno';
        $kuku26->answer = 'propadieno-aleno.png';
        $kuku26->challenge_id = '2';

        $kuku27 = new SharedSolution();
        $kuku27->question = 'Radical isopropenilo';
        $kuku27->answer = 'radical-isopropenilo.png';
        $kuku27->challenge_id = '2';

        $kuku28 = new SharedSolution();
        $kuku28->question = 'Radical 1,3-butadienilo';
        $kuku28->answer = 'radical-1-3-butadienilo.png';
        $kuku28->challenge_id = '2';

        $kuku29 = new SharedSolution();
        $kuku29->question = 'Rad. 2-butil-2-butenilo';
        $kuku29->answer = 'rad-2-butil-2-butenilo.png';
        $kuku29->challenge_id = '2';

        $kuku30 = new SharedSolution();
        $kuku30->question = 'Rad.4-(1-propenil)-2-5-6-heptatrienilo';
        $kuku30->answer = 'rad-4-1-propenil-2-5-6-heptatrienilo.png';
        $kuku30->challenge_id = '2';

        $kuku31 = new SharedSolution();
        $kuku31->question = 'fenol';
        $kuku31->answer = 'fenol.png';
        $kuku31->challenge_id = '2';

        $kuku32 = new SharedSolution();
        $kuku32->question = '3-metilfenol';
        $kuku32->answer = '3-metilfenol.png';
        $kuku32->challenge_id = '2';

        $kuku33 = new SharedSolution();
        $kuku33->question = '3-etil-2-naftol';
        $kuku33->answer = '3-etil-2-naftol.png';
        $kuku33->challenge_id = '2';

        $kuku34 = new SharedSolution();
        $kuku34->question = '3-metil-1-naftol';
        $kuku34->answer = '3-metil-1-naftol.png';
        $kuku34->challenge_id = '2';

        $kuku35 = new SharedSolution();
        $kuku35->question = 'Metoxibenceno';
        $kuku35->answer = 'metoxibenceno.png';
        $kuku35->challenge_id = '2';

        $kuku36 = new SharedSolution();
        $kuku36->question = 'ácido 4-oxopentanoico';
        $kuku36->answer = 'acido-4-oxopentanoico.png';
        $kuku36->challenge_id = '2';

        $kuku37 = new SharedSolution();
        $kuku37->question = 'Acetato sódico';
        $kuku37->answer = 'acetato-sodico.png';
        $kuku37->challenge_id = '2';

        $kuku38 = new SharedSolution();
        $kuku38->question = 'Acetato de metilo';
        $kuku38->answer = 'acetato-de-metilo.png';
        $kuku38->challenge_id = '2';

        $kuku39 = new SharedSolution();
        $kuku39->question = 'Benzoato de etilo';
        $kuku39->answer = 'benzoato-de-etilo.png';
        $kuku39->challenge_id = '2';

        $kuku40 = new SharedSolution();
        $kuku40->question = 'Anhídrido benzoico';
        $kuku40->answer = 'anhidrido-benzoico.png';
        $kuku40->challenge_id = '2';

        $kuku41 = new SharedSolution();
        $kuku41->question = 'Bromuro de etanoilo';
        $kuku41->answer = 'bromuro-de-etanoilo.png';
        $kuku41->challenge_id = '2';

        $kuku42 = new SharedSolution();
        $kuku42->question = 'etil isopropil eter';
        $kuku42->answer = 'etil-isopropil-eter.png';
        $kuku42->challenge_id = '2';

        $kuku43 = new SharedSolution();
        $kuku43->question = 'Cloruro de 3-metilciclopentanocarbonilo';
        $kuku43->answer = 'cloruro-de-3-metilciclopentanocarbonilo.png';
        $kuku43->challenge_id = '2';

        $kuku44 = new SharedSolution();
        $kuku44->question = 'Bromuro de acetilo';
        $kuku44->answer = 'bromuro-de-acetilo.png';
        $kuku44->challenge_id = '2';

        $kuku45 = new SharedSolution();
        $kuku45->question = '3-bromoformilciclohexanocarboxilato de metilo';
        $kuku45->answer = '3-bromoformilciclohexanocarboxilato-de-metilo.png';
        $kuku45->challenge_id = '2';

        $obeja1->save();
        $obeja2->save();
        $obeja3->save();
        $obeja4->save();
        $obeja5->save();
        $obeja6->save();
        $obeja7->save();
        $obeja8->save();
        $obeja9->save();
        $obeja10->save();
        $obeja11->save();
        $obeja12->save();
        $obeja13->save();
        $obeja14->save();
        $obeja15->save();
        $obeja16->save();
        $obeja17->save();
        $obeja18->save();
        $obeja19->save();
        $obeja20->save();
        $obeja21->save();
        $obeja22->save();
        $obeja23->save();
        $obeja24->save();
        $obeja25->save();
        $obeja26->save();
        $obeja27->save();
        $obeja28->save();
        $obeja29->save();
        $obeja30->save();

        $kuku1->save();
        $kuku2->save();
        $kuku3->save();
        $kuku4->save();
        $kuku5->save();
        $kuku6->save();
        $kuku7->save();
        $kuku8->save();
        $kuku9->save();
        $kuku10->save();
        $kuku11->save();
        $kuku12->save();
        $kuku13->save();
        $kuku14->save();
        $kuku15->save();
        $kuku16->save();
        $kuku17->save();
        $kuku18->save();
        $kuku19->save();
        $kuku20->save();
        $kuku21->save();
        $kuku22->save();
        $kuku23->save();
        $kuku24->save();
        $kuku25->save();
        $kuku26->save();
        $kuku27->save();
        $kuku28->save();
        $kuku29->save();
        $kuku30->save();
        $kuku31->save();
        $kuku32->save();
        $kuku33->save();
        $kuku34->save();
        $kuku35->save();
        $kuku36->save();
        $kuku37->save();
        $kuku38->save();
        $kuku39->save();
        $kuku40->save();
        $kuku41->save();
        $kuku42->save();
        $kuku43->save();
        $kuku44->save();
        $kuku45->save();
    }
}
