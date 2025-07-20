
@extends('template.template')
@section('pagecontent')

 <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">About Us</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">About</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


  <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About Our Center</h5>
                        <h1 class="display-5 mb-0">A Sanctuary for Healing and Personal Growth</h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4">"Healing is not about being perfect, but about being whole."</h4>
                    <p class="mb-4">At our Mental Health Recovery and Rehabilitation Center, we provide compassionate, evidence-based care for individuals facing mental health challenges. Our holistic approach combines clinical expertise with personalized support to help each client rebuild their life and rediscover hope.</p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Licensed Clinical Team</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Personalized Treatment Plans</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>24/7 Crisis Support</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Flexible Online/Offline Options</h5>
                        </div>
                    </div>
                    <a href="appointment.html" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Start Your Healing Journey</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{asset('frontend/img/about.jpg')}}" style="object-fit: cover;" alt="Peaceful recovery center environment">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    

   

    @endsection