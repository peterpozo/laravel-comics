<footer>
    <section class="background">
      <div class="blocks">
        <div class="left-block">
          <ul>
            <h2>{{$footermenu[0]['main-label']}}</h2>
            @foreach ($footermenu[0]['labels'] as $item)
            <li><a href="{{ route($item['route']) }}">{{ $item['label'] }}</a></li>
            @endforeach
          </ul>
          <ul>
            <h2>{{$footermenu[3]['main-label']}}</h2>
            @foreach ($footermenu[3]['labels'] as $item)
            <li><a href="{{ route($item['route']) }}">{{ $item['label'] }}</a></li>
            @endforeach
          </ul>
        </div>
        <div class="center-block">
          <ul>
            <h2>{{$footermenu[1]['main-label']}}</h2>
            @foreach ($footermenu[1]['labels'] as $item)
            <li><a href="{{ route($item['route']) }}">{{ $item['label'] }}</a></li>
            @endforeach
          </ul>
        </div>
        <div class="right-block">
          <ul>
            <h2>{{$footermenu[2]['main-label']}}</h2>
            @foreach ($footermenu[2]['labels'] as $item)
            <li><a href="{{ route($item['route']) }}">{{ $item['label'] }}</a></li>
            @endforeach
          </ul>
        </div>
      </div>
      <img
      src="{{asset('images/dc-logo-bg.png')}}"
        alt="logo-dc"
      >
    </section>
    <section class="sub-footer">
      <div class="container">
        <button>SIGN-UP NOW!</button>
        <div class="block-left">
          <span>FOLLOW US</span>
          <a href="">
            <img
              src="{{asset('images/footer-facebook.png')}}"
              alt="facebook"
            >
          </a>
          <a href="">
            <img
              src="{{asset('images/footer-twitter.png')}}"
              alt="twitter"
            >
          </a>
          <a href=""><img
            src="{{asset('images/footer-youtube.png')}}"
            alt="youtube"
          >
          </a>
          <a href="">
            <img
              src="{{asset('images/footer-pinterest.png')}}"
              alt="pinterest"
            >
          </a>
          <a href=""><img
            src="{{asset('images/footer-periscope.png')}}"
            alt="periscope"
          >
          </a>
        </div>
      </div>
    </section>
  </footer>
