@extends('layouts.home-page')

@section('title')
        Team | Pomilly East African Limited
@endsection


@section('content')

<main>
    <!--? Hero Start -->
    <div class="slider-area ">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Our Team</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--? Team Ara Start -->
    <div class="team-area pt-160 pb-160">
        <div class="container">
            <div class="row">


                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-team mb-30">
                        <div class="team-img">
                            <img src="assets/img/PHOTO-2020-12-20-18-42-571.jpg" width="250px" height="320px"
                                alt="">

                        </div>
                        <div class="team-caption">
                            <h3><a href="#">Pondi Collins</a></h3>
                            <p class="deg">CEO & Founder</p>
                            <p>An Engineer, a farmer (Advance and Technological ), Health, Environmental and Safety
                                (HSE) Consultant, Environment and Climate Research Analyst</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Team Ara End -->
</main>


@endsection
