<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Route,Auth};
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\SslCommerzPaymentController;
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
        UploadController,
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
Route::get('item/{file_slug}', [FrontendController::class, 'item_details'])->name('item.details');
Route::post('download/{file_slug}', [FrontendController::class, 'download'])->name('download');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('contributor/{user_slug}', [FrontendController::class, 'contributor'])->name('contributor');

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
    Route::get('your/downloads', [ProfileController::class, 'your_downloads'])->name('your.downloads');
    Route::resource('profile', ProfileController::class);

    //Backup Routes
    Route::resource('backup', BackupController::class);

    //Role Routes
    Route::resource('role', RoleController::class);

    //User Routes
    Route::resource('user', UserController::class);

    //Category Routes
    Route::resource('category', CategoryController::class);

    //Upload Routes
    Route::get('file/for/review', [UploadController::class, 'file_for_review'])->name('file.for.review');
    Route::get('file/for/review/details/{id}', [UploadController::class, 'file_for_review_details'])->name('file.for.review.details');
    Route::patch('file/resubmit/{id}', [UploadController::class, 'file_resubmit'])->name('file.resubmit');
    Route::resource('upload', UploadController::class);
});

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
