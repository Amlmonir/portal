@extends('layouts.front')
@section('content')    <meta charset="utf-8">
    <title>Graduation - New Cairo University of Technology</title>
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

        .project-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 40px;
            border-left: 5px solid #D08301;
        }

        .project-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
        }

        .project-content {
            display: flex;
            align-items: stretch;
            padding: 0;
            min-height: 400px;
        }

        .project-img {
            width: 40%;
            height: auto;
            object-fit: cover;
            align-self: stretch;
        }

        .project-info {
            width: 60%;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .project-info h3 {
            color: #1a096e;
            font-size: 1.8rem;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .project-date {
            background: #D08301;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .project-department {
            color: #5d6d7e;
            margin-bottom: 15px;
            font-size: 1rem;
        }

        .project-department i {
            color: #D08301;
            margin-right: 8px;
        }

        .project-description {
            color: #5d6d7e;
            line-height: 1.6;
            margin-bottom: 20px;
            font-size: 1rem;
            flex-grow: 1;
        }

        .btn-project {
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

        .btn-project:hover {
            background: #b36f00;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(210, 131, 1, 0.4);
        }

        /* للكروت اللي الصورة على الشمال */
        .project-reverse .project-content {
            flex-direction: row-reverse;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .project-content {
                flex-direction: column;
                min-height: auto;
            }

            .project-img,
            .project-info {
                width: 100%;
            }

            .project-img {
                height: 200px;
            }

            .project-info {
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
                    <h1 class="display-3 text-white animated slideInDown">Graduation Projects</h1>
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
    <!-- Graduation Projects Content -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Student Projects</h6>
                <h1 class="mb-5" style="color: #1a096e;">Graduation Projects Exhibition</h1>
            </div>

            <!-- Project 1 -->
            <div class="project-card wow fadeInUp" data-wow-delay="0.1s">
                <div class="project-content">
                    <img src="{{ asset('img/Events/PR.jpg') }}" class="project-img" alt="Smart Agriculture System">
                    <div class="project-info">
                        <span class="project-date">June 21 2025</span>
                        <h3>NCTU Holds Project Presentations for Second-Year Renewable Energy Students</h3>
                        <p class="project-department">
                            <i class="fas fa-car"></i>Autotronics Department
                        </p>
                        <p class="project-description">
                            Under the leadership of Prof. Dr. Tarek Abdel Malak, President of New Cairo Technological
                            University, and Prof. Dr. Walid Elkhatam, Dean of the Faculty of Industrial Technology and
                            Energy, second-year students in the New and Renewable Energy program presented their
                            graduation projects.

                            The projects covered various renewable energy applications, including electricity generation
                            from human and animal sources, solar-powered parking facilities with EV charging stations,
                            and solar-powered water pumping systems with advanced control mechanisms.

                            Held on June 21, 2025, the project discussions were evaluated by faculty committees. The
                            innovative projects demonstrated the program's focus on practical applications and its
                            success in preparing students to address real-world challenges in the renewable energy
                            sector while contributing to sustainable development goals.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="project-card project-reverse wow fadeInUp" data-wow-delay="0.2s">
                <div class="project-content">
                    <img src="{{ asset('img/Events/PR2.jpg') }}" class="project-img" alt="Advanced Prosthetic Hand">
                    <div class="project-info">
                        <span class="project-date">June 23 2025</span>
                        <h3>NCTU Mechatronics Students Showcase Innovative Projects at Tech Exhibition</h3>
                        <p class="project-department">
                            <i class="fas fa-microchip"></i>Mechatronics Engineering Department
                        </p>
                        <p class="project-description">
                            New Cairo Technological University organized a project exhibition for second-year
                            Mechatronics students, showcasing their practical and innovative skills in advanced
                            technology. The event was held under the leadership of Prof. Dr. Tarek Abdel Malak,
                            University President, and Prof. Dr. Walid Elkhatam, Dean of the Faculty of Industrial
                            Technology and Energy.

                            The exhibition featured a wide range of student projects covering automation, robotics, and
                            smart control systems, including:

                            AI-Powered Drone for Aerial Image Detection

                            Fire Fighter Robot Car

                            Smart Parking System

                            Autonomous Food Delivery Robot

                            CNC Milling Machine

                            Solar Tracking System

                            Material Sorting Robotic Arm

                            Smart Bird Incubator

                            Faculty members praised the students' exceptional creativity and the high quality of their
                            projects, noting that the work demonstrates promising potential in the fields of
                            mechatronics and smart technology. The exhibition successfully highlighted the students'
                            ability to transform theoretical knowledge into practical, innovative solutions. </p>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="project-card wow fadeInUp" data-wow-delay="0.3s">
                <div class="project-content">
                    <img src="{{ asset('img/Events/PR3.jpg') }}" class="project-img" alt="Renewable Energy System">
                    <div class="project-info">
                        <span class="project-date">June 22 2025</span>
                        <h3>NCTU Renewable Energy Students Present Innovative Graduation Projects</h3>
                        <p class="project-department">
                            <i class="fas fa-solar-panel"></i>Renewable Energy Department
                        </p>
                        <p class="project-description">
                            New Cairo Technological University recently held an exhibition and discussion for
                            fourth-year students' graduation projects from the New and Renewable Energy Department. The
                            event was organized under the leadership of Prof. Dr. Tarek Abdel Malak, University
                            President, and Prof. Dr. Walid Elkhatam, Dean of the Faculty of Industrial Technology and
                            Energy, with scientific guidance from Dr. Ahmed Naga, Program Coordinator.

                            The projects demonstrated the students' excellence in integrating academic knowledge with
                            modern technological applications, featuring innovative solutions such as:

                            A hybrid solar chimney design combining water desalination with electricity generation

                            An advanced automatic cleaning system for solar panels to enhance operational efficiency

                            A wind turbine system controlled by adaptive PI algorithms with AI-based voltage drop
                            prediction

                            An online predictive maintenance system for wind turbines to reduce failures

                            Supervisors praised the projects for reflecting the students' high capabilities and their
                            potential to provide technical solutions aligned with industry developments, while also
                            acknowledging the university's role in fostering a research and innovation-oriented
                            educational environment. </p>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="project-card project-reverse wow fadeInUp" data-wow-delay="0.4s">
                <div class="project-content">
                    <img src="{{ asset('img/Events/PR4.jpg') }}" class="project-img" alt="Autonomous Vehicle">
                    <div class="project-info">
                        <span class="project-date">June 22 2025</span>
                        <h3>NCTU Programming Students Present Innovative Graduation Projects</h3>
                        <p class="project-description">
                            💻
                            It is with great pride that I extend my warmest congratulations to our outstanding
                            Mechatronics students for their remarkable success in defending their graduation projects.

                            The "IoT-Based Smart Farm" project represents an exceptional model of student innovation and
                            academic excellence, demonstrating our students' advanced capabilities in leveraging modern
                            technology to address real-world challenges.

                            Achieving a perfect score in this comprehensive project is a testament to the tremendous
                            effort and dedication our students have demonstrated over months of hard work. The
                            commendations from the evaluation committee and attendees confirm that they have delivered
                            an exceptional performance.

                            My congratulations to the students, and special appreciation to our faculty members,
                            particularly Dr. Mohamed Ramadan, for their dedicated supervision and guidance. These
                            achievements align perfectly with our mission to build a generation of innovators capable of
                            leading Egypt's technological future.

                            Prof. Dr. Tarek Abdel Malak
                            President of New Cairo Technological University </p>
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
