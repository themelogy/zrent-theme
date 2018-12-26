@extends('layouts.master')

@section('content')
    @include('carrental::home.sliders.2')
	@findPage('arac-kiralama', 'homepage')
	@carByClass(6, 'home.slider')
    @if('salatalik'==1)
        @include('partials.home.slogans')
        @include('partials.home.about-us')
        @include('partials.home.testimonials')
        @include('partials.cars.tabs')
        @include('partials.home.counter')
        @include('partials.home.faq')
        @include('partials.cars.search')
        @include('partials.home.newsletters')
        @include('partials.home.customer-service')
        @include('partials.home.contact-us')
    @endif
@endsection