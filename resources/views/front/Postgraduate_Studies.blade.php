@extends('layouts.front')
@section('content')  <meta charset="utf-8">
  <title>New Cairo University of Technology</title>
  <link rel="icon" href="img/logo.png" type="image/png">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Tuition Fees and Scholarships" name="keywords">
  <meta content="Official tuition fees and scholarship information for New Cairo University of Technology"
    name="description">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700&display=swap"
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

    body {
      background: #ffffff;
      color: #040faa;
      font-family: 'Poppins', sans-serif;
      overflow-x: hidden;
    }

    .page-title {
      text-align: center;
      font-size: 3rem;
      font-weight: 700;
      color: #D08301;
      margin-top: 60px;
      letter-spacing: 1px;
    }

    .program-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
      padding: 60px 10%;
    }

    .program-card {
      position: relative;
      overflow: hidden;
      border-radius: 20px;
      box-shadow: 0 6px 18px rgba(0, 0, 0, 0.15);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      background: #fff;
    }

    .program-card:hover {
      transform: scale(1.03);
      box-shadow: 0 10px 30px rgba(64, 15, 170, 0.2);
    }

    .program-card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      filter: brightness(75%);
      transition: filter 0.3s ease;
    }

    .program-card:hover img {
      filter: brightness(90%);
    }

    .program-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background: rgba(0, 0, 0, 0.45);
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .program-card:hover .program-overlay {
      opacity: 1;
    }

    .program-title {
      font-size: 1.6rem;
      font-weight: 700;
      color: #D08301;
      text-shadow: 0 0 8px rgba(208, 131, 1, 0.5);
    }

    .explore-btn {
      margin-top: 15px;
      padding: 10px 25px;
      background: #D08301;
      border: none;
      border-radius: 50px;
      color: white;
      font-weight: 600;
      transition: all 0.2s ease;
    }

    .explore-btn:hover {
      background: #040faa;
      color: #fff;
    }

</style>
@endpush






  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-orange px-3">Postgraduate Programs</h6>
        <h1 class="mB-5">Postgraduate Programs </h1>
      </div>
    </div>
    <div class="program-grid">

      <a href="{{ url('energy') }}" class="program-card" data-aos="zoom-in" data-aos-delay="100">
        <img src="{{ asset('img/MET.jpg') }}" alt="Energy Technology">
        <div class="program-overlay">
          <h3 class="program-title"> Renewable Energy </h3>
          <button class="explore-btn">Read More</button>
        </div>
      </a>

      <a href="{{ url('mechatronics') }}" class="program-card" data-aos="zoom-in" data-aos-delay="200">
        <img src="{{ asset('img/MMT.jpg') }}" alt="Mechatronics">
        <div class="program-overlay">
          <h3 class="program-title">Mechatronics</h3>
          <button class="explore-btn">Read More</button>
        </div>
      </a>

      <a href="{{ url('it') }}" class="program-card" data-aos="zoom-in" data-aos-delay="300">
        <img src="{{ asset('img/mit.jpg') }}" alt="Information Technology">
        <div class="program-overlay">
          <h3 class="program-title">Information Technology</h3>
          <button class="explore-btn">Read More</button>
        </div>
      </a>

      <a href="{{ url('Petroleum') }}" class="program-card" data-aos="zoom-in" data-aos-delay="400">
        <img src="{{ asset('img/MPT.jpg') }}" alt="Petroleum Technology">
        <div class="program-overlay">
          <h3 class="program-title"> Petroleum </h3>
          <button class="explore-btn">Read More</button>
        </div>
      </a>

      <a href="{{ url('Prosthetics') }}" class="program-card" data-aos="zoom-in" data-aos-delay="500">
        <img src="{{ asset('img/MRT.jpg') }}" alt="Prosthetics & Orthotics Technology">
        <div class="program-overlay">
          <h3 class="program-title">Prosthetics </h3>
          <button class="explore-btn">Read More</button>
        </div>
      </a>

      <a href="{{ url('automotive') }}" class="program-card" data-aos="zoom-in" data-aos-delay="600">
        <img src="{{ asset('img/MAT.jpg') }}" alt="Auto-truncation Technology">
        <div class="program-overlay">
          <h3 class="program-title">Auto-truncation </h3>
          <button class="explore-btn">Read More</button>
        </div>
      </a>

    </div>
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


  <!-- JavaScript Libraries -->







  <!-- Template Javascript -->

  <!-- Template Javascript -->

  <script>
    (function () { if (!window.chatbase || window.chatbase("getState") !== "initialized") { window.chatbase = (...arguments) => { if (!window.chatbase.q) { window.chatbase.q = [] } window.chatbase.q.push(arguments) }; window.chatbase = new Proxy(window.chatbase, { get(target, prop) { if (prop === "q") { return target.q } return (...args) => target(prop, ...args) } }) } const onLoad = function () { const script = document.createElement("script"); script.src = "https://www.chatbase.co/embed.min.js"; script.id = "vCJaS-Ai1Hgccr-hIzTuu"; script.domain = "www.chatbase.co"; document.body.appendChild(script) }; if (document.readyState === "complete") { onLoad() } else { window.addEventListener("load", onLoad) } })();



@endsection
