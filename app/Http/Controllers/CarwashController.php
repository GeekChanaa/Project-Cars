<?php

namespace App\Http\Controllers;

use App\carwash;
use Illuminate\Http\Request;

class CarwashController extends Controller
{
	public function create(){
		return view('User-Interface.Register-carwash.Register');
	}
	public function store(Request $request)
	{
	$carwas = new carwash;
	$carwas->name=$request->input('name');
	$carwas->address='f karek';
	$carwas->NUM_Tel='ok bb';
	$carwas->ownerid='1';
	$carwas->save();

	return redirect('/');
}
	
    //
}
