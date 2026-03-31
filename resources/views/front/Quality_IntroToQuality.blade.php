@extends('layouts.front')
@section('content')    <meta charset="utf-8">
    <title>Introduction to the Quality Assurance Unit</title>
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
                    <h1 class="display-3 text-white animated slideInDown">Introduction to the Quality Assurance Unit</h1>
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


    <!-- Main Content Start -->
    <div class="container my-5">
        <!-- Opening Statement -->
        <div class="custom-card">
            <h4 class="custom-title">Opening Statement</h4>
            <p class="custom-text">
                In line with New Cairo Technological University’s commitment to fostering a culture of quality and institutional excellence,
                and its continuous pursuit to enhance academic and administrative performance in accordance with national and international
                accreditation and quality standards, this internal regulation of the Quality Assurance Unit serves as the guiding framework
                for the unit’s operations.
            </p>
            <p class="custom-text">
                This regulation aims to define the unit’s objectives, responsibilities, organizational structure, and operational mechanisms
                to ensure its active role in monitoring and developing quality assurance systems, as well as promoting continuous improvement
                in academic programs, educational services, and research and community activities.
            </p>
            <p class="custom-text">
                By putting this regulation into effect, the University reaffirms its commitment to transparency, accountability, and
                continuous improvement, and to building a modern educational system capable of competing regionally and internationally,
                thereby fulfilling its vision and mission of graduating distinguished professionals who meet the evolving demands of the
                labor market.
            </p>
            <p class="fw-bold mt-3">Director of Quality Management<br>Dr. Sherif Hassan Al-Hosary</p>
        </div>

        <!-- Introduction -->
        <div class="custom-card">
            <h4 class="custom-title">Introduction</h4>
            <p class="custom-text">
                In alignment with the Egyptian state’s commitment to considering technological education as one of the main pillars of
                sustainable development within the framework of Egypt’s Vision 2030, and in recognition of the need to enhance the quality
                of higher education and its institutions to meet the demands of the local, regional, and international labor markets, the
                establishment of the Quality Assurance Unit at New Cairo Technological University (NCTU) represents a true embodiment of
                this national priority. It also reflects the university’s dedication to its mission of delivering distinguished technological
                education that keeps pace with scientific and technological advancements.
            </p>
            <p class="custom-text">
                This internal regulation serves as the organizational framework governing the operations of the Quality Assurance Unit at the
                university. It complements the university’s strategic plan to achieve excellence, leadership, and innovation, while aligning
                with the National Authority for Quality Assurance and Accreditation of Education (NAQAAE) standards, to:
            </p>
            <ul class="custom-text">
                <li>Build an effective system that ensures continuous improvement of academic and administrative performance.</li>
                <li>Support the university’s technological programs — such as Mechatronics Technology, Automotive Technology, New and Renewable Energy Technology, Information and Communication Technology, Petroleum Production and Processing Technology, and Prosthetics and Orthotics Technology — to meet local and international academic accreditation standards.</li>
                <li>Strengthening societal and labor market confidence in the university’s outputs and graduates, who possess the skills and competencies to compete globally.</li>
            </ul>
            <p class="custom-text">
                The Quality Assurance Unit at New Cairo Technological University serves as the main instrument for implementing and activating
                quality systems and mechanisms, thereby achieving the university’s vision and mission, and contributing to building a leading
                institutional image that enhances the university’s standing locally, regionally, and internationally.
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
