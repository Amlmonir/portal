@extends('layouts.front')

@section('content')


    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">About Us</h1>
                    <nav aria-label="breadcrumb">
                       <!-- <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ url('index') }}">Home</a></li>
                        </ol> -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

<!-- Hero Video Card Start -->
<div class="container mt-5 position-relative">
    <div class="card shadow-lg border-0 rounded-4 overflow-hidden wow fadeInUp"
        data-wow-delay="0.2s">

        <video class="w-100"
            autoplay muted loop controls
            style="max-height: 420px; object-fit: cover;">
            <source src="{{ asset('img/aboutNUCT.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

    </div>
</div>
<!-- Hero Video Card End -->



    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">

                            <h5 class="mb-3" id="content">Our Core Values</h5>
                            <p>Our holistic approach to education, the rigorous spirit of inquiry that
                                makes our community and alumni a force for change in the world,
                                and our commitment to social justice ground </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">

                            <h5 class="mb-3">Our Mission</h5>
                            <p>new cairo unversity educates women and men to be reflective lifelong learners,
                                to be responsible and active participants in civic
                                life and to live generously in service to others.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">

                            <h5 class="mb-3">We Are cairo unversity</h5>
                            <p>We’re a community of people who bridge our disparate experiences and identities.
                                Meet the unsung heroes, beloved figures and dedicated Hoyas
                                who make cairo unversityspecial.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">

                            <h5 class="mb-3">New Cairo University</h5>
                            <p>is a modern institution offering quality education
                                and global collaborations. With advanced facilities
                                it prepares students for future success in a dynamic learning environment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->



    <!-- دا  العناوين  والبراجراف  اللى بيعرف الجامعة -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center"
                    style="color: #D08301; display: inline-block; padding: 0 10px;">New Cairo University</h6>
                <h1 class="mb-5" style="color: #1a096e;">Who Are We</h1>
            </div>

            <div class="shadow-lg p-4 rounded-4"
                style="max-width: 900px; margin:auto; border-left: 6px solid #D08301; background-color: #fff;">
                <p style="color: #333; line-height: 1.8; font-size: 1.1rem;">
                    "New Cairo Technological University is a pioneering institution at the forefront of applied sciences
                    and modern technology.
                    Established to bridge the gap between academia and industry, NCTU equips students with cutting-edge
                    skills and hands-on
                    experience in various high-tech fields. With a forward-thinking curriculum and strong industry
                    partnerships,
                    the university prepares the next generation of innovators and problem-solvers to lead the future."
                </p>
            </div>
        </div>
    </div>



    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/faq.png') }}" alt=""
                            style="object-fit: cover;">
                    </div>
                </div>
                <!--   اهم الاسئله الشائعة التعديلات بتاعتى -->
                <div class="faq-section">
                    <h2>The most important questions </h2>
                    <div class="faq">
                        <div>
                            <div class="faq-item" onclick="toggleAnswer(this)">
                                <span>What is New Cairo Technological University (NCTU)?</span>
                            </div>
                            <div class="answer">
                                It's a public technological university in Egypt that offers advanced applied education,
                                focusing on linking studies directly to the job market.</div>

                            <div class="faq-item" onclick="toggleAnswer(this)">
                                <span>How is it different from regular universities?</span>
                            </div>
                            <div class="answer">
                                Education here is more practical and hands-on. It prepares students directly for the job
                                market and accepts
                                students after high school or diploma.</div>
                            <!-- </div> -->
                            <div>
                                <div class="faq-item" onclick="toggleAnswer(this)">
                                    <span>What majors or programs are available?</span>

                                </div>
                                <div class="answer">
                                    Programs vary by year, but usually include:

                                    Mechatronics

                                    Information Technology

                                    New and Renewable Energy

                                    Prosthetics Technology

                                    Control and Monitoring Systems

                                    Equipment Operation and Maintenance Technology

                                </div>

                                <div class="faq-item" onclick="toggleAnswer(this)">
                                    <span>How many years is the study program?</span>
                                </div>
                                <div class="answer">
                                    It's a 4-year program divided into two stages:

                                    First 2 years: Higher Technological Diploma

                                    Last 2 years: Technological Bachelor's Degree (with certain conditions)

                                </div>

                                <div class="faq-item" onclick="toggleAnswer(this)">
                                    <span>Is the Technological Bachelor's degree recognized?</span>
                                </div>
                                <div class="answer">
                                    Yes, it is officially recognized by the Supreme Council of Universities
                                    and is equivalent to any bachelor's degree from other universities.
                                    You can also pursue postgraduate studies.

                                </div>

                                <div class="faq-item" onclick="toggleAnswer(this)">
                                    <span>Is there practical training?</span>
                                </div>
                                <div class="answer">
                                    Yes, practical training is a key part of the program and takes place both inside the
                                    university and at companies/factories.

                                </div>

                                <div class="faq-item" onclick="toggleAnswer(this)">
                                    <span>Is it part of the national admission system (Thanaweya Amma)?</span>
                                </div>
                                <div class="answer">
                                    Yes, the university is included in the national coordination system, and admission
                                    depends on the yearly minimum grade requirements</div>

                                <div class="faq-item" onclick="toggleAnswer(this)">
                                    <span>Does the university accept diploma holders?</span>
                                </div>
                                <div class="answer">
                                    Yes, it accepts graduates of technical diplomas (3 or 5-year systems) and technical
                                    institutes, but applicants must pass entrance exams.</div>


                                <div class="faq-item" onclick="toggleAnswer(this)">
                                    <span>Is there on-campus housing?</span>
                                </div>
                                <div class="answer">
                                    Currently, there’s no dormitory, but there are nearby housing options in areas like
                                    New Cairo or Katameya.</div>



                                <div class="faq-item" onclick="toggleAnswer(this)">
                                    <span>Are there tuition fees?</span>
                                </div>
                                <div class="answer">
                                    Yes, there are fees. They're slightly higher than traditional public universities,
                                    but still much cheaper than private universities.

                                </div>

                                <div class="faq-item" onclick="toggleAnswer(this)">
                                    <span> What are the job opportunities after graduation from NCTU?</span>
                                </div>
                                <div class="answer">
                                    Graduates are qualified for technical and engineering-related jobs in both public
                                    and private sectors.
                                    The university focuses on practical skills, so students can work in industries like
                                    automation, IT, energy, manufacturing,
                                    or even start their own business.

                                </div>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>
                    <!-- نهايه التعديلات -->



                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
  <!-------------------------- Reader start----------------------------->
  <div class="reader-controls">
  <button onclick="readPage()" class="reader-btn play">    🔊 Read  </button>
  <button onclick="stopReading()" class="reader-btn stop">    ⏹ Stop  </button>
</div>
 <!-------------------------- Reader end ----------------------------->


@endsection
