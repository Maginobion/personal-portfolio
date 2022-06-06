<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

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

Route::get('/', [HomeController::class, 'home'])->name('welcome');
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('projects', [HomeController::class, 'projects'])->name('projects');

Route::get('contact', [ContactController::class, 'contact'])->name('contactanos.contact');
Route::get('contactform', [ContactController::class, 'contactform'])->name('contactanos.mail');
Route::post('contact', [ContactController::class, 'mailSend'])->name('contactanos.mailsend');
