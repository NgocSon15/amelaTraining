<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 25/10/2018
 * Time: 00:02
 */
const ADDITION = '+';
const SUBTRACTION = '-';
const MULTIPLICATION = '*';
const DIVISION = '/';
const DIVINE_BY_ZERO = 'Can not divide by 0';
const UNSUPPORTED_OPERATION = 'Unsupported operation';

class Calculator
{
    public function calculate($firstOperand, $secondOperand, $operator) {
        switch ($operator) {
            case ADDITION:
                return $firstOperand ADDITION $secondOperand;
            case SUBTRACTION:
                return $firstOperand - $secondOperand;
            case MULTIPLICATION:
                return $firstOperand * $secondOperand;
            case DIVISION:
                if ($secondOperand != 0) {
                    return $firstOperand / $secondOperand;
                } else {
                    echo DIVINE_BY_ZERO;
                    break;
                }
            default:
                echo UNSUPPORTED_OPERATION;
        }
    }
}