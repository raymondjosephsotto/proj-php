<?php
require('../model/database.php');

    // get the data from the form
    $setday = strtotime('May 04 2019');
	  // get the data from the form
    $quilter_id = filter_input(INPUT_POST, 'quilter_id', FILTER_VALIDATE_FLOAT);
    $qname = filter_input(INPUT_POST, 'qname');
	$qlength = filter_input(INPUT_POST, 'qlength', FILTER_VALIDATE_FLOAT);
	$qwidth = filter_input(INPUT_POST, 'qwidth', FILTER_VALIDATE_FLOAT);
    $details = filter_input(INPUT_POST, 'details');
    $details = htmlspecialchars($details);  
    // NOTE: Must code htmlspecialchars before nl2br for this to work correctly
    $details = nl2br($details, false); 

// //Validate Inputs
if ($quilter_id == NULL || $quilter_id == FALSE || $qname == NULL || $qlength == NULL || $qlength == FALSE || $qwidth == NULL || $qwidth == FALSE || $details == NULL) {
    $error = "Invalid data. Check all fields and try again.";
    include('../errors/error.php');
} 
else {
    require_once('../model/database.php');

    //Add the product to the database
    global $db;
    $query = 'INSERT INTO quilt_entry
                 (quilter_id, qname, qlength, qwidth, details)
              VALUES
                 (:quilter_id, :qname, :qlength, :qwidth, :details)';
    $statement = $db->prepare($query);
    $statement->bindValue(':quilter_id', $quilter_id);
    $statement->bindValue(':qname', $qname);
    $statement->bindValue(':qlength', $qlength);
	$statement->bindValue(':qwidth', $qwidth);
	$statement->bindValue(':details', $details);
    $statement->execute();
    $statement->closeCursor();
}


$sql = $db->query("SELECT MAX(quilt_id) AS max_id FROM quilt_entry;");

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
        <li><a href="../quilter_account_setup/quilter_account_setup.php">SIGNUP</a></li>
        <li> <a href="quilt_entry.php">ENTER A QUILT</a></li>
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
 <h1>Quilt Entry Information</h1>

        <label>Quilt ID:</label>
        <span><?php echo htmlspecialchars($id); ?></span><br>
        <br>
        <label>Quilt Name:</label>
        <span><?php echo htmlspecialchars($qname); ?></span><br>
        <br>
		<span>Description:</span><br>
        <p><?php echo $details; ?></p><br>
		
		<fieldset>
		<legend>Dimensions:</legend>
		<label>Length:</label>
        <span><?php echo htmlspecialchars($qlength); echo ' '; echo 'in'; ?></span><br>
		
        <label>Width:</label>
        <span><?php echo htmlspecialchars($qwidth); echo ' '; echo 'in'; ?></span><br>
		</fieldset>
        <form method="get" action="quilt_entry.php">
    <button type="submit">Back</button> 
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
