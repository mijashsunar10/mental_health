@extends('template.template')
@section('pagecontent')

<!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('frontend/img/carousel-1.jpg')}}" alt="Serene healing environment">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Renew Your Life Today</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Transformative Mental Health Recovery Programs</h1>
                        <a href="consultation.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Assessment</a>
                        <a href="programs.html" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Virtual & In-Person Options</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{asset('frontend/img/carousel-2.jpg')}}" alt="Supportive community environment">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Evidence-Based Care</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Personalized Rehabilitation Journeys</h1>
                        <a href="treatment.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Our Treatment Methods</a>
                        <a href="tel:+18005551234" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Immediate Help 24/7</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


    {{-- <!-- Banner Start -->
    <div class="container-fluid banner mb-5">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Opening Hours</h3>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Mon - Fri</h6>
                            <p class="mb-0"> 8:00am - 9:00pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Saturday</h6>
                            <p class="mb-0"> 8:00am - 7:00pm</p>
                        </div>
                        <div class="d-flex justify-content-between text-white mb-3">
                            <h6 class="text-white mb-0">Sunday</h6>
                            <p class="mb-0"> 8:00am - 5:00pm</p>
                        </div>
                        <a class="btn btn-light" href="">Appointment</a>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-dark d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Search A Doctor</h3>
                        <div class="date mb-3" id="date" data-target-input="nearest">
                            <input type="text" class="form-control bg-light border-0 datetimepicker-input"
                                placeholder="Appointment Date" data-target="#date" data-toggle="datetimepicker" style="height: 40px;">
                        </div>
                        <select class="form-select bg-light border-0 mb-3" style="height: 40px;">
                            <option selected>Select A Service</option>
                            <option value="1">Service 1</option>
                            <option value="2">Service 2</option>
                            <option value="3">Service 3</option>
                        </select>
                        <a class="btn btn-light" href="">Search Doctor</a>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-secondary d-flex flex-column p-5" style="height: 300px;">
                        <h3 class="text-white mb-3">Make Appointment</h3>
                        <p class="text-white">Ipsum erat ipsum dolor clita rebum no rebum dolores labore, ipsum magna at eos et eos amet.</p>
                        <h2 class="text-white mb-0">+012 345 6789</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Start --> --}}

    <!-- Banner Start -->
<div class="container-fluid banner mb-5">
    <div class="container">
        <div class="row gx-0">
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-primary d-flex flex-column p-5" style="height: 300px;">
                    <h3 class="text-white mb-3">Support Hours</h3>
                    <div class="d-flex justify-content-between text-white mb-3">
                        <h6 class="text-white mb-0">Counseling Hours</h6>
                        <p class="mb-0">8:00am - 9:00pm</p>
                    </div>
                    <div class="d-flex justify-content-between text-white mb-3">
                        <h6 class="text-white mb-0">Crisis Support</h6>
                        <p class="mb-0">24/7 Hotline</p>
                    </div>
                    <div class="d-flex justify-content-between text-white mb-3">
                        <h6 class="text-white mb-0">Online Sessions</h6>
                        <p class="mb-0">Flexible Scheduling</p>
                    </div>
                    <a class="btn btn-light" href="contact.html">Get Help Now</a>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-dark d-flex flex-column p-5" style="height: 300px;">
                    <h3 class="text-white mb-3">Find Your Therapist</h3>
                    <div class="mb-3">
                        <select class="form-select bg-light border-0" style="height: 40px;">
                            <option selected>Select Therapy Type</option>
                            <option value="1">Individual Counseling</option>
                            <option value="2">Group Therapy</option>
                            <option value="3">Family Therapy</option>
                            <option value="4">Online Sessions</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <select class="form-select bg-light border-0" style="height: 40px;">
                            <option selected>Specialization</option>
                            <option value="1">Anxiety Disorders</option>
                            <option value="2">Depression</option>
                            <option value="3">Trauma Recovery</option>
                            <option value="4">Addiction Rehabilitation</option>
                        </select>
                    </div>
                    <a class="btn btn-light" href="therapists.html">Browse Professionals</a>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-secondary d-flex flex-column p-5" style="height: 300px;">
                    <h3 class="text-white mb-3">Immediate Support</h3>
                    <p class="text-white">Our compassionate team is ready to help you begin your healing journey, whether in-person or through virtual sessions.</p>
                    <h2 class="text-white mb-3">1-800-HELP-NOW</h2>
                    <a class="btn btn-light" href="appointment.html">Schedule Assessment</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner End -->


    {{-- <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                        <h1 class="display-5 mb-0">The World's Best Dental Clinic That You Can Trust</h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4">Diam dolor diam ipsum sit. Clita erat ipsum et lorem stet no lorem sit clita duo justo magna dolore</h4>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Award Winning</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Professional Staff</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>24/7 Opened</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Fair Prices</h5>
                        </div>
                    </div>
                    <a href="appointment.html" class="btn btn-primary py-3 px-5 mt-4 wow zoomIn" data-wow-delay="0.6s">Make Appointment</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{asset('frontend/img/about.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End --> --}}

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


 


    {{-- <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-5 wow zoomIn" data-wow-delay="0.3s" style="min-height: 400px;">
                    <div class="twentytwenty-container position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="{{asset('frontend/img/before.jpg')}}" style="object-fit: cover;">
                        <img class="position-absolute w-100 h-100" src="{{asset('frontend/img/after.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Services</h5>
                        <h1 class="display-5 mb-0">We Offer The Best Quality Dental Services</h1>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="{{asset('frontend/img/service-1.jpg')}}" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Cosmetic Dentistry</h5>
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="{{asset('frontend/img/service-2.jpg')}}" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Dental Implants</h5>
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
                                <img class="img-fluid" src="{{asset('frontend/img/service-3.jpg')}}" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Dental Bridges</h5>
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.6s">
                            <div class="rounded-top overflow-hidden">
                                <img class="img-fluid" src="{{asset('frontend/img/service-4.jpg')}}" alt="">
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <h5 class="m-0">Teeth Whitening</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 service-item wow zoomIn" data-wow-delay="0.9s">
                    <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-4">
                        <h3 class="text-white mb-3">Make Appointment</h3>
                        <p class="text-white mb-3">Clita ipsum magna kasd rebum at ipsum amet dolor justo dolor est magna stet eirmod</p>
                        <h2 class="text-white mb-0">+012 345 6789</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End --> --}}



    <!-- Appointment Start -->
    <div class="container-fluid bg-gradient-primary my-5 wow fadeInUp" data-wow-delay="0.1s" style="background: linear-gradient(135deg, #4b6cb7 0%, #182848 100%);">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <!-- Left Content -->
                <div class="col-lg-6 pe-lg-5">
                    <div class="pe-lg-5">
                        <h1 class="display-5 text-white mb-4">Begin Your Healing Journey Today</h1>
                        <div class="d-flex align-items-center mb-4">
                            <div class="flex-shrink-0 bg-light rounded-circle p-3 me-3">
                                <i class="fas fa-headset fa-2x text-primary"></i>
                            </div>
                            <div>
                                <h5 class="text-white mb-0">24/7 Support Available</h5>
                                <p class="text-white-50 mb-0">Immediate help for crisis situations</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-4">
                            <div class="flex-shrink-0 bg-light rounded-circle p-3 me-3">
                                <i class="fas fa-laptop-medical fa-2x text-primary"></i>
                            </div>
                            <div>
                                <h5 class="text-white mb-0">Online & In-Person Sessions</h5>
                                <p class="text-white-50 mb-0">Flexible treatment options to suit your needs</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="flex-shrink-0 bg-light rounded-circle p-3 me-3">
                                <i class="fas fa-certificate fa-2x text-primary"></i>
                            </div>
                            <div>
                                <h5 class="text-white mb-0">Licensed Professionals</h5>
                                <p class="text-white-50 mb-0">Evidence-based treatment approaches</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Form -->
                <div class="col-lg-6">
                    <div class="bg-white rounded shadow-lg p-5 wow zoomIn" data-wow-delay="0.6s">
                        <h2 class="text-center text-dark mb-4">Schedule Your Consultation</h2>
                        <form>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <select class="form-select border-2 py-3" id="serviceType">
                                            <option selected>Select Service Type</option>
                                            <option value="online">Online Therapy Session</option>
                                            <option value="in-person">In-Person Consultation</option>
                                            <option value="intensive">Intensive Outpatient Program</option>
                                            <option value="group">Group Therapy</option>
                                            <option value="assessment">Mental Health Assessment</option>
                                        </select>
                                        {{-- <label for="serviceType">Service Type</label> --}}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-2 py-3" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control border-2 py-3" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="tel" class="form-control border-2 py-3" id="phone" placeholder="Phone">
                                        <label for="phone">Phone Number</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select border-2 py-3" id="preference">
                                            <option selected>Select Time Preference</option>
                                            <option value="morning">Morning (8am-12pm)</option>
                                            <option value="afternoon">Afternoon (12pm-5pm)</option>
                                            <option value="evening">Evening (5pm-9pm)</option>
                                            <option value="urgent">Urgent - Need Immediate Help</option>
                                        </select>
                                        {{-- <label for="preference">Time Preference</label> --}}
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control border-2 py-3" placeholder="Briefly describe your needs" id="message" style="height: 100px"></textarea>
                                        <label for="message">How Can We Help You?</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">
                                        <i class="fas fa-calendar-check me-2"></i> Request Appointment
                                    </button>
                                </div>
                                <div class="col-12 text-center">
                                    <p class="text-muted mb-0">Or call us immediately at <a href="tel:+18005551234" class="text-primary">1-800-555-1234</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->

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

    


    {{-- <!-- Offer Start -->
    <div class="container-fluid bg-offer my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 wow zoomIn" data-wow-delay="0.6s">
                    <div class="offer-text text-center rounded p-5">
                        <h1 class="display-5 text-white">Save 30% On Your First Dental Checkup</h1>
                        <p class="text-white mb-4">Eirmod sed tempor lorem ut dolores sit kasd ipsum. Dolor ea et dolore et at sea ea at dolor justo ipsum duo rebum sea. Eos vero eos vero ea et dolore eirmod diam duo lorem magna sit dolore sed et.</p>
                        <a href="appointment.html" class="btn btn-dark py-3 px-5 me-3">Appointment</a>
                        <a href="" class="btn btn-light py-3 px-5">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Offer End --> --}}



      

    <!-- Pricing Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Treatment Plans</h5>
                        <h1 class="display-5 mb-0">Affordable Mental Health & Recovery Programs</h1>
                    </div>
                    <p class="mb-4">We offer comprehensive, personalized treatment options at accessible prices. Our sliding scale fees and insurance partnerships ensure quality care is available to everyone seeking mental health support and addiction recovery services.</p>
                    <h5 class="text-uppercase text-primary wow fadeInUp" data-wow-delay="0.3s">Call for Appointment</h5>
                    <h1 class="wow fadeInUp" data-wow-delay="0.6s">+012 345 6789</h1>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="{{asset('frontend/img/image.png')}}" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <h2 class="text-primary m-0">$120/session<</h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Individual Therapy</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>Online or In-Person</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Licensed Therapists</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>Personalized Treatment</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="appointment.html" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Book Session</a>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="{{asset('frontend/img/image copy.png')}}" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <h2 class="text-primary m-0">$2,500/month</h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Intensive Outpatient</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>3-5 Sessions/Week</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Group & Individual</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>24/7 Call Support</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="appointment.html" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Learn More</a>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="{{asset('frontend/img/image copy 2.png')}}" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                    <h2 class="text-primary m-0">$400/month</h2>
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Virtual Care Package</h4>
                                <hr class="text-primary w-50 mx-auto mt-0">
                                <div class="d-flex justify-content-between mb-3"><span>4 Video Sessions</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-3"><span>Unlimited Messaging</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <div class="d-flex justify-content-between mb-2"><span>Digital Resources</span><i class="fa fa-check text-primary pt-1"></i></div>
                                <a href="appointment.html" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Appointment</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->

{{-- 
    <!-- Testimonial Start -->
    <div class="container-fluid bg-primary bg-testimonial py-5 my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="{{asset('frontend/img/testimonial-1.jpg')}}" alt="">
                            <p class="fs-5">Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum. At lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Client Name</h4>
                        </div>
                        <div class="testimonial-item text-center text-white">
                            <img class="img-fluid mx-auto rounded mb-4" src="{{asset('frontend/img/testimonial-2.jpg')}}" alt="">
                            <p class="fs-5">Dolores sed duo clita justo dolor et stet lorem kasd dolore lorem ipsum. At lorem lorem magna ut et, nonumy labore diam erat. Erat dolor rebum sit ipsum.</p>
                            <hr class="mx-auto w-25">
                            <h4 class="text-white mb-0">Client Name</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End --> --}}

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

   <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title bg-light rounded h-100 p-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Specialists</h5>
                        <h1 class="display-6 mb-4">Meet Our Certified & Compassionate Team</h1>
                        <a href="appointment.html" class="btn btn-primary py-3 px-5">Book Consultation</a>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="{{asset('frontend/img/team-1.jpg')}}" alt="Dr. Sarah Johnson">
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Dr. Sarah Johnson</h4>
                            <p class="text-primary mb-0">Clinical Psychologist</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="{{asset('frontend/img/team-2.jpg')}}" alt="Michael Chen">
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Michael Chen</h4>
                            <p class="text-primary mb-0">Licensed Therapist</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="{{asset('frontend/img/team-3.jpg')}}" alt="Dr. Amina Patel">
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Dr. Amina Patel</h4>
                            <p class="text-primary mb-0">Psychiatrist</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="{{asset('frontend/img/team-4.jpg')}}" alt="David Wilson">
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">David Wilson</h4>
                            <p class="text-primary mb-0">Addiction Counselor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <img class="img-fluid rounded-top w-100" src="{{asset('frontend/img/team-5.jpg')}}" alt="Emily Rodriguez">
                            <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5">
                            <h4 class="mb-2">Emily Rodriguez</h4>
                            <p class="text-primary mb-0">Art Therapy Specialist</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    {{-- <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-dark px-4">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter End --> --}}


@endsection

    




