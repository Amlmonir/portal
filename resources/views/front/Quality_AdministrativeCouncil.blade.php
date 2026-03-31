@extends('layouts.front')
@section('content')    <meta charset="utf-8">
    <title>Board Meetings</title>
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
                    <h1 class="display-3 text-white animated slideInDown">Board Meetings</h1>
                    <nav aria-label="breadcrumb">
                       <!-- <ol class="breadcrumb justify-content-center">
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
        <!-- Board Meetings -->
        <div class="custom-card">
            <h4 class="custom-title">Board Meetings</h4>
            <p class="custom-text">
                • The Board shall convene regularly at least once every three months, and extraordinary meetings may be
                held upon the invitation of the Chairperson or at the request of one-third of the members.
                <br>
                • Meetings of the Board shall be considered valid when attended by most members (50% + 1).
                <br>
                • Decisions shall be adopted by a majority vote of the attending members; in the event of a tie, the
                Chairperson’s side shall prevail.
                <br>
                • Minutes of each meeting shall be recorded, signed by the Chairperson, the Unit Director, and the Board
                Secretary, and shall be kept in a dedicated register maintained at the Unit’s premises.
                <br>
                • Membership in the Board shall be terminated if a member fails to attend three consecutive meetings or
                five separate meetings without an acceptable excuse.
            </p>
        </div>
        <!-- Formation of Specialized Committees -->
        <div class="custom-card">
            <h4 class="custom-title">Formation of Specialized Committees</h4>
            <p class="custom-text">
                The specialized committees established under the Quality Assurance Unit consist of qualified directors
                and several subcommittees that assist in carrying out the Unit’s mission. The formation of these
                committees shall be approved by a decision of the University President, based on the recommendation of
                the Unit Director and the approval of the Board of Directors.
            </p>
        </div>
        <div class="custom-card">
            <h4 class="custom-title">1.Curriculum Development Unit</h4>
            <p class="custom-text">
                • Director: A faculty member with experience in academic program development.
                <br>
                • Affiliated Subcommittees: A Curriculum Development Committee for each academic program within the
                university’s colleges.
                <br>
                Responsibilities:
                <br>
                • Review and update curricula and academic programs in accordance with quality and accreditation
                standards.
                <br>
                • Align programs with the needs of local and international labor markets.
                <br>
                • Prepare periodic reports on curriculum development and submit them to the Board of Directors.
            </p>
        </div>
        <div class="custom-card">
            <h4 class="custom-title">2. Monitoring and Technical Support Unit</h4>
            <p class="custom-text">
                • Director: A faculty member with expertise in quality assurance and institutional assessment.
                <br>
                • Affiliated Subcommittees:
                <br>
                o Committee for Standards Implementation Support.
                <br>
                o Committee for Workshops and Training Organization.
                <br>
                o Committee for Technical Support to Colleges.
                <br>
                o Committee for Field Monitoring and Evaluation.
                <br>
                Responsibilities:
                <br>
                • Monitor the implementation of quality and continuous improvement plans within colleges and programs.
                <br>
                • Provide technical and administrative support to quality units and programs.
                <br>
                • Organize workshops and training programs on quality and accreditation.
                <br>
                • Conduct follow-up visits and prepare periodic evaluation reports.

            </p>
        </div>


        <div class="custom-card">
            <h4 class="custom-title">3. Database, Information Systems, and Media Unit</h4>
            <p class="custom-text">
                • Director: A faculty member or specialist with expertise in information systems and databases.
                <br>
                • Affiliated Subcommittees:
                <br>
                o Media and Documentation Committee.
                <br>
                o Information Systems and Reporting Committee.
                <br>
                o Data Collection and Organization Committee.
                <br>
                o Quality Awareness and Communication Committee.
                <br>
                Responsibilities:
                <br>
                • Establish and manage quality and accreditation databases.
                <br>
                • Prepare and analyze periodic performance reports.
                <br>
                • Manage media campaigns and awareness activities related to university quality initiatives.
                <br>
                • Document all quality assurance and accreditation activities.
            </p>
        </div>


        <div class="custom-card">
            <h4 class="custom-title">4. Performance Evaluation and Continuous Improvement Unit</h4>
            <p class="custom-text">
                • Director: A faculty member with experience in academic and administrative performance evaluation.
                <br>
                • Affiliated Subcommittees:
                <br>
                o Academic Performance Evaluation Committee.
                <br>
                o Administrative Performance Evaluation Committee.
                <br>
                o Continuous Improvement and Institutional Development Committee.
                <br>
                Responsibilities:
                <br>
                • Evaluate the academic performance of study programs and faculty members.
                <br>
                • Monitor and assess administrative and technical performance within the university.
                <br>
                • Propose continuous improvement and institutional development plans to enhance overall performance.


            </p>
        </div>

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
