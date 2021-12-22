<?php

namespace Tests\Feature\Models;

use App\Models\Events;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    public function test_admin_is_by_defaul_false()//unit test
    {
        $user = User::factory()->create();
        $event = Events::factory()->create();
        
        $this->assertDatabaseCount('users', 1);
        $this->assertDatabaseHas('users',  [
            'isAdmin' => false,
        ]);
    }

    public function test_can_make_admin()//unit test
    {
        $user = User::factory()->create([
            'isAdmin' => true,
        ]);
        $event = Events::factory()->create();
        
        $this->assertDatabaseCount('users', 1);
        $this->assertDatabaseHas('users',  [
            'isAdmin' => true,
        ]);
    }

}
