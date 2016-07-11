@extends('layout')

@section('title')
About
@stop

@section('content')
<div class="container">
	<div class="content">
		<div class="title">About Me</div>	
		<h2>My name is {{ $name }}.</h2>
		<!-- ^ That's a lot better!  -->
		<!-- Now, how to get it to work . . .-->
	</div>
</div>
@stop