<?php 
    $email=filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

    $mail = "admin2@mail.com";
   

    $password=md5($password."purrfect");

    $mysql = new mysqli('127.0.0.1','root','','register-bd');


    // SELECT * FROM users JOIN animals ON users.id = animals.user_id 
    // SELECT * FROM users, animals WHERE users.id = animals.user_id  <-- IT'S NOT CORRECT WAY TO RETRIEVE DATA
    $result = $mysql->query("SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");
    $user = $result->fetch_assoc(); //konwersja w array
        
    if(count($user)==0) {
        echo "Error: user not found.";
        exit();
    }


    setcookie('user', $user['name'], time()+3600, "/");

    $mysql->close();

    header('Location: ../accountPage/account.php');

?>