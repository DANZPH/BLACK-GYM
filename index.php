<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BLACKGYM Landing Page</title>
  <link rel="icon" href="img/favicon-512x512.png" sizes="512x512" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Open Graph Meta Tags -->
  <meta property="og:title" content="BLACKGYM - Your Fitness Destination">
  <meta property="og:description" content="Achieve your fitness goals with BLACKGYM. Join now to experience state-of-the-art equipment and professional training.">
  <meta property="og:image" content="img/favicon-512x512.png">
  <meta property="og:url" content="https://gym.dazx.xyz/index.php">
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="BLACKGYM">
  <style>
    body {
      background: linear-gradient(90deg, #bdc3c7, #2c3e50);
      height: 100vh; /* Full viewport height */
      margin: 0;
      display: flex;
      flex-direction: column;
      font-family: 'Roboto', sans-serif;
    }
    .navbar {
      background-color: #343a40;
    }
    .navbar-brand, .nav-link {
      color: #ffffff !important;
    }
    .btn-custom {
      margin: 10px;
      background-color: #343a40;
      color: #ffffff;
      border: none;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 5px;
      display: inline-block;
    }
    .btn-custom:hover {
      background-color: #343a40;
      color: #ffffff;
    }
    .main-content {
      flex-grow: 1; /* Occupy remaining space */
      display: flex; /* Flexbox for centering */
      justify-content: center; /* Center horizontally */
      align-items: center; /* Center vertically */
      text-align: center;
    }
    footer {
      background-color: #343a40;
      color: white;
      text-align: center;
      padding: 15px;
      position: fixed;
      width: 100%;
      bottom: 0;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">BLACKGYM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#admin">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#member">Member</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#staff">Staff</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="main-content container">
    <div>
      <h1 class="text-white mb-4">Welcome to BLACKGYM</h1>
      <div class="d-flex justify-content-center">
        <a href="admin/login.php" class="btn btn-custom">Admin </a>
        <a href="member/login.php" class="btn btn-custom">Member</a>
        <a href="admin/login.php" class="btn btn-custom">Staff</a>
      </div>
    </div>
  </div>

  <!-- Footer -->
                    <?php include 'includes/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>