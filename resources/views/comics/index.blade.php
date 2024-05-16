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
            <div class="row gap-2 justify-content-center align-items-center">
                @forelse ($comics as $index => $comic)
                    <div class="col-md-3">
                        <a href="{{ route('comics.show', $comic) }}">
                            <div class="card">
                                <div class="card-img-container">
                                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt=""
                                        style="backgrouns-size: cover;">
                                </div>
                                <span class="card-title">{{ $comic['title'] }}</span>

                            </div>
                        </a>
                        <div class="actions mt-2 mb-5">
                            <a class="btn btn-dark py-2 px-3" href="{{ route('comics.show', $comic) }}"><i class="fa fa-eye"
                                    aria-hidden="true"></i></a>
                            <a class="btn btn-dark py-2 px-3" href="{{ route('comics.edit', $comic) }}"><i
                                    class="fa fa-pencil" aria-hidden="true"></i></a>


                            <!-- Modal trigger button -->
                            <button type="button" class="btn btn-danger py-2 px-3" data-bs-toggle="modal"
                                data-bs-target="#modalId-{{ $comic->id }}">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </button>

                            <!-- Modal Body -->
                            <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                            <div class="modal fade" id="modalId-{{ $comic->id }}" tabindex="-1"
                                data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                aria-labelledby="modalTitleId-{{ $comic->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalTitleId-{{ $comic->id }}">
                                                Are you sure to delete this comic?
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            If you click on DELETE, the action will be irreversible, and you will lose the
                                            comic!
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close
                                            </button>
                                            <form action="{{ route('comics.destroy', $comic) }}" method="post">

                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger">
                                                    Confirm
                                                </button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Optional: Place to the bottom of scripts -->





                        </div>
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
