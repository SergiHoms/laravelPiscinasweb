@extends('front.layout.master')

@section('title') Faqs @endsection
@section('description') sección de faqs de la página Piscinas LLoseta @endsection
@section('keywords') piscinas @endsection

@section("content")

    @if($agent->isDesktop())
        @include('front.components.desktop.page_title', ['title' => "DEVOLUCIONES Y REEMBOLSOS DE PRODUCTOS"] )
        @include('front.pages.faqs.desktop.faqs')
    @endif

    @if($agent->isMobile())
    @include('front.components.mobile.page_title', ['title' => "DEVOLUCIONES Y REEMBOLSOS DE PRODUCTOS"] )
        @include('front.pages.faqs.mobile.faqs')
    @endif

@endsection 