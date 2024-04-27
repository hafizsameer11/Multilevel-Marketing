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
Route::get('/register/{id?}', [AuthController::class, 'registershow'])->name('register.show');
Route::post('/register/request', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'loginshow'])->name('login.show');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('/login/google', [AuthController::class, 'redirectToGoogle'])->name('login.google');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/login/google/callback', [AuthController::class, 'handleGoogleCallback']);
Route::middleware(["auth"])->group(function () {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/index', [DashboardController::class, 'index'])->name('dashboard');
        //plan routes
        Route::get('plans', [PlanController::class, 'index'])->name('plans');
        Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction');
        Route::post('/transfer-fund', [TransactionController::class, 'transfer_funds'])->name('transfer.funds');
    });

    Route::post('/get-plan-amount', [PlanController::class, 'plan_amount'])->name('plan-amount');
    Route::post('/update-plan', [PlanController::class, 'update_plan'])->name('update-amount');
    Route::post('/check-username', [DashboardController::class, 'check_username'])->name('check-username');
    Route::post('/check-amount', [DashboardController::class, 'check_amount'])->name('check-amount');
    // for youtube videos routephp
    Route::get('/vide-url', [YouTubeController::class, 'show_form'])->name('video.url');
    Route::post('/vide-get', [YouTubeController::class, 'video_url'])->name('video.get');
    Route::post('/video-getting-url', [YouTubeController::class, 'urldetector'])->name('urletector');
    //video delete
    Route::get('/video-delete/{id}', [YouTubeController::class, 'destroy'])->name('video.destroy');
    //work routes
    Route::get('video-work', [VideoWorkController::class, 'index'])->name('video.works');
    Route::get('/previous-work', [VideoWorkController::class, 'previouswork'])->name('work.previous');
    Route::get('/video-single/{id}', [VideoWorkController::class, 'single_video'])->name('video.single');
    //complete video
    Route::post('/completeVideo', [VideoWorkController::class, 'completedvideo'])->name('vieo.complete');
    //for earning view routes
    Route::get('/earnings', [UserEarningController::class, 'index'])->name('user.earnings');
    Route::get('/team-earning', [UserEarningController::class, 'reffralearning'])->name('team.earnings');
    Route::get('/video-earnings', [UserEarningController::class, 'video'])->name('user.videoearnings');
    Route::get('/work-earning', [UserEarningController::class, 'allwork'])->name('work.earnings');
    Route::get('/article-earnings', [UserEarningController::class, 'article'])->name('user.articleearnings');


    Route::get('/request-withdraw', [WithdrawController::class, 'index'])->name('withdraw.form');
    Route::post('/withdraw-request-submit', [WithdrawController::class, 'request'])->name('withdraw.request');
    Route::get('/withdraw-requests', [WithdrawController::class, 'showrequest'])->name('withdraw.requests');
    Route::post('/withdraw-request-action', [WithdrawController::class, 'action'])->name('withdraw.action');
    Route::get('/bank-detail-form', [UserbankDetailController::class, 'index'])->name('bankdetail.form');
    Route::post('/submit-bank-details', [UserbankDetailController::class, 'submit'])->name('bankdetail.submit');


    Route::get('/edit-bank-deetails/{id}', [UserbankDetailController::class, 'edit'])->name('bankdetails.user.edit');
    Route::post('/update-bank-details', [UserbankDetailController::class, 'update'])->name('bankdetail.update');
    Route::get('/bank-detail-form', [UserbankDetailController::class, 'index'])->name('bankdetail.form');
    Route::get('/puser-profile', [UserProfileController::class, 'index'])->name('user.profile');
    Route::post('/change-password', [UserProfileController::class, 'chnage_password'])->name('user.changepass');
    Route::post('/change-bankdetails', [UserProfileController::class, 'update_bank_details'])->name('user.bankdetails');
    Route::get('/show-bank-details/{id}', [UserProfileController::class, 'bank_details'])->name('user.bank.details');
    Route::get('/statements-user', [TransactionController::class, 'userstatements'])->name('user.statements');
    Route::get('/statements-admin', [TransactionController::class, 'admintransactions'])->name('admin.statements');

    //user details
    Route::get('/user-profile-details/{id}', [UserProfileController::class, 'user_details'])->name('user.details');
    Route::get('/all-users', [UserProfileController::class, 'allusers'])->name('all-users');
    Route::post('/change-user-password', [AUthController::class, 'change_password_admin'])->name('change.user.pass');
    //role assignment
    Route::get('/role-assignment', [UserProfileController::class, 'role_assign'])->name('role.assign');
    Route::post('/role-assignment-set', [UserProfileController::class, 'set_role'])->name('role.set');
});
Route::get('/videos', [YouTubeController::class, 'index'])->name('videos');
Route::get('/video/{id}', [YouTubeController::class, 'getVideoDetails'])->name('single.video');
