@extends('guest.layouts.base')

@section('content')
<div class="current-series">CURRENT SERIES</div>
    <div class="container">
        @foreach ($comics as $item)
        <div>
            <a href="{{route('single')}}">
                <img class="home-cards-img" src="{{$item['thumb']}}" alt="{{$item['series']}}">
            </a>
            <div class="text">{{$item['series']}}</div>
        </div>
        @endforeach
      <button>LOAD MORE</button>
    </div>
  <section class="shop">
    <div class="container">
      <div class="block">
        <img
          src="{{asset('images/buy-comics-digital-comics.png')}}"
          alt="digital comics"
        >
        <span><a href="">DIGITAL COMICS</a></span>
      </div>
      <div class="block">
        <img
          src="{{asset('images/buy-comics-merchandise.png')}}"
          alt="merchandise"
        >
        <span><a href=""> DC MERCHANDISE</a></span>
      </div>
      <div class="block">
        <img
          src="{{asset('images/buy-comics-subscriptions.png')}}"
          alt="subscriptionS"
        >
        <span><a href="">SUBSCRIPTION</a></span>
      </div>
      <div class="block">
        <img
          src="{{asset('images/buy-comics-shop-locator.png')}}"
          alt="shop locator"
        >
        <span><a href="">COMIC SHOP LOCATOR</a></span>
      </div>
      <div class="block">
        <img
          src="{{asset('images/buy-dc-power-visa.svg')}}"
          alt="power visa"
        >
        <span><a href="">DC POWER VISA</a></span>
      </div>
    </div>
  </section>
@endsection

