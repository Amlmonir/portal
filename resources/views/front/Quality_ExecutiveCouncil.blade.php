@extends('layouts.front')
@section('content')    <meta charset="utf-8">
    <title>Quality Assurance Unit Board of Directors</title>
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
                    <h1 class="display-3 text-white animated slideInDown">Quality Assurance Unit <br> Board of Directors</h1>
                    <nav aria-label="breadcrumb">
                      <!--  <ol class="breadcrumb justify-content-center">
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
        <!-- Quality Assurance Unit Board of Directors -->
        <div class="custom-card">
            <h4 class="custom-title">Quality Assurance Unit Board of Directors</h4>
            <p class="custom-text">
                The activities of the Quality Assurance Unit are managed by a Board of Directors, formed by a decision
                of the University President for a renewable term of three years, and composed as follows:
                <br>
                1. University President – Chairperson of the Board
                <br>
                2. Vice President for Education and Student Affairs – Deputy Chairperson
                <br>
                3. Vice President for Postgraduate Studies and Research – Member
                <br>
                4. Vice President for Community Service and Environmental Development – Member
                <br>
                5. Deans of the Colleges – Members
                <br>
                6. Director of the Quality Assurance Unit – Rapporteur of the Board
                <br>
                7. Deputy Director of the Unit – Member
                <br>
                8. Quality Coordinators at the Colleges – Members
                <br>
                9. Quality Coordinators of Academic Programs – Members
                <br>
                10. Representative of Faculty Members from Each College – Member
                <br>
                11. University Secretary-General or his/her delegate – Member
                <br>
                12. Student Representative (President of the Student Union or nominee approved by the Board) – Member
                <br>
                13. Graduate Representative (selected among distinguished alumni) – Member
                <br>
                14. Representative of the Labor Market / Industry (from the university’s strategic partners) – Member
                <br>
                The Board may invite experts or consultants in the field of quality assurance and accreditation to
                attend its meetings without voting rights.

        </div>
        <!-- Mission of the Quality Assurance Unit -->
        <div class="custom-card">
            <h4 class="custom-title">Functions of the Quality Assurance Unit Board of Directors</h4>
            <p class="custom-text">
                The Board of Directors of the Quality Assurance Unit at the university shall be responsible for the
                following:
                <br>
                1. Approving the general policies of the Unit in line with the university’s mission and strategic plan.
                <br>
                2. Approving the strategic plan and annual work plans of the Unit.
                <br>
                3. Monitoring the implementation of quality and continuous improvement plans across the university, its
                colleges, and programs.
                <br>
                4. Approving the formation of specialized subcommittees under the Unit.
                <br>
                5. Approving periodic reports, self-evaluation studies, and the annual report before submission to the
                University Council.
                <br>
                6. Considering proposals submitted by the Unit Director or specialized committees regarding the
                development of academic and administrative performance.
                <br>
                7. Coordinating with the University Quality Assurance Center and the National Authority for Quality
                Assurance and Accreditation (NAQAAE).
                <br>
                8. Approving the financial and administrative regulations of the Unit within the framework of the
                governing laws.
                <br>
                9. Considering any other matters referred by the University President or the Unit Director.

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
