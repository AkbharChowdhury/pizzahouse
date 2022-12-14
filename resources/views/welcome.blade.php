@inject('helper', 'App\Models\CustomHelper')

@extends('layouts.app')
    @section('title')
    pizzaHouse welcome
@endsection
@section('content')
    <div class="flex-center ">
        <div class="content">
            <img src="{{ $helper->getPublicImage('logo.png') }}" alt="logo">

            <div class="title m-b-md">
                {{ config('app.name') }}
                
            </div>
         
            <h2>
                <span><button class="btn btn-secondary" onclick="window.location.href='{{ route('products.create') }}'"> add product</button></span>
            </h2>
            <p>

                <span><button class="btn btn-warning text-capitalize" onclick="window.location.href='{{ route('products.index') }}'"> search events</button></span>

            </p>
            @if (Session::has('message'))
                @include('message')
            @endif

        </div>
    </div>
@endsection


