<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Spider-Man Universe</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      background: radial-gradient(circle, #0d0d0d, #1a1a1a);
      overflow-x: hidden;
      font-family: 'Orbitron', sans-serif;
      color: white;
      position: relative;
    }

    /* Web background */
    .web-bg {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-image: url('black.png');
      background-repeat: repeat;
      opacity: 0.05;
      z-index: -3;
    }

    /* Big Spider Image */
    .big-spider {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: -2;
      opacity: 0.07;
      width: 70%;
      max-width: 800px;
      pointer-events: none;
    }

    .hero-section {
      text-align: center;
      padding: 80px 20px;
      color: red;
      text-shadow: 2px 2px 4px black;
    }

    .hero-section h1 {
      font-size: 4rem;
      animation: fadeInDown 2s ease-out;
    }

    @keyframes fadeInDown {
      0% { opacity: 0; transform: translateY(-50px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .spidey-card {
      background: linear-gradient(135deg, #ff0000, #0000ff);
      color: white;
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 15px 40px rgba(255, 0, 0, 0.5);
      transform: rotateY(0deg);
      transition: transform 0.5s ease, box-shadow 0.5s ease;
    }

    .spidey-card:hover {
      transform: rotateY(10deg) scale(1.05);
      box-shadow: 0 25px 60px rgba(0, 0, 255, 0.5);
    }

    .spidey-img {
      width: 100%;
      max-width: 300px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6);
      transition: transform 0.5s ease;
    }

    .spidey-img:hover {
      transform: scale(1.1);
    }

    .btn-web {
      background: black;
      color: red;
      border: 2px solid red;
      font-weight: bold;
      transition: 0.3s;
    }

    .btn-web:hover {
      background: red;
      color: white;
    }

    footer {
      text-align: center;
      padding: 20px;
      margin-top: 40px;
      color: gray;
    }
  </style>
</head>
<body>
  <div class="web-bg"></div>
  <img class="big-spider" src="" alt="Spider Background" />

  <div class="hero-section">
    <h1>Welcome to Spider-Verse</h1>
    <p>Enter the world of Peter Parker and his legendary web-slinging adventures</p>
  </div>

  <div class="container d-flex justify-content-center align-items-center">
    <div class="row">
      <div class="col-md-6 text-center">
        <img src="red.jpg" alt="Spider-Man" class="spidey-img" />
      </div>
      <div class="col-md-6 d-flex align-items-center">
        <div class="spidey-card">
          <h2>Spider-Man</h2>
          <p><strong>Real Name:</strong> Peter Parker</p>
          <p><strong>Abilities:</strong> Wall crawling, enhanced strength, spider-sense, web-shooters</p>
          <p><strong>City:</strong> New York</p>
          <a href="aboutspidy.php" class="btn btn-web mt-3">Know More</a>
        </div>
      </div>
    </div>
  </div>

  <footer>
    © <?php echo date("Y"); ?> Spider-Man Fan Page. All Rights Reserved.
  </footer>
</body>
</html>
