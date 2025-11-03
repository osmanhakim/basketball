<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\HomeController;
use App\Http\Controllers\VideoController;

Route::group(['middleware' => 'APILocalization'], function () {

    
    Route::group(['namespace' => 'Auth'], function () {
        Route::post('register', 'AuthController@register');
        Route::post('refresh', 'AuthController@refresh');
        Route::get('user/verify/{verification_code}', 'AuthController@verifyUser')->name('user.verify');
        Route::post('login', 'AuthController@login');
        Route::post('forgot-password', 'AuthController@forgetPassword');
        Route::post('reset-forgot-password', 'AuthController@resetForgottenPassword');
        Route::post('update-token', 'AuthController@updateToken');
    });

// authenticated routes
    Route::group(['middleware' => ['jwt.verify:api']], function () {
        Route::group(['namespace' => 'Auth'], function () {
            Route::post('logout', 'AuthController@logout');
            // user routes
            Route::get('profile', 'AuthController@profile');
            Route::post('update', 'AuthController@update');
            Route::post('change-password', 'AuthController@changePassword');

        });
    });

   Route::group(['middleware' => ['api.auth']], function () {
   Route::get('/v1/sliders/{id}',[HomeController::class,'sliders']);
   Route::get('/v1/homePageSlider',[HomeController::class,'homePageSlider']);
   Route::get('/v1/secondPageSlider',[HomeController::class,'secondPageSlider']);
   Route::get('/v1/features',[HomeController::class,'features']);
   Route::get('/v1/about/{id}',[HomeController::class,'aboutById']);
   Route::get('/v1/about',[HomeController::class,'about']);
   Route::get('/v1/projectList',[HomeController::class,'projectList']);
   Route::get('v1/project',[HomeController::class,'getAllProjects']);
   Route::get('/v1/project/{id}',[HomeController::class,'getProjectById']);
   Route::get('/v1/testimonials',[HomeController::class,'getTestimonials']);
   Route::get('/v1/videos',[VideoController::class,'index']);
   Route::get('/v1/tokens',[HomeController::class,'token']);
});
    // home route

    Route::get('home', 'HomeController');

    // services route
    Route::get('services', 'ServiceController');

    // Settings route
    Route::get('settings', 'SettingController@index');

    // Contact Request Route
    Route::post('contact', 'SettingController@contact');
});

Route::post('/v1/sendmail',[HomeController::class,'sendMail']);