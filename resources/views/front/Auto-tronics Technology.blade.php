@extends('layouts.front')
@section('content')    <
    @push('styles')
<style>

        .custom-card {
            border-left: 6px solid #D08301;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 30px;
        }

        .custom-title {
            color: #1a096e;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .custom-text {
            text-align: justify;
            color: #333;
            line-height: 1.8;
        }

        ul.custom-text li {
            margin-bottom: 8px;
        }

</style>
@endpush




    <!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Auto-tronics Technology Department – New Cairo Technological University</h1>
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


    <!-- Hero Video Card Start -->
<!--<div class="container mt-5 position-relative">
    <div class="card shadow-lg border-0 rounded-4 overflow-hidden wow fadeInUp"
        data-wow-delay="0.2s">

        <video class="w-100"
            autoplay muted loop controls
            style="max-height: 550px; object-fit: cover;">
            <source src="{{ asset('img/information Department.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

    </div>
</div>-->
<!-- Hero Video Card End -->


    <!-- Main Content Start -->
    <div class="container my-5">
        <!-- Vision of the Quality Assurance Unit -->
        <div class="custom-card">
            <h4 class="custom-title">Auto-tronics Technology Department</h4>
            <p class="custom-text">
                under construction
        </div>

    </div>
    <!-- Main Content End -->


@endsection
