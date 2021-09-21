<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'titre1' => 'LOCATION',
            'adresse' => '2215 John Daniel Drive',
            'adresse2' => 'Clark, MO 65243',
            'titre2' => 'AROUND THE WEB',
            'titre3' => 'ABOUT FREELANCER',
            'txtF1' => 'Freelance is a free to use, MIT licensed Bootstrap theme created by',
            'txtF2' => 'Start Bootstrap',
            'txtF3' => 'Copyright Your Website 2021'
        ]); 

    }
}
