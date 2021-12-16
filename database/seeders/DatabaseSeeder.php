<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Events;
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
        Events::factory(5)->create();
    }
}