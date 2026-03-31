






@extends('layouts.front')
@section('content')    <meta charset="utf-8">
    <title>New Cairo University of Technology</title>
    <link rel="icon" href="img/logo.png" type="image/png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">



    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
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














    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Student Services</h1>
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

@push('styles')
<style>

  *:focus {
    outline: none !important;
    box-shadow: none !important;
  }

  /* الزر */
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

  /* القسم الرئيسي */
  .hr-section {
    text-align: center;
    background-image: url("img/stdservices.png");
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    padding: 80px 20px;
    border-radius: 20px;
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    transition: all 0.4s ease;
    max-width: 800px;
    margin: 50px auto;
    color: white;
    position: relative;
    overflow: hidden;
  }

  /* طبقة شفافة لتحسين وضوح النص */
  .hr-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.4);
    border-radius: 20px;
    z-index: 0;
  }

  /* محتوى السيكشن فوق الطبقة */
  .hr-section * {
    position: relative;
    z-index: 1;
  }

  /* التأثير عند مرور الماوس */
  .hr-section:hover {
    transform: scale(1.03);
    box-shadow: 0 10px 25px rgba(208, 131, 1, 0.3);
  }

  /* العنوان الرئيسي */
  .hr-section h1 {
    color: #ffffff;
    font-size: 36px;
    font-weight: bold;
    margin-top: 15px;
  }

  /* العنوان الفرعي */
  .section-title {
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: bold;
    font-size: 18px;
  }

  /* الفقرة (بدون أي تأثير أو لون متغير) */
  .hr-text {
    color: #ffffff !important;
    max-width: 650px;
    margin: 25px auto;
    font-size: 18px;
    line-height: 1.8;
    text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
  }

</style>
@endpush

<!-- القسم الموحد -->
<div class="hr-section">

  <h1>Welcome to Student Services</h1>
  <p class="hr-text">
    <!--"This page is your official gateway to all Human Resources services at New Cairo University.
    Whether you're applying for a job, requesting leave, accessing documents, or submitting a request —
    everything you need is available below in one place.">-->
  </p>
  <!--<a href="{{ url('staff_Services_login') }}" class="btn-event">Enter</a>-->
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






        <script>
            function openForm() {
                document.getElementById("formPopup").style.display = "block";
                document.getElementById("overlay").style.display = "block";
            }

            function closeForm() {
                document.getElementById("formPopup").style.display = "none";
                document.getElementById("overlay").style.display = "none";
            }


        <!-- Template Javascript -->












@endsection
