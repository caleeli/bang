@extends('layouts.app')

@section('content')
    <div id="app">
        <layout></layout>
    </div>
    <script>
        window.onload = function () {
            var app = new Vue({
                el: '#app'
            });
        };
    </script>
@endsection
