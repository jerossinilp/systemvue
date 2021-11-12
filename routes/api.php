<?php

use App\Http\Controllers\Api\{
    StateController
};
use Illuminate\Support\Facades\Route;

Route::get('/states', [StateController::class, 'index']);

Route::get('/', function () {
    return response()->json(['message' => 'http://www.optimus7.com.br']);
});
