<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [MemberController::class, 'index'])->name('one');
Route::post('/addHome', [MemberController::class, 'store'])->name('addFirst');

Route::get('/location', [MemberController::class, 'twoShow'])->name('twoShow');
Route::post('/addLocation/{id}', [MemberController::class, 'addLocation'])->name('addLocation');
// Route::get('/location', function(){
//     return view('pages.location');
// });

Route::post('/addEdu/{id}', [MemberController::class, 'addEducation'])->name('addEdu');

Route::post('/addBap/{id}', [MemberController::class, 'addBaptism'])->name('addBap');

Route::post('/addPicture/{id}', [MemberController::class, 'addPicture'])->name('addPic');

Route::get('/finish', [MemberController::class, 'finish'])->name('finish');

// Route::get('/education', function(){
//     return view('pages.education');
// });

// Route::get('/baptism', function(){
//     return view('pages.baptism');
// });

// Route::get('/picture', function(){
//     return view('pages.picture');
// });


Route::get('/details', function(){
	return view('pages.details');
});


Route::get('/finish', function(){
	return view('pages.finish');
})->name('finish');

Route::get('/edit/{id}', [MemberController::class, 'edit']);
Route::get('/editOne/{id}', [MemberController::class, 'editOne']);
Route::get('/editTwo/{id}', [MemberController::class, 'editTwo']);
Route::get('/editThree/{id}', [MemberController::class, 'editThree']);

Route::post('/edit/first/{id}', [MemberController::class, 'addEditOne']);
Route::post('/edit/editLocation/{id}', [MemberController::class, 'editLocation']);
Route::post('/editEdu/{id}', [MemberController::class, 'editEducation']);
Route::post('/editBap/{id}', [MemberController::class, 'editBaptism']);
Route::post('/editPicture/{id}', [MemberController::class,'editPicture']);
Route::get('/editPicturee/{id}', [MemberController::class,'editPictureShow']);

Route::get('/view', [MemberController::class, 'view']);
Route::post('/view/search', [MemberController::class, 'action'])->name('live_search');

Route::get('/admin', [MemberController::class, 'showProfile']);



Route::get('/editBioInfo/{id}', [MemberController::class, 'editBioInfo']);

Route::get('/viewEdit/{id}', [MemberController::class, 'showCategoryEdit']);

// Route::get('/viewEdit', function(){
// 	return view('pages.edit.viewEdit');
// });


Route::get('/parallax', function(){
	return view('website.parallax');
});

Route::get('/website/home', function(){
	return view('website.home');
});