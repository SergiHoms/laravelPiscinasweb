@extends('front.layout.master')

@section('title') Home @endsection
@section('description') Home de la página Piscinas LLoseta @endsection
@section('keywords') piscinas @endsection

@section("content")

    @if($agent->isDesktop())
        @include('front.pages.home.desktop.home')
    @endif

    @if($agent->isMobile())
        @include('front.pages.home.mobile.home')
    @endif

@endsection