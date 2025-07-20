@extends('template.template')
@section('pagecontent')

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Appointment</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Appointment</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


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
    
    @endsection