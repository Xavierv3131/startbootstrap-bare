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
          <li class="nav-item active">
            <a class="nav-link" href="search.php">Search<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h1 class="mt-5">MTG Renter is a renting service for competitive Magic: The Gathering Decks</h1>
         <?php
$db = mysqli_connect("csdb", "ichar2", "_fal19_6", "fal19_cis442_1");
if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$search = $_POST["search"];

$query = "SELECT `Card`,`deckname`,`link` FROM `decklist`, `decktype` WHERE `Card` LIKE '%" . $search ."%'"; 
$matches = mysqli_query($db, $query);
   ?>

<form action = "search.php" method = "post">
<h3> Card Name: </h3>
<input  type = "text "id= "search" name = "search" size = "25" maxlength = "100" />


<?php





$num_rows = mysqli_num_rows($matches);

$num_fields = mysqli_num_fields($matches);

$row = mysqli_fetch_assoc($matches);


$keys = array_keys($row);
if ($search == ""){
print "Empty Search";
}else{
print "<table><caption> <h2> Query Results </h2> </caption>";
print "<tr>";
for ($index = 0; $index < $num_fields; $index++) 
    print "<th>" . $keys[$index] . "</th>";

print "</tr>";

// Output the values of the fields in the rows

for ($row_num = 0; $row_num < $num_rows; $row_num++) 
{
    print "<tr>";
    $values = array_values($row);
    for ($index = 0; $index < $num_fields; $index++)
    {
if ($index != 2){
        $value = htmlspecialchars($values[$index]);
        print "<th>" . $value . "</th> ";
    }else{
$value = $values[$index];
        print "<th>" . $value . "</th> ";

}
}

    print "</tr>";
    $row = mysqli_fetch_assoc($matches);
}
print "</table>";
}

?>

<br />
<input type = "submit" value = "Search for cards">
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
</form>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
