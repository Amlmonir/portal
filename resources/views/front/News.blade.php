@extends('layouts.front')
@section('content')    <meta charset="utf-8">
    <title>New Cairo University of Technology</title>
    <link rel="icon" href="img/logo.png" type="image/png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

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
    @push('styles')
<style>

        :root {
            --blue: #1a096e;
            --gold: #D08301;
        }

        /* Body */
        body {
            font-family: 'Heebo', sans-serif;
            background-color: #f8f9fc;
            color: #333;
            scroll-behavior: smooth;
        }

        /* Navbar */
        .navbar {
            background-color: #fff;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
        }

        .navbar-nav .nav-link.active {
            color: var(--gold);
            font-weight: 700;
        }

        /* Header */
        .page-header {

            color: #fff;
            text-align: center;
            padding: 120px 20px 80px;
        }

        .page-header h1 {
           /* font-family: 'Playfair Display', serif;*/
            font-size: 4rem;
            font-weight: 900;
            color: var(--gold);
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.3);
        }

        .page-header p {
            font-size: 1.3rem;
            color: #fff;
        }

        /* President Section */
        .president-section {
            padding: 60px 20px;
            display: flex;
            flex-direction: column;
            gap: 40px;
            align-items: center;
        }

        /* President Card */
        .president-card {
            background: #fff;
            border-left: 8px solid var(--gold);
            border-radius: 20px;
            padding: 30px 40px;
            max-width: 1000px;
            width: 100%;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
            transition: all 0.4s ease;
            position: relative;
        }

        .president-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.25);
        }

        /* Image */
        .president-card img {
            /*width: 200px;
            height: auto;*/
            float: left;
            margin-right: 30px;
            border-radius: 15px;
            border: 4px solid var(--gold);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
        }

        /* Headings & text */
        .president-card h3,
        .president-card h4 {
            font-family: 'Playfair Display', serif;
            color: var(--blue);
            font-weight: 900;
            margin-bottom: 12px;
        }

        .president-card p {
            font-size: 1.05rem;
            color: #333;
            line-height: 1.8;
        }

        /* Gold highlight for important text */
        .president-card strong {
            color: var(--gold);
        }

        /* Apply button */
        .apply-btn {
            display: inline-block;
            background-color: var(--gold);
            color: #fff;
            font-size: 1.3rem;
            font-weight: 700;
            padding: 15px 50px;
            border-radius: 10px;
            text-decoration: none;
            transition: 0.4s ease;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .apply-btn:hover {
            background-color: var(--blue);
            color: #FFD700;
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.25);
        }

        /* Responsive */
        @media(max-width: 992px) {
            .president-card img {
                float: none;
                display: block;
                margin: 0 auto 20px auto;
            }

            .page-header h1 {
                font-size: 3rem;
            }
        }

</style>
@endpush







    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">News</h1>
                    <nav aria-label="breadcrumb">
                         <!-- <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="{{ url('index') }}">Home</a></li>
                        </ol>  -->
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!-- President Section -->
    <section class="president-section">

        <!-- Main President Card -->
        <div class="president-card">


            <h3>Online Video Courses in Accounting, Tourism, Hotel Management and Marketing with Professional English Proficiency Integration at Shanxi Finance & Taxation College</h4>
             <img src="{{ asset('img/shaxni.jpg') }}" alt="Shanxi">
             <p>
                Based on the partnership agreement signed last December between New Cairo Technological University
                and Shanxi University College of Finance and Taxation in the presence of Dr. Tarek Abdelmalak, President of the University, Dr. Walid Al-Khatam, Dean of the Faculty of Industry and Energy Technology,
                and Dr. Mohamed Al-Soudah, Dean of the Faculty of Industry and Energy Technology
             </p>
             <p>
                 Shanxi College of Finance and Taxation in China has launched a series of English language training courses through a range of high-quality video courses.
             </p>
             <p>
                Dr. Tariq Abdelmalak pointed out that the training courses launched by Shanxi College of Finance and Taxation came to encourage university students to participate.
                The training courses include a diverse number of scientific and specialized fields, which are
             </p>
                <p style="text-align: right;">كلية شانشي الصينية تقدم دورات تدريبية لطلاب جامعة القاهرة الجديدة التكنولوجية في إطار بروتوكول التعاون المبرم بين الجانبين </p>
            <p style="text-align: right;">انطلاقاً من الشراكة المبرمة بين جامعة القاهرة الجديدة التكنولوجية وكلية شانشي الصينية للتمويل والضرائب والمبرمة في ديسمبر الماضي بحضور الدكتور طارق عبدالملاك رئيس الجامعة والدكتور وليد الختام عميد كلية تكنولوجيا الصناعة والطاقة والدكتور محمد السودة عميد كلية تكنولوجيا الصناعة والطاقة، أطلقت جامعة شانشي الصينية مجموعة من الدورات التدريبية لتعلم اللغة الإنجليزية عبر مجموعة من دورات الفيديو عالية الجودة.</p>
            <p style="text-align: right;">شار الدكتور طارق عبدالملاك ان الدورات التدريبية التى أطلقتها كلية شانشي للتمويل والضرائب جاءت لتشجيع طلاب وطالبات الجامعة على الإستفادة من هذه الموارد التعليمية خلال أوقات فراغهم، مما يعود حتماً  بالنفع على تطورهم الأكاديمي والمهني في المستقبل.</p>
            <p style="text-align: right;">هذا وتضم الدورات التدريبية عدد متنوع من المجالات العلمية والتخصصية وهي </p>
            <p> <strong>Tourism English</strong>
                <br><a href="https://drive.google.com/drive/folders/1tcavuX4ZzJoO9CYbogLbgIvqAvGqKORn">https://drive.google.com/.../1tcavuX4ZzJoO9CYbogLbgIvqAvG...</a>

                <br> <strong>Accounting English</strong>
                   <br><a href="https://drive.google.com/drive/folders/1c622Bf9T2UklWgyDRre1MvEt82Cwax16">https://drive.google.com/.../1c622Bf9T2UklWgyDRre1MvEt82C...</a>
                   <br><a href="https://drive.google.com/drive/folders/18HLNTpYLniu5t3pij9HvEYHHA4P8lfGj">https://drive.google.com/.../18HLNTpYLniu5t3pij9HvEYHHA4P...</a>

                <br> <strong>Hotel English</strong>
                   <br><a href="https://drive.google.com/drive/folders/1--wtCfPjmPqKIASymz4ZlnegH7O1d_jC">https://drive.google.com/.../1--wtCfPjmPqKIASymz4ZlnegH7O...</a>

                <br> <strong>Marketing English </strong>
                    <br><a href="https://drive.google.com/drive/folders/1msSjgHDKU_Q4CUs5EENFQd7VIWN5TrUI">https://drive.google.com/.../1msSjgHDKU...</a>
                    <br><a href="https://drive.google.com/drive/folders/1nLn0TFylxmR8ysckRmvUqKcHZ1Y0zuSi">https://drive.google.com/.../1nLn0TFylxmR8ysckRmvUqKcHZ1Y...</a>

                <br><strong>كما نرحب بمشاركة  ملاحظاتكم وتعليقاتكم حول الدورات عبر الرابط التالي    : </strong>
                   <br><a href="https://www.wenjuan.com/s/UZBZJv68sf/">https://www.wenjuan.com/s/UZBZJv68sf/#</a>

                <br><strong>للاطلاع على كافة اللينكات ومزيد من التفاصيل من خلال الرابط التالي 👇🏻 </strong>
                   <br><a href="{{ url('chrome-extension://fheoggkfdfchfphceeifdbepaooicaho/html/site_status_block_page') }}">https://eu.docworkspace.com/d/sIBTJuvPUAvPR_soG?sa=601.1074</a>


            </p>
        </div>
            <br>

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


    <!-- JavaScript Libraries -->







    <!-- Template Javascript -->

    <script>
        (function () { if (!window.chatbase || window.chatbase("getState") !== "initialized") { window.chatbase = (...arguments) => { if (!window.chatbase.q) { window.chatbase.q = [] } window.chatbase.q.push(arguments) }; window.chatbase = new Proxy(window.chatbase, { get(target, prop) { if (prop === "q") { return target.q } return (...args) => target(prop, ...args) } }) } const onLoad = function () { const script = document.createElement("script"); script.src = "https://www.chatbase.co/embed.min.js"; script.id = "vCJaS-Ai1Hgccr-hIzTuu"; script.domain = "www.chatbase.co"; document.body.appendChild(script) }; if (document.readyState === "complete") { onLoad() } else { window.addEventListener("load", onLoad) } })();



@endsection
