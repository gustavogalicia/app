@extends('layouts.app')
@section('app')
	{{-- @auth
		@include('home')
	@else --}}
    	@include('layouts.login')
	{{-- @endauth --}}
@stop