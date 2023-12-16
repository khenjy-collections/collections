@extends('layouts.app')


@section('title', 'Home')
@section('home')
    <div class="row custom-border">
        {{-- Left Session --}}
        <div class="col-md-6 left-session">
            <h1 class="custom-text animate__animated animate__backInLeft animate__slow 2s">Batam Laundry Services</h1>
            <p class="animate__animated animate__backInUp animate__slow 3s custom-p">In 2023, the textile care industry was
                made up of
                independent dry cleaners, who offered high quality services aimed at affluent customers, complex, and
                unclear rates, not to mention excessively long delivery times.
            </p>
            <p class="animate__animated animate__backInDown animate__slow 4s custom-p">Orange Laundry opened its first
                branches
                in 2021,
                based on a genuinely innovative concept: to provide dry cleaning and laundry services, with not only a good
                quality and price ratio, but also quick delivery.

            </p>
            <p class="animate__animated animate__backInRight animate__slow 5s custom-p">Since then, Orange Laundry has
                experienced a
                rapid and successful development, the group started its business in Batam by opening main stores in the city
                before going directly more further.

            </p>



            <div
                class="row d-flex justify-content-center   ms-5 mt-4 me-4 animate__animated animate__flipInY animate__slow 6s mt-3">
                <div class="col-md-4 border-0">
                    <div class="card mb-3" style="border:none">
                        <div class="card-body ">
                            <h5 class="card-title">Dry Clean
                            </h5>
                            <p class="card-text pt-2">Orange Laundry uses a special washer dryer that is used for laundry so
                                that
                                the laundry is clean and safe
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3" style="border:none;">
                        <div class="card-body">
                            <h5 class="card-title">Wash & Steam Iron
                            </h5>
                            <p class="card-text">After the washing and drying process, it is then ironed with a steam iron
                                so that the clothes are protected from burning
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3" style="border:none;">
                        <div class="card-body">
                            <h5 class="card-title">Wet Clean & Steam Iron
                            </h5>
                            <p class="card-text">Orange Laundry provides a wet clean service that cleans customer's clothes
                                using a non-drying method
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="row d-flex justify-content-center ms-5 mb-5  me-4 animate__animated animate__flipInY animate__slow 2s">
                <div class="col-md-6">
                    <div class="card mb-3" style="border:none;">
                        <div class="card-body">
                            <h5 class="card-title">Unit Wash</h5>
                            <p class="card-text">Every customer's clothes that come, we differentiate each machine in
                                carrying out the cleaning process
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3" style="border:none;">
                        <div class="card-body">
                            <h5 class="card-title">Express</h5>
                            <p class="card-text">Orange Laundry provides fast cleaning services so customers can wear their
                                clothes straight away
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="/our-services" class="btn-custom mb-md-5 ">OUR SERVICES</a>
        </div>
        {{-- Right Session --}}
        <div class="col-md-6  right-session">
            <div class="background-top  animate__animated animate__fadeIn animate__slow 3s"></div>
            <div class="box-contact pt-5">
                <h1>Contact Us:</h1>
                <h3>+62 813-7258-8889</h3>
            </div>
        </div>
    </div>
    {{-- Services --}}
    <div class="services">
        <div class="row d-flex justify-content-center pt-5 animate__animated animate__flash animate__slow 2s ">
            <div class="col-md-8">
                <h2 class="text-center">We provide laundry services in Batam with shuttle laundry solutions so you don't
                    have to
                    worry about washing
                    again.</h2>
                <p class="text-center">You can drop your laundry at <a href="/our-outlet" class="p-link"> our outlet </a> or
                    call our team
                    for <a href="/batam-shuttle" class="p-link"> pick-up and drop-off
                        laundry </a>, please see our
                    <a href="/price" class="p-link"> kilogram laundry prices and packages</a> below.
                </p>
            </div>
        </div>
        <div
            class="container-custom d-flex mx-auto justify-content-center mt-4  animate__animated animate__backInLeft animate__slow 3s">
            <div class="row   text-center mt-2">
                <div class="col-md-3">
                    <div class="card-body ">
                        <span class="bg-white rounded-circle p-4 "><i class="bi bi-bag fs-2 custom-services  "></i></span>
                        <p class="mt-4 me-3 "> 1. Online Order</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body ">
                        <span class="bg-white rounded-circle p-4"><i class="bi bi-truck fs-2 custom-services  "></i></span>
                        <p class="mt-4 me-3 "> 2. We Pick Up </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body ">
                        <span class="bg-white rounded-circle p-4"><i class="bi bi-droplet fs-2 custom-services "></i></span>
                        <p class="mt-4 me-3 "> 3. We are washing</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body ">
                        <span class="bg-white rounded-circle p-4"><i
                                class="bi bi-truck-flatbed fs-2  custom-services"></i></span>
                        <p class="mt-4 "> 4. We take it back</p>
                    </div>
                </div>
                <form action="">
                    <button type="submit" class="btn-order">ONLINE ORDER</button>
                </form>

            </div>
        </div>
    </div>
    <div class="feedback">
        <div class="row justify-content-center text-center mt-4">
            <div class="col-md-8">
                <h1>Full Amount Refund</h1>
                <i class="fa-solid fa-arrow-right-arrow-left me-2 custom-icon mt-2"></i> <span class="fw-bold"> Return of
                    the
                    same item
                </span>
                <br>
                <i class="fa-solid fa-repeat me-2 custom-icon mt-2"></i> <span class="fw-bold"> Repeated washing
                </span>
                <br>
                <i class="fa-solid fa-money-bill-transfer mt-2 me-2 custom-icon"></i><span class="fw-bold"> Guarantee your
                    money back
                </span>
            </div>
        </div>
    </div>
@endsection
