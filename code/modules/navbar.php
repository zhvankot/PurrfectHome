<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">

	<!-- CSS file -->
  <link rel="stylesheet" type="text/css" href="mainPage.css">
  <link rel="stylesheet" type="text/css" href="login.css">
  <link rel="stylesheet" type="text/css" href="signUp.css">
	

	<!-- BOOTSTRAP 4.3.1 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- TITLE -->
  <title>Purrfec Project - main page</title>
  
  <!-- ICONS -->
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>

  

</head>
<body>
<?php

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
    
  <a class="navbar-brand" href="#">PurrfectHome</a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active1">
        <a class="nav-link" href="../mainPage/index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../aboutPage/about.html">About</a> 
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../contactPage/contact.html">Contact</a>
      </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="../signUpPage/signUp.php"><i class='fas fa-user-plus'></i>Sign Up</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active3" href="../loginPage/login.php"><i class='fas fa-user'></i>Login</a>
        </li>            
    </ul>

  </div> 
</nav>

