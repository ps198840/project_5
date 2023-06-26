<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OefeningSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('oefeningen')->insert([
            [
            'naam' => 'oefening 1',
            'beschrijving' => 'stap 1: Maak de andere stappen'
        ],[
            'naam' => 'oefening 2',
            'beschrijving' => 'Zie Nike logo'
        ],[
            'naam' => 'oefening 3',
            'beschrijving' => 'You read the title, I just cannot believe I said the “g” word on accident. Am I even an atheist anymore? I don’t like religion or anything but like maybe it infiltrated me and is manipulating me to say “oh my g*d” instead of “oh my science”. Please guys it wasn’t me, I didn’t mean it. I’m very disappointed in myself, I think I need to go to science camp or go to therapy. What if I’m secretly religious? what should I do? Is my foreskin going to fall off?? Please can someone give me advice, any advice is appreciated.

Best regards,

-an atheist(?)'
            ]
        ]);
    }
}
