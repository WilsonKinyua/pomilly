@extends('layouts.home-page')

@section('title')
    Pomilly East African Limited |  Mission and Vision
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
                            <h2>Mission and Vision</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!-- About Details Start -->
    <div class="about-details section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($missionAndVisions as $key => $mv)


                <div class="col-lg-8">
                    <div class="about-details-cap mb-50">
                        <h4>Our Mission</h4>
                        <p align="justify">
                            {!! $mv->mission !!}
                        </p>

                    </div>

                    <div class="about-details-cap mb-50">
                        <h4>Our Vision</h4>
                        <p align="justify">
                            {!! $mv->mission !!}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- About Details End -->

</main>

@endsection
