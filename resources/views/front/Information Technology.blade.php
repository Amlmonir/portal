@extends('layouts.front')
@section('content')    <meta charset="utf-8">
    <title>Quality_Assurance_Unit</title>
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
                    <h1 class="display-3 text-white animated slideInDown">Information Technology Department – New Cairo Technological University</h1>
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
            <source src="{{ asset('img/information Department.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

    </div>
</div>
<!-- Hero Video Card End -->


    <!-- Main Content Start -->
    <div class="container my-5">
        <!-- Vision of the Quality Assurance Unit -->
        <div class="custom-card">
            <h4 class="custom-title">Information Technology Department</h4>
            <p class="custom-text">
                The Information Technology (IT) Department at New Cairo Technological University provides students with a strong foundation in computer science, programming, networking, cybersecurity, and data management. The department focuses on practical and applied learning, combining theoretical knowledge with hands-on experience in modern IT labs.

Graduates are equipped with the skills needed to excel in the digital and technology-driven world,
 and they are prepared for careers in software development, IT management, network administration, cybersecurity, and other technology-related fields. The department also emphasizes research, innovation, and continuous professional development,
ensuring students are ready to meet the demands of the local and global job markets.
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
