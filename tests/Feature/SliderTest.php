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
    public function test_can_see_highlited_events_in_home_page()
    {
        
        $user = User::factory()->create();
        $event = Events::factory()->create();

        $response = $this->get('/');

        $response->assertStatus(200)->assertViewIs('landing');
    }
}
