@extends('layouts.app')

@section('title', 'Price')

@section('price')
    <div class="row custom-border background-price">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="custom-background-white-price">
                            <div class="card-body">
                                <h3 class="card-title custom-price-text">Laundry Kilo Prices</h3>
                                <h5 class="custom-price-subtitle">Why are our Kilo Laundry Prices Cheap?</h5>
                                <p class="custom-price-desc">We use washing machines and special laundry dryers from America
                                    so that
                                    the process can be fast, clean and free from wrinkles and burnt so that our kilogram
                                    laundry
                                    prices are cheap so that our customers are very satisfied, we also use special laundry
                                    steam
                                    irons supported by our highly trained team and experience. Our outlet is in Cemara Asri
                                    Housing,
                                    currently many residents of the housing have become our customers, serving a variety of
                                    laundry
                                    services such as dolls, alma mater, bed covers, blankets and others, please click to
                                    order
                                    online to place your order now.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Price Section --}}
    <div class="row text-center justify-content-center">
        <div class="col-md-8">
            <h2>Our Laundry Prices Include the Services Below:</h2>
        </div>
        <div class="row mt-4 justify-content-center ">
            <div class="col-md-3 custom-card-price pt-3 pb-2  ">
                <h5 class="card-title">
                    Dry Washing Only
                </h5>
                <p class="card-text mt-2">Rp4.000,00/kg</p>
            </div>
            <div class="col-md-3 custom-card-price pt-3 pb-2 ">
                <h5 class="card-title">Wet Washing Only</h5>
                <p class="card-text mt-2">Rp4.000,00.kg</p>
            </div>
            <div class="col-md-3 custom-card-price pt-3 pb-2 ">
                <h5 class="card-title">Washing Only/Dry Washing Only/Wet Washing Only (Non Ironing)</h5>
                <p class="card-text mt-2">Rp4.000,00/kg</p>
            </div>
            <div class="col-md-3 custom-card-price pt-3 pb-2 ">
                <h5 class="card-title">
                    Hanging Only [Non Dry Washing/Non Wet Washing/Non Ironing]
                </h5>
                <p class="card-text mt-2">Rp4.000,00/kg</p>

            </div>
        </div>
        {{--  --}}
    </div>
@endsection
