<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;

// landing page route
Route::get('/', function () {
    return view('landingPage');
});

// routes for authentication procedures
Route::controller(CustomAuthController::class) -> group(function() {
    Route::get('login', 'index') -> name('login');
    Route::get('register', 'register') -> name('register');
    Route::get('logout', 'logout') -> name('logout');
    Route::post('validate_registration', 'validate_registration') -> name('sample.validate_registration');
    Route::post('validate_login', 'validate_login') -> name('sample.validate_login');
});


// routes for edit profile, like, getUploadedBooks, userLikedBooks and deleting an uploaded book
Route::controller(UserController::class) -> group(function() {
    Route::post('update_user', 'update_user') -> name('sample.update_user');
    Route::get('like/{bookID}', 'addLike');
    Route::get('user/likedBooks', 'getLikedBooks');
    Route::get('user/upload', 'getUploadedBooks');
    Route::get('delete/{fileID}', 'deleteBook');
    Route::get("contact", "getContact");
    Route::get("contact", "getAbout");
    Route::get("user/editProfile", "getEditProfile");
});

// routes for book uploading, downloading, reading and filters for different categories
Route::controller(BookController::class) -> group(function() {
    Route::get('home', 'home') -> name('home');
    Route::get('upload', 'upload') -> name('upload');
    Route::post('validate_book', 'validate_book') -> name('sample.validate_book');
    Route::get('download/{filename}', 'downloadBook');
    Route::get('read/{filename}', 'readBook');
    Route::get('computer', 'comp_books');
    Route::get('physics', 'phy_books');
    Route::get('medical', 'med_books');
    Route::get('history', 'history_books');
});

// routes for admin activities
Route::controller(AdminController::class) -> group(function() {
    Route::get('admin-login', 'adminIndex');
    Route::get('admin-home', 'adminHome');
    Route::get('admin-upload', 'adminUpload');
    Route::post('validate_admin', 'validate_admin') -> name('sample.validate_admin');
    Route::post('validateBookAdmin', 'validateBookAdmin') -> name('sample.validateBookAdmin');
    Route::get("admin-delete", "adminDel");
    Route::get('admindelete/{fileID}', 'delete_Book');
    Route::post('review', 'addReview') -> name('sample.review');
    Route::get('customer-care', 'customerCare');
    Route::get('deleteReview/{reviewID}', 'delete_review');
});