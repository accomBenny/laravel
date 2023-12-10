<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/hello', function () {
    return "Hello World";
});

Route::group([
    'prefix' => 'comment',
], function () {
    Route::get('/getAll', [CommentController::class, 'getAll']);
    Route::post('/search', [CommentController::class, 'search']);
    Route::post('/create', [CommentController::class, 'create']);
    Route::post('/delete', [CommentController::class, 'delete']);
    // Route::post('/delete{id}', [CommentController::class, 'delete']);
    Route::post('/update', [CommentController::class, 'update']);
});
