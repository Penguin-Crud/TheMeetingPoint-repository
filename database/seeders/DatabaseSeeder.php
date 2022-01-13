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
            'title' => 'Api Rest',
            'image' => 'https://edteam-media.s3.amazonaws.com/courses/original/fbda9747-85b7-482e-8ffc-547b98031ca4.png',
            'user_id' => '1',
            'showSlider' => true,
            'description' => 'Curso de ApiRest',
        ]);
        Events::factory()->create([
            'title' => 'Arduinos',
            'image' => 'https://edteam-media.s3.amazonaws.com/courses/original/1bada4e8-4bab-4be8-8f2e-83e285515187.png',
            'user_id' => '1',
            'showSlider' => true,
            'description' => 'Curso de Arduinos desde cero'
        ]);
        Events::factory()->create([
            'title' => 'Base de Datos SQL',
            'image' => 'https://edteam-media.s3.amazonaws.com/courses/original/e02f6289-883c-454c-8f35-f6a0cee78066.jpg',
            'user_id' => '1',
            'showSlider' => true,
            'description' => 'Curso de Base de Datos desde cero'
        ]);
        Events::factory()->create([
            'title' => 'CSS',
            'image' => 'https://edteam-media.s3.amazonaws.com/courses/original/daa72e4e-c5d0-406e-9f6d-01e646bf719b.png',
            'user_id' => '1',
            'description' => 'Curso de Css desde cero',
        ]);
        Events::factory()->create([
            'title' => 'Docker',
            'image' => 'https://edteam-media.s3.amazonaws.com/courses/original/e41bbf77-d458-48d9-814b-7dd62a214e40.png',
            'user_id' => '1',
            'description' => 'Curso de Docker desde cero',
        ]); Events::factory()->create([
            'title' => 'Electronica',
            'image' => 'https://edteam-media.s3.amazonaws.com/courses/original/47766c2e-6ef7-40a9-8c92-50939fe9bfd0.png',
            'user_id' => '1',
            'description' => 'Curso de Electronica desde cero',
        ]); Events::factory()->create([
            'title' => 'Figma',
            'image' => 'https://edteam-media.s3.amazonaws.com/courses/original/4eaf6f9d-daa5-412e-95ff-f37627c280ef.png',
            'user_id' => '1',
            'description' => 'Curso de Figma desde cero',
        ]); Events::factory()->create([
            'title' => 'HTML',
            'image' => 'https://edteam-media.s3.amazonaws.com/courses/original/26557907-0555-427e-a40c-6ff207f98d72.png',
            'user_id' => '1',
            'description' => 'Curso de HTML desde cero',
        ]); Events::factory()->create([
            'title' => 'Ingles',
            'image' => 'https://edteam-media.s3.amazonaws.com/courses/original/4feb100b-5d47-4daf-b421-9983c5ecdfa8.png',
            'user_id' => '1',
            'description' => 'Curso de Ingles desde cero',
        ]); Events::factory()->create([
            'title' => 'Testing',
            'image' => 'https://edteam-media.s3.amazonaws.com/courses/original/5c7a8ada-4656-44d1-bc5e-b5fde2a5602c.png',
            'user_id' => '1',
            'description' => 'Curso de Introduccion al Testing',
        ]); Events::factory()->create([
            'title' => 'JavaScript',
            'image' => 'https://edteam-media.s3.amazonaws.com/courses/original/61e5a210-8dab-412e-a6dc-802c070cc18c.jpg',
            'user_id' => '1',
            'description' => 'Curso de JavaScript desde cero',
        ]); Events::factory()->create([
            'title' => 'Linux',
            'image' => 'https://edteam-media.s3.amazonaws.com/courses/original/5ffc4c77-cbc3-476d-9c18-e180882a52c9.jpg',
            'user_id' => '1',
            'description' => 'Curso de Linux desde cero',
        ]); Events::factory()->create([
            'title' => 'Python',
            'image' => 'https://edteam-media.s3.amazonaws.com/courses/original/85d3d7e4-19db-4cff-a4cb-cbead813b6b5.png',
            'user_id' => '1',
            'description' => 'Curso de Python desde cero',
        ]); Events::factory()->create([
            'title' => 'React',
            'image' => 'https://edteam-media.s3.amazonaws.com/courses/original/7204fcde-37aa-49a2-a619-63459f834ada.png',
            'user_id' => '1',
            'description' => 'Curso de React desde cero',
        ]); Events::factory()->create([
            'title' => 'Vue3',
            'image' => 'https://edteam-media.s3.amazonaws.com/courses/original/3886d909-4c3a-4e5c-a004-68cc5fcdccea.png',
            'user_id' => '1',
            'description' => 'Curso de Vue3 desde cero',
        ]);
    }
}