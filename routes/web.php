<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Route,Auth};
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\
    {
        FrontendController,
        HomeController,
        SocialController,
        ProfileController,
        BackupController,
        RoleController,
        UserController,
        CategoryController,
    };
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

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('category/details/{category_slug}', [FrontendController::class, 'category_details'])->name('category.details');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');

Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/import', [HomeController::class, 'import'])->name('import');

//Email Verification Routes Start
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/home');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();
    return back()->with('message', 'Verification link sent again!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');
//Email Verification Routes End

//Socialite Routes Start
Route::get('auth/facebook', [SocialController::class, 'facebookRedirect'])->name('auth.facebook');
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook'])->name('auth.facebook.callback');

Route::get('auth/google', [SocialController::class, 'googleRedirect'])->name('auth.google');
Route::get('auth/google/callback', [SocialController::class, 'loginWithGoogle'])->name('auth.google.callback');
//Socialite Routes End

Route::middleware(['auth'])->group(function () {
    //Profile Routes
    Route::resource('profile', ProfileController::class);

    //Backup Routes
    Route::resource('backup', BackupController::class);

    //Role Routes
    Route::resource('role', RoleController::class);

    //User Routes
    Route::resource('user', UserController::class);

    //Category Routes
    Route::resource('category', CategoryController::class);
});

