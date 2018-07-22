<form action="{{ url('RegisterCarWash') }}" method="POST">
	 {{ csrf_field() }}
	carwash name : <input type="text" name='name'>
	<!-- carwash address -->
	carwash address : 
		
</form>