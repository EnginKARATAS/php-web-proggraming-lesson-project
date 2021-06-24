<?php
//sunucu localhost
//db pass: SS7WowtRIt9WgIFe
//db name: yozgatt_db
//db user: yozgatt_db

//deðiþkenlere atama.
$db_host = "localhost"; //127.0.0.1
$db_name = "yozgatt_db";
$db_user = "yozgatt_db";
$db_pass = "SS7WowtRIt9WgIFe";

try
{
$db_con = new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
$db_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
echo $e->getMessage();
die();
}

?>