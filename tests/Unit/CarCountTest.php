<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
use App\Car;
class CarCountTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarCountTest()
    {
        $car= Car::All();
        $carCount=$car->count();
        $this->assertInternalType(IsType::TYPE_INT,$carCount);
    }
}
