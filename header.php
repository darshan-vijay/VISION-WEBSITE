<?php
require_once 'dbConnect.php';
require_once 'functions.php'; 
echo '  

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<header id="header" class="header fixed-top">
    <div class="d-flex align-items-center justify-content-between" 
       style="padding-left: 1%;
               padding-right: 1%;
               margin-left: 1%;
               margin-right: 1%;">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/faviconOrange.png" alt="">
        <span style="font-weight:1000;font-size:30px;">ECEA</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link  " href="index.php">Home</a></li>
          <li><a class="nav-link " href="sponsors.php">Sponsors</a></li>
          <li><a class="nav-link " href="events.php">Events</a></li>
          <li><a class="nav-link " href="workshops.php">Workshops</a></li>
          <li><a class="nav-link " href="schedule.php">Schedule</a></li>
          ';

          if (isset($_SESSION['userLoggedIn']) && $_SESSION['userLoggedIn'] == 1) {
            echo '<li><a class="nav-link " href="myaccount.php">My Account</a></li>';
            echo '<li><a class="getstarted " href="index.php?logout=true">Logout</a></li>';
          }
          else {
            echo '<li><a class="getstarted  hideit" href="login.php">Login</a></li>';
          }

          echo '
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->';

  ?>