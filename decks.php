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
        <h1 class="mt-5">Decks</h1>
        <table>
          <tr>
              <td><img src="chalice.jpg" alt="Chalice of the Void"></td>
              <td><a href="deck.php?deck=1">Eldrazi Tron</a></td>
          <tr>
          <tr>
              <td><img src="amulet.jpg" alt="Amulet of Vigor"></td>
              <td><a href="deck.php?deck=2">Amulet Titan</a></td>          
          <tr>
          <tr>
              <td><img src="gobgui.jpg" alt="Goblin Guide"></td>
              <td><a href="deck.php?deck=3">Burn</a></td>
          <tr>
          <tr>
              <td><img src="liliana.jpg" alt="Liliana"></td>
              <td><a href="deck.php?deck=4">Jund</a></td>
          <tr>
        </table>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
