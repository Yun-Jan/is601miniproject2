<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserInsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserInsertTest()
    {
        $user = factory(User::class)->create();
        $this->assertDatabaseHas('users',['name'=>$user->name]);

    }
}
