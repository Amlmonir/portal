@extends('layouts.front')
@section('content')  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Management - New Cairo University of Technology</title>
  <link rel="icon" href="img/logo.png" type="image/png">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  @push('styles')
<style>

    :root {
      --blue: #1a096e;
      --orange: #D08301;
      --gold: #ffd700;
      --light: #e8eefc;
      --green: #28a745;
      --red: #dc3545;
    }

    body {
      font-family: "Inter", Arial, sans-serif;
      margin: 0;
      padding: 40px;
      background: radial-gradient(1200px 600px at 10% 10%, rgba(26, 9, 110, 0.22), transparent),
        radial-gradient(900px 500px at 90% 90%, rgba(208, 128, 1, 0.06), transparent),
        linear-gradient(180deg, #0f1240 0%, #0a1435 28%, #07102b 60%, #031026 100%);
      color: var(--light);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1 {
      font-size: 2.2rem;
      font-weight: 800;
      text-align: center;
      margin-bottom: 40px;
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

    .container {
      width: 95%;
      max-width: 1200px;
      background: linear-gradient(180deg, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0.02));
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 15px 40px rgba(2, 6, 23, 0.6);
      border: 1px solid rgba(255, 255, 255, 0.04);
      backdrop-filter: blur(8px) saturate(120%);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(2, 6, 23, 0.35);
    }

    th,
    td {
      padding: 12px;
      text-align: center;
      border: 1px solid rgba(255, 255, 255, 0.2);
    }

    th {
      background: linear-gradient(90deg, var(--blue), #3a2ba0);
      color: var(--light);
      font-weight: 700;
    }

    tr:hover td {
      background-color: rgba(255, 255, 255, 0.05);
    }

    .actions a {
      text-decoration: none;
      padding: 6px 12px;
      margin: 0 5px;
      color: var(--light);
      border-radius: 6px;
      font-weight: 700;
      transition: 0.3s;
    }

    .actions a.accept {
      background-color: var(--green);
    }

    .actions a.accept:hover {
      background-color: rgba(40, 167, 69, 0.8);
      transform: scale(1.05);
    }

    .actions a.reject {
      background-color: var(--red);
    }

    .actions a.reject:hover {
      background-color: rgba(220, 53, 69, 0.8);
      transform: scale(1.05);
    }

    .actions a.view {
      background-color: var(--orange);
    }

    .actions a.view:hover {
      background-color: var(--gold);
      color: #0a0a0a;
      transform: scale(1.05);
    }

    .back-btn {
      display: inline-block;
      margin: 25px auto 0;
      padding: 12px 24px;
      background: linear-gradient(90deg, var(--blue), #2b2b80);
      color: var(--gold);
      font-weight: 700;
      text-decoration: none;
      border-radius: 12px;
      transition: all 0.3s ease;
    }

    .back-btn:hover {
      background: linear-gradient(90deg, var(--orange), var(--gold));
      transform: translateY(-3px) scale(1.05);
    }

</style>
@endpush


  <h1>Student Management</h1>

  <div class="container">
    <table id="studentTable">
      <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Status</th>
        <th>Actions</th>
      </tr>
    </table>

    <a href="{{ url('admin_dashboard') }}" class="back-btn"><i class="fa-solid fa-arrow-left"></i> Back</a>
  </div>

  <script>
    const table = document.getElementById("studentTable");

    // استبدلي الرابط بالـ API الحقيقي
    const apiUrl = "https://example.com/api/pending_students";

    fetch(apiUrl)
      .then(response => response.json())
      .then(students => {
        students.forEach(student => {
          const row = document.createElement("tr");
          row.innerHTML = `
        <td>${student.id}</td>
        <td>${student.fullname}</td>
        <td>${student.email}</td>
        <td>${student.status}</td>
        <td class="actions">
          <a href="acceptad.html?id=${student.id}" class="accept">Accept</a>
          <a href="rejectad.html?id=${student.id}" class="reject">Reject</a>
          <a href="view.html?id=${student.id}" class="view">View</a>
        </td>
      `;
          table.appendChild(row);
        });
      })
      .catch(error => {
        console.error("Error loading students:", error);
        const row = document.createElement("tr");
        row.innerHTML = `<td colspan="5" style="color:red;">Failed to load students from API.</td>`;
        table.appendChild(row);
      });




@endsection
