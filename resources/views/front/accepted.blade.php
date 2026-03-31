@extends('layouts.front')
@section('content')




@push('styles')

<style>



    body {
      font-family: Arial, sans-serif;
      background-color: #f0f2f5;
      margin: 0;
      padding: 0;
    }

    .page-header {
      background-color: #28a745;
      color: white;
      padding: 80px 0;
      text-align: center;
    }

    .container-message {
      max-width: 700px;
      margin: 40px auto;
      background: white;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    h2 {
      color: #28a745;
      margin-bottom: 20px;
    }

    p {
      color: #555;
      margin-bottom: 15px;
    }

    .btn-home {
      background: #D08301;
      color: white;
      font-weight: bold;
      padding: 12px 25px;
      border-radius: 5px;
      text-decoration: none;
      transition: 0.3s;
    }

    .btn-home:hover {
      background: #b86e00;
    }



</style>
@endpush





  <div class="page-header">
    <h1>Congratulations!</h1>
  </div>

  <div class="container-message">
    <h2>Congratulations, Student!</h2>
    <p class="lead">You have been preliminarily accepted!</p>
    <p>We are pleased to inform you that your application has been accepted, and we would like to invite you to submit
      your official documents to the university for further processing.</p>
    <p>Please proceed to the university's office with your required documents to complete the next steps in the
      admission process.</p>
    <p>We wish you the best of luck with the rest of your application process!</p>
    <a href="{{ url('home') }}" class="btn-home">Back to Home</a>
  </div>

 --}}
    <!-------------------------- Reader start----------------------------->
  <div class="reader-controls">
  <button onclick="readPage()" class="reader-btn play">    🔊 Read  </button>
  <button onclick="stopReading()" class="reader-btn stop">    ⏹ Stop  </button>
</div>
 <!-------------------------- Reader end ----------------------------->


@endsection
