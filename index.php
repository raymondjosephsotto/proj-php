<?php

$setday = strtotime('May 04 2019');

?>



<!doctype html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Jax Quilt Show</title>
<link rel="stylesheet" type="text/css" href="main.css"/>
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>
<body>
<!-- Main Container -->
<div class="container"> 
  <!-- Navigation -->
  <header> <a href="">
    <h4 class="logo">JAX QUILT SHOW</h4>
    </a>
    <nav>
      <ul>
          <li><a href="index.php">HOME</a></li>
        <li><a href="quilter_account_setup/quilter_account_setup.php">SIGNUP</a></li>
        <li> <a href="quilt_entry/quilt_entry.php">ENTER A QUILT</a></li>
		  <li> <a href="quilt_selection/quilt_selection.php">SELECT QUILT ENTRY</a></li>
      </ul>
    </nav>
  </header>
  <!-- Hero Section -->
  <section class="hero" id="hero">
    <h2 class="hero_header">JAX <span class="light">QUILT SHOW</span></h2>
    <p class="tagline"><?php echo date('m/d/Y', $setday); ?></p>
  </section>
  <!-- About Section -->
  <section class="about" id="about">
    <h2 class="hidden">About</h2>
    <p class="text_column">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
    <p class="text_column">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
    <p class="text_column">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
	  <br>
	  <br>
	  <br>
  </section>

  <!-- Parallax Section -->
  <section class="banner">
    <h2 class="parallax">QUILT</h2>
    <p class="parallax_description">A quilt is a multi-layered textile, traditionally composed of three layers of fiber: a woven cloth top, a layer of batting or wadding, and a woven back, combined using the technique of quilting, the process of sewing the three layers together.</p>
  </section>
  <!-- More Info Section -->
  <footer>
    <article class="footer_column">
      <h3>ABOUT</h3>
      <img src="images/raul-cacho-oses-1382988-unsplash.jpg" alt="" width="400" height="200" class="cards"/>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
    </article>
    <article class="footer_column">
      <h3>LOCATION</h3>
      <img src="images/location.png" alt="" width="400" height="200" class="cards"/>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
    </article>
  </footer>

  <!-- Copyrights Section -->
  <div class="copyright">&copy;2015 - <strong>COP2842 - INTERNET PROGRAMMING</strong></div>
</div>
<!-- Main Container Ends -->
</body>
</html>
