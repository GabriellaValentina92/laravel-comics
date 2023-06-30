@extends('layout.base')


<div class="background">
    <div class="dc-series">
    <a href="#"> CURRENT SERIES</a>
    </div>
    <div class="container">
        @foreach ($comics as $comic)
            <div class="card-comic">
                <img src="{{ $comic['thumb'] }}" alt="">
                <h4>{{ $comic['title'] }}</h4>
            </div>
        @endforeach
    </div>
    <div class="load">
    <a href="#"> LOAD MORE</a>
    </div>
</div>

<ul class="merchandise">
    <li class="shopOnline">
        <ul class="links">
            <li>
            <img src="{{ Vite::asset('resources\img\buy-comics-digital-comics.png') }}" alt="">
            </li>
            <li>DIGITAL COMICS</li>
        </ul>
        <ul class="links">
            <li>
            <img src="{{ Vite::asset('resources\img\buy-comics-merchandise.png') }}" :alt="" />
            </li>
            <li>DC MERCHANDISE</li>
        </ul>
        <ul class="links">
            <li>
            <img src="{{ Vite::asset('resources\img\buy-comics-subscriptions.png') }}" :alt="" />
            </li>
            <li>SUBSCRIPTION</li>
        </ul>
        <ul class="links">
            <li>
            <img src="{{ Vite::asset('resources\img\buy-comics-shop-locator.png') }}" :alt="" />
            </li>
            <li>COMIC SHOP LOCATOR</li>
        </ul>
        <ul class="links">
            <li>
            <img src="{{ Vite::asset('resources\img\buy-dc-power-visa.svg') }}" :alt="" />
            </li>
            <li>DC POWER VISA</li>
        </ul>
    </li>
</ul>