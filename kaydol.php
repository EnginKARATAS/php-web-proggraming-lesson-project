
<?php
include_once "1baglanti.php";
include_once "check.php";
?>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<head>
	<title></title>
</head>
<body>
 
<center>
	<div class="olaysec">
		<div class="kaydol_maindiv">
	<form  action="" method="post">
		<table class="form1" align="center" style="border: 1px solid gray;">
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
	<tr>
	<td>E-Mail</td>
	<td>:</td>
	<td><input type="text" name="mail"></td>
	</tr>

	<tr></tr>
	<tr>
	<td></td>
	<td></td>
	
  
	</tr>
</table>
<p>OsmanlıGrup`un hangi içeriklerile ilgileniyorsunuz</p>
<h2>İstediğiniz içerikler Anasayfanızda görünecektir</h2>

			<div>
				<label>
					<div class="row">
						<div class="element1">
							<img class="img1"src="images/1.jpg"> 
							<p>Duvar Tabloları</p>
							<input type="checkbox" name="onay1"/> Onaylıyorum
							<br><br>
						</div>
							<div class="element2">
							<img class="img1"src="images/1.1.jpg"> 
							<p>Panolar</p>
							<input type="checkbox" name="onay2"/> Onaylıyorum
							<br><br>
						</div>
							<div class="element2">
							<img class="img1"src="images/45.jpg"> 
							<p>Afişler ve grafikler</p>
							<input type="checkbox" name="onay3"/> Onaylıyorum
							<br><br>
						</div>

					</div>
				</label>
				
			</div>
			<td><input type="submit" name="gonder" value="Kaydol"> 
	
</form>
</div>
	</div>

</center>
<form><table>
<tr>

</tr>
 </table> </form>
</body>
</html>

<?php 

		$isim =@$_POST['kullanici'];
		$sifre=@$_POST['sifre'];
		$mail =@$_POST['mail'];
		$onay1 =@$_POST['onay1'];
		$onay2 =@$_POST['onay2'];
		$onay3 =@$_POST['onay3'];



	if($_POST)
	{
		if ($isim==""||$sifre==""||$mail=="") 
			{
				header("Refresh: 1; url=404.php");
			}
		
		else {
			KullaniciOlustur($isim,$sifre,$mail,$onay1,$onay2,$onay3);

		}
		
	}
 	
	

	
 
 ?> 	