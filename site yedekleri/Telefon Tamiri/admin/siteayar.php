<?php
require_once "../php/db_config.php";
require_once "../php/bilgigetir.php";
?>
<!DOCTYPE html>
<html lang="tr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <a href="http://www.yozgattelefontamiri.com/admin/">
      <div class="sidebar-heading">Admin Panel</div>
      </a>
      <div class="list-group list-group-flush">
        <a href="siteayar.php" class="list-group-item list-group-item-action bg-light">Site Ayarları</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Kutu Ayarları</a>
        <a href="#" class="list-group-item list-group-item-action bg-light">Footer Ayarları</a>
       
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Menü Aç/Kapa</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container">
     <br>
      <?php
     
      //tablo adı: 
      //buraya dbden veriler çekilecek. çektikten sonra inputa aktaracan. sonra gönder deyince veritabanından update yapacan.
       if($_POST)
      {
      $id=1;
      $page_title = trim($_POST["page_title"]);
      $sayfa_baslik = trim($_POST["sayfa_baslik"]);
      $sayfa_menu1 = trim($_POST["sayfa_menu1"]);
      $sayfa_menu2 = trim($_POST["sayfa_menu2"]);
      $sayfa_menu3 = trim($_POST["sayfa_menu3"]);
      $sayfa_footermenu1 = trim($_POST["sayfa_footermenu1"]);
      $sayfa_footermenu1 = trim($_POST["sayfa_solgan2"]);
      $sayfa_ceptel= trim($_POST["sayfa_ceptel"]);
      $sayfa_slogan1 =trim($_POST["sayfa_slogan1"]);
      $sayfa_slogan2 =trim($_POST["sayfa_slogan2"]);
      $sayfa_slogan3 =trim($_POST["sayfa_slogan3"]);
      $sayfa_slogan4 =trim($_POST["sayfa_slogan4"]);
      $sayfa_hakkimda1 =trim($_POST["sayfa_hakkimda1"]);
      $sayfa_hakkimda2 =trim($_POST["sayfa_hakkimda2"]);
      $sayfa_adres =trim($_POST["sayfa_adres"]);
      $sayfa_copyright =trim($_POST["sayfa_copyright"]);
      
 

      $stmt = $db_con -> prepare("UPDATE ayarlar SET 
        page_title=:u1,
        sayfa_baslik=:u2,
        sayfa_menu1=:u3,
        sayfa_menu2=:u4,
        sayfa_menu3=:u5,
        sayfa_footermenu1=:u7,
        sayfa_footermenu1=:u8,
        sayfa_slogan1=:u8,
        sayfa_slogan2=:u9,
        sayfa_slogan3=:u10,
        sayfa_slogan4=:u11,
        sayfa_hakkimda1=:u12,
        sayfa_hakkimda2=:u13,
        sayfa_ceptel=:u14, 
        sayfa_adres=:u15,
        sayfa_copyright=:u16 WHERE ID=:u6");

      $stmt -> bindParam(":u1", $page_title);
      $stmt -> bindParam(":u2", $sayfa_baslik);
      $stmt -> bindParam(":u3", $sayfa_menu1);
      $stmt -> bindParam(":u4", $sayfa_menu2);
      $stmt -> bindParam(":u5", $sayfa_menu3);
      $stmt -> bindParam(":u6", $id);
      $stmt -> bindParam(":u7", $sayfa_footermenu1);
      $stmt -> bindParam(":u8", $sayfa_solgan1);
      $stmt -> bindParam(":u9", $sayfa_ceptel);
      $stmt -> bindParam(":u10", $sayfa_slogan3);
      $stmt -> bindParam(":u11", $sayfa_slogan4);
      $stmt -> bindParam(":u12", $sayfa_hakkimda1);
      $stmt -> bindParam(":u13", $sayfa_hakkimda2);
      $stmt -> bindParam(":u14", $sayfa_ceptel);
      $stmt -> bindParam(":u15", $sayfa_adres);
      $stmt -> bindParam(":u16", $sayfa_copyright);
      
      
      $result = $stmt -> execute(); //execute boolian değer dönderir
       
        if($result)
        {
        $mesajTip = "success";
        $icerik = "Güncelleme Başarılı";
        } else 
        {
        $mesajTip = "danger";
        $icerik = "Güncelleme Başarısız";
        }
        
        echo "<div class='alert alert-$mesajTip' role='alert'>
          $icerik
       </div>";
        
      }  
      ?>
      
      <form method="POST" action="" role="form">
      
      <!--<div class="row">
      <div class="col col-md-12">-->
      
      <div class="panel panel-default">
      <div class="panel-body">
     

      <div class="row">
      <div class="col-md-6">
        <div class="form-group">
        <label for="">Başlık (Title)</label>
        <input class="form-control" type="text" name="page_title" value="<?=$row["page_title"];?>">
        </div>
      </div>
      
      <div class="col-md-6">
        <div class="form-group">
        <label for="">Başlık (Site içi)</label>
        <input class="form-control" type="text" name="sayfa_baslik" value="<?=$row["sayfa_baslik"];?>">
        </div>
       </div>
      </div>
        
        <div class="row">
          <div class="col-md-6">
        <div class="form-group">
        <label for="">Telefon numaranız ! </label>
        <input class="form-control" type="text" name="sayfa_ceptel" value="<?=$row["sayfa_ceptel"];?>">
        </div>
          </div>
          <div class="col-md-6">
         <div class="form-group">
        <label for="">Yıldız Altı İlk Başlık</label>
        <input class="form-control" type="text" name="sayfa_slogan2" value="<?=$row["sayfa_slogan2"];?>">
        </div>
          </div>
        </div>


        <div class="row">
          <div class="col-md-6">
          <div class="form-group">
        <label for="">Profil Resimin İkinci Altındaki Başlık</label>
        <input class="form-control" type="text" name="sayfa_solgan1" value="<?=$row["sayfa_slogan1"];?>">
        </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
        <label for="">Yıldız Altı Orta Başlık</label>
        <input class="form-control" type="text" name="sayfa_slogan3" value="<?=$row["sayfa_slogan3"];?>">
        </div>
          </div>
        </div>

        
        
        <div class="row">
          <div class="col-md-6">
        <div class="form-group">
        <label for="">Hizmetler Bilgileri Başlığı</label>
        <input class="form-control" type="text" name="sayfa_menu1" value="<?=$row["sayfa_menu1"];?>">
        </div>  
          </div>
          <div class="col-md-6">
        <div class="form-group">
        <label for="">Hakkımda Bilgileri Başlığı</label>
        <input class="form-control" type="text" name="sayfa_menu2" value="<?=$row["sayfa_menu2"];?>">
        </div>
          </div>
        </div>
  

 

        <div class="row">
          <div class="col-md-6">
        <div class="form-group">
        <label for="">İletişim Bilgileri Başlığı</label>
        <input class="form-control" type="text" name="sayfa_menu3" value="<?=$row["sayfa_menu3"];?>">
        </div>
          </div>
          <div class="col-md-6">
        <div class="form-group">
        <label for="">Hakkımda Sol Kısım</label>
        <input class="form-control" type="text" name="sayfa_hakkimda1" value="<?=$row["sayfa_hakkimda1"];?>">
        </div>
          </div>
        </div>



       <div class="row">
         <div class="col-md-6">
           
        <div class="form-group">
        <label for="">Hakkımda Sağ Kısmı</label>
        <input class="form-control" type="text" name="sayfa_hakkimda2" value="<?=$row["sayfa_hakkimda2"];?>">
        </div>
         </div>
         <div class="col-md-6">
           
        <div class="form-group">
        <label for="">Dükkan Adresi vb. Adresi</label>
        <input class="form-control" type="text" name="sayfa_adres" value="<?=$row["sayfa_adres"];?>">
        </div>
         </div>
       </div>





        <div class="form-group">
        <label for="">Yasal Hak Yazısı</label>
        <input class="form-control" type="text" name="sayfa_copyright" value="<?=$row["sayfa_copyright"];?>">
        </div>

 
   
     <!--</div>
      </div>-->
      </div>
      </div>
         <div style="margin-right:7%;font-size:15px;" class="row justify-content-end" >
       <button type="submit" class="row btn btn-primary btn-lg justify-content-end">Kaydet</button>
       </div>
      </form>
      
      
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
