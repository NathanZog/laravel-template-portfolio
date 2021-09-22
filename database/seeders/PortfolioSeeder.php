<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('portfolios')->insert([
            "titre" => "PORTFOLIO",
            "img1" => 'assets/img/cabin.png',
            "img2" => 'assets/img/cake.png',
            "img3" => 'assets/img/circus.png',
            "img4" => 'assets/img/game.png',
            "img5" => 'assets/img/safe.png',
            "img6" => 'assets/img/submarine.png',
        ]);
    }
}
