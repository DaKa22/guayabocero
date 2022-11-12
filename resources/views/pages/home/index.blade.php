@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="cs-height_80 cs-height_lg_80"></div>
    
    @include('pages.home.partials.main')
    @include('pages.home.partials.about')

    <div class="cs-height_100 cs-height_lg_70"></div>

    @include('pages.home.partials.services')

    <div class="cs-height_70 cs-height_lg_45"></div>

    {{-- @include('pages.home.partials.slider') --}}

    {{-- <div class="cs-height_90 cs-height_lg_65"></div> --}}

    {{-- @include('pages.home.partials.counter') --}}

    {{-- <div class="cs-height_65 cs-height_lg_35"></div> --}}

    {{-- @include('pages.home.partials.steps') --}}
    {{-- @include('pages.home.partials.team') --}}
    {{-- @include('pages.home.partials.goals') --}}
    @include('pages.home.partials.faq')
@endsection