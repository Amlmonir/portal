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






  <!-- Renewable Energy Technology Program Section -->
<section class="renewable-section py-5">
    <div class="container">
        <div class="renewable-box bg-white shadow-lg rounded-4 p-4 p-md-5">

            <h1 class="text-center mb-4 fw-bold" style="color:#D08301;">
                Renewable Energy Technology Program
            </h1>

            <div class="renewable-content">

                <h3 class="fw-bold text-primary mb-3">Vision</h3>
                <p class="lead" style="text-align: justify;">
                    An advanced educational and learning system that relies on modern technology to achieve continuous
                    learning in the field of new and renewable energy, while maintaining international quality standards.
                </p>

                <hr class="my-4" style="border:1px solid #D08301; opacity:0.7;">

                <h3 class="fw-bold text-primary mb-3">Mission</h3>
                <p class="lead" style="text-align: justify;">
                    To prepare qualified technologists with integrated skills and knowledge according to the latest
                    international standards, aligned with the requirements of the Egyptian labor market and scientific
                    research in the field of new and renewable energy.
                </p>

                <hr class="my-4" style="border:1px solid #D08301; opacity:0.7;">

                <h3 class="fw-bold text-primary mb-3">Objectives</h3>
                <ul class="renewable-goals lead">
                    <li>Apply mathematical, scientific, and practical skills in solving technical problems.</li>
                    <li>Work efficiently in various renewable energy fields.</li>
                    <li>Demonstrate ethical and effective behavior in their professional environment.</li>
                    <li>Continuously develop their skills and knowledge.</li>
                </ul>

                <hr class="my-4" style="border:1px solid #D08301; opacity:0.7;">

                <h3 class="fw-bold text-primary mb-3">Laboratory Equipment</h3>
                <div class="row g-3">
                    <div class="col-6 col-md-3">
                        <img src="{{ asset('img/Picture1.jpg') }}" class="img-fluid rounded shadow-sm" alt="Lab Equipment 1">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="{{ asset('img/Picture2.jpg') }}" class="img-fluid rounded shadow-sm" alt="Lab Equipment 2">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="{{ asset('img/Picture7.jpg') }}" class="img-fluid rounded shadow-sm" alt="Lab Equipment 3">
                    </div>
                    <div class="col-6 col-md-3">
                        <img src="{{ asset('img/Picture6.jpg') }}" class="img-fluid rounded shadow-sm" alt="Lab Equipment 4">
                    </div>
                </div>

                <hr class="my-4" style="border:1px solid #D08301; opacity:0.7;">

                <div class="text-center mt-4">
                    <h4 class="fw-bold text-primary">Head of Department</h4>
                    <p class="lead fw-semibold mb-0">Assoc. Prof. Dr. Ahmed Nagah Shamroukh</p>
                    <div class="text-center mt-3">
                        <img src="{{ asset('img/Picture3.png') }}" class="img-fluid rounded shadow-sm" alt="Head of Department">
                    </div>
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
