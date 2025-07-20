<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>My Projects</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600&display=swap');

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Orbitron', sans-serif;
      background: url('moon.jpg') no-repeat center center fixed;
      background-size: 100% 100%;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      padding: 40px;
    }

    .container {
      max-width: 1200px;
      width: 100%;
    }

    h1 {
      text-align: center;
      font-size: 3rem;
      margin-bottom: 30px;
      color: #ffea00;
      text-shadow: 2px 2px 10px #000;
    }

    .projects {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
    }

    .project-card {
      background: rgba(255, 255, 255, 0.08);
      border-radius: 20px;
      padding: 20px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
      backdrop-filter: blur(8px);
    }

    .project-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.6);
    }

    .project-card h2 {
      font-size: 1.6rem;
      margin-bottom: 10px;
      color: #ff9800;
    }

    .project-card p {
      font-size: 1rem;
      color: rgba(10, 8, 8, 0.8);
      margin-bottom: 10px;
    }

    .project-card a {
      display: inline-block;
      margin-top: 10px;
      text-decoration: none;
      background-color: #00bcd4;
      color: #fff;
      padding: 8px 16px;
      border-radius: 8px;
      transition: background 0.3s ease;
    }

    .project-card a:hover {
      background-color: #0097a7;
    }

    .project-card i {
      margin-right: 8px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>🚀 My Projects</h1>
    <div class="projects">
      <!-- Project 1 -->
      <div class="project-card">
        <h2><i class="fas fa-hospital"></i> KMH Hospital Website</h2>
        <p>A responsive website for a hospital, providing information about services, doctors, and online appointment booking.</p>
        <a href="http://localhost/portfolio/kmhhome.php" target="_blank">
          <i class="fas fa-link"></i> Open Project
        </a>
      </div>

      <!-- Project 2 -->
      <div class="project-card">
        <h2><i class="fas fa-spider"></i> Spider-Man Fan Page</h2>
        <p>A fan page dedicated to Spider-Man, featuring animations, UI effects, and a modern layout.</p>
        <a href="aui1.php" target="_blank">Open Project</a>
      </div>

      <!-- Project 3 -->
      <div class="project-card">
        <h2><i class="fas fa-motorcycle"></i> 3D Kawasaki Bike Template</h2>
        <p>A 3D web template designed to showcase Kawasaki bikes with cool UI and CSS animations.</p>
        <a href="http://localhost/portfolio/bike.php" target="_blank">
          <i class="fas fa-link"></i> Open Project
        </a>
      </div>
    </div>
  </div>
</body>
</html>
































































































