@extends('layouts.front')
@section('content')
    @push('styles')
<style>

        .conference-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 40px;
            border-left: 5px solid #D08301;
        }

        .conference-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
        }

        .conference-content {
            display: flex;
            align-items: stretch;
            /* غيري من center إلى stretch */
            padding: 0;
            min-height: 400px;
            /* أضيفي حد أدنى للارتفاع */
        }

        .conference-img {
            width: 40%;
            height: auto;
            /* غيري من 300px إلى auto */
            object-fit: cover;
            align-self: stretch;
            /* أضيفي هذا */
        }

        .conference-info {
            width: 60%;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* أضيفي هذا */
        }

        .conference-info h3 {
            color: #1a096e;
            font-size: 1.8rem;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .conference-date {
            background: #D08301;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .conference-location {
            color: #5d6d7e;
            margin-bottom: 15px;
            font-size: 1rem;
        }

        .conference-location i {
            color: #D08301;
            margin-right: 8px;
        }

        .conference-description {
            color: #5d6d7e;
            line-height: 1.6;
            margin-bottom: 20px;
            font-size: 1rem;
            flex-grow: 1;
            /* أضيفي هذا */
        }

        .btn-conference {
            background: #D08301;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 25px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            font-weight: 600;
            align-self: flex-start;
            /* أضيفي هذا */
        }

        .btn-conference:hover {
            background: #b36f00;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(210, 131, 1, 0.4);
        }

        /* للكروت اللي الصورة على الشمال */
        .conference-reverse .conference-content {
            flex-direction: row-reverse;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .conference-content {
                flex-direction: column;
                min-height: auto;
                /* أضيفي هذا */
            }

            .conference-img,
            .conference-info {
                width: 100%;
            }

            .conference-img {
                height: 200px;
            }

            .conference-info {
                padding: 20px;
            }
        }

</style>
@endpush


    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->






    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Conferences</h1>
                    <nav aria-label="breadcrumb">
                        <!--<ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ url('Events') }}">Events</a></li>
                        </ol>-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- المؤتمرات Content -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Academic Events</h6>
                <h1 class="mb-5" style="color: #1a096e;">University Conferences</h1>
            </div>

            <!-- Conference 1 -->
            <div class="conference-card wow fadeInUp" data-wow-delay="0.1s">
                <div class="conference-content">
                    <img src="{{ asset('img/Events/conf1.png') }}" class="conference-img" alt="Tech Conference">
                    <div class="conference-info">
                        <span class="conference-date">September 18, 2025</span>
                        <h3>New Cairo Tech University partners with China's Taiyuan University to establish first branch
                            campus in Egypt</h3>
                        <p class="conference-description">

                            - a historic first for Egyptian technological education.President Prof.
                        <h6>Dr. Tarek Abdel Malak </h6>visited Taiyuan University, meeting Chinese academic leaders to
                        create their first Egyptian branch campus, enabling academic and research exchange.

                        The partnership includes access to Taiyuan's advanced laboratories and over 100 academic
                        specializations, supporting Egypt's vision for industry-aligned technological education and
                        strengthening China-Egypt educational relations.
                    </div>
                </div>
            </div>

            <!-- Conference 2 -->
            <div class="conference-card conference-reverse wow fadeInUp" data-wow-delay="0.2s">
                <div class="conference-content">
                    <img src="{{ asset('img/Events/conf2.png') }}" class="conference-img" alt="Tech Conference">
                    <div class="conference-info">
                        <span class="conference-date">September 14, 2025</span>
                        <h3>New Cairo Tech University Delegation Visits Germany's Ottobock</h3>
                        <p class="conference-description">

                            A university delegation led by President Prof.
                        <h6>Dr. Tarek Abdel Malak </h6> visited Ottobock Germany, global leader in prosthetic
                        manufacturing.

                        The visit focused on inspecting equipment for 6 new assembly centers across Egypt and training
                        technical staff at Ottobock Academy. The delegation examined production facilities and quality
                        standards.

                        This supports Egypt's initiative to provide assistive devices for people with disabilities,
                        promoting independent living and social integration through advanced German technology and
                        expertise.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Conference 3 -->
            <div class="conference-card wow fadeInUp" data-wow-delay="0.3s">
                <div class="conference-content">
                    <img src="{{ asset('img/Events/conf3.png') }}" class="conference-img" alt="Tech Conference">
                    <div class="conference-info">
                        <span class="conference-date">September 10, 2024</span>
                        <h3>New Cairo Tech University Signs MoU with Beijing Youth Politics College</h3>
                        <p class="conference-description">

                            New Cairo Technological University has signed a Memorandum of Understanding with Beijing
                            Youth Politics College to strengthen academic and cultural cooperation between Egypt and
                            China.

                            The agreement was signed by :
                        <h6>Prof.Dr. Tarek Abdel Malak </h6> ,University President, and Qiao Dongliang, College
                        President, during a ceremony where both institutions exchanged commemorative shields.
                        <br>
                        Partnership Focus:
                        - Student and faculty exchange programs
                        - Joint training and professional certifications
                        - Collaboration in advanced technology fields
                        - Short-term study programs

                        The MoU aims to enhance industry-oriented education and promote international academic exchange,
                        supporting global workforce development through shared expertise and resources. </p>
                    </div>
                </div>
            </div>
            <!-- Conference 4 -->
            <div class="conference-card conference-reverse wow fadeInUp" data-wow-delay="0.2s">
                <div class="conference-content">
                    <img src="{{ asset('img/Events/conf4.png') }}" class="conference-img" alt="Tech Conference">
                    <div class="conference-info">
                        <span class="conference-date">june 12, 2025</span>
                        <h3>New Cairo Tech University Signs Cooperation Protocol with Yangzhou University</h3>
                        <p class="conference-description">

                            New Cairo Technological University, under the leadership of Prof.
                        <h6>Dr. Tarek Abdel Malak </h6>, has signed a cooperation protocol with China's Yangzhou
                        University.

                        The signing ceremony was attended by senior representatives from Yangzhou University and
                        officials from the Chinese Embassy in Egypt.

                        Protocol Objectives:

                        Develop new academic programs in technological fields

                        Enhance cultural exchange activities

                        Provide training opportunities and scholarships

                        Implement student exchange programs

                        Support joint research projects and consultations

                        This agreement supports New Cairo Technological University's vision of building international
                        partnerships, opening new horizons for student and faculty exchange, and collaborating on
                        research projects and scientific activities between both institutions. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="{{ url('about') }}">About Us</a>
                    <a class="btn btn-link" href="{{ url('contact') }}">Contact Us</a>
                    <a class="btn btn-link" href="{{ url('courses') }}">Courses</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <a
                        href="https://www.google.com/maps/search/%D8%AC%D8%A7%D9%85%D8%B9%D9%87+%D8%A7%D9%84%D9%82%D8%A7%D9%87%D8%B1%D9%87+%D8%A7%D9%84%D8%AC%D8%AF%D9%8A%D8%AF%D9%87+%D8%A7%D9%84%D8%AA%D9%83%D9%86%D9%88%D9%84%D9%88%D8%AC%D9%8A%D8%A7%E2%80%AD%E2%80%AD/@30.022714,31.5229726,17z?entry=ttu&g_ep=EgoyMDI1MDQwOS4wIKXMDSoASAFQAw%3D%3D">
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>El Lotus,First New Cairo,New Cairo</p>
                    </a>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0225390250</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.facebook.com/nctu.edu.eg/?locale=ar_AR"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.instagram.com/explore/locations/113014853445529/new-cairo-technological-university/"><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://t.me/+hu88qUXmcXNlNmQ0"><i
                                class="fab fa-telegram"></i></a>
                        <a class="btn btn-outline-light btn-social" href="https://www.linkedin.com/school/nct-uni/"><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 gallery">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/Departments/information technology.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/Departments/Mechatronic.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/Departments/Autotronics.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/Departments/Petroleum engineering.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/Departments/Prosthetics.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/Departments/Renewable energy.jpg') }}" alt="">
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div style="display: flex; justify-content: center; align-items: center; text-align: center;">
                        <p>&copy; 2024 Your University. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function revealOnScroll() {
                let courses = document.querySelectorAll(".course");

                courses.forEach((course) => {
                    let coursePosition = course.getBoundingClientRect().top;
                    let screenPosition = window.innerHeight * 0.85; // التحكم في توقيت الظهور

                    if (coursePosition < screenPosition) {
                        course.classList.add("show");
                    }
                });
            }

            window.addEventListener("scroll", revealOnScroll);
            revealOnScroll(); // علشان العناصر اللي باينة أصلاً تفضل باينة
        });

@endpush




@endsection
