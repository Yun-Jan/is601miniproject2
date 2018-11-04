<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarModelTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarModelTest()
    {
        $car = Car::inRandomOrder()->first();
        $this->assertTrue($car->Model='string' or 'null');
    }
}
