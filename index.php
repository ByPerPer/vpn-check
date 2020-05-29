<?php
  $ip = file_get_contents('https://api.ipify.org');
  $url = "http://ip-api.com/json/".$ip;
  $content = file_get_contents($url);
  $json = json_decode($content,true);
?>
                
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Vpn Check</title>
        <!-- İkon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fontları-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- CSS Dosyaları-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Menü-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">VPN Durumu Kontrol</a><button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menü <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Hakkında</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">İletişim</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Ana sayfa-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <h1 class="masthead-heading text-uppercase mb-0">Vpn Durumu; <?php if ($json['country'] == 'Turkey'){
                echo '<div class="text-danger">
                Kullanmıyorsunuz!
                </div>';
                }
                
                else {
                    echo '<div class="text-sucess">
                Kullanıyorsunuz!
                </div>';
                } ?></h1>
                <!-- HDD ikonu-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-hdd"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Ip gösterme-->
                <p class="masthead-subheading font-weight-light mb-0"><?php echo "Senin ip adresin: " . $ip; ?></p>
            </div>
        </header>
       
        <!-- Hakkında-->
        <section class="page-section portfolio" id="about">
            <div class="container">
                <!-- Hakkında başlığı-->
                <h2 class="page-section-heading text-center text-uppercase">Nasıl kullanılır? Ve hakkında..</h2>
                <!-- Hakkında içeriği-->
                <div class="row">
                    <div class="col-lg-4 ml-auto"><p class="lead">VPN Durumunuzu gösterir. VPN Açıksa "Kullanıyorsunuz" yazar, kapalıysa "Kullanmıyorsunuz" yazar. Sadece Türkiye dışı VPN'ler için geçerlidir. Yani Türkiye IP'lerine ait VPN'niz varsa kullanamazsınız. IP adresinizide kontrol edebilirsiniz. </p></div>
                    <div class="col-lg-4 mr-auto"><p class="lead">Geliştiriciler için kaynak kodları sitenin en son kısmında GitHub'da bulunuyor. Reklamlarla veya link kısaltmalarla birlikte kendi hostinginize atıp para kazanabilirsiniz size bağlı.</p></div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center" id="contact">
            <div class="container">
                <div class="row">
                    <!-- Footer İkonları-->
                    <div class="social" style="text-align: center; margin:auto;">
                        <h4 class="text-uppercase mb-4">İletişim adresleri</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/ByPerPer"><i class="fab fa-github"></i></a><a class="btn btn-outline-light btn-social mx-1" href="https://www.youtube.com/channel/UCEEDVWD3eb12it1aZBielhA"><i class="fab fa-youtube"></i></a><a class="btn btn-outline-light btn-social mx-1" onClick="telegramCl()"><i class="fab fa-telegram"></i></a><a class="btn btn-outline-light btn-social mx-1" onClick="discordCl()"><i class="fab fa-discord"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Kodlayıcı: ByPerPer</small></div>
        </div>
        <!-- Mobil cihazlar için yukarı çıkma butonu-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Bootstrap JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

        <script>
function telegramCl() {
  alert("Telegram adresim: @ByPerPer");
}

function discordCl() {
  alert("Discord adresim: ByPerPer#3222");
}

</script>
</body>
</html>
