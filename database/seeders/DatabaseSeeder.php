<?php

namespace Database\Seeders;

use App\Models\Portfolio;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        

        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            HeaderSeeder::class,
            PortfolioSeeder::class,
            AboutSeeder::class,
            FooterSeeder::class,
        ]);
    }
}
