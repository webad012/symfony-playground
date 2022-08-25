<?php

namespace App\Service;

use App\Model\BaseGeometryModel;

class GeometryCalculator
{
    public function sumOfAreasForTwoObjects(BaseGeometryModel $obj1, BaseGeometryModel $obj2)
    {
        return $obj1->calculateSurface() + $obj2->calculateSurface();
    }

    public function sumOfCircumferencesForTwoObjects(BaseGeometryModel $obj1, BaseGeometryModel $obj2)
    {
        return $obj1->calculateCircumference() + $obj2->calculateCircumference();
    }
}