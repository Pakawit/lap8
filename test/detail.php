<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<?php

$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1, $_GET["username"]); 
$stmt->execute();
$row = $stmt->fetch(); 
?>

<div style="display:flex">
<div>
<img src='/test/member_img/<?=$row["password"]?>.jpg' width='150'>
</div>
<div style="padding: 15px">
<h2><?=$row["username"]?></h2>
ชื่อสมาชิก:  <?=$row ["name"]?><br>
ที่อยู่: <?=$row ["address"]?><br>
อีเมล: <?=$row ["email"]?><br>
</div>
</div>

</body>
</html>