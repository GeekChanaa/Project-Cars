<?php

namespace App\Http\Controllers;

use App\carwash;
use Illuminate\Http\Request;

class CarwashController extends Controller
{
	// send the user to the register carwash form
	public function create(){
		return view('User-Interface.Register-carwash.Register');
	}

	// stores the carwash in the database
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
