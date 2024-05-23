<?php

use App\Http\Controllers\QRcodeGenerateController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

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


Route::get('/', [QRcodeGenerateController::class,'qrcode']);

Route::get('qrcode/{orderNumber}', [QRcodeGenerateController::class, 'qrcodeDB']);
Route::get('order/{orderNumber}', [QRcodeGenerateController::class, 'showOrderDetails']);


Route::get('images', [ImageController::class, 'index']);
Route::post('images', [ImageController::class, 'store']);
Route::get('images/{id}', [ImageController::class, 'show']);
Route::post('link-image-to-user', [ImageController::class, 'linkImageToUser']);

// View route
Route::get('link-image-to-user-form', function () {
    $users = App\Models\User::all();
    return view('link_image_to_user', compact('users'));
});
