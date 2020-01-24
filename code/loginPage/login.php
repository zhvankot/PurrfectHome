<?php require '../modules/navbar.php'  ?>

<div class="container" id="cont">
    <div class="row">
      <div class="col-lg text-center" id="colcntr">
        <h1 id="h1">Login Form</h1>
    <form action="auth.php" method="post">
        <input class="inp" type="email" name="email" value = "example@mail.com">
        <input class="inp" type="password" name="password" value = "password">
        <a href="#"><button class="btn btn-primary" id="button" type="submit"><i class='fas fa-paw' id="paw"></i>Log In</button></a>
    </form>
      </div>
    </div>
  </div>
<div class="show-on-mobile">
 
</div>

<?php require '../modules/scripts.php' ?>