<?php

namespace App\Controller;

use App\Service\GeometryCalculator;
use App\Model\Circle;
use App\Model\Triangle;
use Symfony\Component\HttpFoundation\JsonResponse;

class GeometryCalculatorController
{
    public function sumAreas(): JsonResponse
    {
        $geometryCalculator = new GeometryCalculator();

        $obj1 = new Triangle(1, 2, 3);
        $obj2 = new Circle(5);

        return new JsonResponse($geometryCalculator->sumOfAreasForTwoObjects($obj1, $obj2));
    }

    public function sumCircumferences(): JsonResponse
    {
        $geometryCalculator = new GeometryCalculator();

        $obj1 = new Triangle(1, 2, 3);
        $obj2 = new Circle(5);

        return new JsonResponse($geometryCalculator->sumOfCircumferencesForTwoObjects($obj1, $obj2));
    }
}