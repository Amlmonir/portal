@extends('layouts.front')
@section('content')  
  @push('styles')
<style>

    :root {
      --blue: #1a096e;
      --orange: #D08301;
      --gold: #ffd700;
      --light: #e8eefc;
    }

    body {
      font-family: "Inter", Arial, sans-serif;
      background: radial-gradient(1200px 600px at 10% 10%, rgba(26, 9, 110, 0.22), transparent),
        radial-gradient(900px 500px at 90% 90%, rgba(208, 128, 1, 0.06), transparent),
        linear-gradient(180deg, #0f1240 0%, #0a1435 28%, #07102b 60%, #031026 100%);
      display: flex;
      flex-direction: column;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      padding: 40px 20px;
      color: var(--light);
    }

    h1 {
      font-size: 2.2rem;
      font-weight: 800;
      text-align: center;
      margin-bottom: 50px;
      background: linear-gradient(90deg, var(--orange), var(--gold));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: glow 2s infinite alternate;
    }

    @keyframes glow {
      0% {
        text-shadow: 0 0 10px var(--orange);
      }

      50% {
        text-shadow: 0 0 25px var(--gold);
      }

      100% {
        text-shadow: 0 0 15px var(--orange);
      }
    }

    .btn-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .btn {
      display: inline-block;
      padding: 18px 36px;
      font-size: 18px;
      font-weight: 700;
      border-radius: 12px;
      text-decoration: none;
      color: var(--light);
      background: linear-gradient(90deg, var(--orange), var(--gold));
      box-shadow: 0 8px 25px rgba(208, 128, 1, 0.25);
      transition: all 0.4s ease;
    }

    .btn:hover {
      transform: translateY(-5px) scale(1.05);
      box-shadow: 0 12px 30px rgba(208, 128, 1, 0.5);
      background: linear-gradient(90deg, var(--blue), #2b2b80);
      color: var(--gold);
    }

</style>
@endpush


  <h1>Admin Dashboard</h1>

  <div class="btn-container">
    <a href="{{ url('Admin Dashboard') }}" class="btn"><i class="fa-solid fa-chalkboard-user"></i> Manage Consultations</a>
    <a href="{{ url('student_list') }}" class="btn"><i class="fa-solid fa-user-graduate"></i> Student List</a>
    <a href="{{ url('index') }}" class="btn"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
  </div>



@endsection
