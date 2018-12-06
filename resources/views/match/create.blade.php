@extends('layouts.app')

@section('content')
    <div id="app">
        <create-match v-model='match'></create-match>
    </div>
    <script>
        window.onload = function () {
            var app = new Vue({
                el: '#app',
                data: function () {
                    return {
                        match: @json($match)
                    };
                }
            });
        };
    </script>
@endsection
