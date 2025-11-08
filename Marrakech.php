<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Marrakech & Agafay Desert Escape - Atlas Escapes</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <!-- FontAwesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <!-- Ton CSS custom (à adapter) -->
  <link href="styles.css" rel="stylesheet" />
  <style>
    /* === NAVBAR CUSTOM === */
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

    div.h1 div.p {
      color: var(--secondary-navy);
    }

    main.flex-fill {
      flex: 1 0 auto;
    }

    html,
    body {
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
    }

    .navbar-custom {
      background-color: #141d7a;
      /* Bleu foncé */
      border-bottom: 3px solid #f6d300;
      /* Ligne jaune */
      padding-top: 10px;
      padding-bottom: 10px;
    }

    .navbar-brand {
      font-weight: 700;
      font-size: 1.5rem;
      color: white;
    }

    .navbar-brand span {
      color: #f6d300;
      /* Jaune */
    }

    .navbar-nav .nav-link {
      color: white;
      padding: 0.5rem 1rem;
      transition: color 0.3s;
    }

    .navbar-nav .nav-link:hover {
      color: #f6d300;
      /* Hover jaune */
    }

    .btn-book {
      background-color: #f6d300;
      color: black;
      padding: 0.4rem 1.2rem;
      border-radius: 30px;
      font-weight: 500;
      transition: background-color 0.3s, color 0.3s;
    }

    .btn-book:hover {
      background-color: white;
      color: #141d7a;
      text-decoration: none;
    }

    /* Responsive adjustments */
    .navbar-toggler {
      border: none;
    }

    .navbar-toggler:focus {
      box-shadow: none;
    }


    /* --- Bouton jaune personnalisé --- */
    .btn-yellow {
      background-color: #ffcc00;
      color: #222;
      border: none;
      font-weight: 700;
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    .btn-yellow:hover,
    .btn-yellow:focus {
      background-color: #e6b800;
      color: #111;
      text-decoration: none;
    }

    .book:hover,
    .book:focus {
      background-color: var(--primary-navy);
      color: #111;
      text-decoration: none;
    }

    .book {
      margin: 9px;

      text-align: center;
      text-decoration: none;
      background-color: #f6d300;
      color: black;
      padding: 0.4rem 1.2rem;
      border-radius: 30px;
      font-weight: 500;
      transition: background-color 0.3s, color 0.3s;
    }

    /* --- Section hero --- */
    .section-hero {
      background: url('../images/hero-bg.jpg') center center/cover no-repeat;
      color: var(--secondary-navy);
      padding: 6rem 0 4rem;
      text-align: center;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .section-hero h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
    }

    .section-hero p {
      font-size: 1.25rem;
      font-weight: 400;
      opacity: 0.85;
    }

    /* --- Programme (jours) --- */
    .program-day h3 {
      font-weight: 600;
      margin-bottom: 1rem;
      color: #222;
    }

    .program-day ul {
      list-style: none;
      padding-left: 1rem;
      font-size: 1rem;
      line-height: 1.6;
      color: #444;
    }

    .program-day ul li {
      padding-left: 1.25rem;
      position: relative;
      margin-bottom: 0.5rem;
    }

    /* Puce personnalisée */
    .program-day ul li::before {
      content: "•";
      color: #ffcc00;
      position: absolute;
      left: 0;
      font-weight: 700;
    }

    /* --- Section photos --- */
    .photos-section img {
      max-width: 100%;
      border-radius: 0.5rem;
      box-shadow: 0 4px 12px rgb(0 0 0 / 0.1);
      margin-right: 1rem;
      margin-bottom: 1rem;
      display: inline-block;
      vertical-align: middle;
      transition: transform 0.3s ease;
    }

    .photos-section img:hover {
      transform: scale(1.05);
    }



    /* --- Responsive --- */
    @media (max-width: 767px) {
      .navbar-custom .navbar-brand {
        font-size: 1.4rem;
      }

      .section-hero h1 {
        font-size: 2rem;
      }
    }

    .footer {
      flex-shrink: 0;
      background-color: #1f2225;
      color: #ffffff;
      font-size: 0.95rem;
      letter-spacing: 0.02em;
      padding: 30px 0;
      text-align: center;
    }

    .footer span {
      color: #f6d300;
      font-weight: 600;
    }

    .footer a {
      color: #ffffff;
      margin: 0 10px;
      transition: color 0.3s ease;
    }

    .footer a:hover {
      color: #f6d300;
    }

    .footer .social-icons a {
      font-size: 1.3rem;
      display: inline-block;
      transition: color 0.3s ease;
    }

    /* Animations */
    .animate-fade-in {
      animation: fadeInUp 1s ease-out;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    img {
      border-radius: 12px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }


    /* --- Animations Fade --- */
    .fade-in {
      opacity: 0;
      transform: translateY(20px);
      animation: fadeInUp 0.8s forwards ease-in-out;
    }

    @keyframes fadeInUp {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">ATLAS<span>ESCAPES</span></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <i class="fas fa-bars text-white"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#a-propos">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#destinations">Destinations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#contact">Contact</a>
          </li>
        </ul>
        <a href="reservation.php" class="btn btn-book">Book</a>
      </div>
    </div>
  </nav>

  <main>
    <section class="section-hero py-5 mt-5 fade-in">
      <div class="container">
        <h1>Marrakech & Agafay Desert Escape</h1>
        <p>3 Days / 2 Nights | Arrival & Departure: Marrakech<br />Style: Culture • Adventure • Gnaoua Nights • Comfort & Charm</p>
        <h3>Price: 240€</h3>
      </div>
    </section>

    <div class="container my-5">
<a href="index.php" class="book mb-4 d-inline-block">← Go back</a>

      <!-- Day 1 -->
      <div class="row align-items-center mb-5">
        <div class="col-md-4 mb-3 mb-md-0">
          <img src="./images/marrakech1.jpg" alt="Day 1" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-8">
          <h3>Day 1 – Arrival & Medina Discovery</h3>
          <ul>
            <li>✈ Arrival in Marrakech</li>
            <li>Private pickup at the airport by our team</li>
            <li>Transfer to a charming riad in the medina (private en-suite rooms)</li>
            <li>Welcome mint tea & check-in moment to settle in</li>
            <li>🌿 Afternoon: Guided Balade</li>
            <li>Join a local guide for an easy-paced stroll through the old medina and vibrant souks</li>
            <li>Discover hidden alleyways, artisan workshops, and the lively energy of Jemaa el-Fnaa square</li>
            <li>Optional stop at a spice market or traditional bakery</li>
            <li>🍽 Evening</li>
            <li>Dinner served at the riad, homemade Moroccan cuisine</li>
            <li>Free time to relax on the rooftop or courtyard</li>
            <li>Overnight in Marrakech</li>
          </ul>
        </div>
      </div>

      <!-- Day 2 -->
      <div class="row align-items-center mb-5 flex-md-row-reverse">
        <div class="col-md-4 mb-3 mb-md-0">
          <img src="./images/agafay.webp" alt="Day 2" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-8">
          <h3>Day 2 – Marrakech Highlights & Agafay Desert Experience</h3>
          <ul>
            <li>🍳 Breakfast at the riad</li>
            <li>🕌 Morning Cultural Discovery Tour (guided):</li>
            <li>Visit the Bahia Palace, Koutoubia Mosque, and Saadian Tombs</li>
            <li>Explore the souks, spice market, and local artisan areas</li>
            <li>Optional visit to the Majorelle Garden or YSL Museum</li>
            <li>🏜 Around 2:00 PM – Transfer to Agafay Desert (approx. 1 hr)</li>
            <li>Arrival at a desert camp</li>
            <li>Quad biking adventure across the rocky landscape (optional tandem riding)</li>
            <li>Camel ride through the stony desert dunes</li>
            <li>Pause for a traditional tea break with views over the hills</li>
            <li>✨ Evening in the Dunes</li>
            <li>Settle into your tent or lodge at the Agafay desert camp</li>
            <li>Dinner under the stars, accompanied by live Gnaoua music and warm desert ambiance</li>
            <li>Campfire stories or simply stargaze in silence</li>
            <li>Overnight at Agafay (private tent or lodge)</li>
          </ul>
        </div>
      </div>

      <!-- Day 3 -->
      <div class="row align-items-center mb-5">
        <div class="col-md-4 mb-3 mb-md-0">
          <img src="./images/camel.jpg" alt="Day 3" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-8">
          <h3>Day 3 – Morning Camel Ride & Return to Marrakech</h3>
          <ul>
            <li>☀ Sunrise over the desert</li>
            <li>🍽 Traditional breakfast at the camp</li>
            <li>🐪 Short morning camel ride</li>
            <li>🛻 Late morning transfer back to Marrakech</li>
            <li>Arrival by early afternoon</li>
            <li>Trip ends upon return to the city</li>
          </ul>

          <hr>

          <h3>📝 Optional Add-ons:</h3>
          <ul>
            <li>Upgrade to luxury tent with en-suite bathroom</li>
            <li>Extra night in Marrakech after return</li>
            <li>Photography package or spa treatment</li>
          </ul>
        </div>
      </div>

      <a class="book" href="reservation.php">Book Now !</a>
    </div>
  </main>


  <footer class="footer py-4">
    <div class="container text-center">
      <p class="mb-2">Follow us on social media</p>
      <div class="social-icons mb-3">
        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook fa-lg"></i></a>
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram fa-lg"></i></a>
        <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter fa-lg"></i></a>
        <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube fa-lg"></i></a>
      </div>
      <p class="mb-0">Created by <span>Atlas Escapes Dev</span> | All rights reserved.</p>
    </div>
  </footer>

</body>