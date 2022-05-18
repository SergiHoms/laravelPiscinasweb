@extends('front.layout.master')

@section('title') Checkout @endsection
@section('description') sección de checkout de la página Piscinas LLoseta @endsection
@section('keywords') piscinas @endsection


@section("content")

    @if($agent->isDesktop())
        @include('front.components.desktop.page_title', ['title' => "FINALIZAR COMPRA"] )
        @include('front.pages.checkout.desktop.checkout')
    @endif

    @if($agent->isMobile())
        @include('front.components.mobile.page_title', ['title' => "FINALIZAR COMPRA"] )
        @include('front.pages.checkout.mobile.checkout')
    @endif

@endsection 