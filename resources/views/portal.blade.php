@extends('portal.layouts.app')
        
	@section('content')
		<div id="app">
			@include('portal.view.banner')
			@include('portal.view.services')
			@include('portal.view.properties') 
			@include('portal.view.about')
			@include('portal.view.feedbacks')
			@include('portal.view.partners')
			{{-- @include('portal.view.news') --}}
		</div>
	@endsection

 