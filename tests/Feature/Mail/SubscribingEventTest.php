<?php

namespace Tests\Feature\Mail;

use App\Models\Events;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Mail\SubscribingEvent;

class SubscribingEventTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_mailable_content()
    {
        
        $user = User::factory()->create();
        $event = Events::factory()->create();
        

        $subscribeEvent = new SubscribingEvent($user, $event);
    
        $subscribeEvent->assertSeeInHtml($user->name);
        $subscribeEvent->assertSeeInHtml($event->title);
    }
}

