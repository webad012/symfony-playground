<?php

namespace App\Model;

class Triangle extends BaseGeometryModel
{
    private $_a;
    private $_b;
    private $_c;

    function __construct(float $a, float $b, float $c)
    {
        $this->_a = $a;
        $this->_b = $b;
        $this->_c = $c;
    }

    public function calculateSurface(): float
    {
        /**
         * s = (a + b + c)/2
         * surface = √[s(s-a)(s-b)(s-c)]
         */

        $s = ($this->_a + $this->_b + $this->_c)/2;

        return sqrt(abs($s*($s-$this->_a)*($s-$this->_b)*($s-$this->_c)));
    }

    public function calculateCircumference(): float
    {
        return $this->_a + $this->_b + $this->_c;
    }

    public function serialize(): array
    {
        return [
            'type' => 'triangle',
            'a' => $this->_a,
            'b' => $this->_b,
            'c' => $this->_c,
            'surface' => $this->calculateSurface(),
            'circumference' => $this->calculateCircumference()
        ];
    }
}