<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ToursTableSeeder::class);
        $this->call(GuidesTableSeeder::class);
        $this->call(MenuTableSeeder::class);
    }
}
