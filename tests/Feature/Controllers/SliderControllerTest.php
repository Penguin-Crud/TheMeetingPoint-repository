<?php

namespace Tests\Feature\Controllers;

use App\Models\Events;
use App\Models\User;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SliderControllerTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
/*
    public function test_admin_can_higlight_events()
    {
        $admin = User::factory()->create(['isAdmin'=>true]);
        $event = Events::factory()->create();

        $response = $this->actingAs($admin)->get(route('events.highlight', ['id'=>$event->id]));
        
        $this->assertTrue($event->showSlider);
    }
    */
}
