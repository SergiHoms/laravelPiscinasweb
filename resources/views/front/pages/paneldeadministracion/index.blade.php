@extends('front.layout.master')

@section('title') admin @endsection


@section("content")

    @if($agent->isDesktop())
        @include('front.pages.paneldeadministracion.desktop.paneldeadministracion')
    @endif

    @if($agent->isMobile())
        @include('front.pages.paneldeadministracion.mobile.paneldeadministracion')
    @endif

@endsection