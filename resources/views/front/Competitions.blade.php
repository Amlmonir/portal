@extends('layouts.front')
@section('content')
    @push('styles')
<style>

        .competition-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 40px;
            border-left: 5px solid #D08301;
        }

        .competition-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
        }

        .competition-content {
            display: flex;
            align-items: stretch;
            padding: 0;
            min-height: 400px;
        }

        .competition-img {
            width: 40%;
            height: auto;
            object-fit: cover;
            align-self: stretch;
        }

        .competition-info {
            width: 60%;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .competition-info h3 {
            color: #1a096e;
            font-size: 1.8rem;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .competition-date {
            background: #D08301;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .competition-location {
            color: #5d6d7e;
            margin-bottom: 15px;
            font-size: 1rem;
        }

        .competition-location i {
            color: #D08301;
            margin-right: 8px;
        }

        .competition-description {
            color: #5d6d7e;
            line-height: 1.6;
            margin-bottom: 20px;
            font-size: 1rem;
            flex-grow: 1;
        }

        .btn-competition {
            background: #D08301;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 25px;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s ease;
            font-weight: 600;
            align-self: flex-start;
        }

        .btn-competition:hover {
            background: #b36f00;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(210, 131, 1, 0.4);
        }

        /* للكروت اللي الصورة على الشمال */
        .competition-reverse .competition-content {
            flex-direction: row-reverse;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .competition-content {
                flex-direction: column;
                min-height: auto;
            }

            .competition-img,
            .competition-info {
                width: 100%;
            }

            .competition-img {
                height: 200px;
            }

            .competition-info {
                padding: 20px;
            }
        }

</style>
@endpush

    <!-- Spinner Start -->
    <div id="spinner">
        <div class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    <!-- Spinner End -->




    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Competitions</h1>
                    <nav aria-label="breadcrumb">
                        <!--<ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ url('Events') }}">Events</a></li>
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
            <source src="{{ asset('img/comptions.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

    </div>
</div>
<!-- Hero Video Card End -->


    <!-- المسابقات Content -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Student Activities</h6>
                <h1 class="mb-5" style="color: #1a096e;">University Competitions</h1>
            </div>

            <!-- Competition 1 -->
            <div class="competition-card wow fadeInUp" data-wow-delay="0.1s">
                <div class="competition-content">
                    <img src="{{ asset('img/Events/CO.jpg') }}" class="competition-img" alt="Programming Competition">
                    <div class="competition-info">
                        <span class="competition-date">September 28, 2025</span>
                        <h3>NCTU Students Honored by AVIC INNO for Achieving Second Place in Mobile Applications </h3>
                        <p class="competition-description">
                        <p class="competition-description">
                            Under the patronage of Prof. Dr. Tarek Abdel Malak, NCTU students were honored by AVIC INNO
                            for securing <strong>second place in mobile applications</strong> at the 10th Africa
                            Technological Challenge.<br><br>

                            The competition gathered <strong>142 teams and 568 participants</strong> from across Africa
                            under the slogan "Dream and Innovate Your Future." Participants underwent five weeks of
                            intensive training by professional Chinese trainers.<br><br>

                            <strong>Winning Team:</strong><br>
                            • Abdullah Ahmed Hassan Saad<br>
                            • Abdel Rahman Yahia Ibrahim<br>
                            • Demiana Samy Ounis<br><br>

                            <strong>Abdullah Ahmed Hassan Saad</strong> individually secured second place, earning a
                            study opportunity in China. Since 2014, ATC has empowered over 1,000 African youth
                            technicians.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Competition 2 -->
            <div class="competition-card competition-reverse wow fadeInUp" data-wow-delay="0.2s">
                <div class="competition-content">
                    <img src="{{ asset('img/Events/co2.jpg') }}" class="competition-img" alt="Robotics Competition">
                    <div class="competition-info">
                        <span class="competition-date">December 11, 2023</span>
                        <h3>NCTU Hosts Ain Shams Racing Team</h3>
                        <p class="competition-description">
                            Under the patronage of <strong>Prof. Dr. Tarek Abdel Malak</strong>, New Cairo Technological
                            University welcomed Ain Shams University Racing Team for technical collaboration.<br><br>

                            The visit featured:<br>
                            • <strong>Workshop tours</strong> of NCTU's automotive facilities<br>
                            • <strong>Technical sessions</strong> between both racing teams<br>
                            • <strong>Project presentations</strong> on electric vehicles<br>
                            • <strong>Certificate ceremony</strong> honoring the visiting team<br><br>

                            The event strengthened inter-university cooperation in automotive innovation and student
                            development.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Competition 3 -->
            <div class="competition-card wow fadeInUp" data-wow-delay="0.3s">
                <div class="competition-content">
                    <img src="{{ asset('img/Events/co4.jpg') }}" class="competition-img" alt="Business Competition">
                    <div class="competition-info">
                        <span class="competition-date">2024/2025</span>
                        <h3>A Year of Excellence & Innovation<br>NCTU Student Activities 2024/2025 Highlights</h3>

                        <p class="competition-description">
                            Under the patronage of <strong>Prof. Dr. Tarek Abdel Malak</strong>, New Cairo Technological
                            University students achieved outstanding success in the 2024/2025 academic year.<br><br>

                            The achievements included:<br>
                            • <strong>Award-winning innovations</strong> in Hult Prize and Gen Z competitions<br>
                            • <strong>International recognition</strong> through global conference participation<br>
                            • <strong>Sports excellence</strong> in design and athletic competitions<br>
                            • <strong>Specialized competition victories</strong> in PetroCamp and ministry contests<br>
                            • <strong>Student-led initiatives</strong> including Google Developer Group<br>
                            • <strong>National representation</strong> at Technology Universities Week<br><br>

                            These accomplishments demonstrate NCTU's commitment to developing well-rounded technological
                            leaders and innovators.

                        </p>
                    </div>
                </div>
            </div>

            <!-- Competition 4 -->
            <div class="competition-card competition-reverse wow fadeInUp" data-wow-delay="0.4s">
                <div class="competition-content">
                    <img src="{{ asset('img/Events/co3.jpg') }}" class="competition-img" alt="Science Competition">
                    <div class="competition-info">
                        <span class="competition-date">Augest 8, 2023</span>
                        <h3>NCTU Wins First Place in Anti-Drug Awareness Campaign</h3>
                        <p class="competition-description">
                            Under the patronage of <strong>Prof. Dr. Mahmoud El-Sheikh</strong>, University President,
                            and <strong>Prof. Dr. Tarek Abdel Malak Mikhail</strong>, Dean of the Faculty of Industrial
                            Technology and Energy, New Cairo Technological University participated in a national
                            anti-drug campaign.<br><br>

                            The program included:<br>
                            • <strong>Leadership training</strong> for student volunteers<br>
                            • <strong>Technology projects</strong> promoting drug prevention<br>
                            • <strong>Awareness initiatives</strong> from the Addiction Prevention Fund<br>
                            • <strong>Sports competitions</strong> encouraging healthy lifestyles<br><br>

                            NCTU won <strong>first place in football</strong> during the camp, demonstrating the
                            university's active role in student development and social responsibility. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @push('scripts')
  <script>
        document.addEventListener("DOMContentLoaded", function () {
            function revealOnScroll() {
                let courses = document.querySelectorAll(".course");

                courses.forEach((course) => {
                    let coursePosition = course.getBoundingClientRect().top;
                    let screenPosition = window.innerHeight * 0.85; // التحكم في توقيت الظهور

                    if (coursePosition < screenPosition) {
                        course.classList.add("show");
                    }
                });
            }

            window.addEventListener("scroll", revealOnScroll);
            revealOnScroll(); // علشان العناصر اللي باينة أصلاً تفضل باينة
        });
    </script>

@endpush



@endsection
