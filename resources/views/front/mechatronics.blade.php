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
      background-color: #fff;
      font-family: 'Poppins', sans-serif;
      color: #040faa;
      overflow-x: hidden;
    }

    header {
      background: linear-gradient(135deg, #040faa, #0a18b8);
      color: white;
      text-align: center;
      padding: 100px 20px;
      position: relative;
      overflow: hidden;
    }

    header::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: radial-gradient(circle at center, rgba(208, 131, 1, 0.2), transparent 70%);
      animation: pulse 4s infinite alternate;
    }

    @keyframes pulse {
      0% {
        opacity: 0.4;
      }

      100% {
        opacity: 0.9;
      }
    }

    header h1 {
      font-size: 3.2rem;
      font-weight: 700;
      color: #D08301;
      text-shadow: 0 0 25px rgba(208, 131, 1, 0.7);
    }

    header p {
      font-size: 1.3rem;
      margin-top: 15px;
      color: #f8f9fa;
    }

    section {
      padding: 80px 10%;
      border-bottom: 1px solid #eee;
      position: relative;
    }

    section h2 {
      font-size: 2.2rem;
      font-weight: 700;
      color: #040faa;
      margin-bottom: 25px;
      position: relative;
    }

    section h2::after {
      content: "";
      width: 100px;
      height: 4px;
      background: #D08301;
      position: absolute;
      bottom: -10px;
      left: 0;
      border-radius: 2px;
    }

    section p {
      font-size: 1.1rem;
      line-height: 1.9;
      color: #333;
    }

    .highlight-box {
      background: #f6f8ff;
      border-left: 6px solid #D08301;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      transition: transform 0.5s ease, box-shadow 0.5s ease;
      position: relative;
    }

    .highlight-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(208, 131, 1, 0.2);
    }

    .apply-btn {
      display: inline-block;
      margin-top: 25px;
      padding: 12px 35px;
      background: #040faa;
      color: white;
      border-radius: 50px;
      font-weight: 600;
      text-decoration: none;
      letter-spacing: 0.5px;
      transition: all 0.3s ease;
      box-shadow: 0 0 10px rgba(4, 15, 170, 0.3);
    }

    .apply-btn:hover {
      background: #D08301;
      color: white;
      box-shadow: 0 0 20px rgba(208, 131, 1, 0.5);
      transform: translateY(-3px);
    }

    .back-btn {
      display: inline-block;
      margin: 60px auto 40px;
      padding: 12px 35px;
      background: #D08301;
      color: white;
      border-radius: 50px;
      font-weight: 600;
      text-decoration: none;
      letter-spacing: 0.5px;
      transition: all 0.3s ease;
    }

    .back-btn:hover {
      background: #040faa;
      color: #fff;
      box-shadow: 0 0 15px rgba(4, 15, 170, 0.5);
    }

    footer {
      background: #040faa;
      color: #D08301;
      text-align: center;
      padding: 20px;
      font-weight: 600;
      letter-spacing: 0.5px;
    }

</style>
@endpush






  <!-- Header Start -->
  <div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <h1 class="display-3 text-white animated slideInDown">Master’s in Mechatronics Engineering</h1>
          <nav aria-label="breadcrumb">
            <!--<ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a class="text-white" href="{{ url('index') }}">Home</a></li>
            </ol>-->
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->


  <section data-aos="fade-right">
    <h2>Admission Requirements</h2>
    <div class="highlight-box">
      <p>
        Candidates must hold a Bachelor’s degree in Electrical, Mechanical, or Energy Engineering — or a closely related
        field — with a minimum overall grade of “Good” (GPA 3.0/4.0).
        Applicants are expected to demonstrate strong analytical skills and motivation for research in sustainable
        energy technologies.
        Relevant professional or research experience in the energy sector is a plus.
      </p>
      <a href="{{ url('Postgraduate_apply') }}" class="apply-btn">Apply Now</a>
    </div>
  </section>

  <section data-aos="zoom-in">
    <h2>Tuition Fees & Financial Aid</h2>
    <div class="highlight-box">
      <p>
        The tuition fee is approximately <strong>12,000 EGP per semester</strong> for local students.
        International students are welcome, with tuition adjusted accordingly.
        A limited number of <strong>scholarships and assistantships</strong> are available for high-achieving
        applicants, especially those contributing to ongoing research projects.
      </p>
    </div>
  </section>

  <section data-aos="fade-up">
    <h2>Research & Industry Partnerships</h2>
    <div class="highlight-box">
      <p>
        The Energy Technology program collaborates with leading national and international partners in renewable energy,
        smart grids, and power management industries.
        Students gain practical exposure through <strong>internships, industrial visits, and joint research
          initiatives</strong>.
        These collaborations open direct pathways for graduates to join energy companies, research centers, and
        governmental projects supporting Egypt’s 2030 Vision for sustainability.
      </p>
    </div>
  </section>

  <div class="text-center" data-aos="fade-up">
    <a href="{{ url('Postgraduate_Studies') }}" class="back-btn">← Back to All Programs</a>
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


  <!-- Chatbase Embed -->
  <script>
    (function () {
      if (!window.chatbase || window.chatbase("getState") !== "initialized") {
        window.chatbase = (...arguments) => {
          if (!window.chatbase.q) { window.chatbase.q = [] }
          window.chatbase.q.push(arguments)
        };
        window.chatbase = new Proxy(window.chatbase, {
          get(target, prop) {
            if (prop === "q") { return target.q }
            return (...args) => target(prop, ...args)
          }
        })
      }
      const onLoad = function () {
        const script = document.createElement("script");
        script.src = "https://www.chatbase.co/embed.min.js";
        script.id = "vCJaS-Ai1Hgccr-hIzTuu";
        script.domain = "www.chatbase.co";
        document.body.appendChild(script)
      };
      if (document.readyState === "complete") { onLoad() }
      else { window.addEventListener("load", onLoad) }
    })();




@endsection
