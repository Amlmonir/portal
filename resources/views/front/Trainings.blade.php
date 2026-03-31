@extends('layouts.front')
@section('content')    <meta charset="utf-8">
    <title>Trainings - New Cairo University of Technology</title>
    <link rel="icon" href="img/logo.png" type="image/png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @push('styles')
<style>

        .training-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 40px;
            border-left: 5px solid #D08301;
        }

        .training-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
        }

        .training-content {
            display: flex;
            align-items: stretch;
            padding: 0;
            min-height: 400px;
        }

        .training-img {
            width: 40%;
            height: auto;
            object-fit: cover;
            align-self: stretch;
        }

        .training-info {
            width: 60%;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .training-info h3 {
            color: #1a096e;
            font-size: 1.8rem;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .training-date {
            background: #D08301;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .training-location {
            color: #5d6d7e;
            margin-bottom: 15px;
            font-size: 1rem;
        }

        .training-location i {
            color: #D08301;
            margin-right: 8px;
        }

        .training-description {
            color: #5d6d7e;
            line-height: 1.6;
            margin-bottom: 20px;
            font-size: 1rem;
            flex-grow: 1;
        }

        .btn-training {
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
        }

        .btn-training:hover {
            background: #b36f00;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(210, 131, 1, 0.4);
        }

        /* للكروت اللي الصورة على الشمال */
        .training-reverse .training-content {
            flex-direction: row-reverse;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .training-content {
                flex-direction: column;
                min-height: auto;
            }

            .training-img,
            .training-info {
                width: 100%;
            }

            .training-img {
                height: 200px;
            }

            .training-info {
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
                    <h1 class="display-3 text-white animated slideInDown">Trainings</h1>
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

    <!-- Trainings Content -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Professional Development</h6>
                <h1 class="mb-5" style="color: #1a096e;">University Trainings</h1>
            </div>

            <!-- Training 1 -->
            <div class="training-card wow fadeInUp" data-wow-delay="0.1s">
                <div class="training-content">
                    <img src="{{ asset('img/Events/tra1.jpg') }}" class="training-img" alt="Professional Training">
                    <div class="training-info">
                        <span class="training-date">July 28, 2025</span>
                        <h3>New Cairo Tech University Students Train at the Heart of Egypt's Oil Fields.</h3>
                        <p class="training-description"><br> <br>Students from the Petroleum Production, Processing, and
                            Transportation Technology program at New Cairo Technological University completed their
                            2024/2025 summer training in the oil fields of major Egyptian companies in the Eastern
                            Desert and South Sinai.

                            The training was conducted under the supervision of university officials, including the
                            university president, the faculty dean, and the program coordinator. It was held in
                            collaboration with the Egyptian General Petroleum Corporation (EGPC) at sites operated by
                            several leading companies.

                            This initiative is part of the university's strategy to enhance practical skills and bridge
                            the gap between academic learning and real-world industrial applications. The students
                            gained hands-on experience with modern oil industry technologies, specifically in artificial
                            lift and petroleum processing, preparing them for the global job market.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Training 2 -->
            <div class="training-card training-reverse wow fadeInUp" data-wow-delay="0.2s">
                <div class="training-content">
                    <img src="{{ asset('img/Events/tra2.jpg') }}" class="training-img" alt="Technical Training" width="20" height="20">
                    <div class="training-info">
                        <span class="training-date">July 18, 2024</span>
                        <h3>Administrative Staff Training Program Launched at New Cairo Technological University</h3>
                        <p class="training-description">
                            Under the leadership of Prof. Dr. Tarek Abdel Malak and Prof. Dr. Walid Elkhatam, New Cairo
                            Technological University is launching a specialized training program for its administrative
                            staff. This initiative, organized by Prof. Dr. Abdullah Abdel-Hay, Vice Dean for Training
                            and Community Service, aims to enhance employee skills and keep pace with technological and
                            industrial advancements.

                            The month-long program, conducted in partnership with EDUTUBE (by Eleco net for training and
                            contracting service), will offer courses in ICDL, SQL, and Forms.

                            This program reflects the university's commitment to continuous development and
                            strengthening its administrative framework.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Training 3 -->
            <div class="training-card wow fadeInUp" data-wow-delay="0.3s">
                <div class="training-content">
                    <img src="{{ asset('img/Events/tra3.jpg') }}" class="training-img" alt="Skills Training">
                    <div class="training-info">
                        <span class="training-date">September 18, 2024</span>
                        <h3>NTCU and LONGi Partner for Solar Energy Training Program</h3>
                        <p class="training-description">
                            New Cairo Technological University, under the leadership of Prof. Dr. Tarek Abdel Malak and
                            Prof. Dr. Walid Elkhatam, has partnered with LONGi, a leading solar panel manufacturer, to
                            deliver a specialized solar energy training program for students.

                            The three-day program, supervised by Dr. Ahmed Naga, Head of the New and Renewable Energy
                            Department, combined theoretical and practical sessions. Students received training in PV
                            System software and gained hands-on experience with LONGi's solar panels.

                            The program concluded with a practical demonstration and certificate distribution,
                            reflecting the university's ongoing commitment to equipping students with market-relevant
                            skills. </p>
                    </div>
                </div>
            </div>

            <!-- Training 4 -->
            <div class="training-card training-reverse wow fadeInUp" data-wow-delay="0.4s">
                <div class="training-content">
                    <img src="{{ asset('img/Events/tra4.jpg') }}" class="training-img" alt="Technical Workshop">
                    <div class="training-info">
                        <span class="training-date">July 21, 2025</span>
                        <h3> Mechatronics Students Successfully Complete Summer Training at Qader Factory </h3>
                        <p class="training-description">
                            Under the patronage of Prof. Dr. Tarek Abdel Malak, President of New Cairo Technological
                            University, and Prof. Dr. Walid Elkhatam, Dean of the Faculty of Industrial Technology and
                            Energy, and supervised by Dr. Sherif El-Hossary, Mechatronics Technology Program
                            Coordinator, students have successfully completed their summer training for the 2024/2025
                            academic year at Qader Factory for Advanced Industries.

                            This training reflects the university's commitment to enhancing practical skills and
                            bridging academic studies with real-world industrial applications. Students gained valuable
                            hands-on experience with modern technologies in automation control, mechanical systems, and
                            electrical systems.

                            The university extends its gratitude to Major General Dr. Amr Abdel Aziz, Chairman of Qader
                            Factory, for hosting the students and providing exceptional facilities that maximized the
                            training's effectiveness.


                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>





  <!-- Footer Start -->
     <div id="footer-placeholder"></div>
    <script>
        fetch("footer.html")
        .then(res => res.text())
        .then(data => {
            document.getElementById("footer-placeholder").innerHTML = data;
        });

    <!-- Footer End -->


    <!-- JavaScript Libraries -->









    <!-- Template Javascript -->


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

    <!-- Template Javascript -->

    <script>
        (function () { if (!window.chatbase || window.chatbase("getState") !== "initialized") { window.chatbase = (...arguments) => { if (!window.chatbase.q) { window.chatbase.q = [] } window.chatbase.q.push(arguments) }; window.chatbase = new Proxy(window.chatbase, { get(target, prop) { if (prop === "q") { return target.q } return (...args) => target(prop, ...args) } }) } const onLoad = function () { const script = document.createElement("script"); script.src = "https://www.chatbase.co/embed.min.js"; script.id = "vCJaS-Ai1Hgccr-hIzTuu"; script.domain = "www.chatbase.co"; document.body.appendChild(script) }; if (document.readyState === "complete") { onLoad() } else { window.addEventListener("load", onLoad) } })();



@endsection
