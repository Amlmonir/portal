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




    <!-- Main Content Start -->
    <div class="container my-5">
        <!-- Vision of the Quality Assurance Unit -->
        <div class="custom-card">
            <h4 class="custom-title">Vision of the Quality Assurance Unit</h4>
            <p class="custom-text">
                The Quality Assurance Unit at New Cairo Technological University (NCTU) aspires to become a leading
                center locally, regionally, and internationally in implementing quality and academic accreditation
                standards — thereby strengthening the university’s position as a distinguished technological institution
                and enabling
                it to achieve global leadership in education, research, innovation, and community service.
        </div>
        <!-- Mission of the Quality Assurance Unit -->
        <div class="custom-card">
            <h4 class="custom-title">Mission of the Quality Assurance Unit</h4>
            <p class="custom-text">
                The Quality Assurance Unit is committed to developing and implementing a comprehensive and integrated
                quality assurance system that promotes continuous improvement across all academic, research,
                <br>
                administrative, and community activities of the university, through:
                <br>
                • Supporting the university in achieving local and international academic accreditation.
                <br>
                • Aligning technological programs with global standards and labor market requirements.
                <br>
                • Promoting a culture of quality and excellence among students, faculty members, and staff.
                <br>
                • Activating monitoring and evaluation mechanisms to ensure the effectiveness of academic and
                administrative performance.
                <br>
                • Expanding international partnerships and collaborations to enhance institutional excellence and global
                recognition of the university’s outcomes.
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
