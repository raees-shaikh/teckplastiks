<?php

use Illuminate\Support\Facades\Route;

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

Route::domain(config('app.web_domain'))->group(
    function () {

        Route::get('/', 'App\Http\Controllers\frontend\HomeController@index')->name('frontend.index');

        Route::get('/company-profile', function () {
            return view('frontend.company-profile');
        })->name('company-profile');

        // Route::get('/latest-offers', function () {
        //     return view('frontend.offers.index');
        // })->name('latest-offers');

        // Route::get('/all-offers', function () {
        //     return view('frontend.offers.all-offers');
        // })->name('all-offers');

        // Route::get('/offer-show', function () {
        //     return view('frontend.offers.show');
        // })->name('offer-show');

        Route::get('/latest-offers', 'App\Http\Controllers\frontend\OfferController@index')->name('latest-offers');
        Route::get('/all-offers/{category}', 'App\Http\Controllers\frontend\OfferController@offerIndex')->name('all-offers');
        Route::get('/offer-show/{category}/{offer}', 'App\Http\Controllers\frontend\OfferController@offerShow')->name('offer-show');

        Route::get('/contact-us', function () {
            return view('frontend.contact-us');
        })->name('contact-us');

        Route::post('contact', 'App\Http\Controllers\frontend\ContactUsController@submit')->name('frontend.contact.submit');

        // Route::get('/exhibitions', function () {
        //     return view('frontend.exhibitions.index');
        // })->name('exhibitions');

        // Route::get('/exhibition', function () {
        //     return view('frontend.exhibitions.show');
        // })->name('exhibition');

        Route::get('/exhibitions', 'App\Http\Controllers\frontend\ExhibitionController@index')->name('exhibitions');
        Route::get('/exhibition/{exhibitionSlug}', 'App\Http\Controllers\frontend\ExhibitionController@show')->name('exhibition');

        Route::get('/business-process', function () {
            return view('frontend.business-process');
        })->name('business-process');

        Route::get('/sitemap', function () {
            return view('frontend.sitemap');
        })->name('sitemap');
    }
);
