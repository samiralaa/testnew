<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\StripeController;
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


Route::get('stripe', [StripeController::class, 'stripe']);
Route::post('stripe', [StripeController::class, 'stripePost'])->name('stripe.post');

Route::get('/contactpage/index',[ContentController::class,'index'])->name('contactpage.index');

Route::get('/contactpage',[ContentController::class,'create'])->name('contactpage');
Route::post('/contactpage/store',[ContentController::class,'store'])->name('contactpage.store');


//
Route::get('/Dashboard/admin',[DashboardController::class,'index'])->name('Dashboard.admin');

Route::get('/Dashboard/admins',[ContentController::class,'index'])->name('contactpage.index');
//
Route::get('/projectpage',[ProjectController::class,'create'])->name('projectpage');
Route::post('/projectpage/store',[ProjectController::class,'store'])->name('projectpage.store');

Route::get('/home',[FrontendController::class,'index'])->name('home');
Route::get('/clints',[FrontendController::class,'clints'])->name('home.clints');
Route::get('/serves',[FrontendController::class,'serves'])->name('home.serves');
Route::get('/serves/researchAndDevelopment',[FrontendController::class,'researchAndDevelopment'])->name('serves.researchAndDevelopment');
Route::get('/serves/networks',[FrontendController::class,'networks'])->name('serves.networks');

Route::get('/serves/backup',[FrontendController::class,'backup'])->name('serves.backup');

Route::post('/mail',[FrontendController::class,'sendmail'])->name('home.sendmail');

