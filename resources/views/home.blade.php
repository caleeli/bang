@extends('layouts.app')

@section('content')
<style>
    html, body, .container {
        height: 100%;
        overflow: hidden;
    }
    body {
            background-image: url(/images/login.jpg);
            background-position: center;
        }
    .card {
        background-color: rgba(155,155,155,0.7);
    }
    @media screen and (orientation : landscape) {
        body {
            background-size: 100% auto;
        }
    }
    @media screen and (orientation : portrait) {
        body {
            background-size: auto 100%;
        }
    }
</style>
<div class="container">
    <div class="row justify-content-center">
            <div class="col-4"></div>
        <div class="col-8">
            <div class="card">
            <div class="card-header"><h1 class="text-white">{{Auth::user()->name}}</h1></div>
                <div class="card-body">
                    <h1 class="text-white"></h1>
                    <h3>Tu puedes:</h3>
                    @if(Auth::user())
                        @include('home.logged')
                    @else
                        @include('home.guest')
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
