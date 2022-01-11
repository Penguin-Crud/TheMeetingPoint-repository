<?php

namespace Tests\Feature;

use App\Models\Events;
use App\Models\User;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SliderTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_can_see_highlited_events_in_landing_page()
    {
        
        $user = User::factory()->create();
        $events = Events::factory(10)->create();
        $events[0]->toggleHighlight();
        $events[1]->toggleHighlight();
        $events[2]->toggleHighlight();

        $response = $this->get('/');

        $response->assertStatus(200)->assertViewIs('landing')
        ->assertSee("Highlighted event {$events[0]->title}")
        ->assertSee("Highlighted event {$events[1]->title}")
        ->assertSee("Highlighted event {$events[2]->title}")
        ->assertDontSee("Highlighted event {$events[3]->title}");
    }
}
