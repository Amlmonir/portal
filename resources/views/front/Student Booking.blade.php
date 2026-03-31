@extends('layouts.front')
@section('content')  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Booking - Fancy</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
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

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Inter", sans-serif;
      background: radial-gradient(1200px 600px at 10% 10%, rgba(26, 9, 110, 0.22), transparent),
        radial-gradient(900px 500px at 90% 90%, rgba(208, 128, 1, 0.06), transparent),
        linear-gradient(180deg, #0f1240 0%, #0a1435 28%, #07102b 60%, #031026 100%);
      color: var(--light);
      min-height: 100vh;
    }

    .container-booking {
      max-width: 960px;
      margin: 50px auto;
      padding: 35px;
      border-radius: 18px;
      background: linear-gradient(180deg, rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0.02));
      box-shadow: 0 15px 40px rgba(2, 6, 23, 0.6);
      border: 1px solid rgba(255, 255, 255, 0.04);
      backdrop-filter: blur(8px) saturate(120%);
      position: relative;
    }

    h1 {
      text-align: center;
      font-weight: 800;
      margin-bottom: 30px;
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
      animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(-20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    th,
    td {
      border: 1px solid rgba(255, 255, 255, 0.2);
      padding: 14px;
      text-align: center;
      transition: 0.3s;
      position: relative;
    }

    th {
      background: linear-gradient(90deg, var(--blue), #3a2ba0);
      color: white;
      font-weight: 700;
    }

    td.available {
      background-color: rgba(40, 167, 69, 0.75);
      cursor: pointer;
      font-weight: bold;
      color: white;
      border-radius: 6px;
      transition: all 0.3s ease;
    }

    td.available:hover {
      transform: scale(1.05);
      background-color: rgba(40, 167, 69, 1);
      box-shadow: 0 0 15px rgba(40, 167, 69, 0.6);
    }

    td.booked {
      background-color: rgba(220, 53, 69, 0.75);
      color: white;
      cursor: not-allowed;
      font-weight: bold;
      border-radius: 6px;
    }

    .pop {
      animation: pop 0.35s ease forwards;
    }

    @keyframes pop {
      0% {
        transform: scale(0);
      }

      50% {
        transform: scale(1.3);
      }

      100% {
        transform: scale(1);
      }
    }

    /* Modal */
    .modal-bg {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.7);
      display: none;
      justify-content: center;
      align-items: center;
      z-index: 10000;
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .modal-bg.show {
      display: flex;
      opacity: 1;
    }

    .modal {
      background: linear-gradient(180deg, rgba(26, 9, 110, 0.95), rgba(10, 10, 30, 0.95));
      padding: 30px;
      border-radius: 15px;
      width: 380px;
      text-align: center;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.7);
      animation: modalIn 0.3s ease forwards;
    }

    @keyframes modalIn {
      from {
        transform: scale(0.7);
        opacity: 0;
      }

      to {
        transform: scale(1);
        opacity: 1;
      }
    }

    .modal h3 {
      margin-bottom: 20px;
      font-size: 1.3rem;
      background: linear-gradient(90deg, var(--orange), var(--gold));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
    }

    .modal h3 i {
      font-size: 1.5rem;
      color: var(--gold);
      animation: iconGlow 1.5s infinite alternate;
    }

    @keyframes iconGlow {
      0% {
        text-shadow: 0 0 5px var(--gold);
      }

      50% {
        text-shadow: 0 0 15px var(--orange);
      }

      100% {
        text-shadow: 0 0 10px var(--gold);
      }
    }

    .modal input {
      width: 90%;
      padding: 12px 14px;
      margin-bottom: 15px;
      border-radius: 8px;
      border: none;
      outline: none;
      font-size: 1rem;
      background: rgba(255, 255, 255, 0.05);
      color: white;
    }

    .modal input::placeholder {
      color: rgba(255, 255, 255, 0.7);
    }

    .modal .error-msg {
      color: var(--red);
      font-size: 0.85rem;
      margin-bottom: 10px;
      display: none;
    }

    .modal button {
      padding: 10px 20px;
      border: none;
      border-radius: 10px;
      font-weight: 700;
      color: #fff;
      background: linear-gradient(90deg, var(--orange), var(--gold));
      cursor: pointer;
      transition: 0.3s;
    }

    .modal button:hover {
      background: linear-gradient(90deg, var(--blue), #3a2ba0);
    }

    /* Toast */
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

</style>
@endpush


  <div class="container-booking">
    <h1>Student Consultation Booking</h1>
    <table id="schedule">
      <thead>
        <tr>
          <th>Time / Day</th>
          <th>Saturday</th>
          <th>Sunday</th>
          <th>Monday</th>
          <th>Tuesday</th>
          <th>Wednesday</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>

    <a class="btn-back" href="{{ url('index') }}"><i class="fa-solid fa-arrow-left"></i> Back</a>
  </div>

  <!-- Modal -->
  <div class="modal-bg" id="modal-bg">
    <div class="modal">
      <h3><i class="fa-solid fa-calendar-check"></i> Book Slot</h3>
      <div class="error-msg" id="modal-error">Please fill both fields!</div>
      <input type="text" id="studentName" placeholder="Enter your full name" />
      <input type="text" id="consultType" placeholder="Enter consultation type" />
      <button id="confirmBooking">Confirm</button>
    </div>
  </div>

  <div id="toast" class="toast">Booking Successful!</div>

  <script>
    const days = ["Saturday", "Sunday", "Monday", "Tuesday", "Wednesday"];
    const times = ["9:00", "10:00", "11:00", "12:00", "1:00", "2:00", "3:00"];
    let bookings = JSON.parse(localStorage.getItem("bookings") || "{}");
    let selectedCell = null, selectedDay = null, selectedTime = null;

    const modalBg = document.getElementById("modal-bg");
    const studentNameInput = document.getElementById("studentName");
    const consultInput = document.getElementById("consultType");
    const confirmBtn = document.getElementById("confirmBooking");
    const modalError = document.getElementById("modal-error");
    const toast = document.getElementById("toast");

    function saveBookings() {
      localStorage.setItem("bookings", JSON.stringify(bookings));
      renderSchedule();
      showToast("Booking Successful!");
    }

    function renderSchedule() {
      const tbody = document.querySelector("#schedule tbody");
      tbody.innerHTML = "";
      times.forEach(time => {
        const tr = document.createElement("tr");
        let td = document.createElement("td");
        td.textContent = time; tr.appendChild(td);
        days.forEach(day => {
          td = document.createElement("td");
          if (bookings[day] && bookings[day][time]) {
            td.textContent = bookings[day][time].student;
            td.className = "booked";
          } else {
            td.textContent = "Available";
            td.className = "available";
            td.onclick = () => openModal(day, time, td);
          }
          tr.appendChild(td);
        });
        tbody.appendChild(tr);
      });
    }

    function openModal(day, time, cell) {
      selectedCell = cell; selectedDay = day; selectedTime = time;
      studentNameInput.value = ""; consultInput.value = "";
      modalError.style.display = "none";
      modalBg.classList.add("show");
    }

    confirmBtn.onclick = function () {
      const student = studentNameInput.value.trim();
      const type = consultInput.value.trim();
      if (!student || !type) { modalError.style.display = "block"; return; }
      if (!bookings[selectedDay]) bookings[selectedDay] = {};
      bookings[selectedDay][selectedTime] = { student, type };
      saveBookings();
      selectedCell.classList.add("pop");
      setTimeout(() => selectedCell.classList.remove("pop"), 350);
      modalBg.classList.remove("show");
    }

    window.onclick = function (e) {
      if (e.target === modalBg) modalBg.classList.remove("show");
    }

    function showToast(msg) {
      toast.textContent = msg; toast.classList.add("show");
      setTimeout(() => toast.classList.remove("show"), 2500);
    }

    renderSchedule();




@endsection
