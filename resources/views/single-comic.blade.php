@extends('layouts.app')

@section('title')
    DC Comics | Single Comic
@endsection

@section('main_content')
    <div class="container">
        <h3 class="info-title">{{ $comics['title']}}</h3>
        <div class="info-comic">
            <p>{{ $comics['description']}}</p>
            <img src="{{ $comics['thumb'] }}" alt="">
        </div>
        <div class="talent-specs">
            <div class="talent">
                <h3>Talent</h3>
                <div class="talent-art">
                    <h4>art by</h4>
                    <p>@foreach ($comics['artists'] as $item) {{$item}},
                        
                    @endforeach</p>
                </div>
                <div class="talent-written">
                    <h4>written by</h4>
                    <p>@foreach ($comics['writers'] as $item) {{$item}},
                        
                    @endforeach</p>
                </div>
            </div>
            <div class="specs">
                <h3>Specs</h3>
                <div class="specs-info">
                    <h4>Series:</h4>
                    <p>{{$comics['series']}}</p>
                    <h4>U.S. price</h4>
                    <p>{{$comics['price']}}</p>
                    <h4>On Sale Date</h4>
                    <p>{{$comics['sale_date']}}</p>
                </div>
        </div>
    </div>
@endsection
