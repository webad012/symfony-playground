<?php

namespace SymfonyPlayground\Tests;

use App\Model\Circle;
use App\Model\Triangle;
use App\Service\GeometryCalculator;
use PHPUnit\Framework\TestCase;

class GeometryCalculatorTest extends TestCase
{
    public function testSumOfAreasForTwoObjects1()
    {
        $geometryCalculator = new GeometryCalculator();

        $obj1 = new Triangle(1, 2, 3);
        $obj2 = new Circle(5);

        $this->assertEquals(78.53981633974483, $geometryCalculator->sumOfAreasForTwoObjects($obj1, $obj2));
    }

    public function testSumOfAreasForTwoObjects2()
    {
        $geometryCalculator = new GeometryCalculator();

        $obj1 = new Triangle(4, 5, 6);
        $obj2 = new Circle(7);

        $this->assertEquals(163.85960744239208, $geometryCalculator->sumOfAreasForTwoObjects($obj1, $obj2));
    }

    public function testSumOfCircumferencesForTwoObjects1()
    {
        $geometryCalculator = new GeometryCalculator();

        $obj1 = new Triangle(1, 2, 3);
        $obj2 = new Circle(5);

        $this->assertEquals(37.41592653589793, $geometryCalculator->sumOfCircumferencesForTwoObjects($obj1, $obj2));
    }

    public function testSumOfCircumferencesForTwoObjects2()
    {
        $geometryCalculator = new GeometryCalculator();

        $obj1 = new Triangle(4, 5, 6);
        $obj2 = new Circle(7);

        $this->assertEquals(58.982297150257104, $geometryCalculator->sumOfCircumferencesForTwoObjects($obj1, $obj2));
    }
}