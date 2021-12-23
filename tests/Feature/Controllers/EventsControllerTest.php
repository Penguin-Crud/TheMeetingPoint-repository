<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Events;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class EventsControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    //CREATE
    public function test_auth_user_can_see_an_event_create_form()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->get(route('events.create'));

        $response->assertStatus(200)
        ->assertViewIs('eventCreate');
    }
    public function test_user_can_not_see_an_event_create_form_view()
    {
        $response = $this-> get(route('events.create'));

        $response->assertStatus(302)
        ->assertRedirect('/login'); 
        
    }


    //UPDATE
    public function test_not_auth_user_cannot_edit_an_event_and_redirect_to_login()
    {
        User::factory()->create();
        $event = Events::factory()->create();

        $response = $this->get(route('events.edit', $event->id));
        $response->assertStatus(302)->assertRedirect('/login');
    }

    public function test_auth_user_cannot_edit_an_event()
    {
        User::factory()->create();
        $event = Events::factory()->create();

        $response = $this->get(route('events.edit', $event->id));
        $response->assertStatus(302);
    }

    public function test_admin_can_edit()
    {
        $admin = User::factory()->create(['isAdmin'=>true]);
        $event = Events::factory()->create();

        $response = $this->actingAs($admin)->get(route('events.edit', $event->id));
        $response->assertStatus(200)->assertViewIs('eventEdit');
    }

    public function test_admin_can_update()
    {
        $admin = User::factory()->create(['isAdmin'=>true]);
        $event = Events::factory()->create();
        $data = [
            'title' => 'updating',
            'image' => 'http://hola.jpg'
        ];
        $response = $this->actingAs($admin)->put(route('events.update', $event->id), $data);
        $this->assertDatabaseCount('events', 1);
        $this->assertDatabaseHas('events',  [
            'title' => 'updating',
            'image' => 'http://hola.jpg'
        ]);
    }

}
