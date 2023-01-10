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
        $kuku1->answer = 'Formaldehído.png';
        $kuku1->challenge_id = '2';

        $kuku2 = new SharedSolution();
        $kuku2->question = 'Galactosa';
        $kuku2->answer = 'Galactosa.png';
        $kuku2->challenge_id = '2';

        $kuku3 = new SharedSolution();
        $kuku3->question = 'Ribosa';
        $kuku3->answer = 'Ribosa.png';
        $kuku3->challenge_id = '2';

        $kuku4 = new SharedSolution();
        $kuku4->question = 'Fructosa';
        $kuku4->answer = 'Fructosa.png';
        $kuku4->challenge_id = '2';

        $kuku5 = new SharedSolution();
        $kuku5->question = 'Piruvato';
        $kuku5->answer = 'Piruvato.png';
        $kuku5->challenge_id = '2';

        $kuku6 = new SharedSolution();
        $kuku6->question = 'Glucosa';
        $kuku6->answer = 'Glucosa.png';
        $kuku6->challenge_id = '2';

        $kuku7 = new SharedSolution();
        $kuku7->question = 'Ácido láctico';
        $kuku7->answer = 'Ácido_láctico.png';
        $kuku7->challenge_id = '2';

        $kuku8 = new SharedSolution();
        $kuku8->question = 'Cloruro de bencilo';
        $kuku8->answer = 'Cloruro_de_bencilo.png';
        $kuku8->challenge_id = '2';

        $kuku9 = new SharedSolution();
        $kuku9->question = '3-metilhexano';
        $kuku9->answer = '3-metilhexano.png';
        $kuku9->challenge_id = '2';

        $kuku10 = new SharedSolution();
        $kuku10->question = '2,3-dimetilbutano';
        $kuku10->answer = '2,3-dimetilbutano.png';
        $kuku10->challenge_id = '2';

        $kuku11 = new SharedSolution();
        $kuku11->question = '3,4,5-trimetilciclohexeno';
        $kuku11->answer = '3,4,5-trimetilciclohexeno.png';
        $kuku11->challenge_id = '2';

        $kuku12 = new SharedSolution();
        $kuku12->question = 'm-dibromobenceno';
        $kuku12->answer = 'm-dibromobenceno.png';
        $kuku12->challenge_id = '2';

        $kuku13 = new SharedSolution();
        $kuku13->question = '2,2,4-trimetilpentano';
        $kuku13->answer = '2,2,4-trimetilpentano.png';
        $kuku13->challenge_id = '2';

        $kuku14 = new SharedSolution();
        $kuku14->question = '4-etil-4,5-dimetilciclohexeno';
        $kuku14->answer = '4-etil-4,5-dimetilciclohexeno.png';
        $kuku14->challenge_id = '2';

        $kuku15 = new SharedSolution();
        $kuku15->question = '1-etil-2,5-dimetil-4-propilbenceno';
        $kuku15->answer = '1-etil-2,5-dimetil-4-propilbenceno.png';
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
        $kuku18->answer = '5-(1,2-dimetilpropil)-4-etil-2-metilnonano.png';
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
        $kuku21->answer = '4-etil-2,4-dimetilhexano.png';
        $kuku21->challenge_id = '2';

        $kuku22 = new SharedSolution();
        $kuku22->question = '3-isopropil-2,5-dimetilheptano';
        $kuku22->answer = '3-isopropil-2,5-dimetilheptano.png';
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
        $kuku26->answer = 'Propadieno-Aleno.png';
        $kuku26->challenge_id = '2';

        $kuku27 = new SharedSolution();
        $kuku27->question = 'Radical isopropenilo';
        $kuku27->answer = 'Radical isopropenilo.png';
        $kuku27->challenge_id = '2';

        $kuku28 = new SharedSolution();
        $kuku28->question = 'Radical 1,3-butadienilo';
        $kuku28->answer = 'Radical 1,3-butadienilo.png';
        $kuku28->challenge_id = '2';

        $kuku29 = new SharedSolution();
        $kuku29->question = 'Rad. 2-butil-2-butenilo';
        $kuku29->answer = 'Rad. 2-butil-2-butenilo.png';
        $kuku29->challenge_id = '2';

        $kuku30 = new SharedSolution();
        $kuku30->question = 'Rad.4-(1-propenil)-2,5,6-heptatrienilo';
        $kuku30->answer = 'Rad.4-(1-propenil)-2,5,6-heptatrienilo.png';
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
        $kuku35->answer = 'Metoxibenceno.png';
        $kuku35->challenge_id = '2';

        $kuku36 = new SharedSolution();
        $kuku36->question = 'ácido 4-oxopentanoico';
        $kuku36->answer = 'ácido 4-oxopentanoico.png';
        $kuku36->challenge_id = '2';

        $kuku37 = new SharedSolution();
        $kuku37->question = 'Acetato sódico';
        $kuku37->answer = 'Acetato sódico.png';
        $kuku37->challenge_id = '2';

        $kuku38 = new SharedSolution();
        $kuku38->question = 'Acetato de metilo';
        $kuku38->answer = 'Acetato de metilo.png';
        $kuku38->challenge_id = '2';

        $kuku39 = new SharedSolution();
        $kuku39->question = 'Benzoato de etilo';
        $kuku39->answer = 'Benzoato de etilo.png';
        $kuku39->challenge_id = '2';

        $kuku40 = new SharedSolution();
        $kuku40->question = 'Anhídrido benzoico';
        $kuku40->answer = 'Anhídrido benzoico.png';
        $kuku40->challenge_id = '2';

        $kuku41 = new SharedSolution();
        $kuku41->question = 'Bromuro de etanoilo';
        $kuku41->answer = 'Bromuro de etanoilo.png';
        $kuku41->challenge_id = '2';

        $kuku42 = new SharedSolution();
        $kuku42->question = 'etil isopropil eter';
        $kuku42->answer = 'etil isopropil eter.png';
        $kuku42->challenge_id = '2';

        $kuku43 = new SharedSolution();
        $kuku43->question = 'Cloruro de 3-metilciclopentanocarbonilo';
        $kuku43->answer = 'Cloruro de 3-metilciclopentanocarbonilo.png';
        $kuku43->challenge_id = '2';

        $kuku44 = new SharedSolution();
        $kuku44->question = 'Bromuro de acetilo';
        $kuku44->answer = 'Bromuro de acetilo.png';
        $kuku44->challenge_id = '2';

        $kuku45 = new SharedSolution();
        $kuku45->question = '3-bromoformilciclohexanocarboxilato de metilo';
        $kuku45->answer = '3-bromoformilciclohexanocarboxilato de metilo.png';
        $kuku45->challenge_id = '2';

        //TODO BIEN EQUILIBRADO
        $equilibrado1 = new SharedSolution();
        $equilibrado1->question = 'Ag + HNO_[3] = AgNO_[3] + NO_[2] + H_[2]O';
        $equilibrado1->answer = 'Ag + 2HNO_[3] → AgNO_[3] + NO_[2] + H_[2]O';
        $equilibrado1->challenge_id = '4';

        $equilibrado2 = new SharedSolution();
        $equilibrado2->question = 'Ag_[2]S + HNO_[3] = AgNO_[3] + NO _[2]+ S + H_[2]O';
        $equilibrado2->answer = 'Ag_[2]S + 4HNO_[3] → 2AgNO_[3] + 2NO_[2] + S + 2H_[2]O';
        $equilibrado2->challenge_id = '4';

        $equilibrado3 = new SharedSolution();
        $equilibrado3->question = 'As + HNO_[3] + H_[2]O = H_[3]AsO_[4] + NO';
        $equilibrado3->answer = '3As + 5HNO_[3] + 2H_[2]O → 3H_[3]AsO_[4] + 5NO';
        $equilibrado3->challenge_id = '4';

        $equilibrado4 = new SharedSolution();
        $equilibrado4->question = 'As_[2]S_[5] + HNO_[3] = H_[3]AsO_[4] + NO_[2] + S + H_[2]O';
        $equilibrado4->answer = 'As_[2]S_[5] + 10 HNO_[3] → 2H_[3]AsO_[4] + 10NO_[2] + 5S + 2H_[2]O';
        $equilibrado4->challenge_id = '4';

        $equilibrado5 = new SharedSolution();
        $equilibrado5->question = 'Bi_[2]S_[3] + HNO_[3] = Bi(NO_[3])_[3] + NO + S + H_[2]O';
        $equilibrado5->answer = 'Bi_[2]S_[3] + 8HNO_[3] → 2Bi(NO_[3])_[3] + 2NO + 3S + 4H_[2]O';
        $equilibrado5->challenge_id = '4';

        $equilibrado6 = new SharedSolution();
        $equilibrado6->question = 'CdS + HNO_[3] = Cd(NO_[3])_[2] + S + NO + H_[2]O';
        $equilibrado6->answer = '3CdS + 8HNO_[3] → 3Cd(NO_[3])_[2] + 3S + 2NO + 4H_[2]O';
        $equilibrado6->challenge_id = '4';

        $equilibrado7 = new SharedSolution();
        $equilibrado7->question = 'Cu + HNO_[3] = Cu(NO_[3])_[2] + NO + H_[2]O';
        $equilibrado7->answer = '3Cu + 8HNO_[3] → 3Cu(NO_[3])_[2] + 2NO + 4H_[2]O';
        $equilibrado7->challenge_id = '4';

        $equilibrado8 = new SharedSolution();
        $equilibrado8->question = 'HNO_[3] + Cu_[2]O = Cu(NO_[3])_[2] + NO + H_[2]O';
        $equilibrado8->answer = '14HNO_[3] + 3Cu_[2]O → 6 Cu(NO_[3])_[2] + 2NO + 7H_[2]O';
        $equilibrado8->challenge_id = '4';

        $equilibrado9 = new SharedSolution();
        $equilibrado9->question = 'Mg + HNO_[3] = Mg(NO_[3])_[2] + N_[2] + H_[2]O';
        $equilibrado9->answer = '5Mg + 12HNO_[3] → 5Mg(NO_[3])_[2] + N_[2] + 6H_[4]O';
        $equilibrado9->challenge_id = '4';

        $equilibrado10 = new SharedSolution();
        $equilibrado10->question = 'PbS + HNO_[3] = Pb(NO_[3])_[2] + NO + S + H_[2]O';
        $equilibrado10->answer = '3PbS + 8HNO_[3] → 3Pb(NO_[3])_[2] + 2NO + 3S + 4H_[2]O';
        $equilibrado10->challenge_id = '4';

        $equilibrado11 = new SharedSolution();
        $equilibrado11->question = 'Sn + HNO_[3] = SnO_[2] + NO_[2] + H_[2]O';
        $equilibrado11->answer = 'Sn + 4HNO_[3] → SnO_[2] + 4NO_[2] + 2H_[2]O';
        $equilibrado11->challenge_id = '4';

        $equilibrado12 = new SharedSolution();
        $equilibrado12->question = 'I_[2] + HNO_[3] = HIO_[3] + NO_[2] + H_[2]O';
        $equilibrado12->answer = 'I_[2] + 10HNO_[3] → 2HIO_[3] + 10NO_[2] + 4H_[2]O';
        $equilibrado12->challenge_id = '4';

        $equilibrado13 = new SharedSolution();
        $equilibrado13->question = 'P_[4] + HNO_[3] + H_[2]O = H_[3]PO_[4] + NO';
        $equilibrado13->answer = '3P_[4] + 20HNO_[3] + 8H_[2]O → 12H_[3]PO_[4] + 20NO';
        $equilibrado13->challenge_id = '4';

        $equilibrado14 = new SharedSolution();
        $equilibrado14->question = 'H_[2]S + HNO_[3] = NO + S + H_[2]O';
        $equilibrado14->answer = '3H_[2]S + 2HNO_[3] → 2NO + 3S + 4H_[2]O';
        $equilibrado14->challenge_id = '4';

        $equilibrado15 = new SharedSolution();
        $equilibrado15->question = 'S + HNO_[3] = H_[2]SO_[4] + NO_[2] + H_[2]O';
        $equilibrado15->answer = 'S + 6HNO_[3] → H_[2]SO_[4] + 6NO_[2] + 2H_[2]O';
        $equilibrado15->challenge_id = '4';

        $equilibrado16 = new SharedSolution();
        $equilibrado16->question = 'Al + KMnO_[4] = MnO_[2] + AlK(OH)_[4]';
        $equilibrado16->answer = 'Al + KMnO_[4] + 2H_[2]O → MnO_[2] + AlK(OH)_[4]';
        $equilibrado16->challenge_id = '4';

        $equilibrado17 = new SharedSolution();
        $equilibrado17->question = 'KBr + KMnO_[4] = MnO_[2] + KBrO_[3]';
        $equilibrado17->answer = 'KBr + 2KMnO_[4] + H_[2]O → 2MnO_[2] + KBrO_[3] + 2KOH';
        $equilibrado17->challenge_id = '4';

        $equilibrado18 = new SharedSolution();
        $equilibrado18->question = 'KMnO_[4] + CH_[3]COH = CH_[3]COOH + MnO_[2] + KOH';
        $equilibrado18->answer = '2KMnO_[4] + 3CH_[3]COH + H_[2]O → 3CH_[3]COOH + 2MnO_[2] + 2KOH';
        $equilibrado18->challenge_id = '4';

        $equilibrado19 = new SharedSolution();
        $equilibrado19->question = 'KMnO_[4] + H_[2]O + CH_[3]CH_[2]CHO = MnO_[2] + CH_[3]CH_[2]COOH + KOH';
        $equilibrado19->answer = '2KMnO_[4] + H_[2]O + 3CH_[3]CH_[2]CHO → 2MnO_[2] + 3CH_[3]CH_[2]COOH + 2KOH';
        $equilibrado19->challenge_id = '4';

        $equilibrado20 = new SharedSolution();
        $equilibrado20->question = 'KMnO_[4] + KCN = MnO_[2] + KCNO';
        $equilibrado20->answer = '2KMnO_[4] + 3KCN + H_[2]O → 2MnO_[2] + 3KCNO + 2KOH';
        $equilibrado20->challenge_id = '4';

        $equilibrado21 = new SharedSolution();
        $equilibrado21->question = 'MnO_[4]^[-] + C_[2]O_[4]^[2-] = MnO_[2] + CO_[2]';
        $equilibrado21->answer = '2MnO_[4]^[-] + 3C_[2]O_[4]^[2-] + 4H_[2]O → 2MnO_[2] + 6CO_[2] + 8OH^[-]';
        $equilibrado21->challenge_id = '4';

        $equilibrado22 = new SharedSolution();
        $equilibrado22->question = 'MnO_[4]- + SO_[3]^[2-] = MnO_[2] + SO_[4]^[2-]';
        $equilibrado22->answer = '2MnO_[4]- + 3SO_[3]^[2-] + H_[2]O → 2MnO_[2] + 3SO_[4]^[2-] + 2OH^[-]';
        $equilibrado22->challenge_id = '4';

        $equilibrado23 = new SharedSolution();
        $equilibrado23->question = 'H_[2]O_[2] + KMnO_[4] = MnO_[2] + O_[2] + KOH + H_[2]O';
        $equilibrado23->answer = '3H_[2]O_[2] + 2KMnO_[4] → 2MnO_[2] + 3O_[2] + 2KOH + 2H_[2]O';
        $equilibrado23->challenge_id = '4';

        $equilibrado24 = new SharedSolution();
        $equilibrado24->question = 'MnO_[4]^[-] + H_[2]O + NO_[2]^[-] = MnO_[2](s) + NO_[3]^[-] + OH^[-]';
        $equilibrado24->answer = '2MnO_[4]^[-] + H_[2]O + 3NO^[2-] → 2MnO_[2] + 3NO_[3]^[-] + 2OH^[-]';
        $equilibrado24->challenge_id = '4';

        $equilibrado25 = new SharedSolution();
        $equilibrado25->question = 'H_[2]O_[2] + KMnO_[4] = MnO_[2] + KOH + O_[2] + H_[2]O';
        $equilibrado25->answer = '3H_[2]O_[2] + 2KMnO_[4] → 2MnO_[2] + 2KOH + 3O_[2] + 2H_[2]O';
        $equilibrado25->challenge_id = '4';

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

        $equilibrado1->save();
        $equilibrado2->save();
        $equilibrado3->save();
        $equilibrado4->save();
        $equilibrado5->save();
        $equilibrado6->save();
        $equilibrado7->save();
        $equilibrado8->save();
        $equilibrado9->save();
        $equilibrado10->save();
        $equilibrado12->save();
        $equilibrado13->save();
        $equilibrado14->save();
        $equilibrado15->save();
        $equilibrado16->save();
        $equilibrado17->save();
        $equilibrado18->save();
        $equilibrado19->save();
        $equilibrado20->save();
        $equilibrado21->save();
        $equilibrado22->save();
        $equilibrado23->save();
        $equilibrado24->save();
        $equilibrado25->save();
    }
}
