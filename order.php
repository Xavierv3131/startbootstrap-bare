<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="This page is for ordering decks">
  <meta name="author" content="Joon Lee">

  <title>MTG Renter</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <script type = "text/javascript">
     <!--
      function checkDeck(){
	  var choice = document.getElementById("deck").selectedIndex;
	  if (choice == 0){
	     alert("You must choose a deck");
	     return false;
	  }
	  else{
	     return true;
	  }
      }
     //-->
     </script>
  
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
        <h1 class="mt-5">Order Decks</h1>
      </div>
    </div>
  </div>
	<form onsubmit = "return checkDeck()" action = "orderConf.php" method = "POST">
		<p />
		<table>
			<tr>
			  <td><strong>Username:</strong></td>
			  <td><input type = "text" id = "username" name = "username" size = "20" /></td>
			  <td>&emsp;&emsp;&emsp;</td>
			  <td rowspan = "2">
			    <select id = "deck" name = "deck">
			      <option>Choose a deck</option>
			      <option>Eldrazi Tron</option>
			      <option>Amulet Titan</option>
			      <option>Burn</option>
			      <option>Jund</option>
			  </select>
			  </td>
			</tr>
			<tr>
			  <td><strong>Password:</strong></td>
			  <td><input type = "password" id = "password" name = "password" size = "20" /></td>
			</tr>
		</table>
		<br /><br /><br />
		<table>
			<tr>
			  <td><strong>PayPal Email:</strong></td>
			  <td><input type = "text" id = "ppEmail" name = "ppEmail" size = "20" /></td>
			</tr>
			<tr>
			  <td><strong>PayPal Password:</strong></td>
			  <td><input type = "text" id = "ppPass" name = "ppPass" size = "20" /></td>
			</tr>
		</table>

		<br /><br /><br />

		<input type = "submit" id = "submit" value = "Place Order" />
    		<input type = "reset" value = "Reset" />

		<p />
	</form>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
