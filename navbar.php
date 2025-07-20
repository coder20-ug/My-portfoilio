<!-- navbar.php -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm px-4">
  <a class="navbar-brand text-white fw-bold fs-3" href="index.php">KMH</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link nav-3d" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-3d" href="KMHabout.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link nav-3d" href="services.php">Services</a>
      </li>
        <li class="nav-item">
            <a class="nav-link nav-3d" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link nav-3d" href="alumni.php">Alumni</a>
        </li>
    </ul>
  </div>
</nav>

<style>
/* 3D Hover Effect */
.nav-3d {
  position: relative;
  color: #fff !important;
  font-weight: 500;
  transition: transform 0.4s ease, color 0.3s;
  transform-style: preserve-3d;
}

.nav-3d:hover {
  transform: rotateX(10deg) rotateY(5deg) scale(1.05);
  color: #ffd700 !important; /* gold hover color */
  text-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
}
</style>
