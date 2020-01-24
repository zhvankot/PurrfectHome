<?php

$nickname = filter_var(trim($_POST['nickname']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$confirmpass = filter_var(trim($_POST['confirmpass']), FILTER_SANITIZE_STRING);   

if(mb_strlen($email) < 4 || mb_strlen($email) > 49) {
    echo "Error: invalid email length.";
    exit();
} elseif(mb_strlen($nickname) < 4 || mb_strlen($nickname) > 14) {
    echo "Error: invalid nickname length.";
} elseif(mb_strlen($password) < 5 || mb_strlen($password) > 8 ) {
    echo "Error: invalid password length ( from 5 to 8 ).";
} elseif($password !== $confirmpass) {
    echo "Error: password is not confirmed, entered different passwords.";
}

$password=md5($password."purrfect");

$mysql = new mysqli('127.0.0.1','root','','register-bd');
$mysql->query("INSERT INTO `users` ( `nickname`, `email`, `password`) VALUES('$nickname', '$email', '$password')");

header('Location: ../loginPage/login.php');

// $res = $mysql->query("SELECT * FROM `users` JOIN `moderators` ON `users.id` = `moderators.user_id`");
// $abons = array();

// while($rows = $res->fetch_assoc()) {
//     $abons[]=array_values($rows);
// }
// var_dump($abons);

mysql_close();

// header('Location: ../loginPage/login.php');
?>