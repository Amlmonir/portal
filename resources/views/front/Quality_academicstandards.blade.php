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
                    <h1 class="display-3 text-white animated slideInDown">Academic Standards</h1>
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

       <!--  Commitment to Quality and Academic Accreditation Standards -->
<div class="custom-card">
  <h4 class="custom-title">Commitment to Quality and Academic Accreditation Standards</h4>
  <p class="custom-text">
    1. Ensure compliance with national and international quality assurance standards in all university activities.
    <br>
    2. Implement a comprehensive internal system for continuous quality improvement and accreditation.
    <br>
    3. Conduct regular self-evaluations to maintain and enhance academic excellence.
    <br>
    4. Develop quality manuals and documentation aligned with accreditation requirements.
    <br>
    5. Provide technical support to academic departments to prepare for accreditation reviews.
    <br>
    6. Foster transparency and accountability across all institutional processes.
  </p>
</div>

<!--  Development of Academic Programs and Learning Outcomes -->
<div class="custom-card">
  <h4 class="custom-title">Development of Academic Programs and Learning Outcomes</h4>
  <p class="custom-text">
    1. Design and update academic programs according to national academic reference standards (NARS).
    <br>
    2. Ensure alignment between program objectives, learning outcomes, and teaching strategies.
    <br>
    3. Review curricula regularly to meet evolving market and community needs.
    <br>
    4. Promote interdisciplinary learning and integration of modern technologies.
    <br>
    5. Use measurable indicators to assess the achievement of learning outcomes.
  </p>
</div>

<!--  Teaching, Learning, and Student Assessment -->
<div class="custom-card">
  <h4 class="custom-title">Teaching, Learning, and Student Assessment</h4>
  <p class="custom-text">
    1. Implement innovative, student-centered teaching methods.
    <br>
    2. Use varied assessment tools that accurately measure learning outcomes.
    <br>
    3. Ensure fairness and transparency in grading and feedback.
    <br>
    4. Provide continuous training for faculty in teaching and assessment skills.
    <br>
    5. Integrate technology into learning and digital evaluation systems.
    <br>
    6. Encourage active learning, teamwork, and creative problem-solving.
  </p>
</div>

<!--  Scientific Research and Innovation -->
<div class="custom-card">
  <h4 class="custom-title">Scientific Research and Innovation</h4>
  <p class="custom-text">
    1. Promote a culture of scientific research and innovation among faculty and students.
    <br>
    2. Support applied research addressing national and regional development challenges.
    <br>
    3. Provide incentives and funding for high-quality publications and patents.
    <br>
    4. Encourage interdisciplinary research and collaboration with industry partners.
    <br>
    5. Ensure ethical standards and integrity in all research activities.
  </p>
</div>

<!--  Community Service and Environmental Development -->
<div class="custom-card">
  <h4 class="custom-title">Community Service and Environmental Development</h4>
  <p class="custom-text">
    1. Strengthen partnerships with local and national community organizations.
    <br>
    2. Develop projects that serve society and promote sustainable development.
    <br>
    3. Encourage faculty and students to engage in volunteer and outreach programs.
    <br>
    4. Monitor the social and environmental impact of university activities.
    <br>
    5. Raise awareness of environmental issues and green campus initiatives.
  </p>
</div>

<!--  Leadership, Governance, and Institutional Efficiency -->
<div class="custom-card">
  <h4 class="custom-title">Leadership, Governance, and Institutional Efficiency</h4>
  <p class="custom-text">
    1. Apply principles of good governance, transparency, and accountability.
    <br>
    2. Establish clear organizational structures that support decision-making and efficiency.
    <br>
    3. Promote participatory leadership involving faculty, staff, and students.
    <br>
    4. Evaluate administrative performance regularly and implement improvement plans.
    <br>
    5. Ensure strategic alignment between university goals and national higher education policies.
  </p>
</div>

<!--  Faculty Members and Human Resources -->
<div class="custom-card">
  <h4 class="custom-title">Faculty Members and Human Resources</h4>
  <p class="custom-text">
    1. Recruit highly qualified faculty and provide continuous professional development.
    <br>
    2. Establish fair promotion and evaluation systems based on performance and contribution.
    <br>
    3. Encourage research, training, and participation in academic conferences.
    <br>
    4. Support a positive and motivating work environment for academic and administrative staff.
  </p>
</div>

<!--  Students and Graduate Support -->
<div class="custom-card">
  <h4 class="custom-title">Students and Graduate Support</h4>
  <p class="custom-text">
    1. Provide comprehensive academic, psychological, and career guidance for students.
    <br>
    2. Develop systems to monitor student satisfaction and respond to their needs.
    <br>
    3. Strengthen alumni relations and establish mechanisms for graduate follow-up.
    <br>
    4. Offer training and internship programs to enhance employability skills.
  </p>
</div>

<!-- Resources and Infrastructure -->
<div class="custom-card">
  <h4 class="custom-title">Resources and Infrastructure</h4>
  <p class="custom-text">
    1. Provide adequate financial, human, and material resources to support academic operations.
    <br>
    2. Maintain safe, accessible, and technologically advanced facilities.
    <br>
    3. Develop and update digital infrastructure to support e-learning and research.
    <br>
    4. Ensure sustainability and optimal use of institutional resources.
  </p>
</div>

<!-- Continuous Development and Strategic Planning -->
<div class="custom-card">
  <h4 class="custom-title">Continuous Development and Strategic Planning</h4>
  <p class="custom-text">
    1. Implement evidence-based strategic plans aligned with the university’s mission and vision.
    <br>
    2. Conduct periodic reviews to assess goal achievement and update priorities.
    <br>
    3. Foster a culture of continuous improvement through data-driven decision-making.
    <br>
    4. Monitor key performance indicators (KPIs) to measure progress and success.
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
