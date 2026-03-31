<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Registration - New Cairo University of Technology</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

  @push('styles')
<style>

    :root {
      --blue: #1a096e;
      --orange: #D08301;
      --gold: #ffd700;
    }

    body {
      margin: 0;
      font-family: "Inter", sans-serif;
      background: radial-gradient(1200px 600px at 10% 10%, rgba(26, 9, 110, 0.22), transparent),
        radial-gradient(900px 500px at 90% 90%, rgba(208, 128, 1, 0.06), transparent),
        linear-gradient(180deg, #0f1240 0%, #0a1435 28%, #07102b 60%, #031026 100%);
      color: #e8eefc;
    }

    .apply-wrap {
      max-width: 500px;
      margin: 48px auto;
      padding: 28px;
      border-radius: 14px;
      background: linear-gradient(180deg, rgba(255, 255, 255, 0.04), rgba(255, 255, 255, 0.02));
      box-shadow: 0 10px 30px rgba(2, 6, 23, 0.6);
      border: 1px solid rgba(255, 255, 255, 0.04);
      backdrop-filter: blur(8px) saturate(120%);
    }

    .apply-header {
      display: flex;
      gap: 16px;
      align-items: center;
      margin-bottom: 18px;
    }

    .brand-badge {
      width: 64px;
      height: 64px;
      border-radius: 12px;
      background: linear-gradient(135deg, var(--blue), #3a2ba0);
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 6px 20px rgba(26, 9, 110, 0.35);
    }

    .brand-badge img {
      width: 46px;
      height: auto;
    }

    .apply-header h1 {
      margin: 0;
      font-size: 1.25rem;
      color: #dfe8ff;
      font-weight: 700;
    }

    .apply-header p {
      margin: 0;
      color: #bfcff8;
      font-size: 0.92rem;
    }

    .panel {
      margin-top: 8px;
      padding: 18px;
      border-radius: 12px;
      background: rgba(255, 255, 255, 0.02);
      box-shadow: 0 10px 30px rgba(2, 6, 23, 0.35);
    }

    .form-label {
      color: #d9e6ff;
      font-weight: 600;
    }

    .form-control,
    .form-select {
      background: rgba(7, 10, 28, 0.55);
      border: 1px solid rgba(255, 255, 255, 0.04);
      color: #eaf2ff;
      border-radius: 8px;
      padding: 10px 12px;
    }

    .btn-primary-apply {
      background: linear-gradient(90deg, var(--orange), #ffb95a);
      color: #fff;
      font-weight: 800;
      border: none;
      padding: 12px 18px;
      border-radius: 10px;
      transition: all 0.3s ease;
      box-shadow: 0 10px 30px rgba(208, 128, 1, 0.18);
    }

    .btn-primary-apply:hover {
      transform: translateY(-4px);
      background: linear-gradient(90deg, var(--blue), #2b2b80);
      color: var(--gold);
      box-shadow: 0 14px 40px rgba(1, 6, 40, 0.42);
    }

    .btn-back {
      background: transparent;
      border: 1px solid rgba(255, 255, 255, 0.15);
      color: #d9e6ff;
      font-weight: 600;
      padding: 10px 16px;
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    .btn-back:hover {
      background: rgba(255, 255, 255, 0.08);
      color: var(--gold);
      transform: translateY(-3px);
    }

</style>
@endpush

  <main class="apply-wrap">
    <div class="apply-header">
      <div class="brand-badge"><img src="{{ asset('img/logo.png') }}" alt="University logo" /></div>
      <div>
        <h1>Student Registeration </h1>
        <p>Register as a Student to access university resources and internal services.</p>
      </div>
    </div>

    <section class="panel">
      <form id="adminForm">
        <div class="row g-3">
          <div class="col-md-12">
            <label class="form-label">Your Email *</label>
            <input type="email" class="form-control" placeholder="Your Email" required>
          </div>
          <div class="col-md-12">
            <label class="form-label">Password *</label>
            <input type="password" class="form-control" placeholder="Password (min 6 chars)" minlength="6" required>
          </div>
        </div>

        <div class="col-12 d-grid mt-4 gap-2">
           <button type="submit" class="btn-primary-apply">Login </button>
          <button type="submit" class="btn-primary-apply">Student Registeration </button>
          <button type="button" class="btn-back" onclick="history.back()">
            <i class="fa-solid fa-arrow-left"></i> Back
          </button>
        </div>
      </form>
    </section>
  </main>

  <script>
    document.getElementById('adminForm').onsubmit = (e) => {
      e.preventDefault();
      // تحويل المستخدم مباشرة إلى صفحة admin_dashboard.html بعد التسجيل
      window.location.href = "staff_after_login.html";
    };



@endsection
