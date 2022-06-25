@extends('layouts.app')

@section('title')
  DC Comics
@endsection

@section('main_content')
<section class="comics">
  <div class="container">
    <h3 class="comics__blue">Currrent Series</h3>
    <div class="comics__list">
      @foreach ($data as $card)
        <div class="comics">
          <img src="{{$card['thumb']}}" alt="" />
          <h5>{{ $card['type'] }}</h5>
          <h4>{{ $card['series'] }}</h4>
          <h6>{{ $card['price'] }}</h6>
        </div>          
      @endforeach
    </div>
  </div>
  <button class="comics__btn">Load More</button>
</section>

<section>
  <div class="blue-banner">
    <div class="container">
      <ul>
        <li>
          <a href="">
            <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt=""/>
          </a>
          <span>Digital Comics</span>
        </li>
        <li>
          <a href="">
            <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt=""/>
          </a>
          <span>DC Merchandise</span>
        </li>
        <li>
          <a href="">
            <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt=""/>
          </a>
          <span>Subscription</span>
        </li>
        <li>
          <a href="">
            <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt=""/>
          </a>
          <span>Comic Shop Locator</span>
        </li>
        <li>
          <a href="">
            <img class="svg-file" src="{{ asset('images/buy-dc-power-visa.svg') }}" alt=""/>
          </a>
          <span>DC Power Visa</span>
        </li>
      </ul>
    </div>
  </div>
</section>
@endsection