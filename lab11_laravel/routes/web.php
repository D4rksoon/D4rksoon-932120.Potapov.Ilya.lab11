<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Models\CalcOperation;

Route::get('/', [MainController::class, 'home']);
// Использование модели напримую с представлением
Route::get('/CalcService/PassUsingModel', function () {
    $firstValue = CalcOperation::generateRandValue();
    $secondValue = CalcOperation::generateRandValue();
    $resultOperations = [
        'add' => CalcOperation::add($firstValue, $secondValue),
        'subtract' => CalcOperation::subtract($firstValue, $secondValue),
        'multiply' => CalcOperation::multiply($firstValue, $secondValue),
        'divide' => CalcOperation::divide($firstValue, $secondValue)
    ];
    return view('model', compact('firstValue', 'secondValue', 'resultOperations'));
});
// Использование модели через контроллер
Route::get('/CalcService/PassUsingViewData', [MainController::class, 'viewData']);

Route::get('/CalcService/PassUsingViewBag', [MainController::class, 'viewBag']);

Route::get('/CalcService/AccessServiceDirectly', [MainController::class, 'serviceDirectly']);

