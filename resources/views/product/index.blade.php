@extends('layout.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="images/calendar1.webp" class="card-img-top" alt="Calendar API">
                        <div class="card-body">
                            <h5 class="card-title">Calendar API</h5>
                            <p class="card-text">Retrieve comprehensive data on holiday across united states, with the input of a 
                                month and a date, the API will return the accurdate detail about the holiday on that date
                            </p>
                                <a href="{{ route('products.show', ['code' => 'calendar']) }}"
                                class="btn btn-primary">Enter</a>
                        </div>
                    </div>
                </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="images/ipRegion.jpg" class="card-img-top" alt="IP Geolocation">
                    <div class="card-body">
                        <h5 class="card-title">Regional IP API</h5>
                        <p class="card-text">Access detailed information about IP addresses, including geolocation data, and the absolute location of the location with the input of a valid IP address.</p>
                        <a href="{{ route('products.show', ['code' => 'ip2region']) }}"
                                class="btn btn-primary">Enter</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="images/crypto1.png" class="card-img-top" alt="Crypto">
                    <div class="card-body">
                        <h5 class="card-title">Cryptocurrency API</h5>
                        <p class="card-text">Get accurate and up-to-date data on any type of cryptocurrency and can be converted to most currencies.</p>
                        <a href="{{ route('products.show', ['code' => 'crypto']) }}"
                            class="btn btn-primary">Enter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
