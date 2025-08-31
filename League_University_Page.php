<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>League University</title>

  <!-- Icons & Fonts -->
  <link rel="stylesheet" href="login.css" />
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Goblin+One&display=swap" rel="stylesheet" />

  <!-- Loader Styles -->
  <style>
    /* [unchanged loader styles] */
  </style>
</head>
<style>
    body {
      margin: 0;
      font-family: "Goblin One", serif;
      background-color: #000;
      overflow-x: hidden;
    }

    #loader-wrapper {
      position: fixed;
      inset: 0;
      background: rgb(252, 252, 255);
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
      transition: opacity 0.5s ease;
    }

    .loader {
      width: 150px;
      height: auto;
    }
  </style>
</head>

<body id="top">
  <!-- 🔄 Loader Screen -->
  <div id="loader-wrapper">
    <img class="loader" src="img/League University Logo.jpg" alt="Loading..." />
  </div>

  <!-- ✅ Main Page Content -->
  <div id="main-content">
    <!-- Header -->
    <header>
      <a href="#" class="logo">
        <img src="img/League University Logo.jpg" alt="League University Logo" />
      </a>
      <ul class="navlist">
        <li><a href="#">Home</a></li>
        <li><a href="https://www.youtube.com/watch?v=Qy_6LXW-enM" target="_blank">Gameplay</a></li>
        <li><a href="#">About</a></li>
        <li class="settings-dropdown">
  <a href="#">Setting <i class="ri-arrow-down-s-line"></i></a>
  <ul class="dropdown-content">
    <li><a href="#">Switch account</a></li>
    <li><a href="#">log out</a></li>
  </ul>
</li>
      </ul>
      <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <!-- Background Video -->
    <video autoplay loop controls>
      <source src="video/Outsiders _ PROJECT_ Reckoning Animated Trailer - League of Legends.mp4" type="video/mp4" />
      Your browser does not support the video tag.
    </video>

    <!-- Hero Section -->
    <section class="hero" id="hero-section">
      <div class="hero-text">
        <div class="hero-img">
          <img src="img/League University Logo.jpg" alt="League University Logo" />
        </div>

        <h5>LEAGUE OF LEGENDS CHAMPION</h5>

        <a href="https://www.leagueoflegends.com/en-ph/champions/pyke/" target="_blank">
          <i class="ri-play-fill"> PYKE </i>
        </a>

        <p>ROLE: SUPPORT </p>

        <div>
          <video autoplay muted controls>
            <source src="video/Pyke, the Bloodharbor Ripper _ Login Screen - League of Legends.mp4" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
        </div>
        <a href="https://www.youtube.com/watch?v=CzzICz27az8" target="_blank">
          <i class="ri-play-fill"></i> Highlights
        </a>
      </div>

      <div class="hero-img">
        <img src="img/Pyke.jpg" alt="Pyke Splash Art" class="slide-image" />
      </div>
    </section>

    <!-- Social Media -->
    <h6>MY SOCIAL MEDIA ACCOUNTS</h6>

    <div class="social-icons">
      <div class="icons">
        <a href="https://www.youtube.com/@RobloxRandomContent05" target="_blank"><i class="ri-youtube-line"></i></a>
      </div>
      <div class="icons1">
        <a href="https://www.facebook.com/profile.php?id=61559255027614" target="_blank"><i class="ri-facebook-line"></i></a>
      </div>
      <div class="icons2">
        <a href="https://www.tiktok.com/@imnotkuyajose" target="_blank"><i class="ri-tiktok-line"></i></a>
      </div>
      <div class="icons3">
        <a href="https://www.roblox.com/users/5357981911/profile" target="_blank"><i class="ri-gamepad-line"></i></a>
      </div>
      <div class="icons4">
        <a href="https://www.tiktok.com/@bnbsoul5" target="_blank"><i class="ri-tiktok-line"></i></a>
      </div>
    </div>

    <!-- Scroll Buttons -->
    <div class="scroll-down">
      <a href="#hero-section"><i class="ri-arrow-down-s-fill"></i></a>
    </div>
    <div class="scroll-upi">
      <a href="#top"><i class="ri-arrow-up-s-fill"></i></a>
    </div>
  </div>
    <!-- Hero Section -->
    <section class="hero" id="hero-section">
      <div class="hero-text">
        <div class="hero-img">
          <img src="img/League University Logo.jpg" alt="League University Logo" />
        </div>

        <h5>LEAGUE OF LEGENDS CHAMPION</h5>

        <a href="https://www.leagueoflegends.com/en-ph/champions/akali/" target="_blank">
          <i class="ri-play-fill"> AKALI </i>
        </a>

        <p>ROLE: MID </p>

        <div>
          <video autoplay muted controls>
            <source src="video/Akali, the Rogue Assassin _ Login Screen - League of Legends.mp4" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
        </div>
        <a href="https://www.youtube.com/watch?v=xR25yUXVm7c" target="_blank">
          <i class="ri-play-fill"></i> Highlights
        </a>
      </div>
      <div class="hero-img">
        <img src="img/akali.jpg" alt="Akali Splast Art"class="slide-image" />
      </div>
    </section>
     <section class="hero" id="hero-section">
      <div class="hero-text">
        <div class="hero-img">
          <img src="img/League University Logo.jpg" alt="League University Logo" />
        </div>

        <h5>LEAGUE OF LEGENDS CHAMPION</h5>

        <a href="http://leagueoflegends.com/en-ph/champions/vayne/" target="_blank">
          <i class="ri-play-fill"> VAYNE</i>
        </a>

        <p>ROLE: MARKMAN </p>

        <div>
          <video autoplay muted controls>
            <source src="video/Lunar Revel 2019 _ Login Screen - League of Legends.mp4" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
        </div>
        <a href="https://www.youtube.com/watch?v=EFPKM1rplcY" target="_blank">
          <i class="ri-play-fill"></i> Highlights
        </a>
      </div>

      <div class="hero-img">
        <img src="img/Vayne.jpg" alt="Vayne Splast Art"class="slide-image" />
      </div>
    </section>
     <section class="hero" id="hero-section">
      <div class="hero-text">
        <div class="hero-img">
          <img src="img/League University Logo.jpg" alt="League University Logo" />
        </div>

        <h5>LEAGUE OF LEGENDS CHAMPION</h5>

        <a href="https://www.leagueoflegends.com/en-ph/champions/warwick/" target="_blank">
          <i class="ri-play-fill"> WARWICK </i>
        </a>
        <p>ROLE: JUNGLER</p>

        <div>
          <video autoplay muted controls>
            <source src="video/Warwick, the Uncaged Wrath of Zaun _ Login Screen - League of Legends.mp4" type="video/mp4" />
            Your browser does not support the video tag.
          </video>
        </div>
        <a href="https://www.leagueoflegends.com/en-ph/" target="_blank">Play Now!</a>
        <a href="https://www.youtube.com/watch?v=-jnlJx5dObI" target="_blank">
          <i class="ri-play-fill"></i> Highlights
        </a>
      </div>

      <div class="hero-img">
        <img src="img/warwick.jpg" alt="Warwick SplastArt"class="slide-image" />
      </div>
    </section>
    <div class="pagination">
  <a href="#">&laquo;</a> <!-- Previous -->
  <a href="http://127.0.0.1:5500/League_University.html#">1</a>
  <a href="http://127.0.0.1:5500/League_university_Page2.html">2</a>
  <a href="http://127.0.0.1:5500/League_University_Page3.html">3</a>
  <a href="http://127.0.0.1:5500/League_University_Page4.html">4</a>
  <a href="http://127.0.0.1:5500/League_University_Page5.html">5</a>
  <a href="http://127.0.0.1:5500/League_University_Page6.html">6</a>
  <a href="http://127.0.0.1:5500/League_University_Page7.html">7</a>
  <a href="">8</a>
  <a href="">9</a>
  <a href="">10</a>
   <a href="#">&raquo;</a> <!-- Next -->

 
</div>



  <!-- External Libraries -->
  <script src="https://unpkg.com/scrollreveal"></script>

  <!-- Scripts -->
  <script>
    // Loader Fade Out
    window.addEventListener("load", function () {
      const loader = document.getElementById("loader-wrapper");
      const content = document.getElementById("main-content");

      loader.style.opacity = 1;
      const fadeOut = setInterval(() => {
        loader.style.opacity -= 0.05;
        if (loader.style.opacity <= 0) {
          clearInterval(fadeOut);
          loader.style.display = "none";
          content.style.display = "block";
        }
      }, 50);
    });

    // Menu Toggle + ScrollReveal
    document.addEventListener('DOMContentLoaded', () => {
      const menu = document.querySelector('#menu-icon');
      const navlist = document.querySelector('.navlist');

      if (menu && navlist) {
        menu.addEventListener('click', () => {
          menu.classList.toggle('bx-x');
          navlist.classList.toggle('open');
        });
      }

      const sr = ScrollReveal({
        distance: '65px',
        duration: 2600,
        delay: 450,
        reset: true
      });

      sr.reveal('.hero-text', { delay: 200, origin: 'top' });
         sr.reveal('.hero-img',{ delay: 450, origin: 'top' });
         sr.reveal('.icons',{ delay: 500, origin: 'left'});
         sr.reveal('.icons1', { delay: 500, origin: 'left'});
         sr.reveal('.icons2',{ delay: 500, origin: 'left'});
         sr.reveal('.icons3',{ delay: 500, origin: 'left'});
         sr.reveal('.icons4',{ delay: 500, origin: 'left'});
    });

    // Scroll-Up Button Toggle
    document.addEventListener("DOMContentLoaded", function () {
      const scrollUpBtn = document.querySelector(".scroll-upi");
      scrollUpBtn.style.display = "none";

      window.addEventListener("scroll", () => {
        scrollUpBtn.style.display = window.scrollY > 300 ? "block" : "none";
      });
    });
  </script>

  <!-- Your Custom JS File -->
  <script src="js/script.js"></script>

</body>
</body>
</html>
