<?php

namespace App\Controller;

use App\Model\Circle;
use Symfony\Component\HttpFoundation\JsonResponse;

class CircleController
{
    public function show(float $radius): JsonResponse
    {
        $circle = new Circle($radius);

        $response = new JsonResponse($circle->serialize());

        return $response;
    }
}