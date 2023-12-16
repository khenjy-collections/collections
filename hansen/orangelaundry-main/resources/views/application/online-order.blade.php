@extends('layouts.app')

@section('title', 'Online Order')

@section('online-order')
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ URL::to('/') }}/img/batam.jpeg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block animate__animated animate__backInDown animate__slow 3s">
                    <h5>Batam Laundry Services</h5>
                    <p>laundry services in Batam have several outlets, to be precise, our outlet is in the Cemara Asri
                        Cluster serving kilogram and unit laundry at economical prices and the express washing process is
                        completed in 1 day or it can be based on an agreement.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ URL::to('/') }}/img/cemaraasri.jpg" class="d-block w-100" alt="..." height="auto">
                <div class="carousel-caption d-none d-md-block animate__animated animate__backInUp animate__slow 2s">
                    <h5>Cemara Asri Cluster</h5>
                    <p>We accept orders from beautiful cypress clusters and provide a free shuttle service</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="row justify-content-center text-center mt-3">
        <div class="col-md-8 mt-5">
            <h3 class="fw-bold">Customers just stay in place, we will pick up your goods</h3>
        </div>
        <div class="row ">
            <div class="col-md-3 custom-col-batam-shuttle ">
                <div class="card-body">
                    <i class="bi bi-bag-fill custom-icon-batam-shuttle"></i>
                    <h5 class="custom-text-batam-shuttle">
                        1. Online Order
                    </h5>
                    <p class="card-text">The customer arranges a schedule for picking up yout goods</p>
                </div>
            </div>
            <div class="col-md-3 custom-col-batam-shuttle">
                <div class="card-body">

                    <i class="bi bi-truck custom-icon-batam-shuttle"></i>
                    <h5 class="custom-text-batam-shuttle">
                        2. We Pick Up
                    </h5>
                    <p class="card-text">
                        Items that have been prepared by the customer will be picked up by us according to the schedule that
                        has
                        been arranged
                    </p>
                </div>
            </div>
            <div class="col-md-3 custom-col-batam-shuttle">
                <div class="card-body">

                    <i class="bi bi-arrow-clockwise custom-icon-batam-shuttle"></i>
                    <h5 class="custom-text-batam-shuttle">
                        Washing & Folding Process
                    </h5>
                    <p class="card-text">Your goods that have been taken by us, we will immediately wash and fold your goods
                        and
                        ready to be delivered back to your hands</p>
                </div>
            </div>
            <div class="col-md-3 custom-col-batam-shuttle">
                <div class="card-body">

                </div>
                <i class=" bi bi-arrow-return-left custom-icon-batam-shuttle"></i>
                <h5 class="custom-text-batam-shuttle">
                    Delivered Back to Your Hands
                </h5>
                <p class="card-text">The results of your goods that we have washed, we will wrap them neatly back before
                    being sent to your place.</p>
            </div>
        </div>
    </div>
    <hr>
    <div class="row text-center justify-content-center mt-2">
        <div class="col-md-8">
            <h1>Batam Laundry Kilo</h1>
        </div>
        <hr class="line">
        <div class="row text-center justify-content-center">
            <div class="col-md-8">
                <h3 class="card-title">Laundry Kiloan</h3>
                <div class="row justify-content-center mt-4">
                    @foreach ($item_list as $item)
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset('img/items/' . $item->items_image) }}" alt="{{ $item->items_name }}"
                                    class="card-image-top" id="customCardImages">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ $item->items_name }}
                                    </h5>
                                    <p class="card-text">
                                        Rp{{ $item->price_per_item }},00
                                    </p>
                                    <a href="{{ $item->id }}" class="custom-button-order"><i class="bi bi-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
