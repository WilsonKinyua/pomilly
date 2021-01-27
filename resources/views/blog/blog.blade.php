@extends('layouts.home-page')

@section('title')
        Blogs | Pomilly East African Limited
@endsection


@section('content')


<main>
    <!--? Hero Start -->
    <div class="slider-area">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Blog</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------ Include the above in your HEAD tag ---------->

    <div class="index-content">
        <div class="container">
            <div class="row">

                <a href="{{ route('blog.food-insecurity') }}">
                    <div class="col-lg-4">
                        <div class="card">
                            <img class="img-responsive" src="{{ asset('assets/img/services/43.jpg')}}">
                            <h4 style="font-weight:700;"> FOOD INSECURITY</h4>
                            <p>Food Insecurity is the state of being unable to afford
                                sufficient quantity of affordable or nutritious food........
                            </p>
                            <a href="{{ route('blog.food-insecurity') }}" class="blue-button">Read More</a>
                        </div>
                    </div>
                </a>

                <a href="{{ route('blog.food-security')}}">
                    <div class="col-lg-4" style="margin-top: 4px;">
                        <div class="card">
                            <img class="img-responsive" src="{{ asset('assets/img/services/44.jpg')}}">
                            <h4 style="font-weight:700;">FOOD SECURITY</h4>
                            <p>In Kenya it’s common to find a grocery store, convenience store, or even a farmers’ market in your area.
                                How often have you visited, ...... </p>
                            <a href="{{ route('blog.food-security')}}" class="blue-button">Read More</a>
                        </div>
                    </div>
                </a>

                <a href="{{ route('blog.indoor-vertical-farming')}}">
                    <div class="col-lg-4" style="margin-top: 4px;">
                        <div class="card">
                            <img style="height:240px;" src="https://stmaaprodfwsite.blob.core.windows.net/assets/sites/1/2020/02/Indoor-lettuce-prduction-Co-Shockingly-Fresh.jpg">
                            <h4 style="text-transform: uppercase; font-size:20px; font-weight:700;">Indoor Vertical Farming</h4>
                            <p>Types of Indoor Vertical Farming: Which is Best? Typically, we find there are three major vertical farming methods businesses  ...... </p>
                            <a href="{{ route('blog.indoor-vertical-farming')}}" class="blue-button">Read More</a>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>



</main>

@endsection
