<?php 
include_once "1baglanti.php";
include_once "check.php";
session_start();
$k=$_SESSION['kullanici'];      
$s=$_SESSION['sifre']; 
$onay=DivDoldur($k,$s);
$on1=$onay[0];
$on2=$onay[1];
$on3=$onay[2];
echo "<div><h1>Hosgeldin degerli kullanıcı ".$k."  </h1> </div>";
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <title>www.osmanligrup.com</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="styleindex.css">
        <style>
            .img1{
                margin-bottom: 30px;
            }
            .btn1{
                margin-bottom: 30px;
            }
        </style>
    </head>
    
    <body>
        <img src="images/45.jpg"class="first_image">
         <nav class="navbar navbar-default">
            <div class="container-fluid" style="    background: black;">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Osmanlı Grup</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Ana Sayfa</a></li>
                    
                    <?php if($on1=="on"){ ?> <li><a href="#">Duvar Tabloları</a></li> <?php } ?>
                    <?php if($on2=="on"){ ?> <li><a href="#">Panolar</a></li> <?php } ?>
                    <?php if($on3=="on"){ ?> <li><a href="#">Afişler Ve Grafikler</a></li> <?php } ?>

                    <li><a href="1kullanicigirisi.php">Kullanıcı Girişi</a></li>
                    <li><a href="kaydol.php">Kaydol</a></li>

                  
                </ul>
            </div>
        </nav>
   <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <img src="images/hg.jpg" class="img-responsive col-lg-12 col-md-12 col-sm-12">
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h1>Projeler</h1>
                    <hr>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <img src="images/8.jpg" class="img-responsive img1 col-lg-3 col-md-6 col-sm-12">
                    <img src="images/1.jpg" class="img-responsive img1 col-lg-3 col-md-6 col-sm-12">
                    <img src="images/2.jpg" class="img-responsive img1 col-lg-3 col-md-6 col-sm-12">
                    <img src="images/7.jpg" class="img-responsive img1 col-lg-3 col-md-6 col-sm-12">
                    <img src="images/6.jpg" class="img-responsive img1 col-lg-3 col-md-6 col-sm-12">
                    <img src="images/w.jpg" class="img-responsive img1 col-lg-3 col-md-6 col-sm-12">
                    <img src="images/9.jpg" class="img-responsive img1 col-lg-3 col-md-6 col-sm-12">
                    <img src="images/8.jpg" class="img-responsive img1 col-lg-3 col-md-6 col-sm-12">
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h1><?php if($on1=="on" or $on1=="on" or $on1=="on"){ ?> Sizin Görmeyi seçtiğiniz içeriklerimiz <?php } ?></h1>
                    <hr>
                    <p class="col-lg-12 col-md-12 col-sm-12">
                        <h3>Bu sitenin amacı </h1>haber sitesi gibi istenilen içerikleri göstermektir.Griip eylem yapabileceğiniz <strong>3 adet</strong> sayfası bulunmaktadır.Eylem yapılacak başka sayfa yoktur asıl amaç <strong>PHP scriptlerini </strong>gösterebilmek ve nesne tabanlı olarak yapılabildiğini <strong>ENGİN KARATAŞ </strong>tarafından göstermektir...Siteyi incelediğiniz için teşekkürlerLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">


                    <?php if($on1=="on"){ ?><div class="col-lg-3 col-md-6 col-sm-12">
                        <img src="images/0.jpg" class="img-responsive col-lg-12 col-md-12 col-sm-12">
                        <h2 class="col-lg-12 col-md-12 col-sm-12">Canvas Duvar Tablosu Elit</h2>
                        <p class="col-lg-12 col-md-12 col-sm-12">Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                        <button type="button" class="btn1 col-lg-12 col-md-12 col-sm-12 btn btn-primary btn-lg btn-block">Bilgi Al</button>
                    </div><?php } ?>
                                        <?php if($on1=="on"){ ?><div class="col-lg-3 col-md-6 col-sm-12">
                        <img src="images/0.jpg" class="img-responsive col-lg-12 col-md-12 col-sm-12">
                        <h2 class="col-lg-12 col-md-12 col-sm-12">Canvas Yağlı Duvar Tablosu</h2>
                        <p class="col-lg-12 col-md-12 col-sm-12">Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                        <button type="button" class="btn1 col-lg-12 col-md-12 col-sm-12 btn btn-primary btn-lg btn-block">Bilgi Al</button>
                    </div><?php } ?>
                                        <?php if($on1=="on"){ ?><div class="col-lg-3 col-md-6 col-sm-12">
                        <img src="images/0.jpg" class="img-responsive col-lg-12 col-md-12 col-sm-12">
                        <h2 class="col-lg-12 col-md-12 col-sm-12">Deri Kaplama Duvar Tabloları</h2>
                        <p class="col-lg-12 col-md-12 col-sm-12">Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                        <button type="button" class="btn1 col-lg-12 col-md-12 col-sm-12 btn btn-primary btn-lg btn-block">Bilgi Al</button>
                    </div><?php } ?>
                                        <?php if($on1=="on"){ ?><div class="col-lg-3 col-md-6 col-sm-12">
                        <img src="images/0.jpg" class="img-responsive col-lg-12 col-md-12 col-sm-12">
                        <h2 class="col-lg-12 col-md-12 col-sm-12">Tabloların ruhunu yeniden canlandırdık</h2>
                        <p class="col-lg-12 col-md-12 col-sm-12">Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                        <button type="button" class="btn1 col-lg-12 col-md-12 col-sm-12 btn btn-primary btn-lg btn-block">Bilgi Al</button>
                    </div><?php } ?>
                                        <?php if($on2=="on"){ ?><div class="col-lg-3 col-md-6 col-sm-12">
                        <img src="images/0.jpg" class="img-responsive col-lg-12 col-md-12 col-sm-12">
                        <h2 class="col-lg-12 col-md-12 col-sm-12">Panolar askılıkar askeri atıştırmalıkar</h2>
                        <p class="col-lg-12 col-md-12 col-sm-12">Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                        <button type="button" class="btn1 col-lg-12 col-md-12 col-sm-12 btn btn-primary btn-lg btn-block">Bilgi Al</button>
                    </div><?php } ?>
                                        <?php if($on2=="on"){ ?><div class="col-lg-3 col-md-6 col-sm-12">
                        <img src="images/0.jpg" class="img-responsive col-lg-12 col-md-12 col-sm-12">
                        <h2 class="col-lg-12 col-md-12 col-sm-12">Dükkan Panoları İndirimli fırsat</h2>
                        <p class="col-lg-12 col-md-12 col-sm-12">Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                        <button type="button" class="btn1 col-lg-12 col-md-12 col-sm-12 btn btn-primary btn-lg btn-block">Bilgi Al</button>
                    </div><?php } ?>
                                        <?php if($on3=="on"){ ?><div class="col-lg-3 col-md-6 col-sm-12">
                        <img src="images/0.jpg" class="img-responsive col-lg-12 col-md-12 col-sm-12">
                        <h2 class="col-lg-12 col-md-12 col-sm-12">Afişler ve Grafikler yaz mevsimi</h2>
                        <p class="col-lg-12 col-md-12 col-sm-12">Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                        <button type="button" class="btn1 col-lg-12 col-md-12 col-sm-12 btn btn-primary btn-lg btn-block">Bilgi Al</button>
                    </div><?php } ?>
                                        <?php if($on3=="on"){ ?><div class="col-lg-3 col-md-6 col-sm-12">
                        <img src="images/0.jpg" class="img-responsive col-lg-12 col-md-12 col-sm-12">
                        <h2 class="col-lg-12 col-md-12 col-sm-12">Afişler ve Grafikler kış mevsimi</h2>
                        <p class="col-lg-12 col-md-12 col-sm-12">Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                        <button type="button" class="btn1 col-lg-12 col-md-12 col-sm-12 btn btn-primary btn-lg btn-block">Bilgi Al</button>
                    </div><?php } ?>
     

                     
                    
                    
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg12 col-md-12 col-sm-12">
                    <h2>İletişim</h2>
                    <form>
                        <div class="form-group">
                          <label for="ad">Ad:</label>
                          <input type="text" class="form-control" id="ad">
                          <label for="soyad">Soyad:</label>
                          <input type="password" class="form-control" id="soyad">
                          <label for="mail">E-Posta:</label>
                          <input type="text" class="form-control" id="mail">
                          <label for="yorum">Mesaj:</label>
                          <textarea class="form-control" rows="5" id="yorum"></textarea>
                          <button type="button" class="btn btn-success">Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
            
            
            <div class="row">
                <h2>Bizi ziyaret edin fırsatları yakalayın</h2>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <iframe class="col-lg-12 col-md-12 col-sm-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.9111427824905!2d28.97444895073676!3d41.005318027454706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDAwJzE5LjEiTiAyOMKwNTgnMzUuOSJF!5e0!3m2!1str!2str!4v1518630549585" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            
            
        </div>
    </body>
</html>
 