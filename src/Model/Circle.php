<?php

namespace App\Model;

class Circle extends BaseGeometryModel
{
    private $_radius;

    function __construct(float $radius)
    {
        $this->_radius = $radius;
    }

    public function calculateSurface(): float
    {
        return M_PI * ($this->_radius * $this->_radius);
    }

    public function calculateCircumference(): float
    {
        return 2 * $this->_radius * M_PI;
    }

    public function serialize(): array
    {
        return [
            'type' => 'circle',
            'radius' => $this->_radius,
            'surface' => $this->calculateSurface(),
            'circumference' => $this->calculateCircumference()
        ];
    }
}