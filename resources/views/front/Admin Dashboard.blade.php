@extends('layouts.front')
@section('content')
@push('styles')
<style>


    :root {
      --blue: #1a096e;
      --orange: #D08301;
      --gold: #ffd700;
      --green: #28a745;
      --red: #dc3545;
      --light: #e8eefc;
    }

    body {
      font-family: "Inter", sans-serif;
      margin: 0;
      background: radial-gradient(1200px 600px at 10% 10%, rgba(26, 9, 110, 0.22), transparent),
        radial-gradient(900px 500px at 90% 90%, rgba(208, 128, 1, 0.06), transparent),
        linear-gradient(180deg, #0f1240 0%, #0a1435 28%, #07102b 60%, #031026 100%);
      color: var(--light);
      min-height: 100vh;
    }

    .container-admin {
      max-width: 1200px;
      margin: 40px auto;
      padding: 30px;
      background: linear-gradient(180deg, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0.02));
      border-radius: 20px;
      box-shadow: 0 15px 40px rgba(2, 6, 23, 0.6);
      border: 1px solid rgba(255, 255, 255, 0.04);
      backdrop-filter: blur(8px) saturate(120%);
    }

    h1 {
      text-align: center;
      font-weight: 800;
      margin-bottom: 25px;
      font-size: 2rem;
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

    table {
      width: 100%;
      border-collapse: collapse;
      border-radius: 14px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(2, 6, 23, 0.35);
    }

    th,
    td {
      border: 1px solid rgba(255, 255, 255, 0.2);
      padding: 12px;
      text-align: center;
    }

    th {
      background: linear-gradient(90deg, var(--blue), #3a2ba0);
      color: white;
      font-weight: 700;
      font-size: 1rem;
    }

    td.available {
      background-color: rgba(40, 167, 69, 0.75);
      color: white;
      font-weight: bold;
      border-radius: 6px;
    }

    td.booked {
      background-color: rgba(220, 53, 69, 0.75);
      color: white;
      font-weight: bold;
      border-radius: 6px;
    }

    td.booked:hover {
      transform: scale(1.03);
      box-shadow: 0 0 12px rgba(220, 53, 69, 0.5);
    }

    /* Buttons */
    .btn-action {
      padding: 6px 12px;
      margin: 2px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      font-weight: 700;
      color: white;
      transition: 0.3s;
    }

    .btn-delete {
      background: var(--red);
    }

    .btn-delete:hover {
      background: rgba(220, 53, 69, 0.9);
    }

    .btn-edit {
      background: var(--blue);
    }

    .btn-edit:hover {
      background: rgba(26, 9, 110, 0.9);
    }

    /* Back button */
    .btn-back {
      background: transparent;
      border: 1px solid rgba(255, 255, 255, 0.15);
      color: #ffd700;
      font-weight: 600;
      padding: 12px 20px;
      border-radius: 12px;
      transition: all 0.3s ease;
      display: inline-block;
      margin-top: 25px;
    }

    .btn-back:hover {
      background: rgba(255, 255, 255, 0.08);
      color: #ffd700;
      transform: translateY(-3px);
    }

    /* Toast notifications */
    .toast {
      position: fixed;
      bottom: 30px;
      right: 30px;
      background: linear-gradient(90deg, var(--orange), var(--gold));
      color: #0a0a0a;
      padding: 14px 20px;
      border-radius: 10px;
      font-weight: 700;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.4);
      opacity: 0;
      transform: translateY(50px);
      transition: all 0.5s ease;
      z-index: 9999;
    }

    .toast.show {
      opacity: 1;
      transform: translateY(0);
    }


</style>


@endpush
  <div class="container-admin">
    <h1>Admin Dashboard</h1>
    <table id="adminTable">
      <thead>
        <tr>
          <th>Day</th>
          <th>Time</th>
          <th>Student Name</th>
          <th>Consultation Type</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>

    <!-- Back button -->
    <a class="btn-back" href="javascript:history.back()"><i class="fa-solid fa-arrow-left"></i> Back</a>
  </div>

  <div id="toast" class="toast"></div>
@push('scripts')
<script>
    let bookings = JSON.parse(localStorage.getItem("bookings") || "{}");

    function renderAdminTable() {
      const tbody = document.querySelector("#adminTable tbody");
      tbody.innerHTML = "";
      for (const day in bookings) {
        for (const time in bookings[day]) {
          const booking = bookings[day][time];
          const tr = document.createElement("tr");
          tr.innerHTML = `
        <td>${day}</td>
        <td>${time}</td>
        <td>${booking.student}</td>
        <td>${booking.type}</td>
        <td>
          <button class="btn-action btn-delete">Delete</button>
        </td>
      `;
          tr.querySelector(".btn-delete").onclick = () => {
            if (confirm(`Delete booking of ${booking.student} on ${day} at ${time}?`)) {
              delete bookings[day][time];
              if (Object.keys(bookings[day]).length === 0) delete bookings[day];
              localStorage.setItem("bookings", JSON.stringify(bookings));
              showToast("Booking deleted!");
              renderAdminTable();
            }
          }
          tbody.appendChild(tr);
        }
      }
    }

    function showToast(msg) {
      const toast = document.getElementById("toast");
      toast.textContent = msg;
      toast.classList.add("show");
      setTimeout(() => toast.classList.remove("show"), 2500);
    }

    renderAdminTable();


@endpush





@endsection
