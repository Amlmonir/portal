@extends('layouts.front')
@section('content')



  <!-- Header Start -->
  <div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <h1 class="display-3 text-white animated slideInDown">Graduate Certificates</h1>
          <nav aria-label="breadcrumb">
            <!-- <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a class="text-white" href="{{ url('home') }}">Home</a></li>
            </ol>-->
          </nav>
        </div>
      </div>

    </div>
  </div>
  </div>
  <!-- Header End -->

  <div class="full-image-container">
    <img src="{{ asset('img/kk.png') }}" alt="صورة كاملة العرض">
  </div>

  @push('styles')
<style>

    .full-image-container {
      position: relative;
      width: 100%;
      height: 100vh;
      overflow: hidden;
    }

    .full-image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      filter: brightness(75%);
    }

    .image-overlay {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: white;
    }

    .image-overlay h2 {
      font-size: 48px;
      margin-bottom: 15px;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
    }

    .image-overlay p {
      font-size: 24px;
      text-shadow: 1px 1px 6px rgba(0, 0, 0, 0.7);
    }

    /* متجاوب مع الموبايل */
    @media (max-width: 768px) {
      .image-overlay h2 {
        font-size: 32px;
      }

      .image-overlay p {
        font-size: 18px;
      }
    }

</style>
@endpush




  <section class="question-section">
    <div class="title-box">
      Outstanding Students at New Cairo Technological University
    </div>
  </section>


  <section class="multi-section">
    <!-- 🔹 عنصر 1 -->
    <div class="item-container left-img">
      <div class="image-box"><img src="{{ asset('img/motafq.png') }}" alt="Image 1"></div>
      <div class="text-box">
        <h2>Training of New Cairo Technological University Students at Petrojet</h2>
        <p> As part of its commitment to enhancing practical experience and aligning academic study with
          market needs, students from the Information and Communication Technology and New and Renewable Energy
          Technology programs at New Cairo Technological University completed field training at Petrojet from July 27 to
          August 7, 2025.
          The training was held under the patronage of Prof. Dr. Tarek Abdel Malak, President of the University,
          and Prof. Dr. Walid El-Khatam, Dean of the Faculty of Industry
          and Energy Technology, and coordinated by Mr. Abdelrahman Omar, University Training Coordinator.
          The program included hands-on sessions on network fundamentals, the company’s technological infrastructure,
          and practical training on the SAP system used globally for resource and project management</p>
      </div>
    </div>

    <!-- 🔹 عنصر 2 -->
    <div class="item-container right-img">
      <div class="text-box">
        <h2>NCTU Wins Three Awards at the 3rd “Entlaqah” Competition</h2>
        <p>
          Under the patronage of Prof. Dr. Tarek Abdel Malak, President of New Cairo Technological University, and Prof.
          Dr. Walid El-Khatam, Dean of the Faculty of Industry and Energy Technology, NCTU students achieved remarkable
          success by winning three awards in the third edition of the “Entlaqah” competition, organized by the Higher
          Technological Institute in Beni Suef at the Egyptian Space Agency.
          The university participated with seven innovative projects from the Mechatronics, Renewable Energy, and
          Autotronics programs, supervised by Dr. Shereef El Hosary and Dr. Bothaina Mahmoud Fouad, Head of the
          Entrepreneurship Club.</p>
      </div>
      <div class="image-box"><img src="{{ asset('img/jaza.png') }}" alt="Image 2"></div>
    </div>

    <!-- 🔹 عنصر 3 -->
    <div class="item-container left-img">
      <div class="image-box"><img src="{{ asset('img/tamer.png') }}" alt="Image 3"></div>
      <div class="text-box">
        <h2>NCTU Honors Students for Participation in ROV Submarine Competition</h2>
        <p>
          Under the patronage of Prof. Dr. Tarek Abdel Malak, President of New Cairo Technological University, and the
          university leadership, NCTU held a ceremony to honor its students for their outstanding participation in the
          ROV Underwater Robotics Project.
          The competition, organized by the Arab Academy for Science, Technology & Maritime Transport under the title
          MATE ROV Egypt, aimed to promote innovation in underwater exploration technologies.
          This recognition reflects the university’s commitment to supporting creativity, research, and student
          excellence..</p>
      </div>
    </div>


    <div class="item-container right-img">
      <div class="text-box">
        <h2>Green Hydrogen Research Collaboration</h2>
        <p>A meeting was held under Professor Dr. Tarek Abdelmalak’s patronage to launch student and postgraduate
          research projects,
          focusing on the production and industrial application of green hydrogen.</p>
      </div>
      <div class="image-box"><img src="{{ asset('img/ww.pgn.png') }}" alt="Image 2"></div>
    </div>




    <div class="item-container left-img">
      <div class="image-box"><img src="{{ asset('img/mghmada.png') }}" alt="Image 3"></div>
      <div class="text-box">
        <h2>NCTU Students Excel in Training Program with the Egyptian Drilling Company</h2>
        <p>
          Under the patronage of Prof. Dr. Tarek Abdel Malak, President of New Cairo Technological University, and in
          cooperation with the Ministry of Petroleum, Mineral Resources, and the Ministry of Labor, students and
          graduates of the Oil Production, Processing, and Transport Technology Program participated in a specialized
          training program organized by the Egyptian Drilling Company (EDC).
          The program aimed to enhance technical and practical skills, preparing participants for real-world challenges
          in the energy sector.</p>
      </div>
    </div>



    <div class="item-container right-img">
      <div class="text-box">
        <h2>NCTU Students Honored by AVIC INNO for Excellence in Africa Technology Challenge</h2>
        <p>
          Students of New Cairo Technological University (NCTU) were honored by AVIC Innovation Holding Limited (AVIC
          INNO) after achieving second place in the Mobile Applications category at the Africa Technology Challenge
          (ATC) — Season 10.
          The competition brought together 142 university teams and 568 participants from across Africa, showcasing
          innovation and excellence among young tech talents..</p>
      </div>
      <div class="image-box"><img src="{{ asset('img/abdrahman.png') }}" alt="Image 2"></div>
    </div>





    <!-- 🔹 عنصر 3 -->
    <div class="item-container left-img">
      <div class="image-box"><img src="{{ asset('img/btal.png') }}" alt="Image 3"></div>
      <div class="text-box">
        <h2>NCTU Shines in the National Wushu Championship</h2>
        <p>
          New Cairo Technological University proudly participated in the National Wushu Championship, organized by the
          Ministry of Higher Education, where top athletes from Egyptian universities competed with great spirit and
          skill.

          Ziad Alaa Mohamed won third place and the bronze medal,
          Radwa Sayed Abdelkarim achieved second place and the silver medal.

          NCTU congratulates its champions for their outstanding achievements and reaffirms its commitment to supporting
          talented students in all fields.</p>
      </div>
    </div>





    <!-- 🔹 عنصر 2 -->
    <div class="item-container right-img">
      <div class="text-box">
        <h2>NCT Students Shine in Kung Fu Competitions</h2>
        <p>

          Students of New Cairo Technological University participated in the national Kung Fu championships among
          Egyptian universities, showcasing outstanding performance and remarkable sportsmanship.
          This participation reflects the university’s commitment to supporting its students physically and mentally,
          fostering
          a spirit of discipline, perseverance, and national pride — in line with Egypt’s vision of empowering youth and
          encouraging
          excellence in all fields.</p>
      </div>
      <div class="image-box"><img src="{{ asset('img/congofoo.png') }}" alt="Image 2"></div>
    </div>





    <!-- 🔹 عنصر 3 -->
    <div class="item-container left-img">
      <div class="image-box"><img src="{{ asset('img/tawla.png') }}" alt="Image 3"></div>
      <div class="text-box">
        <h2>Active Student Participation in Sports and Cultural Events</h2>
        <p>
          NCTU students actively took part in a variety of sports competitions, including five-a-side football, padel
          tennis, beach volleyball, and marathon running, alongside cultural and entertainment activities that showcased
          their creativity and national pride.

          This participation reflects the university’s commitment to empowering students, enhancing their skills, and
          providing a well-rounded educational experience in line with Egypt’s vision to build an innovative and aware
          generation.

          NCTU extends its appreciation to its talented students for their dedication and wishes them continued success
          and excellence.</p>
      </div>
    </div>


  </section>

  @push('styles')
<style>

    .multi-section {
      padding: 60px 10%;
      font-family: 'Segoe UI', sans-serif;
    }

    /* 🔹 الحاويات */
    .item-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 40px;
      flex-wrap: wrap;
      margin-bottom: 60px;
    }

    /* 🔹 الصورة */
    .image-box {
      flex: 1;
      max-width: 45%;
      overflow: hidden;
      border-radius: 15px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      transition: transform 0.4s ease;
    }

    .image-box img {
      width: 100%;
      height: auto;
      border-radius: 15px;
      transition: transform 0.5s ease;
    }

    .image-box:hover img {
      transform: scale(1.1);
    }

    /* 🔹 النص */
    .text-box {
      flex: 1;
      max-width: 50%;
      color: #003366;
    }

    .left-img .text-box {
      text-align: right;
    }

    .right-img .text-box {
      text-align: left;
    }

    .text-box h2 {
      font-size: 28px;
      margin-bottom: 15px;
      color: #002244;
    }

    .text-box p {
      font-size: 18px;
      line-height: 1.7;
      text-align: justify;
      text-justify: inter-word;
    }

    /* 🔹 استجابة الموبايل */
    @media (max-width: 768px) {
      .item-container {
        flex-direction: column;
        text-align: center;
      }

      .right-img,
      .left-img {
        flex-direction: column;
      }

      .text-box {
        max-width: 100% !important;
        text-align: center !important;
      }

      .image-box {
        max-width: 100%;
      }
    }

</style>
@endpush




@push('scripts')
<script>
    (function () { if (!window.chatbase || window.chatbase("getState") !== "initialized") { window.chatbase = (...arguments) => { if (!window.chatbase.q) { window.chatbase.q = [] } window.chatbase.q.push(arguments) }; window.chatbase = new Proxy(window.chatbase, { get(target, prop) { if (prop === "q") { return target.q } return (...args) => target(prop, ...args) } }) } const onLoad = function () { const script = document.createElement("script"); script.src = "https://www.chatbase.co/embed.min.js"; script.id = "vCJaS-Ai1Hgccr-hIzTuu"; script.domain = "www.chatbase.co"; document.body.appendChild(script) }; if (document.readyState === "complete") { onLoad() } else { window.addEventListener("load", onLoad) } })();



    const dropdown = document.querySelector('.nav-item.dropdown');
    const menu = dropdown.querySelector('.dropdown-menu');

    dropdown.addEventListener('mouseenter', () => {
      dropdown.classList.add('show');
    });

    // لما تضغطي في أي مكان برا تختفي
    document.addEventListener('click', (e) => {
      if (!dropdown.contains(e.target)) {
        dropdown.classList.remove('show');
      }
    });
    </script>

@endpush




@endsection
