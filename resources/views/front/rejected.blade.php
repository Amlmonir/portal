@extends('layouts.front')
@section('content')  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submission Rejected</title>
  @push('styles')
<style>

    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      padding: 30px;
    }

    .card {
      width: 600px;
      margin: auto;
      background: white;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    h2 {
      color: #d9534f;
    }

    p {
      font-size: 18px;
      margin: 10px 0;
    }

    .btn {
      display: inline-block;
      margin-top: 20px;
      padding: 10px 20px;
      background: #D08301;
      color: white;
      text-decoration: none;
      border-radius: 8px;
    }

</style>
@endpush


  <div class="card" id="rejectedCard">
    <h2>Submission Rejected</h2>
    <div id="studentName"></div>
    <p class="lead">Unfortunately, your submission has been rejected.</p>
    <p class="text-muted">Your documents do not meet the required conditions or were submitted late. We wish you the
      best in the future!</p>
    <a href="{{ url('home') }}" class="btn">Back to Home</a>
  </div>

  <script>
    // جلب اسم الطالب من API
    const urlParams = new URLSearchParams(window.location.search);
    const userId = urlParams.get('id');

    // استبدلي الرابط بالـ API بتاعك
    const apiUrl = `https://example.com/api/student?id=${userId}`;

    fetch(apiUrl)
      .then(res => res.json())
      .then(student => {
        if (student && student.fullname) {
          document.getElementById("studentName").innerHTML = `<h3>Sorry, ${student.fullname}!</h3>`;
        } else {
          document.getElementById("studentName").innerHTML = `<h3>Sorry!</h3>`;
        }
      })
      .catch(err => {
        console.error("Error loading student:", err);
        document.getElementById("studentName").innerHTML = `<h3>Sorry!</h3>`;
      });




@endsection
