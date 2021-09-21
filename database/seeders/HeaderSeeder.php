<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            [
                'titrePrincipal' => 'START BOOTSTRAP',
                'link1' => 'PORTFOLIO',
                'link2' => 'ABOUT',
                'link3' => 'CONTACT',
                'img' => 'avataaars.svg',
                'titre' => 'START BOOTSTRAP',
                'soustitre1' => 'Graphic Artist',
                'soustitre2' => 'Web Designer ',
                'soustitre3' => 'Illustrator'
            ]
        ]);
    }
}
