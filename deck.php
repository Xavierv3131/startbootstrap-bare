<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Xavier Vogel">

  <title>MTG Renter - Deck Page</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <?php
    if(isset($_GET["deck"])) {
      $deck = $_GET["deck"];
    }
    else {
      header("Location: decks.php");
    }
    // Connect to MySQL
    $db = mysqli_connect("csdb", "xvoge1", "banshee31", "fal19_cis442_1");
    $deckname = mysql_query($db, "SELECT DeckName FROM decktype WHERE (DecktypeID = $deck )");
	echo $deckname;
    $card = mysql_query($db, "SELECT Card FROM decklist WHERE (DecklistID = $deck)");
    $quan = mysql_query($db, "SELECT CardQuan FROM decklist WHERE (DecklistID = " . $deck . ");");
    $deckcolor = mysql_query($db, "SELECT DeckColor FROM decktype WHERE (DecktypeID = " . $deck . ");");
    $deckprice = mysql_query($db, "SELECT RentPrice FROM decktype WHERE (DecktypeID = " . $deck . ");");
    $image = mysql_query($db, "SELECT ImageLink FROM decktype WHERE (DecktypeID = " . $deck . ");");
	
	



  ?>


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
          <li class="nav-item active">
            <a class="nav-link" href="decks.php">Decks<span class="sr-only">(current)</span></a>
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
        <h1 class="mt-5" style="font-size: 16"><a href="order.php">Order Now!</a></h1>
		<?php print("$deckname"); ?>
        <table class="table table-bordered text-center">
          <tr>
              <td rowspan="3"><img src="chalice.jpg"> </td>
              <td>Deckname: Eldrazi tron </td>
          </tr>
          <tr>
              
              <td>Deck colors: <?php echo(Colorless); ?></td>          
          </tr>
          <tr>
              
              <td>Price to Rent: $<?php echo(120); ?></td>
          </tr>
          <tr>
              <th>Card</th>
              <th>Quantity</th>
          </tr>
          <tr>
              <td><?php echo($card); ?></td>
              <td><?php echo($quan); ?></td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
