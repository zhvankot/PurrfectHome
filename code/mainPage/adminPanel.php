<?php require '../modules/navbar.php'  ?>


<?php



$mysql = new mysqli('127.0.0.1','root','','register-bd') or die("Ошибка " . mysqli_error($mysql)); 
   
$sql ="SELECT * FROM users JOIN moderators ON users.id = moderators.user_id";
$res = $mysql->query($sql);

$adminInfo = array();

while($row = $res->fetch_assoc()){
    $adminInfo[$row['id']] = $row;
}

$temp = "";
?>

<div id="moderInfo" style="    
    color: white;
    text-shadow: 0.05em 0.05em 0.1em black;
    font-family: arial;
    background-color: rgba(0, 0, 0, 0.6);
    margin-top: 2em;">
<h4> > Moderators Info</h4>
<table>
<?php
foreach($adminInfo as $singleImfo){
?> <tr style="width:100%"> <?php
    echo str_repeat("&nbsp;", 5)."Id: ".$singleImfo["id"].str_repeat("&nbsp;", 5)."nickname: ".$singleImfo['nickname'].str_repeat("&nbsp;", 5)."email: ".$singleImfo['email'].str_repeat("&nbsp;", 5)."first name: ".$singleImfo['firstName'].str_repeat("&nbsp;", 5)."last name: ".$singleImfo['lastName'].str_repeat("&nbsp;", 5)."position: ".$singleImfo['position'].str_repeat("&nbsp;", 5)."phone: ".$singleImfo['phone'].str_repeat("&nbsp;", 5)."adress id: ".$singleImfo['adress_id'];
    echo '<br>';
    ?>
    </tr>
<?php
}
?> 
</table>


</div>

</body>
</html>