<?php
require('../model/database.php');

    // get the data from the form
    $setday = strtotime('May 04 2019');
	$fname = filter_input(INPUT_POST, 'fname');
	$lname = filter_input(INPUT_POST, 'lname');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
    $contact_via = filter_input(INPUT_POST, 'contact_via');
 

// //Validate Inputs
if ($fname == NULL || $lname == NULL || $phone == NULL || $phone == FALSE || $email == NULL || $email == FALSE || $contact_via == NULL) {
    $error = "Invalid data. Check all fields and try again.";
    include('../errors/error.php');
} else {
    require_once('../model/database.php');

    //Add the Quilter Info to the database
    global $db;
    $query = 'INSERT INTO quilter_account_setup
                 (fname, lname, phone, email, contact_via)
              VALUES
                 (:fname, :lname, :phone, :email, :contact_via);';

    $statement = $db->prepare($query);
    $statement->bindValue(':fname', $fname);
    $statement->bindValue(':lname', $lname);
    $statement->bindValue(':phone', $phone);
	$statement->bindValue(':email', $email);
    $statement->bindValue(':contact_via', $contact_via);
    $statement->execute();
    $statement->closeCursor();

    
}

$sql = $db->query("SELECT MAX(quilter_id) AS max_id FROM quilter_account_setup;");

if (!$sql) {
    $error = "Invalid data. Check all fields and try again.";
    include('../errors/error.php');
}

$row = $sql->fetch(PDO::FETCH_ASSOC);
$id = $row['max_id'];

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
       <li><a href="../index.php">HOME</a></li>
        <li><a href="quilter_account_setup.php">SIGNUP</a></li>
        <li> <a href="../quilt_entry/quilt_entry.php">ENTER A QUILT</a></li>
		  <li> <a href="../quilt_selection/quilt_selection.php">SELECT QUILT ENTRY</a></li>
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
<h1>Quilter Account Information</h1>

        <label>Quilter ID:</label>
        <span><?php echo htmlspecialchars($id); ?></span><br>

		<label>Name:</label>
        <span><?php echo htmlspecialchars($fname); echo ' '; echo htmlspecialchars($lname); ?></span><br>
		
        <label>Email Address:</label>
        <span><?php echo htmlspecialchars($email); ?></span><br>

        <label>Phone Number:</label>
        <span><?php echo htmlspecialchars($phone); ?></span><br>
		
		<label>Contact Via:</label>
        <span><?php echo htmlspecialchars($contact_via); ?></span><br><br>
        
        <form method="get" action="quilter_account_setup.php">
    <button type="submit">Back</button>
</form>    
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
      <img src="../images/raul-cacho-oses-1382988-unsplash.jpg" alt="" width="400" height="200" class="cards"/>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
    </article>
    <article class="footer_column">
      <h3>LOCATION</h3>
      <img src="../images/location.png" alt="" width="400" height="200" class="cards"/>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
    </article>
  </footer>

  <!-- Copyrights Section -->
  <div class="copyright">&copy;2015 - <strong>COP2842 - INTERNET PROGRAMMING</strong></div>
</div>
<!-- Main Container Ends -->
</body>
</html>
