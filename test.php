<?php 

$baglanti=mysqli_connect("127.0.0.1","root","") or die();//ip ,kullanıci adi, sifre
mysqli_select_db($baglanti,"db") or die();

	global $baglanti;
	$id=0;
 
		$sql="select *from users";

		$sorgu=mysqli_query($baglanti,$sql);
		$dizi=mysqli_fetch_array($sorgu);
	while ($gelen = mysqli_fetch_array($sorgu)) 
	{
 	echo "adı : ".$gelen['name'];

	if($gelen[$id] != "engin")
	{
		$id=$id+1;
		http://www.hakanhitay.net/php-mysql-veritabanindan-veri-okuma-ve-veri-cekme-islemleri/
	}
	 else if ($gelen[$id]=="boran_41_aekl") {
	 	echo "id budur".$id;
	}
		
	}
	
 

 ?>