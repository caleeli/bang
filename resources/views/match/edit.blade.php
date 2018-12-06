@extends('layouts.app')

@section('content')
    <div id="app">
        @if($match->type==='normal')
        <create-normal-match v-model='match'></create-normal-match>
        @elseif($match->type==='versus')
        <create-versus-match v-model='match'></create-versus-match>
        @endif
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
