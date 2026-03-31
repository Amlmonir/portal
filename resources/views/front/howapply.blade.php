<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Application - Faculty of Technology</title>

  <!-- Google Fonts & Icons -->
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
      max-width: 980px;
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

    .stepper {
      margin-top: 14px;
      margin-bottom: 22px;
      position: relative;
    }

    .stepper .line {
      position: absolute;
      left: 56px;
      right: 56px;
      top: 32px;
      height: 4px;
      background: linear-gradient(90deg, rgba(255, 255, 255, 0.06), rgba(255, 255, 255, 0.03));
      border-radius: 8px;
    }

    .stepper .line .fill {
      height: 100%;
      width: 0%;
      background: linear-gradient(90deg, var(--orange), #f6b43a);
      transition: width 450ms cubic-bezier(.2, .9, .2, 1);
      border-radius: 8px;
    }

    .steps {
      display: flex;
      justify-content: space-between;
      position: relative;
      z-index: 10;
    }

    .step {
      width: 56px;
      text-align: center;
      cursor: pointer;
    }

    .step .dot {
      width: 52px;
      height: 52px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      color: #dfe8ff;
      background: rgba(255, 255, 255, 0.02);
      border: 1px solid rgba(255, 255, 255, 0.04);
      transition: all 0.3s ease;
      box-shadow: 0 6px 18px rgba(2, 6, 23, 0.5);
    }

    .step .label {
      margin-top: 8px;
      font-size: 0.78rem;
      color: #c8d6ff;
    }

    .step.active .dot {
      transform: translateY(-6px) scale(1.02);
      background: linear-gradient(135deg, var(--orange), #ffb95a);
      color: #07102b;
      box-shadow: 0 10px 30px rgba(208, 128, 1, 0.18);
    }

    .step.completed .dot {
      background: linear-gradient(135deg, #2ca76b, #24a06a);
      color: #fff;
      transform: translateY(-3px);
    }

    .panel {
      margin-top: 8px;
      padding: 18px;
      border-radius: 12px;
      background: rgba(255, 255, 255, 0.02);
      box-shadow: 0 10px 30px rgba(2, 6, 23, 0.35);
    }

    .fade-slide {
      opacity: 0;
      transform: translateY(12px);
      transition: all 0.4s ease;
    }

    .fade-slide.show {
      opacity: 1;
      transform: translateY(0);
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

    .doc-list h5 {
      color: var(--orange);
      margin-bottom: 15px;
      font-weight: 700;
    }

</style>
@endpush

  <main class="apply-wrap">
    <div class="apply-header">
      <div class="brand-badge">
        <img src="{{ asset('img/logo.png') }}" alt="University logo" />
      </div>
      <div>
        <h1>Online Application — Faculty of Technology</h1>
        <p>Complete the steps below to submit your application for the academic year.</p>
      </div>
    </div>

    <!-- Stepper -->
    <div class="stepper">
      <div class="line">
        <div class="fill" id="progressFill"></div>
      </div>
      <div class="steps">
        <div class="step" data-step="1">
          <div class="dot"><i class="fa-solid fa-lightbulb"></i></div>
          <div class="label">Start</div>
        </div>
        <div class="step" data-step="2">
          <div class="dot"><i class="fa-solid fa-file-arrow-up"></i></div>
          <div class="label">Upload</div>
        </div>
        <div class="step" data-step="3">
          <div class="dot"><i class="fa-solid fa-door-open"></i></div>
          <div class="label">Visit</div>
        </div>
      </div>
    </div>

    <!-- Panels -->
    <section id="panel1" class="panel fade-slide show">
      <h3 style="color:var(--orange)">Step 1 — Application Overview</h3>
      <p>Review the instructions and click Continue to start your application.</p>
      <ul>
        <li><b>Step 2:</b> Fill out your info and upload documents.</li>
        <li><b>Step 3:</b> Visit the campus with your originals.</li>
      </ul>
      <button class="btn-primary-apply mt-3" id="toStep2">Continue to Upload</button>
    </section>

    <section id="panel2" class="panel fade-slide" hidden>
      <form id="applicationForm">
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label">Full Name</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="col-md-6">
            <label class="form-label">National ID</label>
            <input type="text" class="form-control" required>
          </div>
          <div class="col-md-12">
            <label class="form-label">Select Department</label>
            <select class="form-select" required>
              <option>Information Technology</option>
              <option>Mechatronics</option>
              <option>Autotronics</option>
              <option>Petroleum</option>
              <option>Renewable Energy</option>
            </select>
          </div>

          <div class="col-md-12">
            <div class="doc-list">
              <h5>Required Documents Upload</h5>

              <label class="form-label">High School Certificate</label>
              <input type="file" class="form-control mb-3" required>

              <label class="form-label">Final Nomination Card</label>
              <input type="file" class="form-control mb-3" required>

              <label class="form-label">Birth Certificate</label>
              <input type="file" class="form-control mb-3" required>

              <label class="form-label">Military Service Certificate (Males)</label>
              <input type="file" class="form-control mb-3">

              <label class="form-label">Personal Photos</label>
              <input type="file" class="form-control mb-3" multiple required>

              <label class="form-label">Student ID Copy</label>
              <input type="file" class="form-control mb-3" required>

              <label class="form-label">Guardian ID Copy</label>
              <input type="file" class="form-control mb-3" required>
            </div>
          </div>

          <div class="col-12 d-grid mt-3">
            <button type="submit" class="btn-primary-apply">Submit & Continue</button>
          </div>
        </div>
      </form>
    </section>

    <section id="panel3" class="panel fade-slide" hidden>
      <h3 style="color:var(--orange)">Step 3 — Campus Visit</h3>
      <p>Bring your original documents to the university to complete your registration.</p>
      <ul>
        <li>Bring all required original documents.</li>
        <li>Arrive on your scheduled date.</li>
        <li>Follow instructions on campus.</li>
      </ul>
      <a href="{{ url('index') }}" class="btn-primary-apply mt-3">Back to Homepage</a>
    </section>
  </main>

  <script>
    const steps = document.querySelectorAll('.step');
    const panels = document.querySelectorAll('.panel');
    const progress = document.getElementById('progressFill');
    let current = 1;

    function showStep(n) {
      steps.forEach((s, i) => {
        s.classList.toggle('active', i + 1 === n);
        s.classList.toggle('completed', i + 1 < n);
      });
      panels.forEach((p, i) => {
        p.hidden = i + 1 !== n;
        p.classList.toggle('show', i + 1 === n);
      });
      progress.style.width = ((n - 1) / (steps.length - 1)) * 100 + '%';
      current = n;
    }

    showStep(1);

    document.getElementById('toStep2').onclick = () => showStep(2);
    document.getElementById('applicationForm').onsubmit = (e) => {
      e.preventDefault(); showStep(3);
    };



@endsection
