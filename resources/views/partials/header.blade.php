

<header>
  <div>
    <ul  class="mini">
      <li>
        <a href="">DC POWER VISA</a>
      </li>
      <li>
        <a href="">ADDICTIONAL DC SITE</a>
      </li>
    </ul>
  </div>
  <nav>
    
    <ul class="menu">
      <li>
        <a href="{{ route('homepage')}}"><img src="{{ asset('images/dc-logo.png')}}" alt=""></a>
      </li>
      @foreach ($menu as $menu_item)
      <li>
        <a href="{{ route( $menu_item['name'])}}">{{ $menu_item['title']}}</a>
      </li>
      @endforeach
    </ul>
  </nav>
  <div class="jumbotron">
    <img src="/images/jumbotron.jpg" alt="">
  </div>
</header>