<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; //外部にあるPostControllerクラスをインポート。

Route::get('/posts', [PostController::class, 'post']);

Route::get('/', [PostController::class, 'index']);

Route::get('/posts/{post}', [PostController::class ,'show']);
// '/posts/{対象データのID}'にGetリクエストが来たら、PostControllerのshowメソッドを実⾏する



?>

