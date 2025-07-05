<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// create api test
// GET -Retrieve data
// POST -Create new data
// PUT /PATCH -Updte existing data
// DELETE - Remove data
Route::get('/students', function (Request $request) {
    // return $request->user();
    // query data
   $students = DB::table('students')->get();
    return response()->json(
        [
            'data'=>$students,
            'message'=>'Successfully'
        ],200
    );
});
Route::POST('/students', function (Request $request) {
    // return $request->user();
    // query data
   $students = DB::table('students')->get();
    
});