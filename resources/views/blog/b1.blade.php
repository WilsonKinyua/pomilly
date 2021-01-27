@extends('layouts.home-page')

@section('title')
        Blog: FOOD INSECURITY | Pomilly East African Limited
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
                            <h2>FOOD INSECURITY</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Details Start -->
    <div class="about-details section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="about-details-cap mb-50">
                        <p align="justify">Food Insecurity is the state of being unable to afford
                            sufficient quantity of affordable or nutritious food.
                        </p>

                        <p align="justify">#HIDDENPOVERTY <br>
                            “Food is a basic human right. In a 3rd world country like Kenya no one
                            should be deprived of the ability to feed themselves.” Pondi Collins
                            Co-Founder of Pomilly East African Limited (PEAL)
                        </p>

                        <p align="justify">With no poverty line and minimum wage in Kenya it can be
                            challenging to measure and identify people who struggle to make ends
                            meet and require the most basic needs like food and shelter.

                        </p>

                        <p align="justify">
                            FOOD INSECURITY RESEARCH <br>
                            In 2018, Lien Centre published a report <a style="color: blue;" href="https://lcsi.smu.edu.sg/research/understanding-food-insecurity-Singapore">
                                “Hunger in a Food Lover’s Paradise” </a> that provided a deeper
                            understanding of the food insecurity situation in Singapore.
                        </p>

                        <p align="justify">Through interviews with food support organisations and
                            households, this study provides insights on questions such as:
                        </p>

                        <p align="justify">Who among Kenyans is experiencing food insecurity <br>
                            How are the existing food support systems meeting these needs <br>
                            What are the gaps in service provision <br>
                            The report also makes recommendations on how these gaps might be filled
                            for a smoother and targeted food support distribution system. <br>
                            In 2019, PEAL-Kenya decided to probe deeper into the topic of food
                            insecurity.
                        </p>

                        <p align="justify">This nationally representative study concluded that about
                            70% of Kenyans households experienced food insecurity at
                            least once in the last 12 months. Being food insecure can also be
                            associated to having negative effects on a person’s physical and mental
                            health.
                        </p>

                        <p align="justify">Read more on these issues in the report here.
                        </p>

                        <p align="justify">Take Action today to end food insecurity by feeding a
                            household in need!
                        </p>
                    </div>


                </div>
            </div>
            {{-- <div class="comments-area">
                <h4>Comments</h4>
                <div class="comment-list">
                    <div class="single-comment justify-content-between d-flex">
                        <div class="user justify-content-between d-flex">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/comment/comment_1.png')}}" alt="">
                            </div>
                            <div class="desc">
                                <p class="comment">
                                    Multiply sea night grass fourth day sea lesser rule open subdue female fill which them
                                    Blessed, give fill lesser bearing multiply sea night grass fourth day sea lesser
                                </p>
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <h5>
                                            Emilly Blunt
                                        </h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div> --}}
            {{-- <div class="comment-form">
                <h4>Leave a Comment</h4>
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
                <form class="form-contact comment_form" action="#" method="POST" enctype="multipart/form-data" id="commentForm">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9" placeholder="Write Comment" required></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="phone" id="website" type="number" placeholder="Phone" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="send_mess" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                    </div>
                </form>
            </div> --}}
        </div>
    </div>
    <!-- About Details End -->

</main>

@endsection
