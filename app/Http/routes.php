<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* Static Pages */
Route::get('/', 'SiteController@index');
Route::post('search', 'SiteController@search');
Route::get('cruise/{destination?}/{cruiseline?}/{duration?}/{date?}', 'SiteController@cruise');
Route::get('tour/{destination?}/{provider?}/{duration?}', 'SiteController@tour');
Route::get('hotel/{destination?}/{checkin?}/{checkout?}', 'SiteController@hotel');
Route::get('resort/{destination?}/{checkin?}/{checkout?}', 'SiteController@resort');
Route::get('about', 'SiteController@about');
Route::get('free-brochures', 'SiteController@brochures');
Route::get('request-quote/{type?}/{slug?}', 'SiteController@quote');
Route::post('request-quote', 'SiteController@quoteRequest');
Route::get('contact-us', 'SiteController@contact');
Route::get('legal', 'SiteController@legal');
Route::get('join-our-free-e-newsletter', 'SiteController@newsletter');

/* Blog Pages */
Route::get('blog/page/{slug?}', 'SiteController@blog');
Route::get('blog/{slug?}', 'SiteController@blog');
Route::get('deals/page/{slug?}', 'SiteController@deals');
Route::get('deals/{slug?}', 'SiteController@deals');
Route::get('edm-deals/page/{slug?}', 'SiteController@edm');
Route::get('edm-deals/{slug?}', 'SiteController@edm');
Route::get('holiday-parks/page/{slug?}', 'SiteController@holidayParks');
Route::get('holiday-parks/{slug?}', 'SiteController@holidayParks');
Route::get('accommodation/page/{slug?}', 'SiteController@accommodation');
Route::get('accommodation/{slug?}', 'SiteController@accommodation');
Route::get('theme-parks/page/{slug?}', 'SiteController@themeParks');
Route::get('theme-parks/{slug?}', 'SiteController@themeParks');
Route::get('destinations/page/{slug?}', 'SiteController@destinations');
Route::get('destinations/{slug?}', 'SiteController@destinations');

Route::get('/cruise-deal/{slug?}', 'SiteController@cruiseDeal');
Route::get('/resort-deal/{slug?}', 'SiteController@resortDeal');
Route::get('/tour-deal/{slug?}', 'SiteController@tourDeal');
Route::get('/packages/{slug?}', 'SiteController@packageDeal');
