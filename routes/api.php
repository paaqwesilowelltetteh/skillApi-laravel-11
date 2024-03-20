<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\SkillsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(SkillsController::class)->prefix('v1/skills')->group(function () {
    Route::get('/', 'index');
    Route::post('/', 'create');
    Route::get('/{id}','show')->name('skills.show');
    Route::put('/{id}', 'update');
    Route::patch('/{id}', 'update');
    Route::delete('/{id}', 'destroy');
});


