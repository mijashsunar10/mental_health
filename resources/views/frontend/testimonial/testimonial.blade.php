@extends('template.template')
@section('pagecontent')


  <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Testimonial</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Testimonial</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


   <!-- Testimonial Start -->
    <div class="container-fluid bg-primary bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s" style="background: linear-gradient(135deg, #4b6cb7 0%, #182848 100%);">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h5 class="text-uppercase text-white mb-3">Success Stories</h5>
                    <h1 class="display-4 text-white mb-0">Healing Journeys</h1>
                    <p class="fs-5 text-white-50">What our clients say about their recovery experience</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s" style="background: rgba(255, 255, 255, 0.1); backdrop-filter: blur(5px);">
                        <!-- Testimonial 1 -->
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded-circle mb-4 border border-3 border-white" src="{{asset('frontend/img/testimonial-1.jpg')}}" alt="Sarah's recovery journey" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="d-flex justify-content-center mb-2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="fs-5 mb-4">"The online therapy program saved my life during lockdown. My therapist helped me overcome severe anxiety and rebuild my confidence. The virtual group sessions made me feel less alone in my struggles."</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-1">Sarah M.</h4>
                            <p class="text-white-50 mb-0">Anxiety Recovery</p>
                        </div>
                        
                        <!-- Testimonial 2 -->
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded-circle mb-4 border border-3 border-white" src="{{asset('frontend/img/testimonial-2.jpg')}}" alt="John's transformation" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="d-flex justify-content-center mb-2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="fs-5 mb-4">"After years of addiction, the intensive outpatient program gave me my life back. The combination of in-person and online sessions fit perfectly with my work schedule. The staff's compassion made all the difference."</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-1">John T.</h4>
                            <p class="text-white-50 mb-0">2 Years Sober</p>
                        </div>
                        
                        <!-- Testimonial 3 -->
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded-circle mb-4 border border-3 border-white" src="{{asset('frontend/img/testimonial-3.jpg')}}" alt="Maria's healing story" style="width: 100px; height: 100px; object-fit: cover;">
                            <div class="d-flex justify-content-center mb-2">
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                                <i class="fas fa-star text-warning"></i>
                            </div>
                            <p class="fs-5 mb-4">"The trauma therapy program helped me process childhood wounds I'd carried for decades. Being able to choose between office visits and telehealth sessions gave me the flexibility I needed as a single parent."</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-1">Maria G.</h4>
                            <p class="text-white-50 mb-0">Trauma Recovery</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->    



@endsection