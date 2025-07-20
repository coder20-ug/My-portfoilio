<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Our Alumni - KMH</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    .alumni-card {
      background: linear-gradient(145deg, #f9f9ff, #eef0ff);
      border-radius: 1rem;
      transition: transform 0.5s ease, box-shadow 0.5s ease;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      height: 100%;
    }
    .alumni-card:hover {
      transform: scale(1.05) rotateX(4deg);
      box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    }
    .alumni-img {
      border-radius: 50%;
      width: 100px;
      height: 100px;
      object-fit: cover;
      margin-bottom: 1rem;
      border: 3px solid #6f42c1;
    }
    footer {
      background: linear-gradient(to right, #6f42c1, #512da8);
      color: white;
      padding: 1.5rem 0;
      margin-top: 4rem;
      text-align: center;
    }
    .btn-know-more {
      background-color: #6f42c1;
      color: white;
      border: none;
      margin-top: 1rem;
    }
    .btn-know-more:hover {
      background-color: #512da8;
    }
  </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<section class="container my-5">
  <h2 class="text-center mb-5">Our Distinguished Alumni</h2>
  <div class="row g-4">

    <!-- Alumni Cards Example -->
    <div class="col-md-4">
      <div class="alumni-card p-4 text-center">
        <img src="https://randomuser.me/api/portraits/men/21.jpg" class="alumni-img" alt="Dr. Abhishekumar Yadav">
        <h5>Dr. Abhishekumar Yadav</h5>
        <p><strong>Department:</strong> Cardiology</p>
        <p>Performed 100+ heart surgeries, recipient of National & State Awards.</p>
        <a href="alumni/abhishek-yadav.php" class="btn btn-know-more">Know More</a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="alumni-card p-4 text-center">
        <img src="https://randomuser.me/api/portraits/men/32.jpg" class="alumni-img" alt="Dr. Amrit Ayush">
        <h5>Dr. Amrit Ayush</h5>
        <p><strong>Department:</strong> Neurology</p>
        <p>Well-known neurologist, Nobel nominee, research pioneer.</p>
        <a href="alumni/amrit-ayush.php" class="btn btn-know-more">Know More</a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="alumni-card p-4 text-center">
        <img src="https://randomuser.me/api/portraits/women/50.jpg" class="alumni-img" alt="Dr. Kirti Singh">
        <h5>Dr. Kirti Singh</h5>
        <p><strong>Department:</strong> Surgery</p>
        <p>Harvard gold medalist, international fellowships in surgery.</p>
        <a href="alumni/kirti-singh.php" class="btn btn-know-more">Know More</a>
      </div>
    </div>

    <!-- Additional Alumni -->
    <div class="col-md-4">
      <div class="alumni-card p-4 text-center">
        <img src="https://randomuser.me/api/portraits/men/55.jpg" class="alumni-img" alt="Dr. Rajeev Sinha">
        <h5>Dr. Rajeev Sinha</h5>
        <p><strong>Department:</strong> Orthopedics</p>
        <p>Specialist in complex bone surgery. Published in 10+ global journals.</p>
        <a href="alumni/rajeev-sinha.php" class="btn btn-know-more">Know More</a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="alumni-card p-4 text-center">
        <img src="https://randomuser.me/api/portraits/women/62.jpg" class="alumni-img" alt="Dr. Meera Gupta">
        <h5>Dr. Meera Gupta</h5>
        <p><strong>Department:</strong> Pediatrics</p>
        <p>Expert in child health and development, UNICEF collaborator.</p>
        <a href="alumni/meera-gupta.php" class="btn btn-know-more">Know More</a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="alumni-card p-4 text-center">
        <img src="https://randomuser.me/api/portraits/men/45.jpg" class="alumni-img" alt="Dr. Varun Singh">
        <h5>Dr. Varun Singh</h5>
        <p><strong>Department:</strong> Radiology</p>
        <p>Leading MRI and CT scan expert with AI-based diagnosis tools.</p>
        <a href="alumni/varun-singh.php" class="btn btn-know-more">Know More</a>
      </div>
    </div>

  </div>
</section>

<footer>
  <p>&copy; 2025 KMH Hospital & College. All Rights Reserved.</p>
</footer>

</body>
</html>
