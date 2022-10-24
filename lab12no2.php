<?php
$pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "");

$stmt=$pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1,$_GET["username"]);
$stmt->execute();
$row=$stmt->fetch();
if(!empty($row)):
?>
    <div><br>
        Username : <?=$row["username"]?><br>
        Name : <?=$row["name"]?> <br>
        Address : <?=$row["address"]?> <br>
        Tel : <?=$row["mobile"]?> <br>
        Email : <?=$row["email"]?>
    </div>
<?php else:?>
    <div><h3>Username not Found</h3></div>
<?php endif;?>