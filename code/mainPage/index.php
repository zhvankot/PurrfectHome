<!DOCTYPE html>
<html>
<head>
	<!-- CSS file -->
	<link rel="stylesheet" type="text/css" href="mainPage.css">

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
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
            <a class="nav-link" href="../signUpPage/signUp.html"><i class='fas fa-user-plus'></i>Sign Up</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../loginPage/login.html"><i class='fas fa-user'></i>Login</a>
        </li>            
    </ul>

  </div> 
</nav>

<div class="container">
  <div class="row">
    <div class="col-lg text-center" id="colcntr">
      <h1 id="h1">Purrfect Home</h1>
      <h3 id="h3">The Only Pet-Feline Dating App</h3>
      <hr id="hr">
    <a href="../signUpPage/signUp.html"><button class="btn btn-primary" id="button" type="submit"><i class='fas fa-paw' id="paw"></i>Get Started!</button></a>
    </div>
  </div>
</div>






<!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- POPPER FOR DROPDOWNS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<!-- BOOTSTRAP JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" ></script>

</body>
</html>