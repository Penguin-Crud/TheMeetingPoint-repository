<?php

namespace Tests\Feature\Models;

use App\Models\Events;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EventsTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_an_event_by_default_is_not_hightlited()
    {   
        $user = User::factory()->create();
        $event = Events::factory()->create();
        
        $this->assertFalse($event->showSlider);
        $this->assertDatabaseCount('events', 1);
        $this->assertDatabaseHas('events',  [
            'showSlider' => false,
        ]);
    }

    public function test_an_event_by_can_be_hightlited()
    {   
        $user = User::factory()->create();
        $event = Events::factory()->create(['showSlider' => true]);
        
        $this->assertTrue($event->showSlider);
        $this->assertDatabaseCount('events', 1);
        $this->assertDatabaseHas('events',  [
            'showSlider' => true,
        ]);
    }

}
