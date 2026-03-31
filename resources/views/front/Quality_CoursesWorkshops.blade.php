@extends('layouts.front')
@section('content')    <meta charset="utf-8">
    <title>Competitions - New Cairo University of Technology</title>
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

        .competition-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 40px;
            border-left: 5px solid #D08301;
        }

        .competition-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
        }

        .competition-content {
            display: flex;
            align-items: stretch;
            padding: 0;
            min-height: 400px;
        }

        .competition-img {
            width: 40%;
            height: auto;
            object-fit: cover;
            align-self: stretch;
        }

        .competition-info {
            width: 60%;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .competition-info h3 {
            color: #1a096e;
            font-size: 1.8rem;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .competition-date {
            background: #D08301;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .competition-location {
            color: #5d6d7e;
            margin-bottom: 15px;
            font-size: 1rem;
        }

        .competition-location i {
            color: #D08301;
            margin-right: 8px;
        }

        .competition-description {
            color: #5d6d7e;
            line-height: 1.6;
            margin-bottom: 20px;
            font-size: 1rem;
            flex-grow: 1;
        }

        .btn-competition {
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

        .btn-competition:hover {
            background: #b36f00;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(210, 131, 1, 0.4);
        }

        /* للكروت اللي الصورة على الشمال */
        .competition-reverse .competition-content {
            flex-direction: row-reverse;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .competition-content {
                flex-direction: column;
                min-height: auto;
            }

            .competition-img,
            .competition-info {
                width: 100%;
            }

            .competition-img {
                height: 200px;
            }

            .competition-info {
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
                    <h1 class="display-3 text-white animated slideInDown">Courses Workshops</h1>
                    <nav aria-label="breadcrumb">
                       <!-- <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ url('Events') }}">Events</a></li>
                        </ol>-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!-- المسابقات Content -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">

            </div>


    <!-- Workshop 1 -->
    <div class="competition-card wow fadeInUp" data-wow-delay="0.1s">
        <div class="competition-content">
            <img src="{{ asset('img/workshop1.png') }}" class="competition-img" alt="Quality Management Workshop">
            <div class="competition-info">
                <span class="competition-date">January 15, 2025</span>
                <h3>Workshop on Academic Program Standards and Quality Management</h3>
                <p class="competition-description">
                    The Quality Assurance Unit organized a training workshop titled
                    <strong>"Academic Program Standards and Quality Management"</strong>,
                    focusing on aligning educational programs with national academic reference standards (NARS).
                    The session provided hands-on activities on designing learning outcomes, course mapping,
                    and assessment strategies.
                    <br><br>
                    The workshop was attended by program coordinators and faculty members across all departments,
                    aiming to enhance awareness of accreditation requirements and internal evaluation methods.
                </p>
            </div>
        </div>
    </div>

    <!-- Workshop 2 -->
    <!-- Workshop: Professional Competencies -->
<div class="competition-card wow fadeInUp" data-wow-delay="0.5s">
    <div class="competition-content">
        <img src="{{ asset('img/workshop2.png') }}" class="competition-img" alt="Professional Competencies Workshop">
        <div class="competition-info">
            <span class="competition-date">July 14, 2025</span>
            <h3>Workshop on “Professional Competencies and Their Applications for Teaching Assistants”</h3>
            <p class="competition-description">
                Under the patronage of <strong>Prof. Dr. Tarek Abdel Malak</strong> – President of New Cairo Technological University,
                <strong>Prof. Dr. Walid El Khetam</strong> – Dean of the Faculty of Industry and Energy Technology, and
                <strong>Prof. Dr. Mohamed Fawzy</strong> – Dean of the Faculty of Applied Health Sciences,
                the university organized its second workshop titled
                <strong>“Professional Competencies and Their Applications for Teaching Assistants.”</strong>
                <br><br>
                The workshop took place on <strong>Monday, July 14, 2025, at 11:00 AM</strong> at the university campus,
                as part of the university’s ongoing efforts to develop academic and professional skills.
                The event was organized under the supervision of <strong>Dr. Sherif El Hosary</strong>,
                Director of the Quality Assurance Unit.
                <br><br>
                The workshop addressed several key themes aimed at enhancing the professional competencies of teaching assistants, including:
                <ul>
                    <li>Introduction to professional competencies and the competency matrix.</li>
                    <li>Strategies and methods for practical and theoretical assessment.</li>
                    <li>How to integrate competencies into course design, particularly in practical components.</li>
                </ul>
                <br>
                This workshop was conducted within the framework of the project
                <strong>“Establishment of the Quality Assurance Unit”</strong>, funded by the Projects Management Unit
                of the Ministry of Higher Education.
            </p>
        </div>
    </div>
</div>


    <!-- Workshop 3 -->
   <!-- Workshop: Spreading Quality Culture -->
<div class="competition-card wow fadeInUp" data-wow-delay="0.6s">
    <div class="competition-content">
        <img src="{{ asset('img/workshop3.png') }}" class="competition-img" alt="Workshop on Quality Culture and Professional Competencies">
        <div class="competition-info">
            <span class="competition-date">July 13, 2025</span>
            <h3>Workshop on “Spreading Quality Culture and Professional Competencies among Faculty Members”</h3>
            <p class="competition-description">
                In line with <strong>New Cairo Technological University’s</strong> commitment to promoting quality principles
                and enhancing academic excellence, the <strong>Faculty of Industry and Energy Technology</strong> organized
                a workshop titled <strong>“Spreading Quality Culture and Professional Competencies among Faculty Members”</strong>
                on <strong>Sunday, July 13, 2025</strong>.
                <br><br>
                The event was held under the patronage of:
                <ul>
                    <li><strong>Prof. Dr. Tarek Abdel Malak</strong> – President of the University</li>
                    <li><strong>Prof. Dr. Walid El Khetam</strong> – Dean of the Faculty of Industry and Energy Technology</li>
                </ul>
                Supervised by <strong>Prof. Dr. Tamer Abu El Naga</strong> – Vice Dean for Education and Student Affairs,
                and organized by <strong>Dr. Sherif El Hosary</strong> – Director of the Quality Assurance Unit.
                <br><br>
                The workshop began at <strong>11:00 AM</strong> and was attended by a number of faculty members
                from various programs. It aimed to strengthen awareness and practical application of academic quality standards.
                <br><br>
                The main themes discussed included:
                <ul>
                    <li>Introduction to the Quality Assurance Unit: its roles, tasks, and documentation requirements.</li>
                    <li>Practical activity for analyzing and evaluating exam models (Good / Poor).</li>
                    <li>Explanation of the Key Performance Indicators (KPI) system and review of performance results related to quality standards.</li>
                </ul>
                <br>
                The workshop targeted faculty members from different programs,
                aiming to equip them with the fundamental knowledge and skills required
                to apply quality systems and academic accreditation standards —
                contributing to improved educational outcomes and institutional excellence.
                <br><br>
                This workshop is part of a continuous series of activities organized
                by the <strong>Quality Assurance Unit</strong> to spread a culture of excellence and quality
                across the faculty and the university.
            </p>
        </div>
    </div>
</div>


    <!-- Workshop 4 -->
   <!-- Dual Workshop on Quality Assurance and Professional Competencies -->
<div class="competition-card wow fadeInUp" data-wow-delay="0.7s">
    <div class="competition-content">
        <img src="{{ asset('img/workshop5.png') }}" class="competition-img" alt="Workshops on Quality Assurance and Professional Competencies">
        <div class="competition-info">
            <span class="competition-date">July 13–14, 2025</span>
            <h3>Workshops on “Promoting Quality Assurance and Professional Competencies among Faculty Members”</h3>

            <p class="competition-description">
                Under the auspices of:
                <ul>
                    <li><strong>Prof. Dr. Tarek Abdel-Malak</strong> – President of New Cairo Technological University</li>
                    <li><strong>Prof. Dr. Walid El Khatam</strong> – Dean of the Faculty of Industry and Energy Technology</li>
                    <li><strong>Prof. Dr. Mohamed Fawzy</strong> – Dean of the Faculty of Health Applied Sciences</li>
                </ul>
                Organized and supervised by:
                <strong>Dr. Sherif El-Hosary</strong> – Director of the Quality Assurance Unit.
                <br><br>

                The university organized two consecutive workshops as part of its continuous efforts
                to strengthen the culture of quality and enhance academic performance across faculties.
                <br><br>

                <strong>FIRST WORKSHOP:</strong> <em>Promoting Quality Assurance and Their Applications among Faculty Members</em><br>
                <strong>Sunday, July 13, 2025 – 11:00 AM</strong><br>
                 Building A, Third Floor – Meeting Room
                <br><br>
                <strong>Agenda:</strong>
                <ul>
                    <li><strong>11:00–12:00:</strong> Introduction to the Quality Assurance Unit – its roles, tasks, and paper quality requirements.</li>
                    <li><strong>12:00–1:00:</strong> Practical activity on analysis and evaluation of exam samples (Good/Poor).</li>
                    <li>Explanation of the <strong>KPI System</strong> and review of performance results and quality standards achievement.</li>
                </ul>

                <hr>

                <strong>SECOND WORKSHOP:</strong> <em>Promoting Quality Culture and Professional Competencies among Faculty Members</em><br>
                 <strong>Monday, July 14, 2025 – 11:00 AM</strong><br>
                 Building A, Third Floor – Meeting Room
                <br><br>
                <strong>Target Group:</strong> Faculty and Teaching Assistants
                <br><br>
                <strong>Topics Covered:</strong>
                <ul>
                    <li>Introducing professional capabilities and competency matrices.</li>
                    <li>Practical and theoretical assessment strategies.</li>
                    <li>Integration of competencies into curricula, with emphasis on practical components.</li>
                </ul>
                <br>
                This workshop was held as part of the <strong>Quality Assurance Unit Establishment Project</strong>,
                funded by the <strong>Projects Management Unit (PMU)</strong> at the Ministry of Higher Education.
                <br><br>
                <strong>For inquiries and coordination:</strong><br>
                 <a href="mailto:Sherif.Alhosary@nctu.edu.eg">Sherif.Alhosary@nctu.edu.eg</a><br>
                📞 01016263625
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
