
@extends('views_hotelMarina.hotelMarina_templates.templateMain_hotelMarina')

@section('title','Bienvenido')

@section('header')
	@include('views_hotelMarina.hotelMarina_partials.nav_hotelMarina')
@stop

@section('content')
	@include('views_hotelMarina.hotelMarina_partials.welcomeContend_hotelMarina')
@stop
	
@section('footer')
	@include('views_hotelMarina.hotelMarina_partials.footer_hotelMarina')
@stop
