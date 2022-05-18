@extends('front.layout.master')

@section('title') Página de contacto @endsection
@section('description') sección de contacto de la página Piscinas LLoseta @endsection
@section('keywords') piscinas @endsection

@section("content")

    @if($agent->isDesktop())
        @include('front.components.desktop.page_title', ['title' => "CONTÁCTANOS"] ) 
        @include('front.pages.contact.desktop.contact')
    @endif

    @if($agent->isMobile())
        @include('front.components.mobile.page_title', ['title' => "CONTÁCTANOS"] )
        @include('front.pages.contact.mobile.contact')
    @endif

@endsection         







            

       