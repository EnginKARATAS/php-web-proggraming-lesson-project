<?php
include_once "1baglanti.php";
include_once "check.php";
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title></title>
</head>
<body>
<form action="" method="post">
<table align="center" style="border: 1px solid gray;background: #b3b5f5ad;margin-top:13%;">
<tr>
<td>Kullanici Adi</td>
<td>:</td>
<td><input type="text" name="kullanici"></td>
</tr>
<tr>		
<td>Sifre</td>
<td>:</td>
<td><input type="password" name="sifre"></td>
</tr>
<tr>   </tr>
<tr>
<td></td>
<td></td>
<td><input type="submit" name="gonder" value="Gonder"> 
  	<input type="reset" name="temizle" value="Temizle" > </td>
  		<td><input type="submit" name="kaydol" value="kaydol"></td>
</tr>
</table>
</form>
<form><table>
<tr>

</tr>
 </table> </form>
	<?php 


	if($_POST)
	{
		if (check(@$_POST["kaydol"])) 
		{
			header("Refresh:1;url=kaydol.php");
			echo "<h1 style=background:red;>yönlendiriliyorsunuz</h1>";
		}	
		else if(KullaniciVarmi($_POST["kullanici"],$_POST["sifre"]))
		{
			session_start();
			$_SESSION['kullanici'] = $_POST["kullanici"];
			$_SESSION['sifre']=$_POST["sifre"];
			echo "<h1 style=background:red;>size özel oluşturulmuş ana sayfaya gidiyorsunuz</h1>";
			header("Refresh: 2; url=index.php");

		} 
		
    }


 	?> 	


</body>
</html>