@extends('layouts.front')
@section('content')  <
  @push('styles')
<style>

    :root {
      --blue: #1a096e;
      --orange: #D08301;
    }

    body {
      font-family: 'Heebo', sans-serif;
      background-color: #f8f9fc;
      color: #333;
      scroll-behavior: smooth;
    }

    /* Header Section */
    .header-banner {
      background: linear-gradient(135deg, var(--blue), #3a2ba0);
      color: #fff;
      text-align: center;
      padding: 100px 20px 80px;
    }

    .header-banner h1 {
      font-size: 3rem;
      font-weight: 800;
      margin-bottom: 15px;
      color: var(--orange);
    }

    .header-banner p {
      font-size: 1.2rem;
      max-width: 800px;
      margin: 0 auto;
    }

    /* Boxes Section */
    .admission-section {
      padding: 80px 20px;
      text-align: center;
    }

    .admission-box {
      background: #fff;
      border-left: 6px solid var(--orange);
      border-radius: 12px;
      padding: 35px;
      box-shadow: 0 6px 25px rgba(0, 0, 0, 0.07);
      transition: 0.3s;
      margin-bottom: 40px;
      max-width: 900px;
      margin-left: auto;
      margin-right: auto;
      text-align: left;
    }

    .admission-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12);
    }

    .admission-box i {
      font-size: 2.5rem;
      color: var(--orange);
      margin-bottom: 15px;
      display: block;
    }

    .admission-box h3 {
      color: var(--blue);
      margin-bottom: 15px;
      font-weight: 700;
    }

    .admission-box p {
      font-size: 1rem;
      color: #555;
      line-height: 1.7;
    }

    /* Button */
    .apply-btn {
      display: inline-block;
      background-color: var(--orange);
      color: #fff;
      font-size: 1.2rem;
      font-weight: 700;
      padding: 12px 45px;
      border-radius: 8px;
      text-decoration: none;
      margin-top: 20px;
      transition: 0.3s ease;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .apply-btn:hover {
      background-color: var(--blue);
      color: #FFD700;
      /* Gold on hover */
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    @media(max-width: 768px) {
      .header-banner h1 {
        font-size: 2.2rem;
      }

      .admission-box {
        padding: 25px;
      }
    }

</style>
@endpush





  <!-- Header Start -->
  <div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-10 text-center">
          <h1 class="display-3 text-white animated slideInDown">Admission Requirements</h1>
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

  <!-- Admission Boxes -->
  <section class="admission-section container">

    <div class="admission-box">
      <i class="fa-solid fa-gear"></i>
      <h3>General Secondary Students (Science & Math)</h3>
      <p>
        • Applicants must hold a recognized General Secondary Education Certificate or its equivalent.<br>
        • The total grade must meet the minimum score determined annually by the university or by the national
        coordination office.<br>
        • Applicants must submit all required documents, including the original certificate, birth certificate, personal
        photos, national ID,
        and a medical report if requested.
      </p>
    </div>

    <div class="admission-box">
      <i class="fa-solid fa-gear"></i>
      <h3>Technical Diploma Students (3 or 5-Year Systems)</h3>
      <p>
        • Applicants must hold an officially recognized Technical Diploma (3 or 5 years) or an equivalent
        qualification.<br>
        • Admission depends on achieving the minimum percentage or score set by the university or national coordination
        each year.<br>
        • These criteria may vary annually based on applicant numbers and fields of study.
        <br><br>
        * The details above are based on published educational and media sources and may not represent official
        university documents.
      </p>
    </div>

    <a href="{{ url('howapply') }}" class="apply-btn">Apply Now</a>

  </section>




@endsection
