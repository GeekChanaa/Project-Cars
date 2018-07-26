<?php

namespace App\Http\Controllers;

use App\VehicleArticle;
use Illuminate\Http\Request;

class PostVehicleController extends Controller
{
	public function create(){
		return view('Market.VehicleMarket.PostVehicle');
	}

	public function store(Request $request){
    $ArticleV = new VehicleArticle;
	$ArticleV->TITLE=$request->input('title');
	$ArticleV->Description='thats nice';
	$ArticleV->Quantity=1;
	$ArticleV->USERid=auth()->user()->id;
	$ArticleV->save();

	return redirect('/');
	}
    //
}
