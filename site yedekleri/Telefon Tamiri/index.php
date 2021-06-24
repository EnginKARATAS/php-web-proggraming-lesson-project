<?php
require_once "php/bilgigetir.php";
?>
<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo $row["page_title"]; ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <script src="assets/sweetalert2.min.js"></script>
        <link rel="stylesheet" href="assets/sweetalert2.min.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top"><?=$row["sayfa_baslik"];?></a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio"><?=$row["sayfa_menu1"];?></a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about"><?=$row["sayfa_menu2"];?></a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact"><?=$row["sayfa_menu3"];?></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <!--<img style="width: 15rem;"class="masthead-avatar mb-5" src="assets/img/a.jpg" alt="" />-->
                <img src="assets/img/a.jpg" class="masthead-avatar mb-0" alt="" />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0"><?=$row["sayfa_baslik"];?></h1>
                <br>
                <p class="masthead-subheading font-weight-light mb-0 ">
                    <span class="text-dark">
                <?php echo "<strong>".$row["sayfa_slogan1"]." ".$row["sayfa_ceptel"]."</strong>";?>
                    </span>
                </p>

                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading mb-0"> <?=$row["sayfa_slogan2"];?><br> <?=$row["sayfa_slogan3"];?>
                </p>
                <p> <?=$row["sayfa_slogan4"];?></p>
            </div>
        </header>
        <!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><?=$row["sayfa_menu1"];?></h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon2"><svg class="svg-inline--fa fa-star fa-w-18" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="star" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg=""><path fill="currentColor" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"></path></svg><!-- <i class="fas fa-star"></i> --></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items--> 

      

                <div class="row">
                     <!-- Portfolio Item 1-->


                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">


                      <div class="row">
                    <div class="container d-flex justify-content-center">                      
                                <div class=" col-md-12 portfolio-item-caption-content text-center text-white"><h4>Android Telefon Tamiri</h4></div>
                       
                     </div>

                               <div class="container d-flex justify-content-center">                      
                                <div class=" col-md-12 portfolio-item-caption-content text-center text-white"><svg class="svg-inline--fa fa-plus fa-w-14 fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> --></div>
                       
                     </div>
                </div>


                    
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/cabin.png" alt="">
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">

                      <div class="row">
                    <div class="container d-flex justify-content-center">                      
                                <div class=" col-md-12 portfolio-item-caption-content text-center text-white"><h4>Apple Telefon Tamiri</h4></div>
                       
                     </div>

                               <div class="container d-flex justify-content-center">                      
                                <div class=" col-md-12 portfolio-item-caption-content text-center text-white"><svg class="svg-inline--fa fa-plus fa-w-14 fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> --></div>
                       
                     </div>
                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/cake.png" alt="">
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal4">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">

                      <div class="row">
                    <div class="container d-flex justify-content-center">                      
                                <div class=" col-md-12 portfolio-item-caption-content text-center text-white"><h4>Apple Telefon Tamiri</h4></div>
                       
                     </div>

                               <div class="container d-flex justify-content-center">                      
                                <div class=" col-md-12 portfolio-item-caption-content text-center text-white"><svg class="svg-inline--fa fa-plus fa-w-14 fa-3x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg><!-- <i class="fas fa-plus fa-3x"></i> --></div>
                       
                     </div>
                </div>
                            </div>
                            <img class="img-fluid" src="assets/img/portfolio/circus.png" alt="">
                        </div>
                    </div>
                     
                    <!-- Portfolio Item 4-->
                    
                    <!-- Portfolio Item 5-->
                    
                    <!-- Portfolio Item 6-->
                    
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white"><?=$row["sayfa_menu2"];?></h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon" style="font-size:4rem;"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ml-auto"><p class="lead"><?=$row["sayfa_hakkimda1"];?></p></div>
                    <div class="col-lg-4 mr-auto"><p class="lead"><?=$row["sayfa_hakkimda2"];?></p></div>
                </div>
                <!-- About Section Button-->
                <div class="text-center mt-4">
                    <!--<a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/themes/freelancer/">
                        <i class="fas fa-download mr-2"></i>
                        Free Download!
                    </a>-->
                </div>
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"><?=$row["sayfa_menu3"];?></h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon2"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            <div class="control-group">
                                <div class="form-group">
                                    <label>İsim Soyisim</label>
                                    <input class="form-control" id="name" type="text" placeholder="İsim Soyisim Giriniz.." required="required" data-validation-required-message="İsim Soyisim Giriniz.." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group">
                                    <label>E-Mail Adresiniz</label>
                                    <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="E-Mail Adresinizi Girin.." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group">
                                    <label>Telefon Numaranız</label>
                                    <input class="form-control" id="phone" type="tel" placeholder="Telefon Numaranız" required="required" data-validation-required-message="Telefon Numaranızı Girin.." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group">
                                    <label>Mesajınız</label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="Mesajınız" required="required" data-validation-required-message="Lütfen Mesajınızı Yazın."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">GÖNDER</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4"><?=$row["sayfa_footermenu1"];?></h4>
                        <p class="lead mb-0">
                            <?=$row["sayfa_adres"];?>
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4"><?=$row["sayfa_footermenu2"];?></h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/mahmut.uluturk.5"><i class="fab fa-fw fa-facebook-f"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4"><?=$row["sayfa_menu2"];?></h4>
                        <p class="lead mb-0">
                            <? echo $row["sayfa_slogan2"]." ".$row["sayfa_slogan3"];?><br>
                            <?=$row["sayfa_ceptel"];?>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small><?=$row["sayfa_copyright"];?></small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">Android Telefon Tamiri </h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cabin.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
Ücretsiz Arıza Tespiti.
yozgattelefontamiri Olarak Cep Telefonları Arıza Tepitini Ücretsiz yapıyoruz.
<br><br>
Zamanında Onarım İşlemi
yozgattelefontamiri  Tamir ve Onarım için Teslim Edilen Cihazınız Arıza Tespitinden sonra Onayladığınız Taktirde En Kısa Sürede  Yapılır ve Gününde Teslim Edilir.
<br><br>
24/7 Teknik Destek
 teknik destek, yozgattelefontamiri en iyi servislerinden biridir. 24x7 teknoloji desteği, yozgattan herhangi bir yerinde, istediğiniz zaman kaliteli hizmet sunmaktadır.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Kapat
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">Apple Telefon Tamiri</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">iPhone akıllı telefonunuzda yaşamış olduğunuz sorunların çözüyoruz

Teknik servisimizde yapılan onarım işlemlerinin süresi ortalama 45 dakika iken 2 taraflı ücretsiz kargo gönderim hizmetimizden faydalanıldığında bu süre 3 (üç) iş günüdür.<br>    Peki yapılan parça değişimleri nelerdir ?
 <br>   <br>   
iPhone ekran değişimi <br>    
iPhone telefon tamiri<br>   
iç ekran<br>   
ön cam<br>   
dokunmatik alan<br>   
dış panel<br>   <br>   


Ekran değişimi süreçlerinde bilgileriniz silinmez.<br>   
Telefon ekran performansında yani dokunmatik hızı – hassasiyeti ve ekran parlaklığı – çözünürlüğünde herhangi bir değişim yaşanmaz.<br>   
Ekran kalitesi ilk günkü haline geri döner.<br>   



 </p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Kapat
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">Apple Telefon Tamiri</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/circus.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Kırık Ekran
CPR'ın iPhone kırık ekran değiştirme hizmetleri hem hızlı hem de bütçenize uygundur. iPhone ekran onarımlarınız siz mağazada beklerken veya en fazla bir iş günü içinde tamamlanıp teslim edilecektir. <br><br>Bozuk Pil
Şarjınız çok mu çabuk bitiyor? Bu durum gün içi üretkenliğinize ciddi zarar verebilir. Neyse ki, CPR, iPhone'unuzun yoğun yaşam tarzınıza ayak uydurabilmesi için profesyonel iPhone pil değişiklikleri gerçekleştirir. <br><br>Hoparlör Arızası
iPhone hoparlörlerinizden çıkan sesin boğuk ve bozuk olması ya da hiç ses çıkarmaması durumunda hoparlörün onarılması ya da değiştirilmesi gerekebilir. Tüm iPhone ses sorunlarını çözmek için CPR uzmanlarına güvenin. <br><br>Su Hasarı
iPhone'unuzda su hasarı yaşadıysanız CPR’ı ziyaret edin. CPR hasarın boyutunu belirlemek için profesyonel bir tarama gerçekleştirilir, cihazınız temizlenir, kalıntılardan arındırılır ve uygun şekilde test edilir. <br><br>Sinyal Yok
iPhone'unuzda sinyal sorunu yaşıyorsanız CPR sizlere yardım etmek için hazır. iPhone'unuzda su hasarı, SIM kart hasarı veya güncel olmayan yazılım gibi çeşitli sorunlar olabilir. Bu konularda biz sizlere yardım etmek için hazırız <br><br>Tuş Arızası
iPhone'unuzdaki tuşlar arızalı veya kırılmışsa profesyonel onarım hizmetleri için CPR teknisyenlerine güvenin. Uzun süre iPhone'suz kalmamanız için hızlı bir şekilde sorunu çözmeye çalışırız. </p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Kapat
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal4Label">İç kısım bilgileri 4</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/game.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Kapat
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal5Label">İç kısım bilgileri 5</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/safe.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Kapat
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal6Label">İç kısım bilgileri 6</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png" alt="" />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Kapat
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
