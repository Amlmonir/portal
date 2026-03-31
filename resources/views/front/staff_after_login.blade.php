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
                    <h1 class="display-3 text-white animated slideInDown">Faculty Members Portal</h1>
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
    background-image: url("img/staff1.png");
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

  <h1>Welcome to Faculty Members Portal</h1>
  <p class="hr-text">
    "This page is your official gateway to all Human Resources services at New Cairo University.
    Whether you're applying for a job, requesting leave, accessing documents, or submitting a request —
    everything you need is available below in one place."
  </p>
  <a href="{{ url('index') }}" class="btn-event">Back To Home</a>
</div>






    <!-- Add this in your <head> -->
        @push('styles')
<style>

    .service-item {
    height: 100%;
    display: flex;
    flex-direction: column;
}

.service-item .p-4 {
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.row.g-4 {
    display: flex;
    flex-wrap: wrap;
    justify-content: center; /* لمركزة الكروت أفقيًا */
    align-items: stretch;   /* لجعل الكروت متساوية الطول */
}

.service-item {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}


</style>
@endpush


<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4 justify-content-center align-items-center">

            <!-- Leave Request -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <h3 class="mb-3">Leave Request</h3>
                        <p>This form is intended for current university employees to request official leave. Please
                            specify the type and duration of your leave, and attach any supporting documents if
                            applicable.</p>
                        <button onclick="openForm()"
                            style="padding: 10px 20px; background-color: #D08301; color: white; border: none; border-radius: 5px; cursor: pointer;">Apply
                            Now</button>
                    </div>
                </div>
            </div>

            <!-- Complaint / Admin Request -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <h3 class="mb-3">Complaint / Admin Request</h3>
                        <p>If you have any complaints, administrative inquiries, or need support from the HR
                            department, please complete the following form. </p>
                        <button onclick="openForm()"
                            style="padding: 10px 20px; background-color: #D08301; color: white; border: none; border-radius: 5px; cursor: pointer;">Apply
                            Now</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


    <!-- Overlay and Popup Form -->
    <div id="overlay"
        style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background-color:rgba(0,0,0,0.5); z-index:999;"
        onclick="closeForm()"></div>

    <div id="formPopup"
        style="display:none; position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); background:#fff; padding:20px; width:80%; height:80%; z-index:1000; border-radius:10px;">
        <iframe
            src="https://docs.google.com/forms/d/e/1FAIpQLSd7hdvMvr3PzLl3Mls2VDKwhmYaRp6FJa6nfT5f4YeyXAS3yA/viewform?usp=header"
            width="100%" height="90%" frameborder="0"></iframe>
        <button onclick="closeForm()"
            style="margin-top:10px; padding: 8px 16px; background-color:#D08301; color:white; border:none; border-radius:5px;">Close</button>
    </div>

    <!-- JavaScript -->
    <script>
        function openForm() {
            document.getElementById("overlay").style.display = "block";
            document.getElementById("formPopup").style.display = "block";
        }

        function closeForm() {
            document.getElementById("overlay").style.display = "none";
            document.getElementById("formPopup").style.display = "none";
        }

    <!-- Service End -->

    @push('styles')
<style>

        .announcement-box {
            background-color: #ffffff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            max-width: 850px;
            margin: 50px auto;
            opacity: 0;
            transform: translateY(50px);
            /* يبدأ من تحت */
            transition: all 0.8s ease;
            /* سرعة الحركة */
        }

        .announcement-box.show {
            opacity: 1;
            transform: translateY(0);
        }

        .announcement-box h2 {
            color: #000000;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .announcement-box h5 {
            color: #666;
            font-size: 16px;
            font-weight: normal;
        }

        .announcement-box ul {
            text-align: left;
            padding-left: 20px;
            margin-top: 20px;
        }

        .announcement-box ul li {
            margin-bottom: 12px;
            padding: 8px 12px;
            background-color: #f5f5f5;
            border-left: 5px solid #D08301;
            border-radius: 5px;
        }

</style>
@endpush


        <!-- قسم الإعلانات الداخلية -->
        <section id="announcement" class="announcement-box">
            <h2>Internal Announcements</h2>
            <h5>Stay updated with the latest internal news and announcements for staff, including administrative
                updates, holiday schedules, and upcoming events.</h5>
            <ul>
                <li>Eid Al-Fitr holiday starts from ...</li>
                <li>Leadership Skills Development Workshop – Next Wednesday</li>
                <li>Attendance and departure policy update starting next month</li>
            </ul>
        </section>

        <!-- JavaScript to trigger animation on load -->
        <script>
            window.addEventListener('load', function () {
                const section = document.getElementById('announcement');
                section.classList.add('show');
            });




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
