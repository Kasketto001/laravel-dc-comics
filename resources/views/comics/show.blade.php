@extends('layouts.app')

<title>DC COMICS | @yield('page-title', $comic['title'])</title>


@section('content')
<div class="jumbotron">

    <div class="container">
        <div class="section-title py-3 px-4">
        <img src="{{ $comic['thumb'] }}" class="img-fluid" alt="{{ $comic['title'] }}">
        </div>
    </div>
</div>
<div class="container-xxl py-5">
    <div class="row">
        <div class="col">
            <div class="title-type d-flex justify-content-between align-items-center">
                <h2 class="comic-title">{{ $comic['title'] }}</h2>
                <span>{{$comic['type']}}</span>
            </div>
            <p>{{ $comic['description'] }}</p>
            
            <div class="row">
                <div class="col">
                    <div class="series-comic-badge mb-3">
                        <span>SERIES</span>
                        <div class="info-badge d-flex align-items-center justify-content-center py-2 px-2">
                            <span>{{$comic['series']}}</span>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="price-comic-badge">
                        <span>PRICE</span>
                        <div class="info-badge d-flex align-items-center justify-content-center py-2 px-2">
                            <span>{{$comic['price']}}</span>
                        </div>
                    </div>
                </div>

                <div class="sale-comic-badge">
                    <span>SALE DATE</span>
                    <div class="info-badge d-flex align-items-center justify-content-center py-2 px-2">
                        <span>{{$comic['sale_date']}}</span>
                    </div>
                </div>

            </div>
        </div>
        <div class="col d-flex flex-column justify-content-end align-items-end">
            <span class="adv-info">ADVERTISEMENT</span>
            <img src="../img/adv.jpg" alt="">
        </div>

    </div>
    
</div> 
@endsection
