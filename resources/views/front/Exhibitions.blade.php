@extends('layouts.front')
@section('content')    <
    @push('styles')
<style>

        .exhibition-card {
            background: #fff;
            border-radius: 15px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 40px;
            border-left: 5px solid #D08301;
        }

        .exhibition-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
        }

        .exhibition-content {
            display: flex;
            align-items: stretch;
            padding: 0;
            min-height: 400px;
        }

        .exhibition-img {
            width: 40%;
            height: auto;
            object-fit: cover;
            align-self: stretch;
        }

        .exhibition-info {
            width: 60%;
            padding: 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .exhibition-info h3 {
            color: #1a096e;
            font-size: 1.8rem;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .exhibition-date {
            background: #D08301;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 15px;
            font-weight: 600;
        }

        .exhibition-location {
            color: #5d6d7e;
            margin-bottom: 15px;
            font-size: 1rem;
        }

        .exhibition-location i {
            color: #D08301;
            margin-right: 8px;
        }

        .exhibition-description {
            color: #5d6d7e;
            line-height: 1.6;
            margin-bottom: 20px;
            font-size: 1rem;
            flex-grow: 1;
        }

        .btn-exhibition {
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

        .btn-exhibition:hover {
            background: #b36f00;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(210, 131, 1, 0.4);
        }

        /* للكروت اللي الصورة على الشمال */
        .exhibition-reverse .exhibition-content {
            flex-direction: row-reverse;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .exhibition-content {
                flex-direction: column;
                min-height: auto;
            }

            .exhibition-img,
            .exhibition-info {
                width: 100%;
            }

            .exhibition-img {
                height: 200px;
            }

            .exhibition-info {
                padding: 20px;
            }
        }

</style>
@endpush


    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->







    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Exhibitions</h1>
                    <nav aria-label="breadcrumb">
                       <!-- <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ url('Events') }}">Events</a></li>
                        </ol>-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- المعارض Content -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Art & Innovation</h6>
                <h1 class="mb-5" style="color: #1a096e;">University Exhibitions</h1>
            </div>

            <!-- Exhibition 1 -->
            <div class="exhibition-card wow fadeInUp" data-wow-delay="0.1s">
                <div class="exhibition-content">
                    <img src="{{ asset('img/Events/ex1.jpg') }}" class="exhibition-img" alt="Technology Exhibition">
                    <div class="exhibition-info">
                        <span class="exhibition-date">june 18, 2025</span>
                        <h3>NCTU Hosts Exhibition for ICT Student Projects</h3>
                        <p class="exhibition-description">
                            The Faculty of Industrial Technology and Energy at New Cairo Technological University
                            organized an exhibition showcasing projects by second and fourth-year Information and
                            Communication Technology students. The event was held under the patronage of University
                            President Prof. Dr. Tarek Abdel Malak and Faculty Dean Prof. Dr. Walid Elkhatam, with
                            attendance from academic staff and program coordinators.

                            Students presented innovative projects across multiple technology domains, including
                            artificial intelligence applications, secure communication systems, embedded systems
                            programming, and network solutions. The exhibition also featured practical implementations
                            such as smart farming technology, gym management platforms, and various measurement systems.

                            The event included assessment activities for third-year student projects, highlighting the
                            program's focus on developing applied technical skills. Attendees commended the project
                            quality and their relevance to both local and international information and communication
                            technology job market requirements. </p>
                    </div>
                </div>
            </div>

            <!-- Exhibition 2 -->
            <div class="exhibition-card exhibition-reverse wow fadeInUp" data-wow-delay="0.2s">
                <div class="exhibition-content">
                    <img src="{{ asset('img/Events/ex2.jpg') }}" class="exhibition-img" alt="Art Exhibition">
                    <div class="exhibition-info">
                        <span class="exhibition-date">July 10, 2025</span>
                        <h3>NCTU Hosts First Career Fair with Major Companies</h3>
                        <p class="exhibition-description">
                            Under the patronage of Prof. Dr. Ayman Ashour, Minister of Higher Education, and Prof. Dr.
                            Tarek Abdel Malak, University President, New Cairo Technological University launched its
                            inaugural career fair on July 10, 2025.

                            The event featured leading companies including WE, Banque Misr, Ezz Elarab, and Rosenberg
                            Egypt, alongside an exhibition of innovative student projects from various academic
                            programs. Distinguished guests including Prof. Dr. Ahmed El-Gioushy and Prof. Dr. Karim
                            Hammam toured the exhibitions, emphasizing the importance of connecting education with
                            market needs.

                            A financial literacy seminar was conducted by Banque Misr, addressing financial inclusion
                            concepts. The fair provided direct networking opportunities between students and employers,
                            supporting the university's mission to bridge technological education with career
                            development. </p>
                    </div>
                </div>
            </div>

            <!-- Exhibition 3 -->
            <div class="exhibition-card wow fadeInUp" data-wow-delay="0.3s">
                <div class="exhibition-content">
                    <img src="{{ asset('img/Events/ex3.jpg') }}" class="exhibition-img" alt="Engineering Exhibition">
                    <div class="exhibition-info">
                        <span class="exhibition-date">february 25, 2025</span>
                        <h3>NCTU Successfully Hosts TechConnect Event with Strong Student Participation</h3>
                        <p class="exhibition-description">
                            Under the patronage of Prof. Dr. Tarek Abdel Malak, President of New Cairo Technological
                            University, and Prof. Dr. Walid Elkhatam, Dean of the Faculty of Industrial Technology and
                            Energy, the Google Developers Group on Campus NCTU successfully organized the TechConnect
                            event on February 25, 2025.

                            The event featured a diverse range of activities, including an exhibition of ICT student
                            projects that demonstrated their programming and technological innovations. Expert-led
                            technical sessions covered Frontend Development, Programming, Cyber Security, Flutter, and
                            UI/UX, conducted by specialists from leading companies.

                            The program also included competitive elements such as a programming problem-solving contest
                            and a Line Follower Robot competition, showcasing participants' skills in robotics and
                            innovative thinking.

                            University leadership expressed their pride in the students' creativity and the event's
                            success, reaffirming their commitment to supporting such initiatives that bridge academic
                            knowledge with practical application in the technology sector.

                        </p>
                    </div>
                </div>
            </div>

            <!-- Exhibition 4 -->
            <div class="exhibition-card exhibition-reverse wow fadeInUp" data-wow-delay="0.4s">
                <div class="exhibition-content">
                    <img src="{{ asset('img/Events/ex4.jpg') }}" class="exhibition-img" alt="Research Exhibition">
                    <div class="exhibition-info">
                        <span class="exhibition-date">January 15-17, 2025</span>
                        <h3>NCTU Hosts First Modified Car Event with Multi-University Participation</h3>
                        <p class="exhibition-description">
                            Under the patronage of Prof. Dr. Tarek Abdel Malak, President of New Cairo Technological
                            University, and the supervision of Prof. Dr. Walid Elkhatam, Dean of the Faculty of
                            Industrial Technology and Energy, the university launched its first modified car event. The
                            celebration was organized in collaboration with student unions from Samannoud, 6 October,
                            and Beni Suef universities.

                            The event featured Egy Ghosts, a leading company in car exhibition organization, as the main
                            sponsor. It showcased an impressive collection of 45 modified cars and 20 motorcycles, all
                            featuring world-class customization, providing inspiration for students in Autotronics,
                            Mechatronics, and other disciplines.

                            With participation from 250 students, including 100 from the Autotronics department, the
                            event also hosted renowned speakers in vehicle modification. Experts from sponsoring
                            companies including Dr. Evo, RPM Ethanol, Ethaboost, and Race Teck shared valuable insights
                            and practical knowledge about car and motorcycle customization and development.

                            The event successfully mirrored international university automotive events while addressing
                            student interests in vehicle modification and engineering innovation. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>








    <!-- Template Javascript -->





@push('scripts')

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function revealOnScroll() {
                let courses = document.querySelectorAll(".course");

                courses.forEach((course) => {
                    let coursePosition = course.getBoundingClientRect().top;
                    let screenPosition = window.innerHeight * 0.85; // التحكم في توقيت الظهور

                    if (coursePosition <script screenPosition) {
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
