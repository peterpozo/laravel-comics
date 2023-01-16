@extends('guest.layouts.base')

@section('content')
<div class="blue-band"></div>
<div class="content">
    <div class="text-content">
        <div class="img-box">
            <img class="single-page-img" src="{{$comics[0]['thumb']}}" alt="">
            <span class="view-gallery">view gallery</span>
            <span class="comic-book">comic book</span>
        </div>
        <h1>{{$comics[0]['title']}}</h1>
        <div class="price-band">
            <div class="left-content">
                <div class="price">
                    <span class="price-tag">U.S Price</span>
                    <span class="dollar-price">{{$comics[0]['price']}}</span>
                </div>
                <div class="available">available</div>
            </div>
            <div class="right-content">
                <div class="check-availability">Check Availability</div>
                <i class="fa-solid fa-caret-down"></i>
            </div>
        </div>
        <div class="main-text">
            <p>
                {{$comics[0]['description']}}
            </p>
        </div>
    </div>
    <div class="img-block">
        <div class="advertisement">advertisement</div>
        <div class="img-container">
            <img src="{{asset('images/adv.jpg')}}" alt="">
        </div>
    </div>
</div>
<div class="page-info">
    <div class="talent">
        <h2>Talent</h2>
        <div class="table">
            <div class="art">
                <span class="list-label">Art by:</span>
                <div class="list">
                    <ul>
                        @foreach ($comics[0]['artists'] as $item)
                        <li><a href="">{{$item}},</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="written">
                <span class="list-label">Written by:</span>
                <div class="list">
                    <ul>
                        @foreach ($comics[0]['writers'] as $item)
                        <li><a href="">{{$item}},</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="specs">
        <h2>Specs</h2>
        <div class="table">
            <div class="series">
                <span class="list-label">Series:</span>
                <span>{{$comics[0]['series']}}</span>
            </div>
            <div class="us-price">
                <span class="list-label">U.S Price:</span>
                <span>{{$comics[0]['price']}}</span>
            </div>
            <div class="sale-date">
                <span class="list-label">On Sale Date:</span>
                <span>{{$comics[0]['sale_date']}}</span>
            </div>
        </div>
    </div>
</div>
@endsection
