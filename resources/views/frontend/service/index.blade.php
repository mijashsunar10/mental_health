@extends('template.template')
@section('pagecontent')



    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Services</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Services</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                    <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="{{asset('frontend/img/image copy 7.png')}}" style="object-fit: cover;" alt="Before recovery">
                        <img class="position-absolute w-100 h-100" src="{{asset('frontend/img/image copy 7.png')}}" style="object-fit: cover;" alt="After recovery">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Programs</h5>
                        <h1 class="display-5 mb-0">Comprehensive Mental Health & Recovery Services</h1>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="{{asset('frontend/img/image.png')}}" alt="Individual therapy">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Individual Therapy</h5>
                                <p class="mb-0">One-on-one sessions with licensed therapists</p>
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="{{asset('frontend/img/image copy.png')}}" alt="Online counseling">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Online Counseling</h5>
                                <p class="mb-0">Virtual therapy sessions from the comfort of your home</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-7">
                    <div class="row g-5">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.3s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="{{asset('frontend/img/image copy 2.png')}}" alt="Group therapy">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Group Therapy</h5>
                                <p class="mb-0">Peer support and shared healing experiences</p>
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="{{asset('frontend/img/image copy 3.png')}}" alt="Wellness workshop">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Wellness Workshops</h5>
                                <p class="mb-0">Skills-building for mental health management</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <h3 class="text-white mb-3">Start Your Recovery Today</h3>
                        <p class="text-white mb-3">Take the first step toward healing with our compassionate team</p>
                        <h2 class="text-white mb-3">+1 800-HELP-NOW</h2>
                        <a href="appointment.html" class="btn btn-dark rounded-pill py-2 px-4">Schedule Consultation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    


@endsection