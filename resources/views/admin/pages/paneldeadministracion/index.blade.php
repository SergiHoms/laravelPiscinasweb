@extends('admin.layout.master')

@section('title') admin @endsection


@section("content")

    @if($agent->isDesktop())
        @include('admin.pages.paneldeadministracion.desktop.paneldeadministracion')
    @endif

    @if($agent->isMobile())
        @include('admin.pages.paneldeadministracion.mobile.paneldeadministracion')
    @endif

@endsection