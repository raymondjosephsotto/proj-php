<?php
require('../model/database.php');
require('../model/quilter_db.php');
require('../model/quilt_db.php');

$setday = strtotime('May 04 2019');

$action = filter_input(INPUT_POST, 'action');
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$quilter_id = filter_input(INPUT_POST, 'quilter_id');



if ($quilter_id == NULL || $fname == NULL || $lname == NULL ) {
    $error = "Invalid data. Check all fields and try again.";
    include('../errors/error.php');
} else {
    require_once('../model/database.php');

    //Fetch the Quilter Info to the database
    global $db;
    $query = "SELECT * FROM quilt_entry
           WHERE quilter_id='".$quilter_id."'";
    $statement = $db->prepare($query);
    $statement->execute();
    $column = $statement->fetchAll();
    $statement->closeCursor(); 

}

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
        <li> <a href="quilt_selection.php">ENTER A QUILT</a></li>
		  <li> <a href="../quilt_entry/quilt_entry.php">SELECT QUILT ENTRY</a></li>
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
     
<h1>Jax Quilt Show Date: <?php echo date('m/d/Y', $setday);?></h1>

    <section id="section1">
        <!-- display a table of products -->
        <h2>Quilt Show Selection:</h2>
        <h3>Name:
        <?php echo htmlspecialchars($fname); echo ' '; echo htmlspecialchars($lname); ?></h3><br>
        <table>
            <tr>
                <th>Quilter Id</th>
                <th>Quilt Id</th>
                <th>Quilt Name</th>
                <th>&nbsp;</th>
        
            </tr>
            <?php foreach($column AS $result) : ?>
            <tr>
                <td><?php echo ($result['quilter_id']); ?></td>
                <td>
                <?php echo ($result['quilt_id']);?>
                </td>
                <td><?php echo ($result['qname']); ?></td>
                <td>
                <form action="." method="post">
                    <input type="hidden" name='selected'
                           value="#">
                    <input type="submit" name="submit" value="Select">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>  
    
    </section>
	  
	  
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
