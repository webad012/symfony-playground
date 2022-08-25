<?php

namespace App\Model;

abstract class BaseGeometryModel
{
    abstract protected function calculateSurface(): float;
    abstract protected function calculateCircumference(): float;
    abstract protected function serialize(): array;
}