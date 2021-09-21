<?php

namespace Database\Seeders;

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
        DB::table("users")->insert([
            "name" => "Zogdoule Nathan",
            "email" => "zogdoule.nathan@gmail.com",
            "password" => Hash::make("doubletest"),
            "created_at" => now()
        ]);

        $this->call([
            HeaderSeeder::class,
            AboutSeeder::class,
            FooterSeeder::class,
        ]);
    }
}
