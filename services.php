<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Our Services - KMH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <style>
      .service-card {
        background: linear-gradient(145deg, #f0f0f5, #ffffff);
        border-radius: 1rem;
        transform: rotateY(0deg);
        transition: transform 0.6s ease-in-out, box-shadow 0.4s ease;
        padding: 2rem 1rem;
      }
      .service-card:hover {
        transform: rotateY(10deg) scale(1.05);
        box-shadow: 0 12px 35px rgba(0,0,0,0.2);
      }
      .service-icon {
        font-size: 2.5rem;
        margin-bottom: 1rem;
        color: #6f42c1;
      }
      footer {
        background: linear-gradient(to right, #6f42c1, #512da8);
        color: #fff;
        text-align: center;
        padding: 1.5rem 0;
        margin-top: 3rem;
      }
    </style>
</head>
<body>

  <!-- NAVIGATION -->
  <?php include 'navbar.php'; ?>

  <!-- SERVICES SECTION -->
  <section class="container my-5">
    <h2 class="text-center mb-5">Our Services</h2>
    <div class="row g-4 justify-content-center">
      <!-- Emergency Care -->
      <div class="col-6 col-md-4 col-lg-3">
        <div class="service-card text-center">
          <div class="service-icon">🚑</div>
          <h5>Emergency Care</h5>
          <p>24/7 ambulance & trauma support</p>
        </div>
      </div>

      <!-- Diet & Nutrition -->
      <div class="col-6 col-md-4 col-lg-3">
        <div class="service-card text-center">
          <div class="service-icon">🥗</div>
          <h5>Diet & Nutrition</h5>
          <p>Personalized meal plans</p>
        </div>
      </div>

      <!-- Pharmacy -->
      <div class="col-6 col-md-4 col-lg-3">
        <div class="service-card text-center">
          <div class="service-icon">💊</div>
          <h5>In‑house Pharmacy</h5>
          <p>All medicines at your doorstep</p>
        </div>
      </div>

      <!-- Arogya Setu Support -->
      <div class="col-6 col-md-4 col-lg-3">
        <div class="service-card text-center">
          <div class="service-icon">📱</div>
          <h5>Arogya Setu Support</h5>
          <p>Digital tracking & guidance</p>
        </div>
      </div>

      <!-- Ayushmann Card -->
      <div class="col-6 col-md-4 col-lg-3">
        <div class="service-card text-center">
          <div class="service-icon">🏥</div>
          <h5>Ayushman Card</h5>
          <p>Cashless treatment assistance</p>
        </div>
      </div>

      <!-- Sunday Free Checkups -->
      <div class="col-6 col-md-4 col-lg-3">
        <div class="service-card text-center">
          <div class="service-icon">🩺</div>
          <h5>Sunday Free Checkups</h5>
          <p>Community health camps</p>
        </div>
      </div>

      <!-- Internships & Training -->
      <div class="col-6 col-md-4 col-lg-3">
        <div class="service-card text-center">
          <div class="service-icon">🎓</div>
          <h5>Internships & Training</h5>
          <p>Hands‑on medical programs</p>
        </div>
      </div>

      <!-- Telemedicine -->
      <div class="col-6 col-md-4 col-lg-3">
        <div class="service-card text-center">
          <div class="service-icon">💻</div>
          <h5>Telemedicine</h5>
          <p>Online doctor consultations</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FOOTER -->
  <footer>
    <p>&copy; 2025 KMH Hospital & College. All Rights Reserved.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
