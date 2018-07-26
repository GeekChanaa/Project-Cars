@extends('layouts.app')

@section('content')
<form method="POST" action=" {{url('/postVehicleArticle')}} ">
    {{ csrf_field() }}
    <input type='text' name='title' >
</form>
@endsection