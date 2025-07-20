<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>About Us - KMH</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    .achievement-icon {
      width: 60px;
      margin-bottom: 10px;
      transition: transform 0.3s ease;
    }
    .achievement-icon:hover {
      transform: scale(1.1);
    }
    .rating-card {
      background: #ffffff;
      border-radius: 16px;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease-in-out;
      color: #333;
    }
    .rating-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 6px 25px rgba(0, 0, 0, 0.15);
    }
    .flip-card {
      background-color: transparent;
      width: 300px;
      height: 200px;
      perspective: 1000px;
      margin: 0 auto;
    }
    .flip-card-inner {
      position: relative;
      width: 100%;
      height: 100%;
      transition: transform 1s;
      transform-style: preserve-3d;
    }
    .flip-card:hover .flip-card-inner {
      transform: rotateY(180deg);
    }
    .flip-card-front, .flip-card-back {
      position: absolute;
      backface-visibility: hidden;
      width: 100%;
      height: 100%;
    }
    .flip-card-back {
      transform: rotateY(180deg);
    }
    footer {
      background: linear-gradient(to right, rgb(132, 201, 228), rgb(146, 223, 223));
      color: white;
      text-align: center;
      padding: 20px 0;
      margin-top: 60px;
      box-shadow: 0 -5px 20px rgba(0, 0, 0, 0.2);
    }
    a.btn-primary {
      background-color: #512da8;
      border: none;
    }
    a.btn-primary:hover {
      background-color: #4527a0;
    }
  </style>
</head>
<body>

<!-- NAVIGATION -->
<?php include 'navbar.php'; ?>

<!-- MAIN CONTENT -->
<section class="container my-5 text-center">
  <h2 class="mb-4">About KMH</h2>
  <div class="card-container">
    <div class="flip-card">
      <div class="flip-card-inner">
        <div class="flip-card-front bg-primary text-white p-4 rounded-4">
          <h3>Our Story</h3>
          <p>Established in 2020</p>
        </div>
        <div class="flip-card-back bg-light p-4 rounded-4">
          <h4>Excellence in Care</h4>
          <p>We provide 24/7 expert medical services, patient care, and education in the Bihar region.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Achievements -->
<h3 class="section-title text-center mb-4">KMH Achievements</h3>
<div class="row text-center mb-5">
  <div class="col-md-3">
    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135789.png" class="achievement-icon" alt="Patients">
    <h5 class="mt-2">1.2M+</h5>
    <p>Patients Served</p>
  </div>
  <div class="col-md-3">
    <img src="https://cdn-icons-png.flaticon.com/512/2910/2910791.png" class="achievement-icon" alt="Doctors">
    <h5 class="mt-2">200+</h5>
    <p>Expert Doctors</p>
  </div>
  <div class="col-md-3">
    <img src="https://cdn-icons-png.flaticon.com/512/942/942748.png" class="achievement-icon" alt="Surgeries">
    <h5 class="mt-2">40K+</h5>
    <p>Successful Surgeries</p>
  </div>
  <div class="col-md-3">
    <img src="https://cdn-icons-png.flaticon.com/512/1828/1828884.png" class="achievement-icon" alt="Awards">
    <h5 class="mt-2">25+</h5>
    <p>National Awards</p>
  </div>
</div>

<!-- Ratings -->
<h3 class="section-title text-center mb-4">What People Say</h3>
<div class="row justify-content-center g-4">
  <div class="col-md-3">
    <div class="card rating-card p-3 text-center">
      <img src="https://cdn-icons-png.flaticon.com/512/1384/1384031.png" alt="Instagram" style="width:40px;" class="mx-auto mb-2">
      <h5>Instagram</h5>
      <p>⭐ 4.8/5 (7,500+ followers)</p>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card rating-card p-3 text-center">
      <img src="https://cdn-icons-png.flaticon.com/512/2111/2111589.png" alt="Reddit" style="width:40px;" class="mx-auto mb-2">
      <h5>Reddit</h5>
      <p>⭐ 4.6/5 (r/IndiaHealth)</p>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card rating-card p-3 text-center">
      <img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="YouTube" style="width:40px;" class="mx-auto mb-2">
      <h5>YouTube</h5>
      <p>⭐ 4.9/5 (60K+ Subscribers)</p>
    </div>
  </div>
</div>

<!-- Footer -->
<footer>
  <div class="container text-center">
    <p>&copy; 2025 KMH Hospital. All Rights Reserved.</p>
  </div>
</footer>

</body>
</html>
