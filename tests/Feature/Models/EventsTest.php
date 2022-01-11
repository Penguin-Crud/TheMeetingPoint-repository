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

     //SHOW SLIDER
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
        $event = Events::factory()->create();
        $event->toggleHighlight();
        
        $this->assertTrue($event->showSlider);
        $this->assertDatabaseCount('events', 1);
        $this->assertDatabaseHas('events',  [
            'showSlider' => true,
        ]);
    }

    public function test_an_event_by_can_be_dehightlited()
    {   
        $user = User::factory()->create();
        $event = Events::factory()->create();
        $event->toggleHighlight();
        $event->toggleHighlight();
        
        $this->assertFalse($event->showSlider);
        $this->assertDatabaseCount('events', 1);
        $this->assertDatabaseHas('events',  [
            'showSlider' => false,
        ]);
    }

    public function test_can_get_all_highlitedEvents()
    {
        $user = User::factory()->create();
        $events = Events::factory(3)->create();
        $events[0]->toggleHighlight();
        $events[1]->toggleHighlight();
        $highlightedEvents = Events::highlightedEvents();
        $this->assertCount(2, $highlightedEvents);
    }

    public function test_user_join_events()
    {
        $user = User::factory()->create();
        $event = Events::factory()->create();

        $event->addStudent($user->id);
        $this->assertDatabaseCount('students',1);
    }

    public function test_count_students_joined_in_an_events()
    {
        $user = User::factory()->create();
        $event = Events::factory()->create();

        $event->addStudent($user->id);
        $this->assertEquals(1, $event->countStudents());
    }

    public function test_students_can_unjoin_in_an_events()
    {
        $user = User::factory()->create();
        $event = Events::factory()->create();

        $event->addStudent($user->id);
        $event->removeStudent($user->id);
        $this->assertEquals(0, $event->countStudents());
    }
}
