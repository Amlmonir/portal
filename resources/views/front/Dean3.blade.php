@extends('layouts.front')
@section('content')

    @push('styles')
<style>

        :root {
            --blue: #1a096e;
            --gold: #D08301;
        }

        /* Body */
        body {
            font-family: 'Heebo', sans-serif;
            background-color: #f8f9fc;
            color: #333;
            scroll-behavior: smooth;
        }

        /* Navbar */
        .navbar {
            background-color: #fff;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
        }

        .navbar-nav .nav-link.active {
            color: var(--gold);
            font-weight: 700;
        }

        /* Header */
        .page-header {

            color: #fff;
            text-align: center;
            padding: 120px 20px 80px;
        }

        .page-header h1 {
          /*  font-family: 'Playfair Display', serif;*/
            font-size: 4rem;
            font-weight: 900;
            color: var(--gold);
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        }

        .page-header p {
            font-size: 1.3rem;
            color: #fff;
        }

        /* President Section */
        .president-section {
            padding: 60px 20px;
            display: flex;
            flex-direction: column;
            gap: 40px;
            align-items: center;
        }

        /* President Card */
        .president-card {
            background: #fff;
            border-left: 8px solid var(--gold);
            border-radius: 20px;
            padding: 30px 40px;
            max-width: 1000px;
            width: 100%;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            transition: all 0.4s ease;
            position: relative;
        }

        .president-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
        }

        /* Image */
        .president-card img {
            /*width: 200px;
            height: auto;*/
            float: left;
            margin-right: 30px;
            border-radius: 15px;
            border: 4px solid var(--gold);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        /* Headings & text */
        .president-card h3,
        .president-card h4 {
            font-family: 'Playfair Display', serif;
            color: var(--blue);
            font-weight: 900;
            margin-bottom: 12px;
        }

        .president-card p {
            font-size: 1.05rem;
            color: #333;
            line-height: 1.8;
        }

        /* Gold highlight for important text */
        .president-card strong {
            color: var(--gold);
        }

        /* Apply button */
        .apply-btn {
            display: inline-block;
            background-color: var(--gold);
            color: #fff;
            font-size: 1.3rem;
            font-weight: 700;
            padding: 15px 50px;
            border-radius: 10px;
            text-decoration: none;
            transition: 0.4s ease;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .apply-btn:hover {
            background-color: var(--blue);
            color: #FFD700;
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.25);
        }

        /* Responsive */
        @media(max-width: 992px) {
            .president-card img {
                float: none;
                display: block;
                margin: 0 auto 20px auto;
            }

            .page-header h1 {
                font-size: 3rem;
            }
        }

</style>
@endpush

    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Students Affairs Vice Dean</h1>
                    <nav aria-label="breadcrumb">
                         <!-- <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ url('index') }}">Home</a></li>
                        </ol>  -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- President Section -->
    <section class="president-section">

        <!-- Main President Card -->
        <div class="president-card">
            <img src="{{ asset('img/ViseDean.png') }}" alt="President">
            <br>
            <h3>Prof. Dr. Tamer Abouelnaga</h3>
            <h6> <i> Students Affairs Vice Dean of College of Industry and Energy Technology </i></h6>
            <br>
            <p>
                The Students Affairs Vice Dean of the College of Industry and Energy Technology is
                committed to supporting students academically and personally. The office works to enhance student engagement,
                ensure academic guidance, and promote a positive learning environment.
                Continuous efforts are made to empower students and prepare them for professional success.
            </p>
        </div>


         <!-- Academic & Administrative Positions -->
        <div class="president-card">
            <h4>Academic & Administrative Positions</h4>
            <p><strong>•	Students Affairs Vice Dean,</strong> College of Industry and Energy Technology, New Cairo Technological University (NCTU) (2022–2026)
            <p><strong>•	Vice Dean for Community Service and Environmental Development, </strong>Higher Institute of Engineering and Technology, Kafr El‑Sheikh (2020–2022)
            <p><strong>•	Students Affairs Vice Dean </strong>of Higher Institute of Engineering and Technology – Kafr Elsheikh City – Ministerial decision No. 1445- 23-4-2019
            <p><strong>•	Professor:                 </strong>Electronics Research Institute- Ministry of Higher Education and Scientific Research (2-1-2024: Till now)
            <p><strong>•	Associate Professor:       </strong>Electronics Research Institute- Ministry of Higher Education and Scientific Research (14-3-2018: 1-1-2024)
            <p><strong>•	Researcher:                </strong>Electronics Research Institute- Ministry of Higher Education and Scientific Research (14-8-2012: 13-3-2018)
            <p><strong>•	Assistant Researcher:      </strong>Electronics Research Institute- Ministry of Higher Education and Scientific Research (10-9-2007: 13-8-2012)
            <p><strong>•	Researcher Assistant:      </strong>Electronics Research Institute- Ministry of Higher Education and Scientific Research (24-3-2001: 9-9-2007)
            <p><strong>•	Associate Professor:       </strong>Higher institute of engineering and technology - Ministry of Higher Education and Scientific Research (2018- 2022)
        </div>

         <!-- Education -->
        <div class="president-card">
            <h4>Education</h4>
            <p><strong>Ph.D. in Communications and Electronics Engineering.</strong> Ain Shams University, Egypt, 2012
                        Dissertation: Design and Implementation of Radio Frequency Identification (RFID) Antennas</p>
            <p><strong>M.Sc. in Communications and Electronics Engineering.</strong> Ain Shams University, Egypt, 2007
                      Thesis: Field Theory Analysis of Microwave Dielectric Resonator Antennas </p>
            <p><strong>B.Sc. in Electrical Engineering (Communications & Electronics).</strong>
                        Faculty of Electronic Engineering, Menoufia University, Egypt, 1999 (Very Good with Honors)</p>
        </div>

        <!-- Administrative -->
        <div class="president-card">
            <h4>Teaching Experience </h4>
            <p><strong>2003–2014 | American University in Cairo (AUC).</strong> <br>Computer Architecture (Course 339); Graduation Project – Cube Satellite (RF Transceiver & Antenna Design)
            <p><strong>2015–2022 | Higher Institute of Engineering and Technology, Kafr El-Sheikh.</strong> <br>Electromagnetic Fields; Electronics; RF Power Amplifier; Antennas and Wave Propagation
            <p><strong>2021–2022 | Suez University, Faculty of Industrial Education.</strong> <br>Integrated Circuits Design; Electronic Circuits II
            <p><strong>2015–2016 | Akhbar El-Yom Academy</strong><br>Electronic Devices; Digital Circuits (I)
            <p><strong>2012–2014 | Al-Azhar University</strong><br>Microwave Engineering; Electromagnetics
            <p><strong>2013–2015 | Integrated Thebes Institutes</strong><br>Acoustics; Antennas; Microwave Engineering; Electromagnetic Theory
            <p><strong>2019–2020 | Kafr Elsheikh University, Faculty of Engineering</strong><br>Electronic Engineering; Electromagnetic Fields
            <p><strong>2022–2026 | New Cairo Technological University, Faculty of Industry and Energy Technology</strong><br>Programming using MATLAB; Embedded Systems; Analog and Digital Electronics
        </div>

         <div class="president-card">
            <h4>Thesis Supervisions</h4>
            <p><strong>M.Sc. | Faculty of Engineering, Ain Shams University</strong> <br> Novel Antenna Array System for Recent Radar Applications </p>
            <p><strong>M.Sc. | Faculty of Engineering, Alexandria University</strong> <br> Breast Cancer Early Detection </p>
            <p><strong>M.Sc. | Faculty of Engineering, Alexandria University</strong> <br> A Proposed Antennas Design and Implementation for Noninvasive Localized Breast Tumor Treatment using Microwave Hyperthermia </p>
            <p><strong>Ph.D. | Egypt-Japan University of Science and Technology (E-JUST)</strong> <br> Breast Cancer Hyperthermia Treatment </p>
            <p><strong>Ph.D. | Faculty of Engineering, Aswan University</strong> <br> 5G Mobile Antennas </p>
            <p><strong>Ph.D. | Faculty of Engineering, Aswan University</strong> <br> Implanted Antennas </p>
            <p><strong>Ph.D. | Faculty of Electronics Engineering, Menoufia University</strong> <br>Design of MIMO Antenna Array for 5G Systems </p>
            <p><strong>Ph.D. | Suez University</strong> <br> Enhancing CMOS Power Amplifier Efficiency and Linearity Techniques for 5G Network Applications </p>
            <p><strong>Ph.D. | Faculty of Engineering, Ain Shams University </strong> <br>Multi-static Ground-Based Arc Synthetic Aperture Radar (GB-A-SAR) </p>
            <p><strong>Ph.D. | Faculty of Engineering, Alexandria University</strong> <br>Breast Tumor Diagnosis Using Microwave Imaging </p>
        </div>


            <div class="president-card">
             <h4>Research Interests</h4>
                •	Microwave and RF Engineering
                <br>•	Antenna Design (UWB, MIMO, RFID, Biomedical Antennas)
                <br>•	Electromagnetic Modeling and Full‑Wave Analysis
                <br>•	Ground Penetrating Radar (GPR)
                <br>•	5G and Sub‑6 GHz Wireless Systems
                <br>•	Biomedical Microwave Applications
            </div>

        </div>

    </section>


@endsection
