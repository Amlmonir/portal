           <!--------------------------- Navbar Start ------------------------------->
                 @push('styles')
<style>

                    /* Hover effect for dropdown items */
                    .dropdown-item:hover {
                        background-color: #D08301 !important;
                        color: #fff !important;
                        border-radius: 6px;
                        transition: 0.3s;
                    }

                    /* Dropdown headers spacing */
                    .dropdown-menu h5 {
                        margin-bottom: 12px;
                        font-size: 1.1rem;
                    }

                    /* Optional: add spacing between links */
                    .dropdown-links a {
                        display: block;
                        margin-bottom: 5px;
                        font-weight: 500;
                    }

</style>
@endpush

                 <!-- Template Javascript for the reader -->
     <script src="{{ asset('js/layout.js') }}"></script>
     <script src="{{ asset('js/reader.js') }}"></script>



    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
         <a href="{{ url('index') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
             <img src="uni/img.png" alt="Logo" style="height:50px;">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">

                <!-- Dropdown 1: Home -->
                 <a href="{{ url('index') }}" class="nav-item nav-link ">Home</a>

                <!-- Dropdown 2: About -->
                <div class="nav-item dropdown ">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"> About </a>
                    <div class="dropdown-menu fade-down m-0" aria-labelledby="aboutDropdown" style="width: 350px; left: 0;">

                                    <a class="dropdown-item" href="{{ url('about') }}" style="color: #1a096e;">About NCT</a>
                                    <a class="dropdown-item" href="{{ url('president') }}" style="color: #1a096e;">University President</a>
                                    <a class="dropdown-item" href="{{ url('Dean1') }}" style="color: #1a096e;"> Dean of Industrial & Energy Technology </a>
                                    <a class="dropdown-item" href="{{ url('Dean2') }}" style="color: #1a096e;"> Dean of Applied Health Sciences Technology</a>
                                    <a class="dropdown-item" href="{{ url('Dean3') }}" style="color: #1a096e;"> Students Affairs Vice Dean </a>
                                    <a class="dropdown-item" href="{{ url('campus') }}" style="color: #1a096e;">Campus Tour</a>
                                    <a class="dropdown-item" href="{{ url('Internalprotocols') }}" style="color: #1a096e;">Internal Protocols</a>
                                    <a class="dropdown-item" href="{{ url('Externalprotocols') }}" style="color: #1a096e;">External Protocols</a>
                                    <a class="dropdown-item" href="{{ url('reasons') }}" style="color: #1a096e;">Top 10 Reasons</a>
                                    <a class="dropdown-item" href="{{ url('Competitions') }}" style="color: #1a096e;">Competitions</a>
                                    <a class="dropdown-item" href="{{ url('graduates') }}" style="color: #1a096e;">Graduate Achievements</a>


                    </div>
                </div>

                <!-- Dropdown 3: Units -->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Units </a>
                    <div class="dropdown-menu fade-down m-0" aria-labelledby="admissionsDropdown" style="width: 300px; left: 0;">
                                 <a  class="dropdown-item" href="{{ url('DigitalTrans') }}"      style="color: #1a096e;"> Digital Transformation</a>
                                 <a  class="dropdown-item" href="{{ url('InternationalCoop') }}" style="color: #1a096e;"> International Cooperation</a>
                                 <a  class="dropdown-item" href="{{ url('Quality') }}" style="color: #1a096e;"> Quality Assurance</a>
                                 <a  class="dropdown-item" href="{{ url('Evaluation') }}"           style="color: #1a096e;">Measurement and Evaluation</a>
                                 <a  class="dropdown-item" href="{{ url('Women') }}"                style="color: #1a096e;">Combating Violence Against Women</a>

                    </div>
                </div>


                      <!-- Dropdown 4: Faculties-->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Faculties </a>
                    <div class="dropdown-menu fade-down m-0" aria-labelledby="FacultiesDropdown" style="width: 400px; left: 0;">
                        <a  class="dropdown-item" href="{{ url('FacultyIT') }}"  style="color: #1a096e;">Faculty of Industrial and Energy Technology</a>
                        <a  class="dropdown-item" href="{{ url('FacultyHealth') }}"  style="color: #1a096e;">Faculty of Applied Health Sciences Technology</a>
                    </div>
                </div>

                   <!-- Dropdown 5: Media Center-->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Media</a>
                    <div class="dropdown-menu fade-down m-0" aria-labelledby="FacultiesDropdown" style="width: 230px; left: 0;">
                        <a  class="dropdown-item" href="{{ url('Events') }}"  style="color: #1a096e;">Events</a>
                        <a  class="dropdown-item" href="{{ url('Gallery') }}"  style="color: #1a096e;">Gallery</a>
                        <a  class="dropdown-item" href="{{ url('News') }}"  style="color: #1a096e;">News</a>
                    </div>
                </div>


                <!-- Dropdown 6: Admissions-->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Admissions </a>
                    <div class="dropdown-menu fade-down m-0" aria-labelledby="admissionsDropdown" style="width: 230px; left: 0;">
                        <a  class="dropdown-item" href="{{ url('Admissions') }}"            style="color: #1a096e;">Admission Requirements</a>
                        <a  class="dropdown-item" href="{{ url('howapply') }}"              style="color: #1a096e;">How to Apply Online</a>
                        <a  class="dropdown-item" href="{{ url('Faculties Requirements') }}"style="color: #1a096e;">Faculties Requirements</a>
                        <a  class="dropdown-item" href="{{ url('Postgraduate_Studies') }}"  style="color: #1a096e;"> Postgraduate Programs</a>
                        <a  class="dropdown-item" href="{{ url('fees') }}"                  style="color: #1a096e;" >Tuition Fees & Scholarships</a>
                    </div>
                </div>

                   <!-- Dropdown 7: Campus-->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Campus </a>
                    <div class="dropdown-menu fade-down m-0" aria-labelledby="admissionsDropdown" style="width: 230px; left: 0;">
                           <a  class="dropdown-item" href="https://enactus.org/"  style="color: #1a096e;">Enactus</a>
                        <a  class="dropdown-item" href="{{ url('entrepreneur') }}"  style="color: #1a096e;">Entrepreneur</a>
                           <a  class="dropdown-item" href="{{ url('activities') }}"  style="color: #1a096e;">Student Activities</a>

                    </div>
                </div>

              <!-- Dropdown 7: staff Services-->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Staff </a>
                    <div class="dropdown-menu fade-down m-0" aria-labelledby="admissionsDropdown" style="width: 270px; left: 0;">
                        <a  class="dropdown-item" href="{{ url('StaffLMS') }}"  style="color: #1a096e;">Staff LMS</a>
                       <!-- <a  class="dropdown-item" href="{{ url('HR') }}"               style="color: #1a096e;">Staff Services</a>-->
                        <a  class="dropdown-item" href="{{ url('Profile') }}"  style="color: #1a096e;">Profile </a>
                      <!--  <a  class="dropdown-item" href="{{ url('Faculty Members') }}"  style="color: #1a096e;">Faculty Members </a>-->
                         <a  class="dropdown-item" href="{{ url('Members') }}"  style="color: #1a096e;">Staff Members </a>
                            <a  class="dropdown-item" href="https://www.ekb.eg/"  style="color: #1a096e;">Egyptian Knowledge Bank- EKB </a>

                    </div>
                </div>

                   <!-- Dropdown 8: students Services-->
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Student Services </a>
                    <div class="dropdown-menu fade-down m-0" aria-labelledby="admissionsDropdown" style="width: 230px; left: 0;">
                        <a  class="dropdown-item" href="{{ url('Student Service') }}"  style="color: #1a096e;">Students LMS</a>
                       <!-- <a  class="dropdown-item" href="{{ url('HR') }}"               style="color: #1a096e;">Staff Services</a>-->
                        <a  class="dropdown-item" href="{{ url('Student Booking') }}"  style="color: #1a096e;">Student Affairs </a>
                      <!--  <a  class="dropdown-item" href="{{ url('Faculty Members') }}"  style="color: #1a096e;">Faculty Members </a>-->
                         <a  class="dropdown-item" href="{{ url('library') }}"  style="color: #1a096e;">Library </a>
                            <a  class="dropdown-item" href="{{ url('Trainings') }}"  style="color: #1a096e;">Training </a>

                    </div>
                </div>

            <!-- Dropdown 9: Contacts -->
                <a href="{{ url('contact') }}" class="nav-item nav-link">Contacts</a>


            </div>

        </div>
  <!-------------------------- Reader start----------------------------->
 <div>
  <button  style="border:none; outline:none; font-size:14px; padding:4px; width:30px; height:30px;" onclick="readPage()" class="reader-btn play"> 🔊 </button>
  <button  style="border:none; outline:none; font-size:14px; padding:4px; width:30px; height:30px;" onclick="stopReading()" class="reader-btn stop"> ⏹  </button>
 <div>
  <!-------------------------- Reader end ----------------------------->

      </nav>



    <!-------------------------- Navbar End ----------------------------->
