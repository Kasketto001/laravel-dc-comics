@extends('layouts.app')

@section('content')
<div class="jumbotron">

<div class="container">
    <div class="section-title">
        <span class="py-3 px-4">ADD NEW COMIC</span>
    </div>
</div>

</div>

<div class="container my-5">
    <form action="{{route('comics.store')}}" method="post">
        @csrf


        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                type="text"
                class="form-control"
                name="title"
                id="title"
                aria-describedby="titleHelper"
                placeholder="Batman"
            />
            <small id="titleHelper" class="form-text text-muted">Type the title of the new comic <i class="fa fa-superpowers" aria-hidden="true"></i></small>
        </div>
        
        
        <div class="mb-3">
            <label for="title" class="form-label">Description</label>
            <label for="description" class="form-label"></label>
            <textarea class="form-control" placeholder="Lorem ipsum dolor sit amet..." name="description" id="description" rows="3"></textarea>
            <small id="descriptionHelper" class="form-text text-muted">Type the description of the new comic <i class="fa fa-pencil" aria-hidden="true"></i></small>
        </div>
            
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumbnail</label>
            <input
                type="thumb"
                class="form-control"
                name="thumb"
                id="thumb"
                aria-describedby="thumbHelper"
                placeholder="https://your.comic.com/comic.jpg"
            />
            <small id="thumbHelper" class="form-text text-muted">Make sure that the links provided end with .jpg/.png or other types of image files. <i class="fa fa-image" aria-hidden="true"></i></small>
        </div>


        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input
                type="price"
                class="form-control"
                name="price"
                id="price"
                input="$"
                aria-describedby="priceHelper"
                placeholder="$ 7.99"
            >
            <small id="typeHelper" class="form-text text-muted">Write the price by separating the decimals with a period, and before writing it, make sure to include the dollar sign. <i class="fa fa-money" aria-hidden="true"></i></small>
        </div>
        
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input
                type="type"
                class="form-control"
                name="type"
                id="type"
                input="$"
                aria-describedby="typeHelper"
                placeholder="adventure"
            >
            <small id="priceHelper" class="form-text text-muted">Write the type of the new comic <i class="fa fa-clipboard" aria-hidden="true"></i></small>
        
        </div>

        <button
            type="submit"
            class="btn btn-primary"
        >
            Create Comic
        </button>
        
    </form>
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