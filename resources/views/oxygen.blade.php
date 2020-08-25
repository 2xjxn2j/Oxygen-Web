@extends('layouts.layout')
@section('content')
    <div class="flex-center position-ref full-height">

        <div class="content">
            <div class="title m-b-md">
                Oxygen
            </div>
            <p>{{ $name }}</p>
            @if($promo)
                <p>Promotion code activated!</p>
            @else
                <p>You don't have a promo code :(</p>
            @endif
        </div>
    </div>
@endsection

