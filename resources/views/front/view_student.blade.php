@extends('layouts.front')
@section('content')  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Details</title>
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
    }

    h2 {
      text-align: center;
      color: #b86e00;
    }

    p {
      font-size: 18px;
      margin: 10px 0;
    }

    .files {
      margin-top: 20px;
    }

    .files a {
      display: block;
      margin: 10px 0;
      text-decoration: none;
      color: #3498db;
      font-weight: bold;
    }

    .files img {
      max-width: 100%;
      max-height: 200px;
      display: block;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .back-btn {
      display: block;
      margin: 20px auto 0;
      text-align: center;
      background-color: #b86e00;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 8px;
    }

</style>
@endpush


  <div class="card" id="studentCard">
    <h2>Student Information</h2>
    <div id="studentInfo"></div>
    <div class="files" id="studentFiles"></div>
    <a href="{{ url('student_list') }}" class="back-btn">🔙 Back</a>
  </div>

  <script>
    // جلب الـ ID من الرابط
    const urlParams = new URLSearchParams(window.location.search);
    const studentId = urlParams.get('id');

    // استبدلي الرابط ده بالـ API بتاعك
    const apiUrl = `https://example.com/api/student?id=${studentId}`;

    fetch(apiUrl)
      .then(res => res.json())
      .then(student => {
        if (!student) {
          document.getElementById("studentInfo").innerHTML = "<p style='color:red;'>Student not found.</p>";
          return;
        }

        // عرض بيانات الطالب
        const infoDiv = document.getElementById("studentInfo");
        infoDiv.innerHTML = `
      <p><strong>ID:</strong> ${student.id}</p>
      <p><strong>Full Name:</strong> ${student.fullname}</p>
      <p><strong>Email:</strong> ${student.email}</p>
      <p><strong>Status:</strong> ${student.status}</p>
    `;

        // عرض الملفات لو موجودة
        const filesDiv = document.getElementById("studentFiles");
        if (student.files) {
          filesDiv.innerHTML = "<h3>Uploaded Files</h3>";
          if (student.files.photo) filesDiv.innerHTML += `<p><strong>Photo:</strong></p><img src="${student.files.photo}" alt="Student Photo">`;
          if (student.files.highschool) filesDiv.innerHTML += `<p><strong>High School Certificate:</strong></p><a href="${student.files.highschool}" target="_blank">View File</a>`;
          if (student.files.nid) filesDiv.innerHTML += `<p><strong>National ID:</strong></p><a href="${student.files.nid}" target="_blank">View File</a>`;
          if (student.files.birth) filesDiv.innerHTML += `<p><strong>Birth Certificate:</strong></p><a href="${student.files.birth}" target="_blank">View File</a>`;
        } else {
          filesDiv.innerHTML = "<p style='color:red;'>No files uploaded by this student.</p>";
        }
      })
      .catch(err => {
        console.error("Error loading student:", err);
        document.getElementById("studentInfo").innerHTML = "<p style='color:red;'>Failed to load student data.</p>";
      });




@endsection
