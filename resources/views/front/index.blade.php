@extends('layouts.front')

@section('content')

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="position-relative">
            <img class="img-fluid w-100" src="{{ asset('img/unvircity1.jpg') }}" alt="">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <br><br><br>
                            <h1 class="display-3 text-white animated slideInDown">
                                New Cairo University of Technology
                            </h1>
                            <p class="fs-5 text-white mb-4 pb-2">
                                The university has established the basic infrastructure of human resources necessary
                                for the technical plans for social development in particular.
                            </p>
                            <a href="{{ url('about') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
                                style="background: #D08301;">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Section Start -->
    <div class="container-xxl py-5"->
        <div class="container">

            <!-- Titles -->
            <div class="text-center mb-5">
                <h6 class="section-title bg-white text-center text-orange px-3">About</h6>
                <h1>Welcome to New Cairo University of Technology</h1>
            </div>

            <!-- Content Row -->
            <div class="row g-4 align-items-stretch">
                <!-- Video Column -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div
                        style="background-color: #F4F9FF; border-radius: 15px; overflow: hidden; box-shadow: 0 8px 20px rgba(0,0,0,0.1); display: flex; justify-content: center; align-items: center; height: 100%;">
                        <video controls style="width:100%; height:auto; max-height:500px; object-fit: contain;">
                            <source src="{{ asset('img/about1.mp4') }}" type="video/mp4">
                            متصفحك مش بيدعم عرض الفيديو.
                        </video>
                    </div>
                </div>


                <!-- Text Column -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div
                        style="background-color: #F4F9FF; padding: 30px; border-radius: 15px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); height: 100%;">
                        <p class="mb-4">We bring you the latest updates regarding your future and the opportunities
                            provided by the New Technological University. Mahmoud El-Sheikh, the university president,
                            announced that 80% of its seats are allocated to technical diploma holders, while only 20%
                            are reserved for general secondary certificate holders. The latest decision made by the
                            university president is the cancellation of the aptitude tests.</p>
                        <p class="mb-4">The study period is four years (2+2), allowing students to obtain a
                            higher-intermediate professional diploma after the first two years and enter the job market
                            or continue for another two years to earn a professional bachelor's degree in technology.
                        </p>
                        <p class="mb-4"><strong>Academic Degrees Awarded by the University:</strong></p>
                        <ul class="list-unstyled mb-4">
                            <li><i class="fa fa-arrow-right text-primary me-2"></i>Higher Professional Diploma in
                                Technology in [Specialization]</li>
                            <li><i class="fa fa-arrow-right text-primary me-2"></i>Professional Bachelor's Degree in
                                Technology in [Specialization]</li>
                            <li><i class="fa fa-arrow-right text-primary me-2"></i>Professional Master's Degree in
                                Technology in [Specialization]</li>
                            <li><i class="fa fa-arrow-right text-primary me-2"></i>Professional Doctorate in Technology
                                in [Specialization]</li>
                        </ul>
                        <a href="{{ url('about') }}" class="btn btn-primary py-3 px-5" style="background: #D08301;">Read
                            More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->


    <!-- Admission Guide -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-orange px-3">Admission Guide</h6>
                <h1 class="mb-5">Pre-Application Information Guide</h1>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card text-center p-4 h-100">
                        <div class="icon mb-3">
                            <i class="fa fa-file-alt fa-3x text-primary"></i>
                        </div>
                        <h5 class="mb-3">Faculties Requirement</h5>
                        <p class="mb-4">Essential certificates and subjects for each Faculty.</p>
                        <a href="{{ url('Faculties Requirements') }}" class="btn btn-custom">Read More</a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card text-center p-4 h-100">
                        <div class="icon mb-3">
                            <i class="fa fa-money-bill fa-3x text-success"></i>
                        </div>
                        <h5 class="mb-3">Tuition Fees & Scholarships</h5>
                        <p class="mb-4">New applicant fees and scholarships for all diplomas.</p>
                        <a href="{{ url('fees') }}" class="btn btn-custom">Read More</a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card text-center p-4 h-100">
                        <div class="icon mb-3">
                            <i class="fa fa-laptop fa-3x text-info"></i>
                        </div>
                        <h5 class="mb-3">How to Apply Online</h5>
                        <p class="mb-4">Application process and procedures in steps.</p>
                        <a href="{{ url('Admissions') }}" class="btn btn-custom">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Departments -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-orange px-3"> Departments</h6>
                <h1 class="mb-5"> Departments </h1>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Course 1 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="Departments.html#specific-section1" style="text-decoration: none;">
                        <div class="course-item bg-light">
                            <div class="img-container">
                                <img src="{{ asset('img/index/mecha.jpeg') }}"
                                    alt="Mechatronics">
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h5 class="mb-4">Mechatronics</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Course 2 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="Departments.html#specific-section2" style="text-decoration: none;">
                        <div class="course-item bg-light">
                            <div class="img-container">
                                <img src="{{ asset('img/index/auto.jpeg') }}"
                                    alt="Auto-truncation" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h5 class="mb-4">Auto-truncation</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Course 3 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a href="Departments.html#specific-section" style="text-decoration: none;">
                        <div class="course-item bg-light">
                            <div class="img-container">
                                <img src="{{ asset('img/index/info.jpeg') }}"
                                    alt="Information Technology" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h5 class="mb-4">Information Technology</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Course 4 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="Departments.html#specific-section4" style="text-decoration: none;">
                        <div class="course-item bg-light">
                            <div class="img-container">
                                <img src="{{ asset('img/index/petro.jpeg') }}"
                                    alt="Petroleum" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h5 class="mb-4">Petroleum</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Course 5 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="Departments.html#specific-section3" style="text-decoration: none;">
                        <div class="course-item bg-light">
                            <div class="img-container">
                                <img src="{{ asset('img/index/renew.jpeg') }}"
                                    alt="Solar energy" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h5 class="mb-4">Renewable Energy</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Course 6 -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a href="Departments.html#specific-section5" style="text-decoration: none;">
                        <div class="course-item bg-light">
                            <div class="img-container">
                                   <img src="{{ asset('img/index/prothetic.jpeg') }}"
                                    alt="Prosthetics" style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h5 class="mb-4">Prosthetics</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Courses End -->


    <!-- Our Services Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-orange px-3"> Our Services</h6>
                <h1 class="mb-5"> Made to Facilitate Your Needs </h1>
            </div>
            <div class="row g-4 justify-content-center">
                <!--  Postgraduate Studies -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <a href="{{ url('Postgraduate_Studies') }}" style="text-decoration: none;">
                        <div class="course-item bg-light">
                            <div class="img-container">
                                <img src="{{ asset('img/Postgraduate.jpg') }}" alt="Postgraduate Studies">
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h5 class="mb-4">Postgraduate Studies</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Quality&accreditation -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="{{ url('Quality&accreditation') }}" style="text-decoration: none;">
                        <div class="course-item bg-light">
                            <div class="img-container">
                                <img src="{{ asset('img/Quality.jpg') }}" alt="Quality&accreditation"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h5 class="mb-4">Quality&accreditation</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <!--  Student activities -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <a href="{{ url('Events') }}" style="text-decoration: none;">
                        <div class="course-item bg-light">
                            <div class="img-container">
                                <img src="{{ asset('img/Student activities.jpg') }}" alt=" Student activities"
                                    style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="text-center p-4 pb-0">
                                <h5 class="mb-4"> Student activities</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Our Services End -->


    <!-- Alumni's Testimonials nctu Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-orange px-3">Alumni's Testimonials nctu</h6>
                <h1 class="mb-5">Discover the success stories of our Alumni</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('img/testimonial-1.jpg') }}"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Departments Name</h5>
                    <p>Student Name</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('img/testimonial-2.jpg') }}"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Departments Name</h5>
                    <p>Student Name</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('img/testimonial-3.jpg') }}"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Departments Name</h5>
                    <p>Student Name</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="{{ asset('img/testimonial-4.jpg') }}"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Departments Name</h5>
                    <p>Student Name</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection


