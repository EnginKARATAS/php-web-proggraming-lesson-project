<?php
require_once "db_config.php";
$id = 1;
$stmt = $db_con->prepare("SELECT * FROM homeview WHERE ID=:id"); 
$stmt->execute(array(':id'=>$id));
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>