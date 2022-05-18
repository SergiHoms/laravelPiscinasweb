@extends('front.layout.master')

@section('title') Producto @endsection
@section('description') sección de producto de la página Piscinas LLoseta @endsection
@section('keywords') piscinas @endsection

@section("content")

    @if($agent->isDesktop())
        @include('front.pages.product.desktop.product')
    @endif

    @if($agent->isMobile())
        @include('front.pages.product.mobile.product')
    @endif

@endsection