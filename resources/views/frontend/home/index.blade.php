@extends('frontend.layout.main')

@section('content')

<div id="home">
@include('frontend.home.hero-banner')
@include('frontend.home.product-banner')
@include('frontend.home.recipes')

</div>

@endsection