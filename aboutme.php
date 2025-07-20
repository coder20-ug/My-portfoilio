

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>About Me</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/style.css" />
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Orbitron', sans-serif;
      background: url('moon.jpg') no-repeat center center fixed;
      background-size: 100% 100%;
      color: white;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      overflow-x: hidden;
      padding: 20px;
    }

    .container {
      max-width: 1100px;
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      padding: 40px;
      box-shadow: 0 15px 30px rgba(0,0,0,0.5);
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      animation: fadeInUp 1.2s ease-out;
    }

    .left {
      flex: 1 1 250px;
    }

    .left img {
      width: 100%;
      max-width: 300px;
      border-radius: 15px;
      animation: floatImg 4s ease-in-out infinite;
    }

    .right {
      flex: 2 1 500px;
    }

    h1 {
      font-size: 2.8rem;
      margin-bottom: 20px;
      color: #ffeb3b;
      animation: fadeIn 1s ease-out;
    }

    p {
      font-size: 1.1rem;
      margin-bottom: 15px;
      color: rgba(13, 17, 14, 0.8);
      line-height: 1.6;
      animation: fadeIn 1.4s ease-out;
    }

    strong {
      color: #ffc107;
    }

    .btn {
      display: inline-block;
      margin-top: 20px;
      background-color: #ffc107;
      color: black;
      padding: 10px 20px;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
      transition: background 0.3s ease;
      animation: fadeIn 1.6s ease-out;
    }

    .btn:hover {
      background-color: #ff9800;
    }

    @keyframes fadeInUp {
      0% { opacity: 0; transform: translateY(40px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to   { opacity: 1; }
    }

    @keyframes floatImg {
      0%, 100% { transform: translateY(0px); }
      50% { transform: translateY(-10px); }
    }

    @media (max-width: 768px) {
      .container {
        flex-direction: column;
        align-items: center;
        padding: 20px;
      }

      .left img {
        max-width: 200px;
      }

      h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="left">
      <img src="left.jpg" alt="Ayush Photo" />
    </div>
    <div class="right">
      <h1>About Me</h1>
      <p>Hello! My name is Ayush. I come from a non-technical background, but my curiosity and passion for technology pushed me to explore the world of programming and web development.</p>
      <p>After completing my graduation from <strong>Allahabad University</strong>, I realized my interest in building websites and digital experiences. I started learning on my own, facing many challenges, but never gave up. Eventually, I enrolled in a <strong>1-year Full Stack Web Development course</strong> where I gained hands-on experience in HTML, CSS, JavaScript, PHP, MySQL, and frameworks like Bootstrap and React.</p>
      <p>Today, I can confidently build modern, responsive, and dynamic web applications. I continue to learn every day and aim to become a top-tier developer who creates impactful solutions.</p>
      <p>If you're curious to see the projects I've built or want to collaborate, feel free to explore the rest of my portfolio!</p>
      <a href="projects.php" class="btn">Explore More</a>
    </div>
  </div>
</body>
</html>
