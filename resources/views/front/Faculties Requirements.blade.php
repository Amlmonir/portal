@extends('layouts.front')
@section('content')

  @push('styles')
<style>

    body {
      background-color: #fff;
      font-family: 'Poppins', sans-serif;
      color: #040faa;
      overflow-x: hidden;
    }

    header {
      background: linear-gradient(135deg, #040faa, #0a18b8);
      color: white;
      text-align: center;
      padding: 100px 20px;
      position: relative;
      overflow: hidden;
    }

    header h1 {
      font-size: 3rem;
      font-weight: 700;
      color: #D08301;
      text-shadow: 0 0 25px rgba(208, 131, 1, 0.7);
    }

    header p {
      font-size: 1.3rem;
      margin-top: 15px;
      color: #f8f9fa;
    }

    section {
      padding: 80px 10%;
      border-bottom: 1px solid #eee;
    }

    section h2 {
      font-size: 2.2rem;
      font-weight: 700;
      color: #040faa;
      margin-bottom: 25px;
      position: relative;
    }

    section h2::after {
      content: "";
      width: 100px;
      height: 4px;
      background: #D08301;
      position: absolute;
      bottom: -10px;
      left: 0;
      border-radius: 2px;
    }

    .card-container {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .doc-card {
      background: #f6f8ff;
      border-left: 6px solid #D08301;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      flex: 1 1 calc(45% - 20px);
      min-width: 280px;
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .doc-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(208, 131, 1, 0.2);
    }

    .back-btn {
      display: inline-block;
      margin: 60px auto 40px;
      padding: 12px 35px;
      background: #D08301;
      color: white;
      border-radius: 50px;
      font-weight: 600;
      text-decoration: none;
      letter-spacing: 0.5px;
      transition: all 0.3s ease;
    }

    .back-btn:hover {
      background: #040faa;
      color: #fff;
      box-shadow: 0 0 15px rgba(4, 15, 170, 0.5);
    }

</style>
@endpush









  <section>
    <h2>Required Documents</h2>
    <div class="card-container">
      <div class="doc-card">
        <p>Original high school certificate or equivalent + 5 digital copies.</p>
      </div>
      <div class="doc-card">
        <p>Final college nomination form after coordination results.</p>
      </div>
      <div class="doc-card">
        <p>Original birth certificate + 5 digital copies.</p>
      </div>
      <div class="doc-card">
        <p>Form 2 and 6 / Military status certificate (for male students).</p>
      </div>
      <div class="doc-card">
        <p>6 recent personal photos (size 4×6) with the student’s name on them.</p>
      </div>
      <div class="doc-card">
        <p>3 copies of the student’s national ID card.</p>
      </div>
      <div class="doc-card">
        <p>3 copies of the guardian’s national ID card.</p>
      </div>
      <div class="doc-card">
        <p>Copy of the payment receipt for tuition and file opening fees.</p>
      </div>
      <div class="doc-card">
        <p>Black capsule plastic file folder.</p>
      </div>
    </div>
  </section>

  <div class="text-center">
    <a href="{{ url('Admissions') }}" class="back-btn">Go to Admissions &raquo;</a>
  </div>







@endsection
