<?php

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
    return view('welcome');
});

/* Comments : 

*/

Route::get('/home',function(){
	return view('Home');
});

/* Comments : 

*/

Route::get('/compare2cars',function(){
	return view('Compare-two-Vehicles.Compare');
});

/* Comments : 

*/

/*
|--------------------------------------------------------------------------
| Market Routes
|--------------------------------------------------------------------------
*/

Route::get('/Market', function() {
	return view('Market.Markets');
});

/* Comments : 

*/

Route::get('/PartsMarket',function(){
	return view('Market.PartsMarket.Search-part-view');
});

/* Comments : 

*/

Route::get('/VehicleMarket', function() {
	return view('Market.VehicleMarket.Search_Vehicle_View');
});

/* Comments : 

*/

Route::get('/MarketCarSearch',function() {
	return view('Market.VehicleMarket.Category-Search.car.Search-Car-View');	
});


/* Comments : 

*/


Route::get('/MarketCaravanSearch',function() {
	return view('Market.VehicleMarket.Category-Search.caravan.Search-Caravan-View');
});


/* Comments : 

*/


Route::get('/MarketMotorcycleSearch',function() {
	return view('Market.VehicleMarket.Category-Search.Motorcycle.Search-Motorcycle-View');
});


/* Comments : 

*/


Route::get('/MarketTruckSearch',function() {
	return view('Market.VehicleMarket.Category-Search.Truck.Search-Truck-View');
});


/* Comments : 

*/

/*
|--------------------------------------------------------------------------
| User interface Routes
|--------------------------------------------------------------------------
*/

Route::get('/favoriteVehicles',function(){
	return view('User-Interface.Favorite-Cars.FavoriteCars');
});
Route::get('/OwnedCars',function(){
	return view('User-Interface.Owned-cars.OwnedCars');
});
Route::get('/RegisterRentingAgency',function(){
	return view('User-Interface.Register-Renting-Agency.Register');
});

/* Register the carwash */

Route::get('/RegisterCarWash/create','CarwashController@create');

/* Save the data in the mysql server */

Route::post('/RegisterCarWash','CarwashController@store');

Route::get('/UserInterface',function() {
	return view('User-Interface.UserInterface');
});


/* Comments : 

*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
