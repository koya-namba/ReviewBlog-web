<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewpostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ReviewpostController::class, 'index']);

// 問題1
// /testにアクセスされたらReviewpostControllerのindexTextメソッドが呼び出されるように定義する
Route::get('/test', [ReviewpostController::class, 'indexText']);

// 問題4
// 条件に合うようにルーティングを定義しましょう
Route::get('/test/{post}', [ReviewpostController::class, 'showText']);

// 問題5
// ルーティングを定義しましょう。（「(ルーティングを書く)」と書かれている部分を変えましょう）
Route::get('/test/{post}/tags/{tag}', [ReviewpostController::class, 'legend']);
