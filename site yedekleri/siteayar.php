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
              <a class="nav-link" href="#">Anasayfa <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Admin Panel</a>
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

      <div class="container-fluid">
     <br>
      <?php
     
      //tablo adı: 
      //buraya dbden veriler çekilecek. çektikten sonra inputa aktaracan. sonra gönder deyince veritabanından update yapacan.
      if($_POST)
      {
      
      $sql = "UPDATE ayarlar SET ";
      
      $stmt = $db_con->prepare("SELECT * FROM admin_input ORDER BY ID ASC");
      $stmt->execute();
      while($gelen_input=$stmt->fetch(PDO::FETCH_ASSOC))
      {
      $temp = $gelen_input["input_name"];     
      $$temp = $_POST[$gelen_input["input_name"]];
      $sql = $sql.$temp."=:".$temp.",";
      }   

    /*  $page_title = trim($_POST["page_title"]);
      $sayfa_baslik = trim($_POST["sayfa_baslik"]);
      $sayfa_menu1 = trim($_POST["sayfa_menu1"]);
      $sayfa_menu2 = trim($_POST["sayfa_menu2"]);
      $sayfa_menu3 = trim($_POST["sayfa_menu3"]);
      $sayfa_footermenu1 = trim($_POST["sayfa_footermenu1"]);
      $sayfa_footermenu2 = trim($_POST["sayfa_footermenu2"]);
      $sayfa_slogan1= trim($_POST["sayfa_slogan1"]);
      $sayfa_ceptel= trim($_POST["sayfa_ceptel"]);
      $sayfa_slogan2 =trim($_POST["sayfa_slogan2"]);
      $sayfa_slogan3 =trim($_POST["sayfa_slogan3"]);
      $sayfa_slogan4 =trim($_POST["sayfa_slogan4"]);
      $sayfa_hakkimda1 =trim($_POST["sayfa_hakkimda1"]);
      $sayfa_hakkimda2 =trim($_POST["sayfa_hakkimda2"]);
      $sayfa_adres =trim($_POST["sayfa_adres"]);
      $sayfa_copyright =trim($_POST["sayfa_copyright"]);*/
     
      $stmt = $db_con -> prepare($sql);
      
      while($gelen_input=$stmt->fetch(PDO::FETCH_ASSOC))
      {
      $stmt -> bindParam(":".$gelen_input["input_name"]."", $_POST[$gelen_input["input_name"]]);
      }   
 
 

      /*$stmt = $db_con -> prepare("UPDATE ayarlar SET 
        page_title=:page_title,
        sayfa_baslik=:sayfa_baslik,
        sayfa_menu1=:sayfa_menu1,
        sayfa_menu2=:sayfa_menu2,
        sayfa_menu3=:sayfa_menu3,
        sayfa_footermenu1=:sayfa_footermenu1,
        sayfa_footermenu2=:sayfa_footermenu2,
        sayfa_slogan1=:sayfa_slogan1,
        sayfa_slogan2=:sayfa_slogan2,
        sayfa_slogan3=:sayfa_slogan3,
        sayfa_slogan4=:sayfa_slogan4,
        sayfa_hakkimda1=:sayfa_hakkimda1,
        sayfa_hakkimda2=:sayfa_hakkimda2,
        sayfa_ceptel=:sayfa_ceptel, 
        sayfa_adres=:sayfa_adres,
       
        sayfa_copyright=:sayfa_copyright");*/

      /*$stmt -> bindParam(":u1", $page_title);
      $stmt -> bindParam(":u2", $sayfa_baslik);
      $stmt -> bindParam(":u3", $sayfa_menu1);
      $stmt -> bindParam(":u4", $sayfa_menu2);
      $stmt -> bindParam(":u5", $sayfa_menu3);
      $stmt -> bindParam(":u6", $id);
      $stmt -> bindParam(":u7", $sayfa_footermenu1);
      $stmt -> bindParam(":u8", $sayfa_footermenu2);
      $stmt -> bindParam(":u9", $sayfa_slogan1);
      $stmt -> bindParam(":u10", $sayfa_slogan2);
      $stmt -> bindParam(":u11", $sayfa_slogan3);
      $stmt -> bindParam(":u12", $sayfa_slogan4);
      $stmt -> bindParam(":u13", $sayfa_hakkimda1);
      $stmt -> bindParam(":u14", $sayfa_hakkimda2);
      $stmt -> bindParam(":u15", $sayfa_ceptel);
      $stmt -> bindParam(":u16", $sayfa_adres);
      $stmt -> bindParam(":u17", $sayfa_copyright);*/
      
      
      $result = $stmt -> execute(); //execute boolian değer dönderir
       
        /*if($result)
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
       </div>";*/
       //header('Location: /admin/siteayar.php');
 
       //uyarı vermeden kendisine yönlendiriyor. bu sayede değişen veriler direkt görülüyor. 
      
      }  
      ?>
      
      <form method="POST" action="" role="form">
      
      <?php
      //echo $row["page_title"];
      
      $i = 0;
      $stmt = $db_con->prepare("SELECT * FROM admin_input ORDER BY ID ASC");
      $stmt->execute();
      while($gelen_input=$stmt->fetch(PDO::FETCH_ASSOC))
      {
          if($i%2==0)
          {
              echo "\n<div class='row'>";
          }
          
          echo "
          <div class='col-md-6'>
          <div class='form-group'>
          <label for=''>".$gelen_input["label_ici"]."</label>
          <input class='form-control' type='text' name='".$gelen_input["input_name"]."' value='".$row[$gelen_input["input_value"]]."'>
          </div>
          </div>";
          
          if($i%2==1)  
          {
          echo "\n</div>";
          }
          $i++;
      }
      
      if($i%2==1)
      {
      echo "</div>";
      }
      ?>
    
         <div class="row">
         <div class="col-md-12">
       <button type="submit" class="btn btn-primary btn-lg">Kaydet</button>
       </div>
       </div>
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
