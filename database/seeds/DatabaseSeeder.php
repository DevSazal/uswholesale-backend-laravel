<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        //Seed the country
        $this->call(CountrySeeder::class);
        // $this->call(CitySeeder::class);

    }
}
