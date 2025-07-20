<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>KMH - Kapileshwar Mishra Hospital and College</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
  body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: linear-gradient(135deg, #e0f7ff, #e0d4fd);
    overflow-x: hidden;
    perspective: 1000px;
  }

  .navbar {
    background: linear-gradient(to right, #6f42c1, #9c27b0);
    box-shadow: 0 4px 20px rgba(0,0,0,0.2);
  }

  .nav-link {
    color: #fff !important;
    transition: transform 0.3s ease, color 0.3s ease, text-shadow 0.3s;
  }

  .nav-link:hover {
    transform: scale(1.08) rotateX(5deg);
    color: #ffeb3b !important;
    text-shadow: 0 0 10px rgba(255, 235, 59, 0.7);
  }

  .hero {
    background: url('https://images.unsplash.com/photo-1588776814546-ec7ee4d6c0f0?auto=format&fit=crop&w=1950&q=80') center/cover no-repeat;
    height: 100vh;
    color: white;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-shadow: 2px 2px 10px rgba(0,0,0,0.8);
    animation: fadeInHero 2s ease-out forwards;
  }

  @keyframes fadeInHero {
    from { opacity: 0; transform: translateY(50px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .hero h1 {
    font-size: 4rem;
    font-weight: bold;
    animation: slideIn 1.5s ease-out;
  }

  .hero p {
    font-size: 1.5rem;
    margin-bottom: 2rem;
    animation: slideIn 2s ease-out;
  }

  @keyframes slideIn {
    from { transform: translateY(30px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
  }

  .hero .btn {
    padding: 12px 30px;
    font-size: 1.2rem;
    border-radius: 30px;
    background: linear-gradient(45deg, #fff, #e0d4fd);
    box-shadow: 0 0 20px rgba(255,255,255,0.5);
    transition: all 0.3s ease;
  }

  .hero .btn:hover {
    transform: scale(1.05);
    background: linear-gradient(45deg, #e0d4fd, #fff);
    box-shadow: 0 0 30px rgba(255,255,255,0.7);
  }

  .doctor-card {
    border: none;
    border-radius: 16px;
    transform-style: preserve-3d;
    perspective: 600px;
    transition: transform 0.5s ease, box-shadow 0.3s ease;
    background: linear-gradient(to bottom right, #ffffff, #f3e9ff);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
  }

  .doctor-card:hover {
    transform: rotateY(5deg) scale(1.02);
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
  }

  .appointment-section {
    background: linear-gradient(to right, #f0f8ff, #e3dcff);
    padding: 50px 20px;
    border-radius: 20px;
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    animation: fadeIn 2s ease forwards;
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: scale(0.95); }
    to { opacity: 1; transform: scale(1); }
  }

  .form-control, .form-select {
    border-radius: 10px;
    border: 2px solid #b39ddb;
    transition: all 0.3s ease;
  }

  .form-control:focus, .form-select:focus {
    box-shadow: 0 0 15px rgba(111, 66, 193, 0.4);
    border-color: #6f42c1;
  }

  footer {
    background: linear-gradient(to right, #6f42c1, #512da8);
    color: white;
    text-align: center;
    padding: 20px 0;
    margin-top: 60px;
    box-shadow: 0 -5px 20px rgba(0,0,0,0.2);
  }

  .ambulance {
    width: 120px;
    position: absolute;
    bottom: 10px;
    animation: moveAmbulance 10s linear infinite;
    filter: drop-shadow(0 0 10px #fff);
  }

  @keyframes moveAmbulance {
    0% { left: -150px; }
    100% { left: 100%; }
  }

  html {
    scroll-behavior: smooth;
  }

  @media (max-width: 768px) {
    .hero h1 {
      font-size: 2.5rem;
    }
  }
</style>

</head>
<body>

  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
      <?php include 'navbar.php'; ?>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
     
    </div>
  </nav>

  <!-- Hero Banner -->
  <section class="hero text-center">
    <h1>Welcome to KMH (Kapileshwar Mishra Hospital).</h1>
    <p>Your Health, Our Priority</p>
    <a href="#appointment" class="btn btn-light">Book Appointment</a>
  </section>

  <!-- Animated Ambulance -->
  <img src="ambulance.png" class="ambulance" alt="Ambulance">

  <!-- Doctor Profiles -->
  <section class="container my-5">
    <h2 class="text-center mb-4">our extraordinary doctors</h2>
    <div class="row justify-content-center g-4">
      <!-- Doctor 1 -->
      <div class="col-md-3">
        <div class="card doctor-card text-center">
          <img src="https://randomuser.me/api/portraits/men/32.jpg" class="card-img-top" alt="Dr. John Smith">
          <div class="card-body">
            <h5 class="card-title">Dr. Abhishek kumar yadav</h5>
            <p class="card-text">Cardiologist</p>
            <a href="#" class="btn btn-primary">Meet Now</a>
          </div>
        </div>
      </div>
      <!-- Doctor 2 -->
      <div class="col-md-3">
        <div class="card doctor-card text-center">
          <img src="https://randomuser.me/api/portraits/women/44.jpg" class="card-img-top" alt="Dr. Jane Doe">
          <div class="card-body">
            <h5 class="card-title">Dr.safura tabassum</h5>
            <p class="card-text">Nephrologist</p>
            <a href="#" class="btn btn-primary">Meet Now</a>
          </div>
        </div>
      </div>
      <!-- Doctor 3 -->
      <div class="col-md-3">
        <div class="card doctor-card text-center">
          <img src="https://randomuser.me/api/portraits/men/85.jpg" class="card-img-top" alt="Dr. Raj Patel">
          <div class="card-body">
            <h5 class="card-title">Dr. Amrit ayush</h5>
            <p class="card-text">Neurologist</p>
            <a href="#" class="btn btn-primary">Meet Now</a>
          </div>
        </div>
      </div>
      <!-- Doctor 4 -->
      <div class="col-md-3">
        <div class="card doctor-card text-center">
          <img src="https://randomuser.me/api/portraits/women/68.jpg" class="card-img-top" alt="Dr. Sarah Lee">
          <div class="card-body">
            <h5 class="card-title">Dr. Kriti singh</h5>
            <p class="card-text">gastroenterologist</p>
            <a href="#" class="btn btn-primary">Meet Now</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Appointment Form -->
  <section id="appointment" class="container appointment-section">
    <h2 class="text-center mb-4">Book an Appointment</h2>
    <form action="book_appointment.php" method="POST" class="row g-3 justify-content-center">
      <div class="col-md-5">
        <input type="text" name="name" class="form-control" placeholder="Your Name" required>
      </div>
      <div class="col-md-5">
        <input type="email" name="email" class="form-control" placeholder="Your Email" required>
      </div>
      <div class="col-md-5">
        <input type="date" name="appointment_date" class="form-control" required>
      </div>
      <div class="col-md-5">
        <select name="doctor_id" class="form-select" required>
          <option selected disabled>Select Doctor</option>
          <option value="1">Dr. Abhishek kumar yadav - Cardiologist</option>
          <option value="2">Dr.safura tabassum - Nephrologist</option>
          <option value="3">Dr. Amrit ayush - Neurologist</option>
          <option value="4">Dr. Kriti singh - gastroenterologist</option>
            <option value="5"> others </option>
        </select>
      </div>
      <div class="col-md-10 text-center">
        <button type="submit" class="btn btn-primary">Book Appointment</button>
      </div>
    </form>
  </section>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
   
    
  <!-- About Section -->
    <h3 class="section-title">Who We Are</h3>
      <p>KMH Hospital, established in 2020, has been a beacon of healthcare excellence in the region. Our mission is to provide compassionate and comprehensive medical care to all our patients.</p>
    </div>
  </div>

  <!-- Achievements -->
  <div class="row text-center mb-5">
    <div class="col-md-4">
      <img src="https://img.icons8.com/ios-filled/50/000000/medal.png" class="achievement-icon" alt="Achievements Icon">
      <h4>6+ Years of Service</h4>
    </div>
    <div class="col-md-4">
      <img src="https://img.icons8.com/ios-filled/50/000000/hospital-room.png" class="achievement-icon" alt="Hospital Icon">
      <h4>500+ Beds</h4>
    </div>
    <div class="col-md-4">
      <img src="https://img.icons8.com/ios-filled/50/000000/teamwork.png" class="achievement-icon" alt="Teamwork Icon">
      <h4>1000+ Staff Members</h4>
    </div>
  </div>

  
 

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


<!-- Footer -->
  <footer>
    <div class="container text-center">
      <p>&copy; 2025 KMH Hospital. All Rights Reserved.</p>
    </div>
  </footer>
</body>
</html>









































