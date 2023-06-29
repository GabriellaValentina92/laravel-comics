@extends('layout.base')

@section('main')
    <div class="background">
        <div class="dc-series">
        <a href="#"> CURRENT SERIES</a>
        </div>
        <div class="container">
            @foreach ($comics as $comic)
                <div class="card-comic">
                    {{-- <img src="{{ $comic['thumb'] }}" alt=""> --}}
                    <h4>{{ $comic['title'] }}</h4>
                </div>
            @endforeach
        </div>
        <div class="load">
        <a href="#"> LOAD MORE</a>
        </div>
    </div>
@endsection