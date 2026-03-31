 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>New Cairo University of Technology</title>
    <link rel="icon" href="img/logo.png" type="image/png">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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





<!-- Technology of Production, Processing and Transport of Petroleum -->
<section class="petroleum-section py-5">
    <div class="container">
        <div class="petroleum-box bg-white shadow-lg rounded-4 p-4 p-md-5">

            <h1 class="text-center mb-5 fw-bold" style="color:#D08301;">
                Technology of Production, Processing and Transport of Petroleum
            </h1>


                <hr class="my-5">
               <div class="container text-center my-4">
    <h3 class="fw-bold text-primary mb-3">Pictures from the department labs </h3>

    <!-- الصف الأول -->
    <div class="row g-3 justify-content-center">
        <div class="col-6 col-md-3">
            <img src="{{ asset('img/Picture8.jpg') }}" class="img-fluid rounded shadow-sm" alt="Lab Equipment 1">
        </div>
        <div class="col-6 col-md-3">
            <img src="{{ asset('img/Picture9.png') }}" class="img-fluid rounded shadow-sm" alt="Lab Equipment 2">
        </div>
    </div>

    <!-- الصف الثاني -->
    <div class="row g-3 justify-content-center mt-2">
        <div class="col-6 col-md-3">
            <img src="{{ asset('img/Picture10.jpg') }}" class="img-fluid rounded shadow-sm" alt="Lab Equipment 3">
        </div>
        <div class="col-6 col-md-3">
            <img src="{{ asset('img/ss.jpg') }}" class="img-fluid rounded shadow-sm" alt="Lab Equipment 4">
        </div>
    </div>
</div>

                <!-- English Version -->
                <div dir="ltr">
                    <h3 class="fw-bold text-primary mb-3">Technology of Production, Processing and Transport of Petroleum</h3>

                    <h5 class="fw-bold text-primary mt-4">1. Industrial Partner</h5>
                    <p>The Ministry of Petroleum and Mineral Resources, represented by EGPC, serves as the industrial partner...</p>

                    <h5 class="fw-bold text-primary mt-4">2. Program Overview</h5>
                    <p>Egypt’s petroleum sector relies on a skilled workforce comprising engineers, geologists, chemists, and technicians...</p>

                    <h5 class="fw-bold text-primary mt-4">3. Vision</h5>
                    <p>To deliver advanced educational and technological services that meet global quality standards...</p>

                    <h5 class="fw-bold text-primary mt-4">4. Mission</h5>
                    <p>To meet the demands of local, regional, and international labor markets...</p>

                    <h5 class="fw-bold text-primary mt-4">5. Program Objectives</h5>
                    <ul class="petroleum-list">
                        <li>Prepare specialized technicians and technologists in petroleum and gas production and transport.</li>
                        <li>Enhance the efficiency and skills of technicians in the petroleum sector.</li>
                        <li>Promote Egypt’s leadership in exporting skilled technical labor.</li>
                        <li>Attract international students and enhance the university’s resources.</li>
                    </ul>

                    <h5 class="fw-bold text-primary mt-4">6. Career Opportunities for Graduates</h5>
                    <ul class="petroleum-list">
                        <li>Petroleum and natural gas production and processing companies.</li>
                        <li>Oil and gas transport and storage companies.</li>
                        <li>Petroleum services and safety companies.</li>
                    </ul>

                    <h5 class="fw-bold text-primary mt-4">7. Educational Objectives</h5>
                    <ul class="petroleum-list">
                        <li>Equip students with strong practical and analytical skills.</li>
                        <li>Enable students to adapt to challenging onshore and offshore environments.</li>
                        <li>Develop communication and teamwork competencies.</li>
                        <li>Provide internationally recognized training and education.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

   <!-- Footer Start -->
            <div id="footer-placeholder"></div>
             <script>
             fetch("footer.html")
               .then(res => res.text())
               .then(data => {
              document.getElementById("footer-placeholder").innerHTML = data;
             });

           <!-- Footer End -->
