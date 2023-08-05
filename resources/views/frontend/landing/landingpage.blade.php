@vite('resources/css/app.css')

@extends('frontend.app')

@section('content')
    @include('frontend.components.header.navbar')

    <div class="landing-cont w-full mx-auto relative">
        <div class="home" id="home">
            @include('frontend.landing.home')
        </div>
        <div class="about" id="about">
            @include('frontend.landing.about')
        </div>
        <div class="contact" id="contact">
            @include('frontend.landing.contact')
        </div>
    </div>

    @include('frontend.components.footer.footer')
@endsection












{{--  --}}
