<?php

namespace App\Repositories;

use App\Contracts\CalculatorInterface;

class CalculatorRepository implements CalculatorInterface
{
    public function add($num1, $num2)
    {
        return $num1 + $num2;
    }

    public function subtract($num1, $num2)
    {
        return $num1 - $num2;
    }

    public function multiply($num1, $num2)
    {
        return $num1 * $num2;
    }

    public function divide($num1, $num2)
    {
        if ($num2 == 0) {
            throw new \InvalidArgumentException('Division by zero is not allowed.');
        }

        return $num1 / $num2;
    }
}
