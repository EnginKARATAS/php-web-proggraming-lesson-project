<?php

$baglanti=mysqli_connect("127.0.0.1","root","") or die();//ip ,kullanıci adi, sifre
mysqli_select_db($baglanti,"db") or die();

function KullaniciVarmi($p1, $p2)
{
	global $baglanti;
	$deger = false;
	if(isset($p1) && isset($p2))
	{
		$sql="select '$p1,$p2' name,password from users where name='$p1' and password='$p2'";
		$sorgu=mysqli_query($baglanti,$sql);
		$dizi=mysqli_fetch_array($sorgu);
		if ($dizi!=0) {
			$deger = true;
		}
	}
	return $deger;
	}

	function DivDoldur($p1, $p2)
	{
	global $baglanti;
	$deger = false;
	if(isset($p1) && isset($p2))
	{

	 	   	$sql1="select checkbox1 from users where name='$p1' and password='$p2' ";
	 	   	$sql2="select checkbox2 from users where name='$p1' and password='$p2' ";
	 	   	$sql3="select checkbox3 from users where name='$p1' and password='$p2' ";

			$sorgu1=mysqli_query($baglanti,$sql1);
			$sorgu2=mysqli_query($baglanti,$sql2);
			$sorgu3=mysqli_query($baglanti,$sql3);

			$dizi1=mysqli_fetch_row($sorgu1);
			$dizi2=mysqli_fetch_row($sorgu2);
			$dizi3=mysqli_fetch_row($sorgu3);

			$donder = array($dizi1[0], $dizi2[0],$dizi3[0]);

			return $donder;
		 
	}

	}

	function İd($p1)
	{
	global $baglanti;
	$id=0;
	if(isset($p1) && isset($p2))
	{
		$sql="select '$p1,$p2,$p3,$p4,,$p1' name,password from users where name='$p1' and password='$p2'";
		$sorgu=mysqli_query($baglanti,$sql);
		$dizi=mysqli_fetch_array($sorgu);
	while ($gelen = mysqli_fetch_array($sorgu)) 
	{
	if($gelen == $p1)
	{
		$id=$id+1;
		return $id;
	} 
	}
	}	
	}

	function KullaniciOlustur($p1,$p2,$p3,$p4,$p5,$p6)
	{
		global $baglanti;
		$sql="insert INTO users (name,password,mail,checkbox1,checkbox2,checkbox3) VALUES ('$p1','$p2','$p3','$p4','$p5','$p6')";
					
		if (mysqli_query($baglanti, $sql)) {
    	header("Refresh: 1; url=sözdeeklendi.php");
	}		

	 	else {
    	echo "Hata: " . $sql . "<br>" . mysqli_error($baglanti) .header("Refresh: 1; url=eklenmedi.php");;
		}

		mysqli_close($baglanti);
		}
	






 
?>