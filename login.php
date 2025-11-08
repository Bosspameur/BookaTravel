<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
    crossorigin="anonymous" />
  <title>Login(USER)</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      display: flex;
      flex-direction: column;
      height: 100vh;
      justify-content: center;
      align-items: center;
    }

    form {
      border: 1px solid blue;
      width: 400px;
      padding: 25px;
      border-radius: 10px;
    }

    .logo-box {
      padding: 10px;
      display: flex;
      justify-content: center;
      flex-direction: column;
      align-items: center;
    }

    #signup-btn {
      text-decoration: none;
      color: white;
    }

    :root {
      --primary-navy: #1a237e;
      --secondary-navy: #0d1b69;
      --primary-yellow: #ffd700;
      --secondary-yellow: #ffed4e;
      --accent-yellow: #fff176;
      --dark-navy: #0a0e3d;
      --light-navy: #3949ab;
      --text-dark: #2c3e50;
      --text-light: #ffffff;
      --bg-light: #f8f9fa;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Raleway', sans-serif;
      line-height: 1.6;
      color: var(--text-dark);
      overflow-x: hidden;
    }

    /* Navigation Styles */
    .navbar-custom {
      background: linear-gradient(135deg, var(--primary-navy) 0%, var(--secondary-navy) 100%);
      backdrop-filter: blur(10px);
      border-bottom: 3px solid var(--primary-yellow);
      transition: all 0.3s ease;
      box-shadow: 0 4px 20px rgba(26, 35, 126, 0.3);
    }

    .navbar-brand {
      font-weight: 700;
      font-size: 1.8rem;
      color: var(--text-light) !important;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .navbar-brand span {
      color: var(--primary-yellow);
    }

    .nav-link {
      color: var(--text-light) !important;
      font-weight: 500;
      margin: 0 15px;
      position: relative;
      transition: all 0.3s ease;
    }

    .nav-link:hover {
      color: var(--primary-yellow) !important;
      transform: translateY(-2px);
    }

    .nav-link::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: -5px;
      left: 50%;
      background: var(--primary-yellow);
      transition: all 0.3s ease;
      transform: translateX(-50%);
    }

    .nav-link:hover::after {
      width: 100%;
    }

    .btn-auth {
      border: 2px solid var(--primary-yellow);
      border-radius: 25px;
      padding: 8px 20px;
      font-weight: 600;
      transition: all 0.3s ease;
      margin: 0 5px;
    }

    .btn-login {
      background: transparent;
      color: var(--primary-yellow) !important;
    }

    .btn-login:hover {
      background: var(--primary-yellow);
      color: var(--primary-navy) !important;
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(255, 215, 0, 0.4);
    }

    .btn-register {
      background: var(--primary-yellow);
      color: var(--primary-navy) !important;
    }

    .btn-register:hover {
      background: var(--secondary-yellow);
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(255, 215, 0, 0.4);
    }

    .btn-reservation {
      background: linear-gradient(45deg, var(--primary-yellow), var(--secondary-yellow));
      border: none;
      border-radius: 25px;
      padding: 10px 25px;
      font-weight: 600;
      color: var(--primary-navy) !important;
      transition: all 0.3s ease;
    }

    .btn-reservation:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 25px rgba(255, 215, 0, 0.5);
    }

    /* Hero Section */
    .hero-section {
      position: relative;
      /* ← AJOUT ESSENTIEL */
      background-image: url('https://sumptuous-events.com/wp-content/uploads/2016/07/marrakech-wedding-planner.jpg');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-color: rgba(11, 31, 58, 0.8);
      background-blend-mode: overlay;
      color: white;
      padding: 200px 0;
      overflow: hidden;
      /* ← pour éviter les débordements */
    }

    .hero-section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><radialGradient id="a" cx="50%" cy="50%"><stop offset="0%" stop-color="%23ffd700" stop-opacity="0.05"/><stop offset="100%" stop-color="%23ffd700" stop-opacity="0"/></radialGradient></defs><circle cx="200" cy="200" r="100" fill="url(%23a)"/><circle cx="800" cy="300" r="150" fill="url(%23a)"/><circle cx="600" cy="700" r="120" fill="url(%23a)"/></svg>');
      opacity: 0.3;
    }

    .hero-content {
      position: relative;
      z-index: 2;
    }

    .hero-content h2 {
      color: var(--primary-yellow);
      font-size: 1.2rem;
      font-weight: 400;
      margin-bottom: 10px;
      letter-spacing: 2px;
      text-transform: uppercase;
    }

    .hero-content h1 {
      color: var(--text-light);
      font-size: 3.5rem;
      font-weight: 700;
      margin-bottom: 20px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
      line-height: 1.2;
    }

    .hero-content .lead {
      color: rgba(255, 255, 255, 0.9);
      font-size: 1.3rem;
      margin-bottom: 30px;
      line-height: 1.8;
    }

    .search-form {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(10px);
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
      position: relative;
      z-index: 2;
    }

    .search-form h4 {
      color: var(--primary-navy);
      font-weight: 700;
      margin-bottom: 25px;
    }

    .form-control {
      border: 2px solid rgba(26, 35, 126, 0.1);
      border-radius: 10px;
      padding: 12px 15px;
      font-size: 1rem;
      transition: all 0.3s ease;
    }

    .form-control:focus {
      border-color: var(--primary-yellow);
      box-shadow: 0 0 0 0.2rem rgba(255, 215, 0, 0.25);
    }

    .btn-search {
      background: linear-gradient(45deg, var(--primary-navy), var(--light-navy));
      border: none;
      border-radius: 10px;
      padding: 12px 30px;
      color: white;
      font-weight: 600;
      width: 100%;
      transition: all 0.3s ease;
    }

    .btn-search:hover {
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(26, 35, 126, 0.4);
    }

    /* Section Styles */
    .section-title {
      text-align: center;
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--primary-navy);
      margin-bottom: 50px;
      position: relative;
    }

    .section-title::after {
      content: '';
      position: absolute;
      width: 80px;
      height: 4px;
      background: linear-gradient(45deg, var(--primary-yellow), var(--secondary-yellow));
      bottom: -15px;
      left: 50%;
      transform: translateX(-50%);
      border-radius: 2px;
    }

    /* About Section */
    .about-section {
      padding: 100px 0;
      background: var(--bg-light);
    }

    .about-video {
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
      position: relative;
    }

    .about-video::after {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(45deg, rgba(26, 35, 126, 0.1), rgba(255, 215, 0, 0.1));
    }

    .about-content h3 {
      color: var(--primary-navy);
      font-size: 1.8rem;
      font-weight: 600;
      margin-bottom: 25px;
      font-style: italic;
    }

    .about-content p {
      font-size: 1.1rem;
      line-height: 1.8;
      margin-bottom: 20px;
      color: var(--text-dark);
    }

    .btn-outline-custom {
      border: 2px solid var(--primary-navy);
      color: var(--primary-navy);
      border-radius: 25px;
      padding: 12px 30px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .btn-outline-custom:hover {
      background: var(--primary-navy);
      color: white;
      transform: translateY(-2px);
      box-shadow: 0 8px 25px rgba(26, 35, 126, 0.3);
    }

    /* Destinations Section */
    .destinations-section {
      padding: 100px 0;
      background: white;
    }

    .destination-card {
      border: none;
      border-radius: 20px;
      overflow: hidden;
      transition: all 0.3s ease;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      position: relative;
    }

    .destination-card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(45deg, rgba(26, 35, 126, 0.05), rgba(255, 215, 0, 0.05));
      opacity: 0;
      transition: all 0.3s ease;
      z-index: 1;
    }

    .destination-card:hover::before {
      opacity: 1;
    }

    .destination-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    .destination-card .card-img-top {
      height: 250px;
      object-fit: cover;
      transition: all 0.3s ease;
    }

    .destination-card:hover .card-img-top {
      transform: scale(1.05);
    }

    .card-body {
      padding: 25px;
      position: relative;
      z-index: 2;
    }

    .card-title {
      color: var(--primary-navy);
      font-weight: 700;
      font-size: 1.3rem;
      margin-bottom: 15px;
    }

    .card-text {
      color: var(--text-dark);
      line-height: 1.6;
      margin-bottom: 20px;
    }
  </style>
</head>

<body>

  <?php
  if (!(isset($_SESSION['id']))) {
  ?>
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">ATLAS<span>ESCAPES</span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
          <i class="fas fa-bars text-white"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item">
              <a class="nav-link" href="./index.php">Home</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#a-propos">About </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#destinations">Destinations</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Photos">Album</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./login.php">Login</a>
            </li>
          </ul>

          <div class="d-flex flex-wrap">
            <a href="reservation.php" class="btn btn-reservation text-white">Book</a>
          </div>
        </div>
      </div>
    </nav>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">
      <div class="logo-box">
        <a class="navbar-brand" href="#">ATLAS<span>ESCAPES</span></a>

      </div>
      <div class="row mb-3">
        <!-- <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label> -->
        <div class="col-sm-12">
          <input
            id="inputEmail"
            name="email"
            type="email"
            class="form-control"
            placeholder="Email" />
        </div>
      </div>
      <div class="row mb-3">
        <!-- <label for="inputPassword3" class="col-sm-2 col-form-label"
          >Password</label
        > -->
        <div class="col-sm-12">
          <input
            id="inputPassword"
            name="pwd"
            type="password"
            class="form-control"
            placeholder="Password" />
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck1" />
            <label class="form-check-label" for="gridCheck1">
              Remeber Me
            </label>
          </div>
        </div>
      </div>
      <div style="float: right">
        <button
          type="submit"
          class="btn btn-primary">
          <a href="./signup.php" id="signup-btn">
            Sign up
          </a>

        </button>

        <button
          type="submit"
          class="btn btn-primary"
          name="login">
          Sign in
        </button>
      </div>
    </form>


  <?php } ?>


  <?php
  //1st step(i.e connection) done through config file
  if (isset($_POST['login'])) {

    if (empty($_POST['email'])) {
      echo "<h4 id='error_login'>Enter email</h4>";
    }

    if (empty($_POST['pwd'])) {
      echo "<h4 id='error_login'>Enter password</h4>";
    }

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pwd']);

    $sql = "SELECT * FROM  customer WHERE customer_email='{$email}';";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) { //if any one data found go inside it
      $row = $result->fetch_assoc();
      if ($password == $row['customer_pwd']) {

        //session will be created only if users email and passwords matched
        session_start();
        $_SESSION['id'] = $row['customer_id'];
        $_SESSION['customer_role'] = $row['customer_role'];

        header("location:profile.php?id={$_SESSION['id']}");
        // put exit after a redirect as header() does not stop execution
        exit;
      } else {
        echo "<h4 id='error_login'>Incorrect password</h4>"; //as user get inside if statem if userEmail matched
      }
    } else {
      if ($_POST['email']) { //it means it will run if email field is filled
        echo "<h4 id='error_login'>(unavailable) please signup first</h4>";
      }
    }
  } //end of 1st ifstatement

  ?>


</body>

</html>