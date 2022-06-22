@extends('front.layout.master')

@section('title') successful purchase @endsection
@section('description') successful purchase @endsection
@section('keywords') piscinas @endsection

@section("content")

    @if($agent->isDesktop())
        @include('front.components.desktop.page_title', ['title' => "VENTA REALIZADA CON ÉXITO"] )
        @include('front.pages.successful_purchase.desktop.successful_purchase')
    @endif

    @if($agent->isMobile())
        @include('front.components.mobile.page_title', ['title' => "VENTA REALIZADA CON ÉXITO"] )
        @include('front.pages.successful_purchase.mobile.index')
    @endif

@endsection  