<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
use App\Car;

class CarYearTypeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarYearTypeTest()
    {
        $car = Car::inRandomOrder()->first();
        $year = $car->year;
        $this->assertInternalType(IsType::TYPE_INT, $year);
    }
}
