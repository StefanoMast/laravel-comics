@extends('layouts.app')

@section('title')
    DC Comics | Single Comic
@endsection

@section('main_content')
    <div class="container">
        <div class="info-comic">
            <p>{{ $comics['description']}}</p>
            <img src="{{ $comics['thumb'] }}" alt="">
        </div>
        <div class="talent-specs">
            <div class="talent">
                <h3>Talent</h3>
                <div class="talent-art">
                    <h4>art by</h4>
                    <p>
                       artisti</p>
                </div>
                <div class="talent-written">
                    <h4>written by</h4>
                    <p>autori</p>
                </div>
            </div>
            <div class="specs">
                <h3>Specs</h3>
                <p>{{$comics['series']}}</p>
                <p>U.S. price</p>
                <p>{{$comics['price']}}</p>
                <p>On Sale Date</p>
                <p>{{$comics['sale_date']}}</p>
            </div>
        </div>
    </div>
@endsection
