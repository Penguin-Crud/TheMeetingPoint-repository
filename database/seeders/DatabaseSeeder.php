<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Events;
use App\Models\User;
class DatabaseSeeder extends Seeder

{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   
        User::factory([
            'email' => 'admin@admin.com',
            'name' => 'admin',
            'isAdmin' => true,
        ])->create();

        User::factory(2)->create();

        Events::factory()->create([
            'title' => 'guayaquil',
            'image' => 'https://pymstatic.com/85493/conversions/coach-guayaquil-default.jpg',
            'user_id' => '1',
            'showSlider' => true,
            'description' => 'Lorem Ipsum facty como que n tee juhy jauen fpaiaif e napamte lemfasmee e fajef  najdjw wkajwu wmd.',
        ]);
        Events::factory()->create([
            'title' => 'barcelona',
            'image' => 'https://media.cntraveler.com/photos/5a985924d41cc84048ce6db0/master/w_4348,h_3261,c_limit/Catedral-de-Barcelona-GettyImages-511874340.jpg',
            'user_id' => '1',
            'showSlider' => true,
        ]);
        Events::factory()->create([
            'title' => 'Parc Guell',
            'image' => 'https://lp-cms-production.imgix.net/2021-07/GettyRF_1137803766.jpg?auto=format&fit=crop&sharp=10&vib=20&ixlib=react-8.6.4&w=850',
            'user_id' => '1',
            'showSlider' => true,
        ]);
        

        Events::factory(10)->create();
    }
}