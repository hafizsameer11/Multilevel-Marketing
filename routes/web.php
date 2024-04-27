<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserbankDetailController;
use App\Http\Controllers\UserEarningController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\VideoWorkController;
use App\Http\Controllers\WithdrawController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\YouTubeController;
use App\Models\UserBankDetails;
use App\Models\UserEarning;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;



Route::get('/', function () {
    return view('web.home.index');
})->name('home');
Route::get('/about-us', function () {
    return view('web.about.index');
})->name('about');
Route::get('/our-service', function () {
    return view('web.services.index');
})->name('services');
Route::get('/our-projects', function () {
    return view('web.projects.index');
})->name('projects');
Route::get('/contact-us', function () {
    return view('web.about.index');
})->name('contact.us');
Route::get('/blog-details', function () {
    return view('web.blog.index');
})->name('blog');

// Group for AuthController routes
Route::group(['controller' => AuthController::class], function () {
    Route::get('/register/{id?}', 'registershow')->name('register.show');
    Route::post('/register/request', 'register')->name('register');
    Route::get('/login', 'loginshow')->name('login.show');
    Route::post('login', 'login')->name('login');
    Route::get('/login/google', 'redirectToGoogle')->name('login.google');
    Route::get('/login/google/callback', 'handleGoogleCallback');
    Route::get('logout', 'logout')->name('logout');
});

Route::middleware(["auth"])->group(function () {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/index', [DashboardController::class, 'index'])->name('dashboard');
        //plan routes
        Route::get('plans', [PlanController::class, 'index'])->name('plans');
        Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');
        Route::post('/transfer-fund', [TransactionController::class, 'transfer_funds'])->name('transfer.funds');
    });
    // Group for PlanController routes
    Route::group(['controller' => PlanController::class], function () {
        Route::post('/get-plan-amount', 'plan_amount')->name('plan-amount');
        Route::post('/update-plan', 'update_plan')->name('update-amount');
    });

    // Group for DashboardController routes
    Route::group(['controller' => DashboardController::class], function () {
        Route::post('/check-username', 'check_username')->name('check-username');
        Route::post('/check-amount', 'check_amount')->name('check-amount');
    });

    // Group for YouTubeController routes
    Route::group(['controller' => YouTubeController::class], function () {
        Route::get('/videos', 'index')->name('videos');
        Route::get('/vide-url', 'show_form')->name('video.url');
        Route::post('/vide-get', 'video_url')->name('video.get');
        Route::get('/video/{id}', 'getVideoDetails')->name('single.video');
        Route::post('/video-getting-url', 'urldetector')->name('urletector');
        Route::get('/video-delete/{id}', 'destroy')->name('video.destroy');
    });

    // Group for VideoWorkController routes
    Route::group(['controller' => VideoWorkController::class], function () {
        Route::get('video-work', 'index')->name('video.works');
        Route::get('/previous-work', 'previouswork')->name('work.previous');
        Route::get('/video-single/{id}', 'single_video')->name('video.single');
        Route::post('/completeVideo', 'completedvideo')->name('vieo.complete');
    });

    // Group for UserEarningController routes
    Route::group(['controller' => UserEarningController::class], function () {
        Route::get('/earnings', 'index')->name('user.earnings');
        Route::get('/team-earning', 'reffralearning')->name('team.earnings');
        Route::get('/video-earnings', 'video')->name('user.videoearnings');
        Route::get('/work-earning', 'allwork')->name('work.earnings');
        Route::get('/article-earnings', 'article')->name('user.articleearnings');
    });

    // Group for WithdrawController routes
    Route::group(['controller' => WithdrawController::class], function () {
        Route::get('/request-withdraw', 'index')->name('withdraw.form');
        Route::post('/withdraw-request-submit', 'request')->name('withdraw.request');
        Route::get('/withdraw-requests', 'showrequest')->name('withdraw.requests');
        Route::post('/withdraw-request-action', 'action')->name('withdraw.action');
        Route::get('/bank-detail-form', 'index')->name('bankdetail.form');
        Route::post('/submit-bank-details', 'submit')->name('bankdetail.submit');
        Route::get('/edit-bank-deetails/{id}', 'edit')->name('bankdetails.user.edit');
        Route::post('/update-bank-details', 'update')->name('bankdetail.update');
    });

    // Add more groups for other controllers as needed...

});
