@extends('front.layout.master')

@section('title') Página de productos @endsection
@section('description') sección de productos de la página Piscinas LLoseta @endsection
@section('keywords') piscinas @endsection

@section("content")

    @if($agent->isDesktop())
        @include('front.pages.products.desktop.products')
    @endif

    @if($agent->isMobile())
        @include('front.pages.products.mobile.products')
    @endif

@endsection