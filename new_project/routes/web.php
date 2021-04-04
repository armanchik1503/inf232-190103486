<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadFileController;
use App\Http\Controllers\AccountsInfoController;
use App\Http\Controllers\MailController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/upload', [UploadFileController::class, 'index']);
Route::post('/upload', [UploadFileController::class, 'store'])->name('upload-store');
Route::get('/accounts',[AccountsInfoController::class, 'index'])->name('accounts');
Route::get('/send-email', [MailController::class, 'sendEmail']);
