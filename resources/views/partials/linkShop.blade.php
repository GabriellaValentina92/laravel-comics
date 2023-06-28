@section('shops')
    <ul>
        <li class="shopOnline">
        <ul class="links">
            <li>
            <img src="{{ Vite::asset('resources\img\buy-comics-digital-comics.png') }}" alt="">
            </li>
            <li>DIGITAL COMICS</li>
        </ul>
        <ul class="links">
            <li>
            <img src="{{ Vite::asset('resources\img\buy-comics-nerchandise.png') }}" :alt="" />
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
@endsection