<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalcOperation;

class MainController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function viewdata()
    {
        $firstValue = CalcOperation::generateRandValue();
        $secondValue = CalcOperation::generateRandValue();
        $resultOperations = [
            'add' => CalcOperation::add($firstValue, $secondValue),
            'subtract' => CalcOperation::subtract($firstValue, $secondValue),
            'multiply' => CalcOperation::multiply($firstValue, $secondValue),
            'divide' => CalcOperation::divide($firstValue, $secondValue)
        ];
        return view('viewdata', compact('firstValue', 'secondValue', 'resultOperations'));
    }
    public function viewbag()
    {
        $firstValue = CalcOperation::generateRandValue();
        $secondValue = CalcOperation::generateRandValue();
        $resultOperations = [
            'add' => CalcOperation::add($firstValue, $secondValue),
            'subtract' => CalcOperation::subtract($firstValue, $secondValue),
            'multiply' => CalcOperation::multiply($firstValue, $secondValue),
            'divide' => CalcOperation::divide($firstValue, $secondValue)
        ];
        return view('viewbag', compact('firstValue', 'secondValue', 'resultOperations'));
    }
    public function serviceDirectly()
    {
        $firstValue = CalcOperation::generateRandValue();
        $secondValue = CalcOperation::generateRandValue();
        $resultOperations = [
            'add' => CalcOperation::add($firstValue, $secondValue),
            'subtract' => CalcOperation::subtract($firstValue, $secondValue),
            'multiply' => CalcOperation::multiply($firstValue, $secondValue),
            'divide' => CalcOperation::divide($firstValue, $secondValue)
        ];
        return view('serviceDirectly', compact('firstValue', 'secondValue', 'resultOperations'));
    }
}
