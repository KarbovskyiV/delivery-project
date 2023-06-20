<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('translations', function (\Illuminate\Http\Request $request) {
    $lang = $request->get('lang');
    $name = $request->get('name');
    return response()->json([
        'hello' => __('I am user', [], $lang)
//    'apples' => trans_choice('base.apples', 10)
    ]);
});
