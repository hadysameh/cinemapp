@extends('layouts.app')
 
@section('content')

<div class="container" style="height: 83vh">
	
	<hall movieid='{{$movie_id}}' moviename='{{$movie_name}}' userid='{{(auth()->user()) ?auth()->user()->id  : ''}}' class='pt-2'></hall>
	
</div>

@endsection