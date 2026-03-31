@extends('layouts.front')
@section('content')

  @push('styles')
<style>

    :root {
      --brand-blue: #1a096e;
      --accent-color: #D08301;
      --accent-hover: #b36a00;
    }

    body {
      font-family: 'Heebo', sans-serif;
      background-color: #f8f9fc;
      color: #333;
      scroll-behavior: smooth;
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
      color: var(--brand-blue);
      font-weight: 700;
      position: relative;
    }

    /* Animations */
    @keyframes slideUp {
      0% {
        opacity: 0;
        transform: translateY(30px);
      }

      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animated {
      animation: slideUp 1s ease forwards;
    }

    /* Navbar */
    .navbar {
      transition: background 0.3s, padding 0.3s;
    }

    .navbar.sticky-top.scrolled {
      background: #fff;
      padding: 10px 0;
      box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    }

    /* Header Banner */
    .header-banner {
      text-align: center;
      padding: 80px 20px;
      background: linear-gradient(135deg, var(--brand-blue) 0%, #3d2bb7 100%);
      color: white;
      overflow: hidden;
    }

    .header-banner h1 {
      font-size: 3rem;
      margin-bottom: 15px;
      animation: slideUp 1s ease forwards;
    }

    .header-banner p {
      font-size: 1.2rem;
      max-width: 800px;
      margin: 0 auto;
      animation: slideUp 1.5s ease forwards;
    }

    /* Buttons */
    .btn-accent {
      background-color: var(--accent-color);
      color: #fff;
      border: none;
      transition: 0.3s;
      position: relative;
      overflow: hidden;
    }

    .btn-accent::after {
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      top: 0;
      left: -100%;
      background: rgba(255, 255, 255, 0.2);
      transition: 0.4s;
    }

    .btn-accent:hover::after {
      left: 0;
    }

    .btn-accent:hover {
      background-color: var(--accent-hover);
    }

    /* Content Section */
    .content-section {
      max-width: 1100px;
      margin: 0 auto;
      padding: 60px 20px;
      animation: slideUp 1s ease forwards;
    }

    /* Fee Table */
    .fee-table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 40px;
      background: white;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
      border-radius: 12px;
      overflow: hidden;
      transition: transform 0.3s;
    }

    .fee-table:hover {
      transform: translateY(-5px);
    }

    .fee-table th,
    .fee-table td {
      border: 1px solid #eee;
      padding: 15px;
      text-align: left;
    }

    .fee-table th {
      background: var(--accent-color);
      font-weight: 600;
      color: var(--brand-blue);
      transition: background 0.3s;
    }

    .fee-table th:hover {
      background: var(--accent-hover);
      color: #fff;
    }

    /* Info Boxes */
    .info-box {
      background: #fff9f0;
      padding: 25px;
      border-left: 6px solid var(--accent-color);
      margin-top: 30px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .info-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    .info-box h3 {
      margin-bottom: 15px;
      position: relative;
    }

    .info-box h3::after {
      content: '';
      display: block;
      width: 50px;
      height: 3px;
      background: var(--accent-color);
      margin-top: 5px;
      border-radius: 2px;
    }

    .info-box ul {
      padding-left: 20px;
      line-height: 1.8;
    }

    /* Subtitle */
    .subtitle {
      text-align: center;
      font-size: 1.1rem;
      max-width: 900px;
      margin: 20px auto 60px auto;
      animation: slideUp 1.2s ease forwards;
    }

    /* Responsive */
    @media(max-width: 768px) {
      .header-banner h1 {
        font-size: 2.2rem;
      }

      .subtitle {
        font-size: 1rem;
      }
    }

</style>
@endpush





  <!-- Header Start -->
  <div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <h1 class="display-3 text-white animated slideInDown">Tuition Fees & Scholarships</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center">
              <li class="breadcrumb-item"><a class="text-white" href="{{ url('index') }}">Home</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- Header End -->


  <div class="container-xxl py-5">
    <div class="container">
      <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-orange px-3">Tuition Fees & Scholarships</h6>
        <h1 class="mB-5">New Applicant Tuition Fees Categories </h1>
      </div>
    </div>
    <p class="subtitle">
      "Transparent and continuously updated information about tuition fees, financial aid programs, and the wide range
      of scholarship opportunities designed to support talented and ambitious students at New Cairo University of
      Technology, ensuring equal access to quality education for everyone."
    </p>

  </div>



  <!-- Main Content -->
  <div class="content-section">
    <h2>Tuition Fees for Academic Year 2025–2026</h2>
    <p>As announced in August 2025, there will be <strong>no increase</strong> in tuition fees for the upcoming academic
      year.</p>
    <p>The annual tuition fees for the Faculty of Industrial and Energy Technology are as follows:</p>

    <table class="fee-table">
      <thead>
        <tr>
          <th>Year / Category</th>
          <th>Annual Tuition (EGP)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Year 1 & Year 2</td>
          <td><strong>15,000 EGP</strong></td>
        </tr>
        <tr>
          <td>Year 3 & Year 4</td>
          <td><strong>20,000 EGP</strong></td>
        </tr>
      </tbody>
    </table>

    <div class="info-box">
      <h3>Scholarship Programs</h3>
      <ul>
        <li><strong>Merit Scholarships:</strong> For students with outstanding academic performance.</li>
        <li><strong>Scholarships for Students with Disabilities:</strong> Dedicated support for students with special
          needs.</li>
        <li><strong>Criteria:</strong> Some scholarships require maintaining a high GPA and may cover specific academic
          terms.</li>
      </ul>
    </div>

    <div class="info-box">
      <h3>Important Notes</h3>
      <ul>
        <li>Students are encouraged to follow the <strong>official university website</strong> and social media pages
          for the latest announcements.</li>
        <li>For detailed information, students may directly contact the <strong>Scholarship Office</strong> or the
          <strong>Admissions & Registration Office</strong>.</li>
        <li>Tuition payments are made in Egyptian Pounds through the university’s official bank branches.</li>
        <li>Scholarship discounts are applied by the Admissions & Registration Office after eligibility verification.
        </li>
      </ul>
    </div>

    <div style="margin-top:40px; text-align:center;">
      <a href="{{ url('Faculties Requirements') }}" class="btn btn-accent btn-lg">Check Required Documents &raquo;</a>
    </div>
  </div>


  @push('scripts')

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



</script>
  @endpush

  <!-- Chatbase Embed -->


@endsection
