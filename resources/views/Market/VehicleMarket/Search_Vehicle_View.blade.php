@extends('layouts.app')

@section('content')

<!-- A very general Vehicle search -->

	<!-- Pagination: chooses the category : car - caravan - motorcycle - truck -->

<form>
<h1>Car</h1>
	Brand: <input type="text"><br>
	<!-- After choosing Brand this will be activated -->
		Model : <input type="text"> <br>
	<strong> <a href="{{ url('MarketCarSearch') }}"> more specific search </a> </strong>
</form>

<form>
<h1>Caravan</h1>
	Brand: <input type="text"><br>
	<!-- After choosing Brand this will be activated -->
		Model : <input type="text"> <br>
	<strong> <a href="{{ url('MarketCaravanSearch') }}"> more specific search </a> </strong>
</form>

<form>
<h1>Motorcycle</h1>
	Brand: <input type="text"><br>
	<!-- After choosing Brand this will be activated -->
		Model : <input type="text"> <br>
	<strong> <a href="{{ url('MarketMotorcycleSearch') }}"> more specific search </a> </strong>
</form>

<form>
<h1>Truck</h1>
	Brand: <input type="text"><br>
	<!-- After choosing Brand this will be activated -->
		Model : <input type="text"> <br>
	<strong> <a href="{{ url('MarketTruckSearch') }}"> more specific search </a> </strong>		
</form>



<!-- For a very specific search redirect to category-search.xxx -->

@endsection('content')