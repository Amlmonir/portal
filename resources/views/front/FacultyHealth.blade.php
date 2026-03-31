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




    <!-- Courses -->
    <div class="courses-container">


         <h1 class="text-primary">Faculty of Applied Health Sciences Technology </h1>

        <!-- Prosthetics -->
        <div class="course">
            <img src="{{ asset('img/Departments/Prosthetics.jpg') }}" alt="New Course">
            <div class="course-info" id="specific-section5">
                <h2 class="text-primary">Prosthetics & Orthotics Technology</h2>
                <p><strong>Department – New Cairo Technological University (NCTU)</strong></p>
                <h6>Overview</h6>
                <p>The Prosthetics & Orthotics Technology Department at NCTU focuses on the design, development, and
                    application of artificial limbs and supportive devices. The program equips students with the skills
                    needed to improve mobility and enhance the quality of life for individuals with disabilities.</p>
                <hr>
                <h6>Specializations</h6>
                <p>🦿 Prosthetic Technology, 🦾 Orthotic Technology, ⚙️ Biomechanics & Rehabilitation</p>
                <hr>
                <h6>Career Opportunities</h6>
                <p>🏥 Prosthetist & Orthotist, 🔬 Medical Device Specialist, ⚙️ Rehabilitation Engineer, 🏭 Research &
                    Development in Medical Technology, 🌍 Healthcare & Assistive Technology Consultant</p>
                                        <a href="Prosthetics & Orthotics Technology.html   " class="read-more-btn">Read More</a>

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
