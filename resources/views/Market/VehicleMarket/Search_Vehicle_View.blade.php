@extends('layouts.app')

@section('content')


<!-- A very general Vehicle search -->

	<!-- little onglets: chooses the category : car - caravan - motorcycle - truck -->

<form>

	{{ csrf_field() }}

<h1>Car</h1>
	Brand:
		<s> ok </s>
			@foreach ($brands as $brand)
				<s> ok</s>
				{{ $brand->BRAND_NAME }}
				<s>  </s>
			@endforeach
<s> ok 3 </s>
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