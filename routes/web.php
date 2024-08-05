<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\OptionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\PublicAnswerController;


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

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/survey', [SurveyController::class, 'index'])->name('survey.index');
Route::post('/survey/submit', [SurveyController::class, 'submit'])->name('survey.submit');
Route::get('/parties/{party}/answers', [PartyController::class, 'showAnswersForm'])->name('party.answers.form');
Route::post('/parties/{party}/answers', [PartyController::class, 'storeAnswers'])->name('party.answers.store');
Route::middleware(['auth', 'admin'])->group(function () {
 Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
   
});


Route::get('/', function () {
    return view('welcome');
});

Route::resource('questions', QuestionController::class);
Route::resource('categories', CategoryController::class);
Route::resource('parties', PartyController::class);Route::resource('parties', PartyController::class);
// Route::get('parties/{party}/answers', [PartyController::class, 'showAnswersForm'])->name('party.answers.form');
// Route::post('parties/{party}/answers', [PartyController::class, 'storeAnswers'])->name('party.answers.store');

Route::resource('options', OptionController::class);

/*new thing*/

Route::post('/answers', [AnswerController::class, 'store'])->name('answers.store');


Route::get('/parties/{party}/questions', [AnswerController::class, 'create'])->name('answers.create');
// Route::post('/parties/{party}/answers', [AnswerController::class, 'store'])->name('answers.store');
// Route::post('/public/answers', [PublicAnswerController::class, 'store'])->name('public.answers.store');
// use App\Http\Controllers\PublicAnswerController;
// Route::post('parties/{party}/answers', [AnswerController::class, 'store'])->name('survay.store');
Route::get('/public/answers', [PublicAnswerController::class, 'showForm'])->name('survay.create');
Route::post('/public/answers', [PublicAnswerController::class, 'store'])->name('survay.store');
// Route::get('/public/thankyou', function () {
//     return view('survay.thankyou');
// })->name('survay.thankyou');


Route::get('/thankyou', [PublicAnswerController::class, 'showThankYouPage'])->name('survay.thankyou');
