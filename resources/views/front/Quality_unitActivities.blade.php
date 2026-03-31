@extends('layouts.front')
@section('content')    <meta charset="utf-8">
    <title>Objectives of the Quality Assurance Unit</title>
    <link rel="icon" href="img/logo.png" type="image/png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

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

        .custom-card {
            border-left: 6px solid #D08301;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 30px;
        }

        .custom-title {
            color: #1a096e;
            font-weight: 700;
            margin-bottom: 15px;
            text-align: left;
        }

        .custom-text {
            text-align: justify;
            color: #333;
            line-height: 1.8;
        }

        ul.custom-text li {
            margin-bottom: 8px;
        }

</style>
@endpush





    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Unit Activities</h1>
                    <nav aria-label="breadcrumb">
                        <!--<ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ url('index') }}">Home</a></li>
                        </ol>-->
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
            style="max-height: 550px; object-fit: cover;">
            <source src="{{ asset('img/Unit_Activities.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

    </div>
</div>
<!-- Hero Video Card End -->


    <!-- Main Content Start -->
    <div class="container my-5">


    <!-- Card 1 -->
    <div class="custom-card">
        <h4 class="custom-title">Internal Auditing and Evaluation</h4>
        <p class="custom-text">
            1. Conduct regular internal audits for academic, administrative, and service activities across the university.
            <br>
            2. Assess compliance with quality standards and identify areas for continuous improvement.
            <br>
            3. Provide reports with findings and recommendations to improve institutional performance.
        </p>
    </div>

    <!-- Card 2 -->
    <div class="custom-card">
        <h4 class="custom-title">Performance Indicators and Data Analysis</h4>
        <p class="custom-text">
            1. Develop and analyze Key Performance Indicators (KPIs) to measure progress toward institutional and program objectives.
            <br>
            2. Update KPIs periodically to align with national and international standards.
            <br>
            3. Use data analysis results to guide decision-making and strategic planning.
        </p>
    </div>

    <!-- Card 3 -->
    <div class="custom-card">
        <h4 class="custom-title">Continuous Improvement Plans</h4>
        <p class="custom-text">
            1. Follow up on the implementation of continuous improvement plans in academic, research, and service activities.
            <br>
            2. Prepare semi-annual and annual reports including results, performance indicators, and future recommendations.
            <br>
            3. Ensure all departments commit to continuous development and excellence.
        </p>
    </div>

    <!-- Card 4 -->
    <div class="custom-card">
        <h4 class="custom-title">Annual Reporting</h4>
        <p class="custom-text">
            1. Prepare the annual quality report and submit it to the Quality Assurance Council and the University Board.
            <br>
            2. Include all key findings, performance summaries, and improvement recommendations.
            <br>
            3. Support decision-makers with data-driven insights to enhance university outcomes.
        </p>
    </div>

    <!-- Card 5 -->
    <div class="custom-card">
        <h4 class="custom-title">Specialized Quality Committees</h4>
        <p class="custom-text">
            1. Establish specialized committees such as Curriculum Development, Monitoring & Technical Support, Database Systems, and Continuous Improvement.
            <br>
            2. Define committee roles, responsibilities, and ensure effective collaboration.
            <br>
            3. Monitor their progress and provide technical guidance.
        </p>
    </div>

    <!-- Card 6 -->
    <div class="custom-card">
        <h4 class="custom-title">Training and Capacity Building</h4>
        <p class="custom-text">
            1. Organize workshops and training sessions for faculty, staff, and students on quality assurance and accreditation practices.
            <br>
            2. Develop skills in research, innovation, and continuous improvement.
            <br>
            3. Foster a university-wide culture of quality and excellence.
        </p>
    </div>

    <!-- Card 7 -->
    <div class="custom-card">
        <h4 class="custom-title">Quality Database Management</h4>
        <p class="custom-text">
            1. Build and maintain the university’s quality and accreditation database.
            <br>
            2. Collect, analyze, and document all quality-related data and activities.
            <br>
            3. Prepare reports and awareness materials on quality performance.
        </p>
    </div>

    <!-- Card 8 -->
    <div class="custom-card">
        <h4 class="custom-title">Community and Industry Engagement</h4>
        <p class="custom-text">
            1. Strengthen collaboration between the university, industry, and the community.
            <br>
            2. Involve external stakeholders and alumni in quality development and program enhancement.
            <br>
            3. Align university outcomes with labor market and community needs.
        </p>
    </div>

    <!-- Card 9 -->
    <div class="custom-card">
        <h4 class="custom-title">Spreading Quality Culture</h4>
        <p class="custom-text">
            1. Promote awareness of quality and accreditation among students, faculty, and administrative staff.
            <br>
            2. Encourage transparency, accountability, and participation in quality-related initiatives.
            <br>
            3. Foster a culture of excellence and institutional integrity across all departments.
        </p>
    </div>





    </div>
    <!-- Main Content End -->


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
        (function () { if (!window.chatbase || window.chatbase("getState") !== "initialized") { window.chatbase = (...arguments) => { if (!window.chatbase.q) { window.chatbase.q = [] } window.chatbase.q.push(arguments) }; window.chatbase = new Proxy(window.chatbase, { get(target, prop) { if (prop === "q") { return target.q } return (...args) => target(prop, ...args) } }) } const onLoad = function () { const script = document.createElement("script"); script.src = "https://www.chatbase.co/embed.min.js"; script.id = "vCJaS-Ai1Hgccr-hIzTuu"; script.domain = "www.chatbase.co"; document.body.appendChild(script) }; if (document.readyState === "complete") { onLoad() } else { window.addEventListener("load", onLoad) } })();



@endsection
