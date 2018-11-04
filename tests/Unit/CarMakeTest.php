<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarMakeTest()
    {
        $car = Car::inRandomOrder()->first();
        $this->assertTrue($car->Make='Honda' or 'Toyota' or 'Ford');
    }
}
