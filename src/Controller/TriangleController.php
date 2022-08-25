<?php

namespace App\Controller;

use App\Model\Triangle;
use Symfony\Component\HttpFoundation\JsonResponse;

class TriangleController
{
    public function show(float $a, float $b, float $c): JsonResponse
    {
        $triangle = new Triangle($a, $b, $c);

        $response = new JsonResponse($triangle->serialize());

        return $response;
    }
}