<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;
class CarUpdateTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarUpdateTest()
    {
        $car= factory(Car::class)->create();
        $car->Year='2000';
        $car->save();
        $this->assertTrue($car->update());
    }
}
