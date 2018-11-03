<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class UserUpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserUpdateTest()
    {
        $user = factory(User::class)->create();
        $user->update(['name' => 'Steve Smith']);
        $this->assertDatabaseHas('users',['name'=>$user->name]);
    }
}
