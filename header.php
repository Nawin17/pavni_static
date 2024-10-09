
<link rel="icon" type="image/x-icon" href="./images/Pavni_Logo.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="./assests/css/bootstrap.min.css" media="all">
<link rel="stylesheet" href="./assests/css/bootstrap-custom.css" media="all">
<link rel="stylesheet" href="./assests/css/media.css" media="all">
<link rel="stylesheet" href="./assests/css/owl.theme.default.min.css" media="all">
<link rel="stylesheet" href="./assests/css/owl.carousel.min.css" media="all">
<link rel="stylesheet" href="./assests/css/slick.css" media="all">
<link rel="stylesheet" href="./assests/css/svg-style.css" media="all">
<link rel="stylesheet" href="./assests/css/svg-style.css" media="all">
<link rel="stylesheet" href="./assests/css/animate.min.css" media="all">
<link rel="stylesheet" href="./assests/css/aos.css" media="all">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
<link dns-prefetch rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link preconnect href="https://fonts.googleapis.com/css2?family=Poppins:wght@10;200;300;400;500;600;700&display=swap" rel="stylesheet">
<!-- Google Tag Manager -->
<script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=JMM_m5bVF2AVQvuM-iGi7qHMYok6FIB0szCXbMKEPZPgfKJ-gLsWlZhRaD0Ajt8in5YeME_R4AEMVA7UoIK6Ng" charset="UTF-8"></script>
<script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-PTHVNLN');
</script>
<style>
  .col-lg-1 {
    flex: 0 0 auto;
    width: 6%;
  }

  p {
    font-size: 18px;
    text-align: justify;
    font-family: Arial, Helvetica, sans-serif;
  }
  ul li{
    text-align: justify;
    font-family: Arial, Helvetica, sans-serif;
  }

  .animated-nav {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    background: #0e4d92cc;
  }

  .animated-nav.infinite {
    -webkit-animation-iteration-count: infinite;
    animation-iteration-count: infinite;
  }

  .animated-nav.hinge {
    -webkit-animation-duration: 2s;
    animation-duration: 2s;
  }

  .animated-nav.bounceIn,
  .animated-nav.bounceOut,
  .animated-nav.flipOutX,
  .animated-nav.flipOutY {
    -webkit-animation-duration: 0.75s;
    animation-duration: 0.75s;
  }

  .pavni-logo-heading {
    font-family: 'Montserrat';
    font-size: 32px;
    font-weight: 700;
  }

  .navbar-brand img {
    position: absolute;
    left: 40px;
    width: 50px;
    top: 0px;
  }

  /* Styling for the dropdown */
  .navbar-nav .dropdown-menu {
    display: none;
    position: absolute;
    background-color: #fff;
    padding: 10px 0;
    list-style-type: none;
    border-radius: 5px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  }

  .navbar-nav .dropdown:hover .dropdown-menu {
    display: block;
  }


  .dropdown-menu li a {
    font-family: "Gotham",sans-serif;
    color: #0E4D92;
    font-weight: 800;
    text-decoration: none;
    display: block;
    font-size: 16px;
    padding: 13px 16px;
  }

  .dropdown-menu li a:hover {
    background-color: #ddd;
    color: #0e4d92;
    border-radius: 5px;
  }

  /* To ensure the dropdown behaves well on mobile */
  .mobile-navbar .dropdown-menu {
    position: static;
    box-shadow: none;
    background-color: white;
    padding: 0;
  }

  .mobile-navbar .dropdown:hover .dropdown-menu {
    display: block;
  }

  .pavni-logo {
    text-align: left;

  }

  @media (max-width: 576px) {
    .animated-nav {
      background: white;
    }


    .navbar-brand img {
      position: absolute;
      left: 7px;
      width: 12%;
      top: 29px;
    }

    .col-6 {
      flex: 0 0 auto;
      width: 75%;
    }

    .row.align-items-center {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .col-sm-4.col-6,
    /* Logo */
    .col-sm-8.col-6,
    /* Heading */
    .d-flex.justify-content-end {
      /* Navbar-toggler */
      flex: 1;
      /* Make each column take equal space */
    }

    .navbar-toggler {
      margin-left: auto;
      /* Ensure the navbar-toggler stays at the end */
    }

    .pavni-logo-heading {
      font-size: 15px;
      text-align: left;
      color: black;
      /* padding: 12px 6px 12px 33px; */
      padding-left: 38px;
      padding-top: 12px;
    }

    /* Reduce margin/padding for better fit */
    .pavni-logo {
      padding: 0;
    }

    .navbar-brand img {
      max-width: 80px;
      /* Adjust logo size if needed */
    }

  }
  @media (max-width: 1660px) and (min-width: 768px) {
    .navbar-expand-md .navbar-nav .nav-link {
        font-size: 15px;
        font-weight: 800;
        font-family: 'Gotham', sans-serif;
    }
}
</style>
<header class="animated-nav">
  <div class="main-head">
    <div class="container-fluid">
      <div class="row align-items-center">
        <!-- Logo Section -->
        <div class="col-lg-1 col-md-3 col-sm-4 col-2">
          <!-- Logo -->
          <a class="navbar-brand" href="./index.php">
            <img src="./images/Pavni_Logo.png" class="img-fluid whitelogo" alt="logo">
            <img src="./images/Pavni_Logo.png" class="img-fluid colorlogo" alt="logo">
          </a>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-8 col-8">
          <!-- Heading -->
          <a class="pavni-logo" href="./index.php" style="color: white;">
            <h2 class="pavni-logo-heading">PAVNI ENGINEERING PRIVATE LIMITED</h2>
</a>
        </div>

        <div class="col-lg-5 col-md-12 col-2 d-flex justify-content-end">
          <!-- Navbar with Hamburger Menu -->
          <nav class="navbar navbar-expand-md">
            <button class="navbar-toggler" type="button" id="mobile-menu-action" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar one"></span>
              <span class="icon-bar two"></span>
              <span class="icon-bar three"></span>
            </button>

            <!-- Mobile Navbar (displayed in small screens) -->
            <div class="mobile-navbar navbar-mob">
              <ul class="navbar-nav">
                 
                <li class="nav-item dropdown">
                  <a class="nav-link">CORPORATE</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./aboutus.php">About Us</a></li>
                    <li><a class="dropdown-item" href="./bod.php">Board of Directors</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link">OPERATIONS</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./ser-productions.php">Productions</a></li>
                    <li><a class="dropdown-item" href="./ser-projects.php">Projects</a></li>
                    <li><a class="dropdown-item" href="./ser-recruitments.php">Recruitments</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./clients.php">CLIENTS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./contact-us.php">CONTACT US</a>
                </li>
                
              </ul>
            </div>
          </nav>
        </div>

      </div>
    </div>
  </div>
</header>