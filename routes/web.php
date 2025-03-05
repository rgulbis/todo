<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;
use App\Models\Diary;

Route::get('/todos', [ToDoController::class, 'index']);
Route::get('/todos/create', [ToDoController::class, 'create']);
Route::get('/todos/{todo}', [ToDoController::class, 'show']);
Route::get('/todos/{todo}/edit', [ToDoController::class, 'edit']);
Route::post('/todos', [ToDoController::class, 'store']);
Route::put('/todos/{todo}', [ToDoController::class, 'update']);

Route::get('/diaries', [DiaryController::class, 'index']);
Route::get('/diaries/create', [DiaryController::class, 'create']);
Route::get('/diaries/{diary}', [DiaryController::class, 'show']);
Route::get('/diaries/{diary}/edit', [DiaryController::class, 'edit']);
Route::post('/diaries', [DiaryController::class, 'store']);
Route::put('/diaries/{diary}', [DiaryController::class, 'update']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/why', function () {
    return view('why');
});

