<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Landing Page</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    header {
      background: linear-gradient(135deg, #007bff, #6610f2);
      color: white;
      padding: 100px 0;
      text-align: center;
    }
    .feature-icon {
      font-size: 40px;
      color: #007bff;
    }
    footer {
      background: #f8f9fa;
      padding: 20px 0;
      text-align: center;
      margin-top: 40px;
    }
  </style>
</head>
<body>
  <!-- Header Section -->
  <header>
    <div class="container">
      <h1 class="display-4 fw-bold">Welcome to Your Website</h1>
      <p class="lead">A clean and modern landing page built with Bootstrap 5</p>
      <a href="#features" class="btn btn-light btn-lg mt-3">Learn More</a>
    </div>
  </header>

  <!-- Features Section -->
  <section id="features" class="py-5">
    <div class="container">
      <div class="row text-center mb-4">
        <h2 class="fw-bold">Features</h2>
        <p class="text-muted">What you can highlight here</p>
      </div>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="card p-4 shadow-sm h-100">
            <div class="feature-icon mb-3">🔥</div>
            <h4>Fast Performance</h4>
            <p class="text-muted">Optimized for speed and smooth experience for users.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card p-4 shadow-sm h-100">
            <div class="feature-icon mb-3">🔒</div>
            <h4>Secure</h4>
            <p class="text-muted">Built with best security practices in mind to keep data safe.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card p-4 shadow-sm h-100">
            <div class="feature-icon mb-3">⚙️</div>
            <h4>Easy Integration</h4>
            <p class="text-muted">Easily connect tools like Google Analytics later.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="py-5 bg-light text-center">
    <div class="container">
      <h2 class="fw-bold">Ready to Get Started?</h2>
      <p class="text-muted mb-4">Add your own content, branding, and analytics code.</p>
      <a href="#" class="btn btn-primary btn-lg">Contact Us</a>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p class="text-muted">© 2025 Your Website. All rights reserved.</p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    // Example JS placeholder
    console.log("Landing page loaded");
  </script>
</body>
</html>
