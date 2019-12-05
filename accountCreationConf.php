<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>MTG Renter</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style>
h4{
  text-decoration: underline;
}
</style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">MTGRenter</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
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
          <li class="nav-item active">
            <a class="nav-link" href="accountCreation.html">Create an Account<span class="sr-only">(current)</span></a>
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
        <h1 class="mt-5">Created Account Report</h1>
         <?php
$db = mysqli_connect("csdb", "ichar2", "_fal19_6", "fal19_cis442_1");
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$address = $_POST["address"];
$email = $_POST["email"];
$username = $_POST["user"];
$password = $_POST["password"];
$phone1 = $_POST["phone1"];
$phone2 = $_POST["phone2"];
$phone3 = $_POST["phone3"];
$phone1 = strval($phone1);
$phone2 = strval($phone2);
$phone3 = strval($phone3);

$phone = $phone1 . $phone2 . $phone3;
$fullname = $firstname . " " . $lastname;

$query = "INSERT INTO users (`FirstName` , `LastName`, `Password`, `Email`, `Phone`, `Address`, `username` , `Renting`) 
VALUES ('" . $firstname . "', '" . $lastname . "', '" . $password . "', '" . $email . "', '" . $phone . "', '" . $address
. "', '" . $username . "', 0)";
mysqli_query($db, $query);
   ?>

<h2> Your account has been created.</h2>
<h4> Account of: </h4>
<?php print("$fullname"); ?>
<h4> At: </h4>
<?php print("$address"); ?>
<h4> Email: </h4>
<?php print("$email"); ?>
<h4> Phone Number: </h4>
<?php print("$phone"); ?>
<h4> User Name: </h4>
<?php print("$username"); ?>

      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
