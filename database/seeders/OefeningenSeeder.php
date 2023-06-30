<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OefeningenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('oefeningen')->insert([
            'naam' => 'Squat',
            'beschrijving' => 'Een squat is een oefening waarbij je je knieën buigt en je billen naar achter duwt.'
        ]);
        DB::table('oefeningen')->insert([
            'naam' => 'Push-up',
            'beschrijving' => 'Ga met je buik op de grond liggen met de handen op de grond. En duw je lichaam van de grond af met alleen je armen. En herhaal dat'
        ]);
        DB::table('oefeningen')->insert([
            'naam' => 'Dip',
            'beschrijving' => 'Hou twee handgrepen vast met gestrekte armen en laat je benen hangen. Span je buik en bilspieren aan. Buig dan je armen tot 90 graden bij je elleboog. Druk jezelf omhoog.'
        ]);
        DB::table('oefeningen')->insert([
            'naam' => 'Plank',
            'beschrijving' => 'Ga met je buik op de grond liggen met de handen op de grond. En duw je lichaam van de grond af met alleen je armen. En blijf in die positie voor een minuut.'
        ]);
        DB::table('oefeningen')->insert([
            'naam' => 'Paardentrap',
            'beschrijving' => 'Ga op ellebogen en knieën op de grond liggen, met je gezicht naar de grond. Strek dan je rechterbeen naar achteren. Herhaal dat met je andere been en ga zo door.'
        ]);
        DB::table('oefeningen')->insert([
            'naam' => 'Mountain climber',
            'beschrijving' => 'Plaats je handen en voeten op de grond (plank positie). Haal dan om de beurt een been naar je handen toe. '
        ]);
        DB::table('oefeningen')->insert([
            'naam' => 'Burpee',
            'beschrijving' => 'Begin stand, ga dan in een squat vervolgens in een plank postitie, maak dan een push up en sta dan op. '
        ]);
        DB::table('oefeningen')->insert([
            'naam' => 'Lunge',
            'beschrijving' => 'Plaats één been naar voren met de knie gebogen en de voet plat op de grond, terwijl het andere been erachter wordt geplaatst. Herhaal dit om de beurt. '
        ]);
        DB::table('oefeningen')->insert([
            'naam' => 'Wall sit',
            'beschrijving' => 'Ga tegen een muur staan en laat je rug langs de muur naar beneden zakken totdat je heupen en knieën in een hoek van 90 graden staan. Je schouders, rug en achterhoofd moeten recht tegen de muur zitten. '
        ]);
        DB::table('oefeningen')->insert([
            'naam' => 'Crunch',
            'beschrijving' => 'Ga op je rug liggen en houd je handen op je borst. Plaats je voeten op de grond voor je met je knieën op 90 graden. Til de schouders van de grond en rol rustig omhoog, waarbij je de onderrug op de grond houdt. Laat je hoofd rustig weer terugzakken en adem uit. '
        ]);
        DB::table('oefeningen')->insert([
            'naam' => 'Cronch',
            'beschrijving' => 'Ga op je rug liggen en houd je handen op je borst. Plaats je voeten op de grond voor je met je knieën op 90 graden. Til de schouders van de grond en rol rustig omhoog, waarbij je de onderrug op de grond houdt. Laat je hoofd rustig weer terugzakken en adem uit. '
        ]);
    }
}
