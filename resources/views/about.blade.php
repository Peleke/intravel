@extends('layout')

@section('title')
About Me
@stop

@section('content')

<h1>About Me</h1>
<ul class="list-group">
	<li class="list-group-item">My name is {{ $name }}.</li>
	<li class="list-group-item">I am {{ $age }} years old.</li>
	<li class="list-group-item">I live in {{ $location }}.</li>
</ul>

		<!-- ^ That's a lot better!  -->
		<!-- Now, how to get it to work . . .-->
@stop