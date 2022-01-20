<?php

namespace Tests\Feature\API;

use App\Models\Events;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_get_an_event()
    {
        User::factory()->create();
        $event = Events::factory()->create();
        $this->json('get', route('events.api.item', $event->id))->assertStatus(200)->assertJsonStructure(
            [
                "id",
                "showSlider",
                "user_id",
                "created_at",
                "updated_at",
                "title",
                "image",
                "description",
                "people",
                "date",
            ]
        );
    }
}
