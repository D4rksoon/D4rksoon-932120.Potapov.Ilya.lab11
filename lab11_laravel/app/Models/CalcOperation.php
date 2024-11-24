<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CalcOperation extends Model
{
    public static function generateRandValue()
    {
        return rand(1, 10);
    }
    public static function add($first, $second)
    {
        return $first + $second;
    }
    public static function subtract($first, $second)
    {
        return $first - $second;
    }
    public static function multiply($first, $second)
    {
        return $first * $second;
    }
    public static function divide($first, $second)
    {
        if ($second == 0) {
            return ("error: Division by zero");
        }
        return number_format($first / $second, 1, '.','');
    }
}
