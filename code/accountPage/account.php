<!DOCTYPE html>
<html>
<head>
	<!-- CSS file -->
	<link rel="stylesheet" type="text/css" href="account.css">

	<!-- BOOTSTRAP 4.3.1 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- TITLE -->
  <title>Purrfec Project - main page</title>
  
  <!-- ICONS -->
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body id="body">

    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
    
        <a class="navbar-brand" href="#">PurrfectHome</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="../mainPage/index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../aboutPage/about.html">About</a> 
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../contactPage/contact.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../newsPage/news.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../happystoriesPage/happystories.html">Happy Stories</a>
            </li>
          </ul>
      
          <ul class="navbar-nav ml-auto">

              <li class="nav-item active">
                  <a class="nav-link" href="../accountPage/account.html"><i class='fas fa-user'></i>My Account</a>
              </li>       
    
          </ul>
      
        </div> 
      </nav>


      <div class="flex-container">
        <div id="firspart" style="flex-grow: 1">
            <h1 id="h1">User Information</h1>
            <div id="userimage"><i id="imageIcone" class='fas fa-user userIcone'></i></div>
            <p id="nickname">Nickname</p>
             <p id="email">example@gmail.com</p> 
        </div>
        <div style="flex-grow: 1">
            <div id="fullnamebox" style="flex-grow: 2">
                <label class="label" for="inputName">FULL NAME</label>
                <input type="text" class="form-control" id="inputName" placeholder="Name Surname">
            </div>
            <div id="adressbox" style="flex-grow: 2">
                <label class="label" for="inputAddress">ADRESS</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="497 Evergreen Rd.">
            </div>
            <div id="additional">
                <div id="city" style="flex-grow: 1">
                    <label class="label" for="inputCity">CITY</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="Roseville">
                </div>
                <div id="zip" style="flex-grow: 1">
                    <label class="label" for="inputZip">ZIP CODE</label>
                    <input type="text" class="form-control" id="inputZip" placeholder="95673">
                </div>
            </div>

            <div id="countrybox" style="flex-grow: 2">
                <label class="label" for="inputCountry">COUNTRY</label>
                <input type="text" class="form-control" id="inputCountry" placeholder="United States">
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