<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/test',function(){
    return response()->json([
        'message' => 'Testing'
    ]);
});


Route::post('/tambah',[BarangController::class, 'createBarang'])->name('createBarang');


Route::patch('/update/{id}',[BarangController::class,'updateBarang'])->name('updateBarang');

Route::delete('/manage/delete/{id}',[BarangController::class, 'deleteBarang'])->name('deleteBarang');
