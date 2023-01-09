<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SharedSolution;

class equilibrated extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $equilibrado1 = new SharedSolution();
        $equilibrado1->question = 'Ag + HNO_[3] = AgNO_[3] + NO_[2] + H_[2]O';
        $equilibrado1->answer = 'Ag + 2HNO_[3] → AgNO_[3] + NO_[2] + H_[2]O';

        $equilibrado2 = new SharedSolution();
        $equilibrado2->question = 'Ag_[2]S + HNO_[3] = AgNO_[3] + NO _[2]+ S + H_[2]O';
        $equilibrado2->answer = 'Ag_[2]S + 4HNO_[3] → 2AgNO_[3] + 2NO_[2] + S + 2H_[2]O';

        $equilibrado3 = new SharedSolution();
        $equilibrado3->question = 'As + HNO_[3] + H_[2]O = H_[3]AsO_[4] + NO';
        $equilibrado3->answer = '3As + 5HNO_[3] + 2H_[2]O → 3H_[3]AsO_[4] + 5NO';

        $equilibrado4 = new SharedSolution();
        $equilibrado4->question = 'As_[2]S_[5] + HNO_[3] = H_[3]AsO_[4] + NO_[2] + S + H_[2]O';
        $equilibrado4->answer = 'As_[2]S_[5] + 10 HNO_[3] → 2H_[3]AsO_[4] + 10NO_[2] + 5S + 2H_[2]O';

        $equilibrado5 = new SharedSolution();
        $equilibrado5->question = 'Bi_[2]S_[3] + HNO_[3] = Bi(NO_[3])_[3] + NO + S + H_[2]O';
        $equilibrado5->answer = 'Bi_[2]S_[3] + 8HNO_[3] → 2Bi(NO_[3])_[3] + 2NO + 3S + 4H_[2]O';

        $equilibrado6 = new SharedSolution();
        $equilibrado6->question = 'CdS + HNO_[3] = Cd(NO_[3])_[2] + S + NO + H_[2]O';
        $equilibrado6->answer = '3CdS + 8HNO_[3] → 3Cd(NO_[3])_[2] + 3S + 2NO + 4H_[2]O';

        $equilibrado7 = new SharedSolution();
        $equilibrado7->question = 'Cu + HNO_[3] = Cu(NO_[3])_[2] + NO + H_[2]O';
        $equilibrado7->answer = '3Cu + 8HNO_[3] → 3Cu(NO_[3])_[2] + 2NO + 4H_[2]O';

        $equilibrado8 = new SharedSolution();
        $equilibrado8->question = 'HNO_[3] + Cu_[2]O = Cu(NO_[3])_[2] + NO + H_[2]O';
        $equilibrado8->answer = '14HNO_[3] + 3Cu_[2]O → 6 Cu(NO_[3])_[2] + 2NO + 7H_[2]O';

        $equilibrado9 = new SharedSolution();
        $equilibrado9->question = 'Mg + HNO_[3] = Mg(NO_[3])_[2] + N_[2] + H_[2]O';
        $equilibrado9->answer = '5Mg + 12HNO_[3] → 5Mg(NO_[3])_[2] + N_[2] + 6H_[4]O';

        $equilibrado10 = new SharedSolution();
        $equilibrado10->question = 'PbS + HNO_[3] = Pb(NO_[3])_[2] + NO + S + H_[2]O';
        $equilibrado10->answer = '3PbS + 8HNO_[3] → 3Pb(NO_[3])_[2] + 2NO + 3S + 4H_[2]O';

        $equilibrado11 = new SharedSolution();
        $equilibrado11->question = 'Sn + HNO_[3] = SnO_[2] + NO_[2] + H_[2]O';
        $equilibrado11->answer = 'Sn + 4HNO_[3] → SnO_[2] + 4NO_[2] + 2H_[2]O';

        $equilibrado12 = new SharedSolution();
        $equilibrado12->question = 'I_[2] + HNO_[3] = HIO_[3] + NO_[2] + H_[2]O';
        $equilibrado12->answer = 'I_[2] + 10HNO_[3] → 2HIO_[3] + 10NO_[2] + 4H_[2]O';

        $equilibrado13 = new SharedSolution();
        $equilibrado13->question = 'P_[4] + HNO_[3] + H_[2]O = H_[3]PO_[4] + NO';
        $equilibrado13->answer = '3P_[4] + 20HNO_[3] + 8H_[2]O → 12H_[3]PO_[4] + 20NO';

        $equilibrado14 = new SharedSolution();
        $equilibrado14->question = 'H_[2]S + HNO_[3] = NO + S + H_[2]O';
        $equilibrado14->answer = '3H_[2]S + 2HNO_[3] → 2NO + 3S + 4H_[2]O';

        $equilibrado15 = new SharedSolution();
        $equilibrado15->question = 'S + HNO_[3] = H_[2]SO_[4] + NO_[2] + H_[2]O';
        $equilibrado15->answer = 'S + 6HNO_[3] → H_[2]SO_[4] + 6NO_[2] + 2H_[2]O';

        $equilibrado16 = new SharedSolution();
        $equilibrado16->question = 'Al + KMnO_[4] = MnO_[2] + AlK(OH)_[4]';
        $equilibrado16->answer = 'Al + KMnO_[4] + 2H_[2]O → MnO_[2] + AlK(OH)_[4]';

        $equilibrado17 = new SharedSolution();
        $equilibrado17->question = 'KBr + KMnO_[4] = MnO_[2] + KBrO_[3]';
        $equilibrado17->answer = 'KBr + 2KMnO_[4] + H_[2]O → 2MnO_[2] + KBrO_[3] + 2KOH';

        $equilibrado18 = new SharedSolution();
        $equilibrado18->question = 'KMnO_[4] + CH_[3]COH = CH_[3]COOH + MnO_[2] + KOH';
        $equilibrado18->answer = '2KMnO_[4] + 3CH_[3]COH + H_[2]O → 3CH_[3]COOH + 2MnO_[2] + 2KOH';

        $equilibrado19 = new SharedSolution();
        $equilibrado19->question = 'KMnO_[4] + H_[2]O + CH_[3]CH_[2]CHO = MnO_[2] + CH_[3]CH_[2]COOH + KOH';
        $equilibrado19->answer = '2KMnO_[4] + H_[2]O + 3CH_[3]CH_[2]CHO → 2MnO_[2] + 3CH_[3]CH_[2]COOH + 2KOH';

        $equilibrado20 = new SharedSolution();
        $equilibrado20->question = 'KMnO_[4] + KCN = MnO_[2] + KCNO';
        $equilibrado20->answer = '2KMnO_[4] + 3KCN + H_[2]O → 2MnO_[2] + 3KCNO + 2KOH';

        $equilibrado21 = new SharedSolution();
        $equilibrado21->question = 'MnO_[4]^[-] + C_[2]O_[4]^[2-] = MnO_[2] + CO_[2]';
        $equilibrado21->answer = '2MnO_[4]^[-] + 3C_[2]O_[4]^[2-] + 4H_[2]O → 2MnO_[2] + 6CO_[2] + 8OH^[-]';

        $equilibrado22 = new SharedSolution();
        $equilibrado22->question = 'MnO_[4]- + SO_[3]^[2-] = MnO_[2] + SO_[4]^[2-]';
        $equilibrado22->answer = '2MnO_[4]- + 3SO_[3]^[2-] + H_[2]O → 2MnO_[2] + 3SO_[4]^[2-] + 2OH^[-]';

        $equilibrado23 = new SharedSolution();
        $equilibrado23->question = 'H_[2]O_[2] + KMnO_[4] = MnO_[2] + O_[2] + KOH + H_[2]O';
        $equilibrado23->answer = '3H_[2]O_[2] + 2KMnO_[4] → 2MnO_[2] + 3O_[2] + 2KOH + 2H_[2]O';

        $equilibrado24 = new SharedSolution();
        $equilibrado24->question = 'MnO_[4]^[-] + H_[2]O + NO_[2]^[-] = MnO_[2](s) + NO_[3]^[-] + OH^[-]';
        $equilibrado24->answer = '2MnO_[4]^[-] + H_[2]O + 3NO^[2-] → 2MnO_[2] + 3NO_[3]^[-] + 2OH^[-]';

        $equilibrado25 = new SharedSolution();
        $equilibrado25->question = 'H_[2]O_[2] + KMnO_[4] = MnO_[2] + KOH + O_[2] + H_[2]O';
        $equilibrado25->answer = '3H_[2]O_[2] + 2KMnO_[4] → 2MnO_[2] + 2KOH + 3O_[2] + 2H_[2]O';
    }
}
