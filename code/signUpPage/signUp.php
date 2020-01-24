
<?php require '../modules/navbar.php'  ?>
<div class="container" id="cont">

    <div class="row">
      <div class="col-lg text-center" id="colcntr">
        <h1 id="h1">Create an Account</h1>
     <form action="check.php" method="post">
        <input class="inp" type="text" name="nickname" value = "nickname">
        <input class="inp" type="email" name="email" value = "example@mail.com">
        <input class="inp" type="password" name="password" value = "password">
        <input class="inp" type="password" name="confirmpass" value = "password">
        <a href="#"><button class="btn btn-primary" id="button" type="submit"><i class='fas fa-paw' id="paw"></i>Submit</button></a>
     </form>
      </div>
    </div>
  </div>


<div class="show-on-mobile">
 
</div>
  
<?php require '../modules/scripts.php' ?>
