@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <img src="/images/oxygen.jpg" alt="Oxygen Logo">
            <div class="title m-b-md">
                Oxygen
            </div>

            <div class="links">
                <a href="http://127.0.0.1:8000/oxygen">Wiki</a>
                <a href="http://127.0.0.1:8000/oxygen/install">Installation</a>
            </div>
        </div>
    </div>
@endsection

