<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserAboutTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAbout()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
    }
}
