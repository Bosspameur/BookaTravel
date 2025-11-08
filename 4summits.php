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
    <div class="container text-center">
      <h1>4 Summits Expedition</h1>
      <p>6 Days / 5 Nights | Toubkal • Ras • Timzguida • Afella<br />
        Start & End: Marrakech<br />
        Trekking Level: 🥾🥾🥾🥾 – Demanding (4,000m+ altitudes)
      </p>
      <h3>Price : 850€</h3>
    </div>
  </section>

  <div class="container my-5">
    <a href="index.php" class="book mb-4 d-inline-block">← Go back</a>

    <!-- Day 1 -->
    <div class="row align-items-center mb-5">
      <div class="col-md-4">
        <img src="./images/summit.jpg" alt="Day 1" class="img-fluid rounded shadow">
      </div>
      <div class="col-md-8">
        <div class="program-day">
          <h3>Day 1 – Arrival in Marrakech & Transfer to Imlil</h3>
          <ul>
            <li>Arrival in Marrakech (airport pickup included)</li>
            <li>Direct transfer to Imlil – the heart of the High Atlas (approx. 1.5–2 hrs)</li>
            <li>Welcome tea & briefing with your mountain guide</li>
            <li>Gear fitting & rental assistance available (rental cost not included)</li>
            <li>Dinner at a cozy mountain guesthouse (private en-suite rooms)</li>
            <li>Overnight in Imlil – rest and acclimatize</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Day 2 -->
    <div class="row align-items-center mb-5">
      <div class="col-md-8 order-md-1 order-2">
        <div class="program-day">
          <h3>Day 2 – Trek to Refuge du Toubkal (3,200m)</h3>
          <ul>
            <li>Early breakfast</li>
            <li>Begin trek through the Mizane Valley</li>
            <li>Stop at Sidi Chamharouch shrine for a picnic lunch</li>
            <li>Continue ascent to Refuge du Toubkal (approx. 5–6 hrs trekking)</li>
            <li>Tea on arrival, dinner, and overnight at the refuge (shared alpine dorms)</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 order-md-2 order-1">
        <img src="./images/2.jpg" alt="Day 2" class="img-fluid rounded shadow">
      </div>
    </div>

    <!-- Day 3 -->
    <div class="row align-items-center mb-5">
      <div class="col-md-4">
        <img src="./images/summit3.jpg" alt="Day 3" class="img-fluid rounded shadow">
      </div>
      <div class="col-md-8">
        <div class="program-day">
          <h3>Day 3 – Summit Ras (4,083m) & Timzguida (4,089m)</h3>
          <ul>
            <li>Pre-dawn alpine start</li>
            <li>Steep and technical ascent to the twin peaks of Ras and Timzguida</li>
            <li>Scrambling sections with panoramic views</li>
            <li>Return to refuge for lunch</li>
            <li>Afternoon at leisure to rest and hydrate</li>
            <li>Dinner and overnight at the refuge</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Day 4 -->
    <div class="row align-items-center mb-5">
      <div class="col-md-8 order-md-1 order-2">
        <div class="program-day">
          <h3>Day 4 – Summit Afella (4,043m)</h3>
          <ul>
            <li>Early morning start</li>
            <li>Climb to the Afella summit, a more remote and rugged 4,000m+ peak</li>
            <li>Option to attempt another nearby summit based on group condition</li>
            <li>Return to the refuge by lunch</li>
            <li>Afternoon to recover, stretch, and prepare for Toubkal</li>
            <li>Dinner and third night at the refuge</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 order-md-2 order-1">
        <img src="./images/summit4.jpg" alt="Day 4" class="img-fluid rounded shadow">
      </div>
    </div>

    <!-- Day 5 -->
    <div class="row align-items-center mb-5">
      <div class="col-md-4">
        <img src="./images/4.jpg" alt="Day 5" class="img-fluid rounded shadow">
      </div>
      <div class="col-md-8">
        <div class="program-day">
          <h3>Day 5 – Summit Toubkal (4,167m) & Return to Imlil</h3>
          <ul>
            <li>Final summit day: ascend Mount Toubkal, the highest peak in North Africa</li>
            <li>Reach the summit early for epic views</li>
            <li>Descend to refuge for hot lunch</li>
            <li>Continue all the way back down to Imlil</li>
            <li>Dinner and overnight at the guesthouse</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Day 6 -->
    <div class="row align-items-center mb-5">
      <div class="col-md-8 order-md-1 order-2">
        <div class="program-day">
          <h3>Day 6 – Return to Marrakech</h3>
          <ul>
            <li>Breakfast at the guesthouse</li>
            <li>Private transfer back to Marrakech</li>
            <li>Drop-off at hotel or airport</li>
            <li>Trip ends upon arrival in the city</li>
          </ul>

          <hr>

          <h3>🧰 Important Notes:</h3>
          <ul>
            <li>Gear rental not included, but available in Imlil (crampons, poles, headlamps, etc.)</li>
            <li>All meals included from Day 1 dinner to Day 6 breakfast</li>
            <li>Mule support & licensed mountain guide included</li>
            <li>Accommodation: alpine refuge + guesthouses with private rooms in Imlil</li>
          </ul>
        </div>
      </div>
      <div class="col-md-4 order-md-2 order-1">
        <img src="./images/8.jpg" alt="Day 6" class="img-fluid rounded shadow">
      </div>
    </div>

    <div class="text-center">
      <a class="book" href="reservation.php">Book Now!</a>
    </div>
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