<?php

namespace Tests\Feature\Controllers;

use App\Models\Events;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class LandingControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
/*
    public function test_into_the_route_landing_page()
    {
        User::factory()->create();
        Events::factory(3)->create();

        $response = $this->get(route('landing'));

        $response->assertStatus(200)
        ->assertViewIs('landing');
    }
*/
    public function test_can_see_an_all_users_events_list()
    {

        User::factory()->create();
        Events::factory(2)->create();
        $event = Events::all();

        $response = $this->get(route('landing'));

        $response->assertSee($event[1]->title);
    }
/*
    public function test_can_not_see_an_authors_name_in_nav_of_the_landing_page()
    {
        
        $user = User::factory()->create(['name' => 'lucas']);
        $event = Events::factory(2)->create();

        $response = $this->get(route('landing'));

        $response->assertDontSee('lucas');
    }
    */
}