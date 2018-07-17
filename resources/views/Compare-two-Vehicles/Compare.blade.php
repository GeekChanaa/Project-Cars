@extends('layouts.app')

@section('content')

<h1>Vehicle 1</h1>
<form>
	Brand: <input type="text"><br>
	<!-- After choosing Brand this will be activated -->
		Model : <input type="text"> <br>
		<!-- A more specialised comparaison for users -->
			Version: <input type="text"><br>
</form>


<h1>Vehicle 2</h1>

<form>
	Brand: <input type="text"><br>
	<!-- After choosing Brand this will be activated -->
		Model : <input type="text"> <br>
		<!-- A more specialised comparaison for users -->
			Version: <input type="text"><br>
</form>

@endsection('content')