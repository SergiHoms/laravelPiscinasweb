@extends('front.layout.master')

@section('title') Cart @endsection
@section('description') sección de carrito de la página Piscinas LLoseta @endsection
@section('keywords') piscinas @endsection

@section("content")

    @if($agent->isDesktop())
        @include('front.components.desktop.page_title', ['title' => "CESTA DE LA COMPRA"] )
        @include('front.pages.carrito.desktop.carrito')
    @endif

    @if($agent->isMobile())
        @include('front.components.mobile.page_title', ['title' => "CESTA DE LA COMPRA"] )
        @include('front.pages.carrito.mobile.carrito')
    @endif

@endsection  