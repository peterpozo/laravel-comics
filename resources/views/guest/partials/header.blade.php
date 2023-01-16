
<header>
    <div class="header-blue-band">
        <div>DC POWER <sup>SM</sup> VISA&#174;</div>
        <div class="additional-sites">
            <div>ADDITIONAL DC SITES</div>
            <i class="fa-solid fa-caret-down"></i>
        </div>
    </div>
    <nav class="navbar">
      <div class="container">
        <a href="{{route('home')}}" class="img-link">
          <img
            src="{{asset('images/dc-logo.png')}}"
            alt="dc-logo">
        </a>
        <ul>
            @foreach ($headermenu as $item)
            <li><a href="{{ route($item['route']) }}">{{ $item['label'] }}</a></li>
            @endforeach
            <div class="search-bar">
                <input type="text" placeholder="Search" disabled>
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </ul>
      </div>
    </nav>
    <div>
        <section class="jumbotron">
        </section>
      </div>
  </header>
