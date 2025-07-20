<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us - KMH</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #c9d6ff, #e2e2e2);
      animation: bgFade 5s ease-in-out;
    }

    @keyframes bgFade {
      0% { background-color: #ffffff; }
      100% { background: linear-gradient(135deg, #c9d6ff, #e2e2e2); }
    }

    .contact-container {
      background: linear-gradient(145deg, #ffffff, #dcdcdc);
      box-shadow: 20px 20px 60px #bebebe,
                  -20px -20px 60px #ffffff;
      border-radius: 15px;
      padding: 40px;
      animation: floatIn 1.5s ease;
      transform-style: preserve-3d;
      transition: transform 0.4s;
    }

    .contact-container:hover {
      transform: rotateY(3deg) rotateX(3deg);
    }

    @keyframes floatIn {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    input, textarea {
      transition: all 0.3s ease;
      border-radius: 10px;
      border: 1px solid #ced4da;
    }

    input:focus, textarea:focus {
      box-shadow: 0 0 12px rgba(111, 66, 193, 0.4);
      transform: scale(1.02);
    }

    .btn-primary {
      background: linear-gradient(to right, #6a11cb, #2575fc);
      border: none;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-primary:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    h2 {
      background: linear-gradient(to right, #6a11cb, #2575fc);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <?php include 'navbar.php'; ?>

  <div class="container my-5">
    <div class="contact-container">
      <h2>Contact Us</h2>
      <p><strong>Address:</strong> PATUAHA, SAHARSA BIHAR 852201</p>
      <p><strong>Phone:</strong> +91 7050144245</p>
      <p><strong>Email:</strong> info@kmh123.com</p>
      <p><strong>Working Hours:</strong> Monday to Saturday, 9 AM - 5 PM</p>
      <p>For inquiries, please fill out the form below:</p>

      <form>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
          <label for="message" class="form-label">Message</label>
          <textarea class="form-control" id="message" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>
  </div>

</body>
</html>

<!-- FOOTER -->
<footer class="bg-light text-center text-lg-start">
  <div class="text-center p-3">
    © 2025 KMH. All rights reserved.
  </div>
</footer>
