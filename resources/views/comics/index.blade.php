@extends('layouts.app')

@section('content')
<div class="jumbotron">

<div class="container">
    <div class="section-title">
        <span class="py-3 px-4">CURRENT SERIES</span>
    </div>
</div>

</div>

<div class="section-black">
    <div class="container py-5 d-flex flex-column justify-content-center align-items-center">
        <div class="row gap-2">
            @forelse ($comics as $index => $comic)
                <div class="col">
                    <a href="{{ route('comic.show', ['id' => $index]) }}">
                    <div class="card">
                        <div class="card-img-container">
                            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="" style="backgrouns-size: cover;">
                        </div>
                            <span class="card-title">{{ $comic['title'] }}</span>
                    </div>
                    </a>
                </div>
            @empty
                <div class="col">
                    <p>No comics available</p>
                </div>
            @endforelse

        </div>

        <button class="mt-3 load-more py-2">LOAD MORE</button>
    </div>
</div>
<div class="section-blue">
    <div class="container py-5">
        <div class="row">
            <div class="col d-flex justify-content-center align-items-center gap-2">
                <img src="./img/buy-comics-digital-comics.png" alt="">
                <span>Digital Comics</span>
            </div>

            <div class="col d-flex justify-content-center align-items-center gap-2">
                <img src="./img/buy-comics-merchandise.png" alt="">
                <span>DC merchandise</span>
            </div>

            <div class="col d-flex justify-content-center align-items-center gap-2">
                <img src="./img/buy-comics-subscriptions.png" alt="">
                <span>Subscription</span>
            </div>

            <div class="col d-flex justify-content-center align-items-center gap-2">
                <img src="./img/buy-comics-shop-locator.png" alt="">
                <span>COMIC SHOP Locator</span>
            </div>

            <div class="col d-flex justify-content-center align-items-center gap-2">
                <img src="./img/buy-dc-power-visa.svg" alt="">
                <span>DC Power Visa</span>
            </div>

        </div>
    </div>
</div>

@endsection