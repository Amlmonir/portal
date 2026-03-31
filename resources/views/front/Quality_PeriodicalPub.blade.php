@extends('layouts.front')
@section('content')    <meta charset="utf-8">
    <title>New Cairo University of Technology</title>
    <link rel="icon" href="img/logo.png" type="image/png">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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






 <div class="container my-5">
        <h4 class="faq-item" >Board Meetings</h4>
        <ul>
            <li>The Board shall convene regularly at least once every three months, and extraordinary meetings may be held upon the invitation of the Chairperson or at the request of one-third of the members.</li>
            <li>Meetings of the Board shall be considered valid when attended by most members (50% + 1).</li>
            <li>Decisions shall be adopted by a majority vote of the attending members; in the event of a tie, the Chairperson’s side shall prevail.</li>
            <li>Minutes of each meeting shall be recorded, signed by the Chairperson, the Unit Director, and the Board Secretary, and shall be kept in a dedicated register maintained at the Unit’s premises.</li>
            <li>Membership in the Board shall be terminated if a member fails to attend three consecutive meetings or five separate meetings without an acceptable excuse.</li>
        </ul>

        <h4 class="faq-item" >Formation of Specialized Committees</h4>
        <p>The specialized committees established under the Quality Assurance Unit consist of qualified directors and several subcommittees that assist in carrying out the Unit’s mission. The formation of these committees shall be approved by a decision of the University President, based on the recommendation of the Unit Director and the approval of the Board of Directors.</p>

        <h5  style="text-align: left;">1. Curriculum Development Unit</h5>
        <ul>
            <li><strong>Director:</strong> A faculty member with experience in academic program development.</li>
            <li><strong>Affiliated Subcommittees:</strong> A Curriculum Development Committee for each academic program within the university’s colleges.</li>
        </ul>
        <p><strong>Responsibilities:</strong></p>
        <ul>
            <li>Review and update curricula and academic programs in accordance with quality and accreditation standards.</li>
            <li>Align programs with the needs of local and international labor markets.</li>
            <li>Prepare periodic reports on curriculum development and submit them to the Board.</li>
        </ul>

        <h5 style="text-align: left;">2. Monitoring and Technical Support Unit</h5>
        <ul>
            <li><strong>Director:</strong> A faculty member with experience in quality and institutional evaluation.</li>
            <li><strong>Affiliated Subcommittees:</strong>
                <ul>
                    <li>Committee for Supporting Standard Implementation</li>
                    <li>Committee for Organizing Workshops</li>
                    <li>Technical Support Committee for Colleges</li>
                    <li>Field Monitoring and Evaluation Committee</li>
                </ul>
            </li>
        </ul>
        <p><strong>Responsibilities:</strong></p>
        <ul>
            <li>Monitor the implementation of quality plans and continuous improvement in colleges and programs.</li>
            <li>Provide technical and administrative support to units and programs.</li>
            <li>Organize workshops and training programs.</li>
            <li>Conduct follow-up visits and prepare periodic reports.</li>
        </ul>

       <h5 style="text-align: left;">3. Database, Information Systems, and Media Unit</h5>
        <ul>
            <li><strong>Director:</strong> A faculty member or expert in information systems and databases.</li>
            <li><strong>Affiliated Subcommittees:</strong>
                <ul>
                    <li>Media and Documentation Committee</li>
                    <li>Information Systems and Reporting Committee</li>
                    <li>Data Collection and Organization Committee</li>
                    <li>Quality Awareness and Media Committee</li>
                </ul>
            </li>
        </ul>
        <p><strong>Responsibilities:</strong></p>
        <ul>
            <li>Establish and manage quality and accreditation databases.</li>
            <li>Prepare and analyze periodic reports.</li>
            <li>Manage media campaigns and awareness activities of the university.</li>
            <li>Document quality and accreditation activities.</li>
        </ul>

        <h5 style="text-align: left;"> 4. Performance Evaluation and Continuous Improvement Unit</h5>
        <ul>
            <li><strong>Director:</strong> A faculty member with experience in academic and administrative evaluation.</li>
            <li><strong>Affiliated Subcommittees:</strong>
                <ul>
                    <li>Academic Performance Evaluation Committee</li>
                    <li>Administrative Performance Evaluation Committee</li>
                    <li>Continuous Improvement and Performance Enhancement Committee</li>
                </ul>
            </li>
        </ul>
        <p><strong>Responsibilities:</strong></p>
        <ul>
            <li>Evaluate the academic performance of programs and faculty members.</li>
            <li>Monitor and assess administrative and technical performance in the university.</li>
            <li>Propose continuous improvement plans and institutional performance development.</li>
        </ul>
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
