<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Spider-Man Comic Book Timeline</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      background: radial-gradient(circle, #0d0d0d, #1a1a1a);
      font-family: 'Orbitron', sans-serif;
      color: white;
      overflow-x: hidden;
      position: relative;
    }

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

    h1 {
      text-align: center;
      color: red;
      margin-top: 60px;
      text-shadow: 2px 2px 5px black;
    }

    .card-3d {
      background: linear-gradient(135deg, #ff0000, #0000ff);
      border-radius: 20px;
      padding: 20px;
      color: white;
      box-shadow: 0 15px 40px rgba(255, 0, 0, 0.5);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      transform-style: preserve-3d;
    }

    .card-3d:hover {
      transform: rotateY(10deg) scale(1.03);
      box-shadow: 0 25px 60px rgba(0, 0, 255, 0.5);
    }

    .comic-img {
      border-radius: 15px;
      width: 100%;
      height: 300px;
      object-fit: cover;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.6);
      margin-bottom: 15px;
    }

    .btn-back {
      background: black;
      color: red;
      border: 2px solid red;
      font-weight: bold;
      transition: 0.3s;
    }

    .btn-back:hover {
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
  <img class="big-spider" src="red.png" alt="Spider Background" />

  <div class="container">
    <h1>🕸️ Spider-Man Comic Releases 🕸️</h1>
    <div class="row mt-5 g-4">

      <!-- Comic 1 -->
      <div class="col-md-4">
        <div class="card-3d">
          <img src="amazingfantasy.png" alt="Amazing Fantasy #15" class="comic-img">
          <h4>Amazing Fantasy #15</h4>
          <p><strong>Release Date:</strong> August 1962</p>
          <p>The very first appearance of Spider-Man by Stan Lee and Steve Ditko.</p>
        </div>
      </div>

      <!-- Comic 2 -->
      <div class="col-md-4">
        <div class="card-3d">
          <img src="amazing spiderman.png" alt="Amazing Spider-Man #1" class="comic-img">
          <h4>Amazing Spider-Man #1</h4>
          <p><strong>Release Date:</strong> March 1963</p>
          <p>First solo Spider-Man comic introducing J. Jonah Jameson and the Fantastic Four crossover.</p>
        </div>
      </div>

      <!-- Comic 3 -->
      <div class="col-md-4">
        <div class="card-3d">
          <img src="amg300.png" alt="Spider-Man #300" class="comic-img">
          <h4>The Amazing Spider-Man #300</h4>
          <p><strong>Release Date:</strong> May 1988</p>
          <p>Introduction of Venom—one of Spider-Man’s greatest foes.</p>
        </div>
      </div>

      <!-- Comic 4 -->
      <div class="col-md-4">
        <div class="card-3d">
          <img src="blue.png" alt="Spider-Man Blue" class="comic-img">
          <h4>Spider-Man: Blue</h4>
          <p><strong>Release Date:</strong> July 2002</p>
          <p>A heartfelt story reflecting Peter’s love for Gwen Stacy and the pain of her loss.</p>
        </div>
      </div>

      <!-- Comic 5 -->
      <div class="col-md-4">
        <div class="card-3d">
          <img src="ultimate.png" alt="Ultimate Spider-Man #1" class="comic-img">
          <h4>Ultimate Spider-Man #1</h4>
          <p><strong>Release Date:</strong> October 2000</p>
          <p>Modern reimagining of Peter Parker in the "Ultimate" universe.</p>
        </div>
      </div>

      <!-- Comic 6 -->
      <div class="col-md-4">
        <div class="card-3d">
          <img src="spiderverse.png" alt="Edge of Spider-Verse" class="comic-img">
          <h4>Edge of Spider-Verse</h4>
          <p><strong>Release Date:</strong> September 2014</p>
          <p>Multiverse storyline introducing Spider-Gwen and Spider-Noir.</p>
        </div>
      </div>
    </div>

    <div class="text-center mt-5">
      <a href="aui1.php" class="btn btn-back">← Back to Home</a>
    </div>
  </div>

  <footer>
    © <?php echo date("Y"); ?> Spider-Man Comic Archive. All Rights Reserved.
  </footer>

</body>
</html>
