@extends('layouts.front')
@section('content')
    @push('styles')
<style>

        /*body {
            font-family: 'Nunito', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
        }*/
    .read-more-btn {
        display: inline-block;
        background-color: #D08301;
        color: #fff;
        padding: 10px 10px;
        border-radius: 6px;
        text-decoration: none;
        font-weight: 600;
        margin-top: 15px;
        transition: all 0.3s ease;
    }

    .read-more-btn:hover {
        background-color: #b66f01;
        color: #fff;
        transform: scale(1.05);
    }
        /* Courses */
        .courses-container {
            display: flex;
            flex-direction: column;
            gap: 50px;
            margin: 50px 0;
        }

        .course {
            display: flex;
            flex-direction: row;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .course:hover {
            transform: scale(1.03);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
        }

        .course.course-reverse {
            flex-direction: row-reverse;
        }

        .course img {
            width: 50%;
            object-fit: cover;
        }

        .course-info {
            width: 50%;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .course-info h2 {
            color: #D08301;
            font-size: clamp(1.5rem, 3vw, 2rem);
            margin-bottom: 10px;
        }

        .course-info h6 {
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .course-info p {
            font-size: clamp(0.9rem, 1.2vw, 1rem);
            line-height: 1.6;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .course {
                flex-direction: column;
            }

            .course.course-reverse {
                flex-direction: column;
            }

            .course img,
            .course-info {
                width: 100%;
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
                    <h1 class="display-3 text-white animated slideInDown">Events</h1>
                    <nav aria-label="breadcrumb">
                        <!--<ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ url('home') }}">Home</a></li>
                        </ol>-->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Events Categories Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Our Activities</h6>
                <h1 class="mb-5">University Events & Activities</h1>
                <p class="mb-5">Explore our diverse range of events, conferences, trainings, and student activities.</p>
            </div>

            @push('styles')
<style>

                .event-category-card {
                    background: #fff;
                    padding: 40px 30px;
                    border-radius: 15px;
                    box-shadow: 0 6px 25px rgba(0, 0, 0, 0.1);
                    text-align: center;
                    transition: all 0.3s ease;
                    border-top: 4px solid #D08301;
                    height: 100%;
                    margin-bottom: 30px;
                }

                .event-category-card:hover {
                    transform: translateY(-10px);
                    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
                }

                .card-icon {
                    color: #D08301;
                    margin-bottom: 20px;
                }

                .event-category-card h3 {
                    color: #1a096e;
                    margin-bottom: 15px;
                    font-size: 1.5rem;
                    font-weight: 700;
                }

                .event-category-card p {
                    color: #5d6d7e;
                    line-height: 1.6;
                    margin-bottom: 20px;
                    font-size: 1rem;
                }

                .btn-event {
                    background: #D08301;
                    color: white;
                    padding: 10px 25px;
                    border: none;
                    border-radius: 25px;
                    text-decoration: none;
                    display: inline-block;
                    transition: all 0.3s ease;
                    font-weight: 600;
                }

                .btn-event:hover {
                    background: #b36f00;
                    color: white;
                    transform: translateY(-2px);
                    box-shadow: 0 5px 15px rgba(210, 131, 1, 0.4);
                }

</style>
@endpush

            <!-- Events Categories Cards -->
            <div class="row g-4">
                <!-- Conferences Card -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="event-category-card">
                        <div class="card-icon">
                            <img src="{{ asset('img/Events/Conferences.jpg') }}" alt="Conferences"
                                style="width: 280px; height: 200px; object-fit: cover; border-radius: 10px;">
                        </div>
                        <h3>Conferences</h3>
                        <p>Academic and professional conferences featuring renowned speakers and cutting-edge research
                            from various fields.</p>
                        <a href="{{ url('Conferences') }}" class="btn-event">View Conferences</a>
                    </div>
                </div>

                <!-- Trainings Card -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="event-category-card">
                        <div class="card-icon">
                            <img src="{{ asset('img/Events/training.jpg') }}" alt="Trainings"
                                style="width: 280px; height: 200px; object-fit: cover; border-radius: 10px;">
                        </div>
                        <h3>Trainings</h3>
                        <p>Professional development workshops and training sessions for students and faculty members.
                        </p>
                        <a href="{{ url('Trainings') }}" class="btn-event">View Trainings</a>
                    </div>
                </div>

                <!-- Exhibitions Card -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="event-category-card">
                        <div class="card-icon">
                            <img src="{{ asset('img/Events/Exh.jpg') }}" alt="Exhibitions"
                                style="width: 280px; height: 200px; object-fit: cover; border-radius: 10px;">
                        </div>
                        <h3>Exhibitions</h3>
                        <p>Art, technology, and innovation exhibitions showcasing student and faculty creative work.</p>
                        <a href="{{ url('Exhibitions') }}" class="btn-event">View Exhibitions</a>
                    </div>
                </div>

                <!-- Graduation Projects Card -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="event-category-card">
                        <div class="card-icon">
                            <img src="{{ asset('img/Events/gradution.jpg') }}" alt="Graduation Projects "
                                style="width: 280px; height: 200px; object-fit: cover; border-radius: 5px;">
                        </div>
                        <h3>Graduation Projects</h3>
                        <p>Final year projects demonstrating innovation, research, and technical expertise.</p>
                        <a href="{{ url('Graduation Projects') }}" class="btn-event">View Projects</a>
                    </div>
                </div>

                <!-- Competitions Card -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="event-category-card">
                        <div class="card-icon">
                            <img src="{{ asset('img/Events/competition .jpg') }}" alt="Competitions"
                                style="width: 280px; height: 210px; object-fit: cover; border-radius: 10px;">
                        </div>
                        <h3>Competitions</h3>
                        <p>Academic, technical, and sports competitions for students to showcase their skills.</p>
                        <a href="{{ url('Competitions') }}" class="btn-event">View Competitions</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Events Categories End -->







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
