<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
USE PHPUnit\Framework\Constraint\IsType;
use App\User;

class UserCountTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserCountTest()
    {
        $user= User::All();
        $userCount=$user->count();
        $this->assertInternalType(IsType::TYPE_INT,$userCount);
    }
}
