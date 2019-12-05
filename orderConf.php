<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Order confirmation page">
  <meta name="author" content="Joon Lee">

  <title>MTG Renter</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">MTGRenter</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="decks.php">Decks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="accountCreation.html">Create an Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="search.php">Search</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">

  	<?php
  	
	//Connect to MySQL
	$login = "jlee7";
	$pass = "7zfkbev5";
	$host = "csdb";
	$mySQL = mysql_connect($host, $login, $pass) or die ("Could not connect");
	$db = mysql_select_db("fal19_cis442_1", $mySQL);
	
	//Validate username and password
    
	//Get user input
        $username = $_POST["username"]; 
        $password = $_POST["password"];
	$deck = $_POST["deck"];
	$dateIssued = date(jS F Y);
	$dueDate = date(jS F Y, strtotime("+30 day"));

	//remove any backslashes
        $username = stripslashes($username); 
        $password = stripslashes($password);
	$deck = stripslashes($deck);

	//Queries
	$validateLogin = "SELECT * FROM users WHERE Username = '$username' AND Password = '$password'";
	$orderInfo = "SELECT DeckName, RentPrice, UserID FROM decktype, users WHERE decktype.DeckName = '$deck' AND Username = '$username'";

	//Execute queries
        $result1 = mysql_query($validateLogin);
	$count = mysql_num_rows($result1);
	$result2 = mysql_query($orderInfo);
	$row = mysqli_fetch_assoc($result2);
	$rentPrice = $row["RentPrice"];
	$deckName = $row["DeckName"];
	$userID = $row["UserID"];<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Order confirmation page">
  <meta name="author" content="Joon Lee">

  <title>MTG Renter</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="index.html">MTGRenter</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="decks.php">Decks</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="accountCreation.html">Create an Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="search.php">Search</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">

  	<?php
  	
	//Connect to MySQL
	$login = "jlee7";
	$pass = "7zfkbev5";
	$host = "csdb";
	$mySQL = mysql_connect($host, $login, $pass) or die ("Could not connect");
	$db = mysql_select_db("fal19_cis442_1", $mySQL);
	
	//Validate username and password
    
	//Get user input
        $username = $_POST["username"]; 
        $password = $_POST["password"];
	$deck = $_POST["deck"];

	//remove any backslashes
        $username = stripslashes($username); 
        $password = stripslashes($password);
	$deck = stripslashes($deck);

	//Queries
	$validateLogin = "SELECT * FROM users WHERE Username = '$username' AND Password = '$password'";
	$orderInfo = "SELECT DeckName, RentPrice, UserID FROM decktype, users WHERE decktype.DeckName = '$deck' AND Username = '$username'";

	//Execute queries
        $result1 = mysql_query($validateLogin);
	$count = mysql_num_rows($result1);
	$result2 = mysql_query($orderInfo);
	$row = mysql_fetch_assoc($result2);
	$rentPrice = $row["RentPrice"];
	$deckName = $row["DeckName"];
	$userID = $row["UserID"];

	mysql_close();

	//Check to see if username and password match
        if($count == 1)
	{
		echo '<h1 class="mt-5">You have successfully placed an order!</h1>';
	}
	else
	{
		echo '<h1 class="mt-5">Invalid username or password</h1>'; 
	}

  	?>

      </div>
    </div>
  </div>		

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
