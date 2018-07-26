<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\brand;


class MarketController extends Controller
{
	public function SearchVehicle(){
		$brands = brand::all();
		return view('Market.VehicleMarket.Search_Vehicle_View', compact('brands'));

	}
    //
}
