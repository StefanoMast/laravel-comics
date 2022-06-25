@php
    $navbar = config('navbar-array');
@endphp

<header class="container">
  <img src="{{ asset('images/dc-logo.png') }}" alt="DC Logo" />
  <nav>
    @foreach($navbar as $key => $item)
      <li><a href=""> {{$item}} </a></li>
    @endforeach
  </nav>
</header>