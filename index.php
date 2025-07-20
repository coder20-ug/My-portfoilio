
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Welcome | Ayush Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" />
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Orbitron', sans-serif;
      background: url('Moon.jpg') no-repeat center center fixed;
      background-size: 100% 100%;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      overflow: hidden;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      gap: 30px;
      max-width: 1000px;
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      padding: 30px;
      border-radius: 20px;
      box-shadow: 0 15px 30px rgba(0,0,0,0.5);
      animation: fadeInUp 1.2s ease-out;
    }

    .left, .right {
      flex: 1 1 300px;
    }

    .left img {
      width: 100%;
      border-radius: 20px;
      animation: floatImg 4s ease-in-out infinite;
    }

    .right h1 {
      font-size: 2.8rem;
      margin-bottom: 15px;
      color: #ffeb3b;
      animation: fadeIn 1s ease-out;
    }

    .right p {
      font-size: 1.1rem;
      margin-bottom: 15px;
      color: rgba(8, 6, 6, 0.8);
      line-height: 1.6;
      animation: fadeIn 1.2s ease-out;
    }

    .btn {
      display: inline-block;
      margin-top: 10px;
      padding: 10px 20px;
      background-color: #ffc107;
      color: #000;
      font-weight: bold;
      text-decoration: none;
      border-radius: 8px;
      transition: background 0.3s;
      animation: fadeIn 1.4s ease-out;
    }

    .btn:hover {
      background-color: #ff9800;
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(40px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes floatImg {
      0%, 100% {
        transform: translateY(0px);
      }
      50% {
        transform: translateY(-10px);
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
      <h1>Hello, I'm Ayush</h1>
      <p>A passionate web developer with a creative vision and a strong foundation in HTML, CSS, PHP, and more. I enjoy building interactive and elegant websites from scratch and continuously strive to improve.</p>
      <p>Explore my journey and the projects I've crafted.</p>
      <a href="aboutme.php" class="btn">Know More</a>
    </div>
  </div>
</body>
</html>
