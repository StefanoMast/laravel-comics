@extends('layouts.app')

@section('title')
    DC Comics | Comics
@endsection

@section('main_content')
    <div class="black-bg">
        <h2>CURRENT SERIES</h2>
            <div class="container">
                
                <div class="comics-list">
                    @foreach ($comics as $comics)
                    <div class="comic-card">
                        <img src="{{ $comics['thumb']}}" alt="">
                        <h3><a href="{{ route('single-comic', ['id'=>$comics['id']])}}">{{ $comics['title']}}</a></h3>
                        {{-- {{dd($comics['id'])}} --}}
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
@endsection