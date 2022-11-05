<?php 
#php artisan optimize 

#use Thakur\Calculator\CalculatorController;

Route::get('calculator', function(){
    return "hello example";
});


Route::get('add/{a}/{b}', [Thakur\Calculator\CalculatorController::class, 'add']);
Route::get('sub/{a}/{b}', [Thakur\Calculator\CalculatorController::class, 'sub']);