<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserDeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserDeleteTest()
    {
        $user = User::find(1);
        $this->assertTrue($user->delete());
    }
}
