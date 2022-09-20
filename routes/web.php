<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\LocationsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomesController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\EventTypeController;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/', [HomesController::class, 'index']);
Route::get('event-type/{slug}/', [EventTypeController::class, 'index'])->name('event-type');
Route::get('location/{slug}/', [LocationController::class, 'index'])->name('location');
Route::get('search', [SearchController::class, 'index'])->name('search');
Route::get('venues/{slug}/{id}', [VenueController::class, 'show'])->name('venues.show');





Route::redirect('/home', '/admin');
Auth::routes(['register' => false]);

// Auth::routes()
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    // Route::get('/', 'HomeController@index')->name('home');
          Route::get('/', [HomeController::class, 'index'])->name('home');


          // Locations
    Route::delete('locations/destroy', 'LocationsController@massDestroy')->name('locations.massDestroy');
    Route::post('locations/media', 'LocationsController@storeMedia')->name('locations.storeMedia');
    //    
       Route::resource('locations', '\App\Http\Controllers\Admin\LocationsController');
      

});