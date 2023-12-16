@extends('layouts.app')

@section('title', 'Batam Shuttle Laundry')
@section('batam-shuttle')
    <div class="row custom-border background-batam-shuttle">
        <div class="col-md-8 animate__animated animate__bounceInLeft animate__slow 3s">
            <div class="row flex-column">

                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title custom-services-text">
                            The closest cheap laundry service
                        </h5>
                        <p class="card-text custom-services-p"> Nearby cheap laundry services serving Cemara Asri housing, we
                            provide free shuttle services for the housing above, express/regular services, one day services
                            aimed at the closest cheap kilo laundry to Cemara Asri housing, which more and more need fast
                            and
                            cheap,
                        </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card-body">
                        <h5 class="card-title custom-services-text">
                            The closest cheap laundry service
                        </h5>
                        <p class="card-text custom-services-p"> Nearby cheap laundry services serving Cemara Asri housing,
                            we
                            provide free shuttle services for the housing above, express/regular services, one day services
                            aimed at the closest cheap kilo laundry to Cemara Asri housing, which more and more need fast
                            and
                            cheap,
                        </p>
                        <a href="/order-online" class="btn-custom-order-online">ORDER ONLINE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row justify-content-center text-center mt-3">
        <div class="col-md-8 mt-5">
            <h1 class="fw-bold">Batam Shuttle Laundry</h5>
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
    </div>
    {{-- Price Section --}}
    <div class="row custom-background pt-4  pb-4 justify-content-center text-center mt-3">
        <div class="col-md-8">
            <h1 class="card-title">Price</h1>
        </div>
        <div class="row justify-content-center ">
            @foreach ($service_list as $service)
                <div class="col-md-3">
                    <h5 class="card-title custom-text-price-batam-shuttle">{{ $service['service_name'] }}</h5>
                    <p class="custom-desc-price-batam-shuttle">{{ $service['service_price'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
    </div>
    <div class="row justify-content-center text-center mt-4">
        <div class="col-md-12 mb-4">
            <h5 class="card-title">Frequently asked questions</h5>
        </div>
        <div class="col-md-6">
            <h5 class="question">
                <i class="bi bi-question custom-icon-batam-shuttle-question "></i>
                How to start order?
            </h5>
            <p class="answer">
                All you have to do is enter our website and create an account and make a pick-up schedule by clicking the
                pick-up schedule button on this website.
            </p>
        </div>
        <div class="col-md-6">
            <h5 class="question">
                <i class="bi bi-question custom-icon-batam-shuttle-question "></i>
                What Packages Are In Orange Laundry?
            </h5>
            <p class="answer">
                We serve packages such as big dolls / small dolls, bed covers, socks and bed sheets.
            </p>
        </div>
        <div class="col-md-6">
            <h5 class="question">
                <i class="bi bi-question custom-icon-batam-shuttle-question "></i>
                Where Can I Put My Laundry?

            </h5>
            <p class="answer">
                Choose the time to order and whether you want it picked up at the door or at the concierge, our shuttle
                laundry services from apartments, condominiums, businesses to homes, dirty clothes can be put in pockets,
                write your name and address.
            </p>
        </div>
        <div class="col-md-6">
            <h5 class="question">
                <i class="bi bi-question custom-icon-batam-shuttle-question "></i>
                How Fast Can My Order Be Processed?

            </h5>
            <p class="answer">
                Customers can pick up laundry within 24 hours
            </p>
        </div>
        <div class="col-md-6">
            <h5 class="question">
                <i class="bi bi-question custom-icon-batam-shuttle-question "></i>
                How To Know That My Order Has Been Received?

            </h5>
            <p class="answer">
                we will send an email to the customer in the form of a confirmation that the laundry from the customer has
                been completed. Email will be sent within 5 - 10 minutes .
            </p>
        </div>
        <div class="col-md-6">
            <h5 class="question">
                <i class="bi bi-question custom-icon-batam-shuttle-question "></i>
                Do I Need to Count My Clothing Items?

            </h5>
            <p class="answer">
                No need because it is our job, our team will count the number of items and inform you.
            </p>
        </div>
        <div class="col-md-6">
            <h5 class="question">
                <i class="bi bi-question custom-icon-batam-shuttle-question "></i>
                Is There a Minimum Order?

            </h5>
            <p class="answer">
                Yes, the minimum is 2 kg if the customer's clothing weight is below the minimum, we will charge 2 kg
            </p>
        </div>
        <div class="col-md-6">
            <h5 class="question">
                <i class="bi bi-question custom-icon-batam-shuttle-question "></i>
                If i don't recieve the email?

            </h5>
            <p class="answer">
                Please email us info@keepclean.co.id if you don't receive it, you can WA: 081372588889
            </p>
        </div>
    </div>
    <div class="row text-center">
        <h5 class="card-title mt-3">Laundry services</h5>
    </div>
    <div
        class="row justify-content-evenly align-items-center text-center animate__animated animate__bounceInLeft animate__slow 1s">
        <div class="col-md-3">
            <div class="card-body-process">
                <h5 class="card-title">
                    Wash & Fold
                </h5>
                <p class="card-text">Our laundry services can be folded at a low price and the process is fast because we
                    use a special machine for laundry</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-body-process2">
                <h5 class="card-title">
                    Drycleaning
                </h5>
                <p class="card-text">if there are clothes labeled dry clean only, even though we accept dry cleaning, we
                    prefer wet cleaning only for soft clothes because they are more environmentally friendly.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-body-process">
                <h5 class="card-title">
                    Wet Clean
                </h5>
                <p class="card-text">For your soft clothes, we have machines from the USA specifically for Wet Clean with
                    low RPM so that your clothes are safe from damage and environmentally friendly.</p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card-body-process2">
                <h5 class="card-title">
                    Wash & Steam Ironing
                </h5>
                <p class="card-text">Our laundry services can be used for washing & ironing with excellent results and
                    cheap
                    laundry prices, please register on our website or tel us.</p>
            </div>
        </div>

    @endsection
