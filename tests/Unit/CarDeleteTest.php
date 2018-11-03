<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CarDeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testECarDeleteTest()
    {
        $car =Car::find(1);
        $this->assertTrue($car->delete());
    }
}
