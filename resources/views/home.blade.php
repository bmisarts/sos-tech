@extends('layouts.app')

@section('body')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" id="toHide" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" id="toHide" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" id="toHide" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="assets/img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Alerte</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Sécurisez vos lieux de services et vos domiciles</h1>
                            <a href="{{ url('/contact') }}" id="toHide" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight btn2" style="border-radius: 50px; border: none">Demander un devis</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="assets/img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Assurance qualité</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Installation et configuration des meilleurs systèmes de sécurité</h1>
                            <a href="{{ url('/contact') }}" id="toHide" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight btn2" style="border-radius: 50px; border: none">Demander un devis</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="assets/img/carousel-3.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase animated bounceInDown">Meilleurs services de sécurité</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Maison sûre et sécurisée pour vous et votre famille</h1>
                            <a href="{{ url('/contact') }}" id="toHide" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight btn2" style="border-radius: 50px; border: none">Demander un devis</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" id="toHide" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Precedent</span>
            </button>
            <button class="carousel-control-next" id="toHide" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    @include('includes.about')
    <!-- About End -->
    

    <!-- Services Start -->
    @include('includes.service')
    <!-- Services End -->

    <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5 wow zoomIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="text-center mx-auto mb-4" style="max-width: 600px;">
                        <h5 class="text-white">Offre spéciale</h5>
                        <h6 class="display-5 text-white">Économisez 20 % pour votre première commande chez nous</h6>
                    </div>
                    <!-- <p class="text-white mb-4">Eirmod sed tempor lorem ut dolores sit kasd ipsum. Dolor ea et dolore et at sea ea at dolor justo ipsum duo rebum sea. Eos vero eos vero ea et dolore eirmod et. Dolores diam duo lorem. Elitr ut dolores magna sit. Sea dolore sed et.</p>
                    <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Order Now</a>
                    <a href="" class="btn btn-secondary py-md-3 px-md-5">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End -->


    <!-- Team Start -->
    <!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="bg1 text-uppercase" style="letter-spacing: 5px;">Team Members</h5>
                <h1 class="display-5 mb-0">Our Professional Team Members</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="position-relative rounded-top">
                        <img class="img-fluid rounded-top w-100" src="assets/img/team-1.jpg" alt="">
                        <div class="position-absolute bottom-0 end-0 d-flex flex-column bg-white p-1" style="margin-right: -25px;">
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="bg-primary text-center rounded-bottom p-4">
                        <h3 class="text-white">Full Name</h3>
                        <p class="text-white m-0">Designation</p>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="position-relative rounded-top">
                        <img class="img-fluid rounded-top w-100" src="assets/img/team-2.jpg" alt="">
                        <div class="position-absolute bottom-0 end-0 d-flex flex-column bg-white p-1" style="margin-right: -25px;">
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="bg-primary text-center rounded-bottom p-4">
                        <h3 class="text-white">Full Name</h3>
                        <p class="text-white m-0">Designation</p>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="position-relative rounded-top">
                        <img class="img-fluid rounded-top w-100" src="assets/img/team-3.jpg" alt="">
                        <div class="position-absolute bottom-0 end-0 d-flex flex-column bg-white p-1" style="margin-right: -25px;">
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                            <a class="btn btn-outline-secondary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                        </div>
                    </div>
                    <div class="bg-primary text-center rounded-bottom p-4">
                        <h3 class="text-white">Full Name</h3>
                        <p class="text-white m-0">Designation</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->


    <!-- Testimonial Start -->
    <!-- <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="bg1 text-uppercase" style="letter-spacing: 5px;">Testimonial</h5>
                <h1 class="display-5 mb-0">What People Say About Our Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="text-center pb-4">
                    <img class="img-fluid mx-auto rounded-circle" src="assets/img/testimonial-1.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-light rounded p-4 mt-n5">
                        <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </p>
                        <h4 class="text-truncate">Client Name</h4>
                        <i>Profession</i>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto rounded-circle" src="assets/img/testimonial-2.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-light rounded p-4 mt-n5">
                        <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </p>
                        <h4 class="text-truncate">Client Name</h4>
                        <i>Profession</i>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto rounded-circle" src="assets/img/testimonial-3.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-light rounded p-4 mt-n5">
                        <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </p>
                        <h4 class="text-truncate">Client Name</h4>
                        <i>Profession</i>
                    </div>
                </div>
                <div class="text-center">
                    <img class="img-fluid mx-auto rounded-circle" src="assets/img/testimonial-4.jpg" style="width: 100px; height: 100px;" >
                    <div class="testimonial-text bg-light rounded p-4 mt-n5">
                        <p class="mt-5">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                        </p>
                        <h4 class="text-truncate">Client Name</h4>
                        <i>Profession</i>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                <h5 class="fg1">Blog</h5>
                <h1 class="display-5 mb-0">Derniers Articles</h1>
            </div>
            <div class="row g-5">
                @foreach($posts as $post)
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item">
                        <div class="position-relative">
                            <img class="img-fluid w-100 rounded-top" src="{{$post->image}}" alt="Ima">
                            <div class="blog-date">
                                <h6 class="text-light mb-0">{{$post->created_at->diffForHumans()}}</h6>
                            </div>
                        </div>
                        <div class="bg-primary rounded-bottom p-5">
                            <div class="d-flex mb-3">
                                <span class="text-light text-uppercase">{{$post->user->name}}</span>
                                <span class="text-light px-2">|</span>
                                <span class="text-light text-uppercase">{{$post->category->name}}</span>
                            </div>
                            <a class="h6 m-0 text-white" href="{{ url('posts/'.$post->id) }}">{{substr($post->title, 0, 70)}}</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Blog End -->
    
    <!-- Partners -->
    @include('includes.partners')
    <!-- Partners -->

    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=2048&amp;height=400&amp;hl=en&amp;q=LM Consulting & Technology&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://kokagames.com/">FNF</a></div><style>.mapouter{position:relative;text-align:right;width:2048px;height:400px;transform: translateY(50px)}.gmap_canvas {overflow:hidden;background:none!important;width:2048px;height:400px;}.gmap_iframe {width:2048px!important;height:400px!important;}</style></div>

    
@endsection