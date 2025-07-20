

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>About Peter Parker</title>
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
      background-image: url('red.jpg');
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

    .about-section {
      padding: 80px 30px;
    }

    .card-3d {
      background: linear-gradient(135deg, #ff0000, #0000ff);
      color: white;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 15px 40px rgba(255, 0, 0, 0.5);
      transition: transform 0.5s ease, box-shadow 0.5s ease;
    }

    .card-3d:hover {
      transform: rotateY(5deg) scale(1.02);
      box-shadow: 0 25px 60px rgba(0, 0, 255, 0.5);
    }

    h1, h2 {
      text-align: center;
      color: red;
      text-shadow: 2px 2px 5px black;
    }

    p {
      font-size: 1.1rem;
      line-height: 1.8;
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
  <img class="big-spider" src="red.jpg" alt="Spider Background" />

  <div class="container about-section">
    <h1>🕷️ Peter Parker's Journey 🕷️</h1>
    <div class="card-3d mt-4">
      <h2>The Birth of Spider-Man</h2>
      <p>
        Peter Parker, a brilliant but shy teenager from Queens, New York, lived a normal life with his Uncle Ben and Aunt May. Gifted in science, Peter often faced bullying and rejection. One day, during a field trip to a science lab, Peter was bitten by a genetically modified spider.
      </p>
      <p>
        The bite granted him extraordinary powers—superhuman strength, enhanced agility, spider-like reflexes, and the ability to cling to walls. Initially using his powers for personal gain, Peter failed to stop a robber who later killed his beloved Uncle Ben.
      </p>

      <h2>With Great Power Comes Great Responsibility</h2>
      <p>
        That moment defined Peter’s life. Realizing his mistake, he vowed to use his abilities to protect others. Creating a red-and-blue suit and designing web-shooters from his scientific knowledge, Peter became the masked vigilante known as Spider-Man.
      </p>
      <p>
        Balancing school, work, and his secret identity, Peter fought against powerful enemies—Green Goblin, Doctor Octopus, Venom, and more—each battle shaping his sense of duty and sacrifice.
      </p>

      <h2>The Symbol of Hope</h2>
      <p>
        Over time, Spider-Man grew into a symbol of hope for New York City. He inspired others in the Spider-Verse and even joined legendary teams like the Avengers. Despite personal loss, Peter Parker remained true to his mission—to stand for justice, no matter the cost.
      </p>

      <div class="text-center mt-4 d-flex flex-column align-items-center gap-3">
  <a href="index.php" class="btn btn-back">← Back to Home</a>
  <a href="book.php" class="btn btn-back">📚 Explore Spider-Man Comics</a>
</div>

    </div>
  </div>

  <footer>
    © <?php echo date("Y"); ?> Spider-Man Fan Page. All Rights Reserved.
  </footer>

</body>
</html>
