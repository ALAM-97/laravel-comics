@extends('layout.base')

@section('pageContent')
    <section>
        <div class="wrapper">
            <h2>CURRENT SERIES</h2>
        </div>
        <div class="dark-bg">
            <div class="wrapper">
                <ul>
                    @foreach ($comics as $comic)
                    <li class="comic">
                        <img src="{{$comic["thumb"]}}" alt="Copertina Comic">
                        {{strtoupper($comic["series"])}}
                    </li>
                    @endforeach
                </ul>
                <div class="bottom">LOAD MORE</div>
            </div>
        </div>
        <div class="services">
            <div class="wrapper">
                <ul>
                    <li>
                        <img class="digital-comics" src="{{asset("images/buy-comics-digital-comics.png")}}" alt="">
                        <h4>DIGITAL COMICS</h4>
                    </li>
                    <li>
                        <img src="{{asset("images/buy-comics-merchandise.png")}}" alt="">
                        <h4>DC MERCHANDISE</h4>
                    </li>
                    <li>
                        <img src="{{asset("images/buy-comics-subscriptions.png")}}" alt="">
                        <h4>SUBSCRIPTION</h4>
                    </li>
                    <li>
                        <img class="shop-locator" src="{{asset("images/buy-comics-shop-locator.png")}}" alt="">
                        <h4>COMIC SHOP LOCATOR</h4>
                    </li>
                    <li>
                        <img src="{{asset("images/buy-dc-power-visa.svg")}}" alt="">
                        <h4>DC POWER VISA</h4>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection