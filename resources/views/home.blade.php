@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{ URL::asset('css/home.css') }}"/>
@endsection

@section('content')
<div id="home-container">
	<div id="full-logo"></div>
	<div id="home-login-btns">
		<a href="#">Sign in</a>
		<a href="#">Register</a>
	</div>
</div>
@endsection