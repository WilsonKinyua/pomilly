@extends('layouts.home-page')

@section('title')
    About Pomilly East African Limited | Homepage
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
                            <h2>About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!-- all-course Start -->
    <section class="all-course section-padding30">
        <div class="container">
            <div class="row">
                <div class="all-course-wrapper">
                    <!-- Heading & Nav Button -->
                    <div class="about-area section-padding2">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <div class="about-caption mb-50">
                                        <!-- Section Tittle -->
                                        <div class="section-tittle mb-35">
                                            <span>More About Our Company</span>
                                            <h2>Want to know more</h2>
                                        </div>
                                        <p align="justify">Pomilly East African Limited was founded on 3rd March
                                            2018 by
                                            Pondi Collins and Milkah Mwai as a biotechnology and food waste
                                            company that helps in real time conservation of environment.
                                            The company focuses on reducing food wastes through recycling
                                            thus promoting environmental protection and ultimately economic
                                            growth by empowering women, men, and youths by providing job
                                            opportunities and self-employment skills.</p>


                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- about-img -->
                                    <div class="about-img ">

                                        <div class="about-back-img ">
                                            <img src="{{ asset('assets/img/pomilly_001.jpg')}}" width="60%" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Tab content -->
                    <div class="row">
                        <div class="col-12">
                            <!-- Nav Card -->
                            <div class="tab-content" id="nav-tabContent">
                                <!--  one -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <!-- Single course -->
                                            <div class="single-course mb-70">
                                                <div class="course-img">
                                                    <img src="{{ asset('assets/img/Home-2-slider-3.jpg')}}" alt="">
                                                </div>
                                                <div class="course-caption">
                                                    <div class="course-cap-top">
                                                        <h4><a href="#">Embracing Technology</a></h4>
                                                    </div>
                                                    <p>On all the projects we have undertaken,
                                                        or still on process, we have embraced Technology
                                                        as we offer a lasting solution to the masses
                                                    </p>


                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <!-- Single course -->
                                            <div class="single-course mb-70">
                                                <div class="course-img">
                                                    <img src="{{ asset('assets/img/eco_parailustrar_copia.jpg')}}" alt="">
                                                </div>
                                                <div class="course-caption">
                                                    <div class="course-cap-top">
                                                        <h4><a href="#">Environmental Friendly</a></h4>
                                                    </div>
                                                    <p>All the projects we’ve undertaken promotes environmental
                                                        conservation by reducing food waste through individual
                                                        and corporate responsibility, and utilizing food waste
                                                        as a resource because food is too good to waste.
                                                    </p>


                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-xl-4 col-lg-4 col-md-6">
                                            <!-- Single course -->
                                            <div class="single-course mb-70">
                                                <div class="course-img">
                                                    <img src="{{ asset('assets/img/Teamwork_01.jpg')}}" alt="">
                                                </div>
                                                <div class="course-caption">
                                                    <div class="course-cap-top">
                                                        <h4><a href="#">TeamWork & Office Culture</a></h4>
                                                    </div>
                                                    <p>Our strength is in working together as a team.
                                                        We create a pool of synergy which in return
                                                        results to a high productivity from our Team
                                                        of professionals
                                                    </p>


                                                </div>
                                            </div>
                                        </div>





                                    </div>
                                </div>



                            </div>
                            <!-- End Nav Card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- all-course End -->
</main>


@endsection
