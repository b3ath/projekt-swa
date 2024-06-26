<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ShareIt</title>
  <link rel="icon" type="image/svg" href="./imgs/icons/vaadin--paperplane.svg">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="styles.css">
  <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
</head>

<body>
<header>
    <a href="index.php">
      <div class="group-1">
          <img class="Logo" src="./imgs/icons/vaadin--paperplane.svg", alt="logo">
          <h1>ShareIt</h1>
      </div>
    </a>
    <nav role="navigation" class="primary-navigation">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contactus.php">Contact us</a></li>
            <li><a href="explore.php">Explore</a></li>
        </ul>
    </nav>
</header>
<div class="text-box">
  <div class="text-space">
    <div class="text-1">
      <h1 class="text-colored">Stahuj</h1>
      <h1 class="text-white">a</h1>
      <h1 class="text-colored" >Sdílej</h1>
    </div>
    <div class="text-2">
      <h1 class="text-colored">jakokoliv</h1>
    </div>
    <div class="text-3">
      <h1 class="text-white"> fotku, obrázek, umění</h1>
    </div>
    <div class="text-4">
      <h1 class="text-colored">chceš</h1>
    </div>
  </div>
</div>
<section id="tranding">
  <div class="container">
    <div class="swiper tranding-slider">
      <div class="swiper-wrapper">
        <!-- Slide-start -->
        <div class="swiper-slide tranding-slide">
          <div class="tranding-slide-img">
            <img src="imgs/examples/ex-1.png" alt="Tranding">
          </div>
          <div class="tranding-slide-content">
            <div class="tranding-slide-content-bottom">
              <h2 class="food-name">
                Sunset
              </h2>
            </div>
          </div>
        </div>
        <!-- Slide-end -->
        <!-- Slide-start -->
        <div class="swiper-slide tranding-slide">
          <div class="tranding-slide-img">
            <img src="imgs/examples/ex-2.png" alt="Tranding">
          </div>
          <div class="tranding-slide-content">
            <div class="tranding-slide-content-bottom">
              <h2 class="food-name">
                Cozy night
              </h2>
            </div>
          </div>
        </div>
        <!-- Slide-end -->
        <!-- Slide-start -->
        <div class="swiper-slide tranding-slide">
          <div class="tranding-slide-img">
            <img src="imgs/examples/ex-3.png" alt="Tranding">
          </div>
          <div class="tranding-slide-content">
            <div class="tranding-slide-content-bottom">
              <h2 class="food-name">
                Mount Fuji
              </h2>
            </div>
          </div>
        </div>
        <!-- Slide-end -->
        <!-- Slide-start -->
        <div class="swiper-slide tranding-slide">
          <div class="tranding-slide-img">
            <img src="imgs/examples/tranding-food-3.png" alt="Tranding">
          </div>
          <div class="tranding-slide-content">
            <div class="tranding-slide-content-bottom">
              <h2 class="food-name">
                Vegies bowl
              </h2>
            </div>
          </div>
        </div>
        <!-- Slide-end -->
        <!-- Slide-start -->
        <div class="swiper-slide tranding-slide">
          <div class="tranding-slide-img">
            <img src="imgs/examples/tranding-food-1.png" alt="Tranding">
          </div>
          <div class="tranding-slide-content">
            <div class="tranding-slide-content-bottom">
              <h2 class="food-name">
                Healty dinner
              </h2>
            </div>
          </div>
        </div>
        <!-- Slide-end -->
      </div>
      

      <div class="tranding-slider-control">
        <div class="swiper-button-prev slider-arrow">
          <ion-icon name="arrow-back-outline"></ion-icon>
        </div>
        <div class="swiper-button-next slider-arrow">
          <ion-icon name="arrow-forward-outline"></ion-icon>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
  </div>
</section>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<script src="script.js"></script>

<footer>
  <div class="footer-left">
    <div class="footer-text">
      <h1>Najdi přesně co hledáš</h1>
    </div>
    <div class="footer-mail">
      <img src="imgs/icons/mail-icon.svg" alt="e-mail logo"><h1>jakub.mrlak@seznam.cz</h1>
    </div>
  </div>
  <div class="footer-right">
    <div class="footer-socials">
    <a href="https://www.tiktok.com/explore"><img src="imgs/icons/tiktok-icon.svg"></a>
    <a href="https://www.facebook.com/"><img src="imgs/icons/facebook-icon.svg"></a>
    <a href="https://www.instagram.com/"><img src="imgs/icons/insatgram-icon.svg"></a>
    </div>
    <div class="footer-policy">
      <a><h1>Terms & Conditions</h1></a>
      <a><h1>Privacy Policy</h1></a>
    </div>
  </div>
</footer>
</body>
</html>