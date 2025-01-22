<?php
// En başa veritabanı bağlantısını ekleyin
include("baglanti.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Kişisel Web Sayfam</title>
    <!-- Mobil uyumluluk için meta etiketleri -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Bodo - Simple One Page Personal" name="description">
    <meta content="BdgPixel" name="author">
    <!--Fav-->
    <link href="images/favicon.ico" rel="shortcut icon">
    
    <!--styles-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/magnific-popup.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!--fonts google-->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    
    <!--[if lt IE 9]>
       <script type="text/javascript" src="js/html5shiv.min.js"></script>
    <![endif]-->
    
    <script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.appear.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/classie.js" type="text/javascript"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <script src="js/masonry.pkgd.min.js" type="text/javascript"></script>
    <script src="js/masonry.js" type="text/javascript"></script>
    <script src="js/smooth-scroll.min.js" type="text/javascript"></script>
    <script src="js/typed.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <style>
    #preloader {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #fff;
        z-index: 9999;
    }

    #status {
        width: 200px;
        height: 200px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
    }

    #status img {
        max-width: 100%;
    }

    .loaded #preloader {
        display: none;
    }

    /* Mobil cihazlar için genel ayarlar */
    @media (max-width: 768px) {
      .content-wrap {
        padding: 0 15px;
      }
      
      /* Menü düzenlemeleri */
      .menu-wrap {
        width: 100%;
        max-width: 300px;
      }
      
      /* Header düzenlemeleri */
      .header {
        position: fixed;
        width: 100%;
        z-index: 1000;
      }
      
      /* Hizmetler bölümü */
      .listing-item li {
        width: 100%;
        margin-bottom: 20px;
      }
      
      /* Beceriler bölümü */
      .skillbar {
        margin-bottom: 15px;
      }
      
      /* İletişim formu */
      .group input, .group textarea {
        width: 100%;
      }
      
      /* Footer */
      .socials li {
        margin: 5px;
      }
      
      /* Genel yazı boyutları */
      h1 { font-size: 2em; }
      h2 { font-size: 1.8em; }
      h3 { font-size: 1.5em; }
      p { font-size: 1em; }
      
      /* Responsive tablo */
      .table-responsive {
        overflow-x: auto;
      }
      
      /* Grid düzenlemeleri */
      .col-md-3, .col-md-4, .col-md-6, .col-md-9 {
        width: 100%;
        padding: 0 15px;
      }
      
      /* Resim boyutları */
      img {
        max-width: 100%;
        height: auto;
      }
      
      /* Preloader */
      #status {
        width: 150px;
        height: 150px;
      }
    }
    
    /* Tablet cihazlar için ayarlar */
    @media (min-width: 769px) and (max-width: 1024px) {
      .listing-item li {
        width: 50%;
      }
      
      .col-md-3 {
        width: 50%;
      }
      
      .col-md-9 {
        width: 100%;
      }
    }
    
    /* Dokunmatik cihazlar için hover efektleri */
    @media (hover: none) {
      .nav-link:hover,
      .btn:hover,
      .socials a:hover {
        transform: none;
      }
    }
    
    /* Yüksek DPI ekranlar için */
    @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
      img {
        image-rendering: -webkit-optimize-contrast;
      }
    }
    </style>
  </head>
  <body>
    <!--PRELOADER-->
    <div id="preloader">
      <div id="status">
        <img alt="logo" src="images/batulogo.png">
      </div>
    </div>
    <!--/.PRELOADER END-->

    <!--HEADER -->
    <div class="header">
      <div class="for-sticky">
        <!--LOGO-->
        <div class="col-md-2 col-xs-6 logo">
          <a href="index.html"><img alt="logo" class="logo-nav" src="images/logo.png"></a>
        </div>
        <!--/.LOGO END-->
      </div>
      <div class="menu-wrap">
        <nav class="menu">
          <div class="menu-list">
            <a data-scroll="" href="#home" class="active">
              <span>Anasayfa</span>
            </a>
            <a data-scroll="" href="#about">
              <span>Hakkımda</span>
            </a>
            <a data-scroll="" href="#work">
              <span>İşlerim</span>
            </a>
             <a data-scroll="" href="#services">
              <span>Hizmetler</span>
            </a>
            <a data-scroll="" href="#employement">
              <span>Özgeçmiş</span>
            </a>
            <a data-scroll="" href="#skill">
              <span>Becerilerim</span>
            </a>
            <a data-scroll="" href="#education">
              <span>Eğitim</span>
            </a>
            <a data-scroll="" href="#testimonial">
              <span>Tecrübelerim</span>
            </a>
            <a data-scroll="" href="#blog">
              <span>Blog</span>
            </a>
            <a data-scroll="" href="#contact">
              <span>Bana Ulaşın</span>
            </a>
          </div>
        </nav>
        <button class="close-button" id="close-button">Close Menu</button>
      </div>
      <button class="menu-button" id="open-button">
        <span></span>
        <span></span>
        <span></span>
      </button><!--/.for-sticky-->
    </div>
    <!--/.HEADER END-->
    
    <!--CONTENT WRAP-->
    <div class="content-wrap">
      <!--CONTENT-->
      <div class="content">
        <!--HOME-->
        <section id="home">
          <div class="container">
            <div class="row">
              <div class="wrap-hero-content">
                  <div class="hero-content">
                    <h1>Merhaba!</h1>
                    <br>
                    <span class="typed"></span>
                  </div>
              </div>
              <div class="mouse-icon margin-20">
                <div class="scroll"></div>
              </div>
            </div>
          </div>
        </section>
        <!--/.HOME END-->

        <!--ABOUT-->
        <section id="about">
          <div class="col-md-6 col-xs-12 no-pad">
            <div class="bg-about"></div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12 white-col">
            <div class="row">
              <!--OWL CAROUSEL2-->
              <div class="owl-carousel2">
                <div class="col-md-12">
                  <div class="wrap-about">
                    <div class="w-content">
                      <p class="head-about">
                        <?php
                        // Hakkımda içeriğini çek
                        $sorgu = "SELECT icerik FROM site_icerik WHERE alan = 'hakkimda'";
                        $sonuc = $baglan->query($sorgu);
                        
                        if ($sonuc && $sonuc->num_rows > 0) {
                            $row = $sonuc->fetch_assoc();
                            echo $row['icerik'];
                        } else {
                            echo "İçerik yüklenirken bir hata oluştu.";
                        }
                        ?>
                      </p>
                      <h5 class="name">
                        Batuhan Yalçın
                      </h5>
                      <!--- İmza eklemeyi unutmazsam buraya eklenecek .d-->
                    </div>
                  </div>
                </div>
              
                <div class="col-md-12 col-sm-12 col-xs-12 white-col">
                  <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
                      <div class="wrap-about">
                        <table class="w-content">
                          <tr>
                            <td class="title">Ad Soyad </td>
                            <td class="break">:</td>
                            <td> Batuhan Yalçın</td>
                          </tr>
                          <tr>
                            <td class="title">Github </td>
                            <td class="break">:</td>
                            <td> https://github.com/Batuhan-Yalcin</td>
                          </tr>
                          <tr>
                            <td class="title">Email </td>
                            <td class="break">:</td>
                            <td> batuhanyalcin5834@gmail.com</td>
                          </tr>
                          <tr>
                            <td class="title">Yaşadığım İl </td>
                            <td class="break">:</td>
                            <td> İstanbul</td>
                          </tr>
                          <tr>
                            <td class="title">Linkedin </td>
                            <td class="break">:</td>
                            <td> www.linkedin.com/in/batuhan-yalcin58</td>
                          </tr>
                          <tr>
                            <td class="title">Okuduğum Üniversite</td>
                            <td class="break">:</td>
                            <td>İstanbul Nişantaşı Üniversitesi</td>
                          </tr>
                          <tr>
                            <td class="title">Bölümüm</td>
                            <td class="break">:</td>
                            <td> Bilgisayar Bilimleri</td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--/.OWL CAROUSEL2 END-->
            </div>
          </div>
        </section>
        <!--/.ABOUT END-->

        <!--WORK-->
        <section class="grey-bg mar-tm-10" id="work">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>İşler</span>
                </h3>
                <p class="content-detail">
                  Merhaba, ben Batuhan. Yazılım geliştirme ve teknolojiye olan ilgimle birçok projede deneyim kazandım. Şu anda Java, C#, Spring, React gibi teknolojilerle çalışarak yazılım dünyasında kendimi geliştirmeye devam ediyorum. Yeniliklere açık ve çözüm odaklı bir yaklaşım benimsemek, her projeye katkı sağlamak için en büyük motivasyonumdur. Kariyerimdeki her adımı titizlikle planlıyor ve sürekli öğrenerek gelişiyorum.
                </p>
              </div>
              <div class="col-md-9 content-right">
                <!--PORTFOLIO IMAGE-->
                <ul class="portfolio-image">
                  <li class="col-md-6">
                    <a href="images/cv.png"><img alt="image" src="images/cv.png">
                      <div class="decription-wrap">
                        <div class="image-bg">
                           <p class="desc">Cvmi Görmek İçin Tıkla</p>
                        </div>

                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="images/yazilimokulu.png"><img alt="image" src="images/yazilimokulu.png">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Diğer Web Sitelerim İçin Tıkla
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="images/yazilimokulu2.png"><img alt="image" src="images/yazilimokulu2.png">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Yazılım Okulu Projemin Hakkında kısmı
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="images/yazilimokulu3.png"><img alt="image" src="images/yazilimokulu3.png">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Yazılım Okulu Projemin Eğitimler Kısmı
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="images/yazilimokulu4.png"><img alt="image" src="images/yazilimokulu4.png">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            Yazılım Okulu Projemin Bize Ulaşın Kısmı
                          </p>  
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="col-md-6">
                    <a href="images/imza.png"><img alt="image" src="images/imza.png">
                      <div class="decription-wrap">
                        <div class="image-bg">
                          <p class="desc">
                            İmza İçin Tıklayın
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
                <!--/.PORTFOLIO IMAGE END-->
              </div>
            </div>
          </div>
        </section>
        <!--/.WORK END-->

        <!--SERVICES-->
        <section class="white-bg" id="services">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Hizmetlerim</span>
                </h3>
                <p class="content-detail">
                  <?php
                  $sorgu = "SELECT icerik FROM site_icerik WHERE alan = 'hizmetler'";
                  $sonuc = $baglan->query($sorgu);
                  if ($sonuc && $sonuc->num_rows > 0) {
                      $row = $sonuc->fetch_assoc();
                      echo $row['icerik'];
                  }
                  ?>
                </p>
              </div>
              <div class="col-md-9 content-right">
                <div class="row">
                  <ul class="listing-item">
                    <?php
                    // Hizmetleri veritabanından çek
                    $hizmetler = $baglan->query("SELECT * FROM hizmetler ORDER BY id DESC");
                    
                    if($hizmetler) {
                        while($hizmet = $hizmetler->fetch_assoc()) {
                            echo '<li>';
                            echo '<div class="col-md-4 col-sm-4">';
                            echo '<h3 class="icon-use">'.$hizmet['ikon'].'</h3>';
                            echo '<p class="head-sm">'.$hizmet['baslik'].'</p>';
                            echo '<p class="text-grey">'.$hizmet['aciklama'].'</p>';
                            echo '</div>';
                            echo '</li>';
                        }
                    }
                    ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/.SERVICES END-->

        <!--EMPLOYEMENT-->
        <section class="grey-bg" id="employement">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Yazılımdaki Çalışma Hayatım</span>
                </h3>
                <p class="content-detail">
                  Yazılıma olan ilgim 2020 yılında başladı ve o günden itibaren sürekli olarak yeni teknolojiler öğrenmeye, kendimi geliştirmeye odaklandım. Yazılım alanında sürekli olarak kendimi geliştirmek adına çeşitli online kurslara katıldım, çeşitli projeler geliştirdim ve en güncel yazılım dillerini öğrenmeye başladım.Full stack geliştirme alanında kendimi geliştirmeyi hedefliyorum ve özellikle Java, Spring Boot ve React teknolojilerine odaklanarak bu alanda derinlemesine bilgi sahibi olmayı amaçlıyorum.Yazılım geliştirme, benim için sadece bir iş değil, aynı zamanda sürekli bir öğrenme ve kendimi geliştirme süreci. Bu alandaki heyecanım ve tutkum her geçen gün artıyor.
                </p>
              </div>
              <div class="col-md-9 content-right">
                <div class="row">
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              2023 - 2024
                            </h2>
                            <p class="job">
                             Game Developer
                            </p>
                            <p class="company">
                              MooMoo Games
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                MooMoo Games Şirketi'nde 6 ay süreyle Game Developer olarak görev aldım ve C# ile Unity oyun motoru kullanarak yazılım geliştirme sürecine önemli katkılarda bulundum.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              2024 - 2025
                            </h2>
                            <p class="job">
                             Full Stack Developer
                            </p>
                            <p class="company">
                              Acun Medya
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Acun Medya Akademi'de AkademiQ Staj Eğitim Programı'na katıldım ve burada Java Spring Boot & React ile Full Stack geliştirme üzerine eğitim almaya devam ediyorum.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>  
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              2024 - 2025
                            </h2>
                            <p class="job">
                              Spring Boot & React 
                            </p>
                            <p class="company">
                            MySTAFF
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Mystaff ve Acun Medya Akademi'nin iş birliğiyle düzenlenen Spring Boot ve React eğitimi programına katıldım ve hala devam ediyorum.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              2025 Şuan
                            </h2>
                            <p class="job">
                              Full Stack Developer
                            </p>
                            <p class="company">
                              Freelance
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                Freelance olarak Bionluk ve Armut gibi platformlar üzerinden web sitesi geliştirme hizmetleri sunuyor, ayrıca Java ve C# konularında eğitimler veriyorum
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/.EMPLOYEMENT END-->

        <!--SKILLS-->
        <section class="white-bg" id="skill">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Becerilerim</span>
                </h3>
                <p class="content-detail">
                  Yazılım geliştirme alanında edindiğim beceriler ve uzmanlık seviyelerim.
                </p>
              </div>
              <div class="col-md-9 content-right">
                <!--SKILLST-->
                <div class="skillst">
                  <?php
                  // Becerileri veritabanından çek
                  $beceriler = $baglan->query("SELECT * FROM beceriler ORDER BY id DESC");
                  
                  if($beceriler) {
                      while($beceri = $beceriler->fetch_assoc()) {
                          echo '<div class="skillbar" data-percent="'.$beceri['yuzde'].'%">';
                          echo '<div class="title head-sm">'.$beceri['ad'].'</div>';
                          echo '<div class="count-bar">';
                          echo '<div class="count"></div>';
                          echo '</div>';
                          echo '</div>';
                      }
                  }
                  ?>
                </div>
                <!--/.SKILLST END-->
              </div>
            </div>
          </div>
        </section>
        <!--/.SKILLS END-->

        <!--EDUCATION-->
        <section class="grey-bg" id="education">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <h3 class="title-small">
                  <span>Eğitim</span>
                </h3>
                <p class="content-detail">
                <?php
                $egitim_sorgu = $baglan->prepare("SELECT icerik FROM site_icerik WHERE alan = ?");
                $alan = 'egitim';
                $egitim_sorgu->bind_param("s", $alan);
                $egitim_sorgu->execute();
                $result = $egitim_sorgu->get_result();
                
                if($egitim = $result->fetch_assoc()) {
                    echo htmlspecialchars_decode($egitim['icerik']);
                }
                $egitim_sorgu->close();
                ?>
                </p>
              </div>
              <div class="col-md-9 content-right">
                <div class="row">
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              2023 - 2024
                            </h2>
                            <p class="job">
                              Bilgisayar Bilimleri
                            </p>
                            <p class="company">
                              Rumeli Universitesi
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                2023-2024 yılları arasında Rumeli Üniversitesi'nde Bilgisayar Bilimleri eğitimi aldım. Bu süre zarfında yazılım geliştirme, algoritmalar ve veri yönetimi konularında temel bilgileri edindim ve projelerle pratiğe dökme fırsatı buldum. Kendimi özellikle Java, ve Html Css gibi alanlarda geliştirdim.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              2024 - 2025
                            </h2>
                            <p class="job">
                              Bilgisayar Programcılığı
                            </p>
                            <p class="company">
                              Nişantaşı Üniversitesi
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                2024-2025 yılları arasında Nişantaşı Üniversitesi'nde Bilgisayar Programcılığı eğitimi aldım. Bu süreçte yazılım geliştirme, veri tabanı yönetimi ve programlama dillerinde derinlemesine bilgiler edindim. Java ve C# üzerinde yoğunlaşarak çeşitli projeler geliştirme deneyimi kazandım.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <ul class="listing-item">
                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              2025 Şuanda
                            </h2>
                            <p class="job">
                             Acun Medya Akademi
                            </p>
                            <p class="company">
                              Java Spring Boot & React Eğitimi
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                2025 yılında Acun Medya Akademi'de Java Spring Boot ve React teknolojileri üzerine Full Stack geliştirme eğitimi almaya başladım. Backend ve frontend geliştirme süreçlerine dair kapsamlı bilgi edinerek, modern web uygulamaları geliştirme becerilerimi ileri seviyeye taşıyorum. Eğitim sürecim halen devam ediyor.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="col-md-6 col-sm-6">
                        <div class="wrap-card">
                          <div class="card">
                            <h2 class="year">
                              2025 Şuanda
                            </h2>
                            <p class="job">
                              MySTAFF
                            </p>
                            <p class="company">
                             Java Spring Boot & React Eğitimi
                            </p>
                            <hr>
                            <div class="text-detail">
                              <p>
                                2025 yılında Mystaff iş birliğiyle düzenlenen programda Java Spring Boot ve React teknolojileri üzerine Full Stack geliştirme eğitimi almaya başladım. Backend ve frontend geliştirme süreçlerine dair kapsamlı bilgi edinerek, modern web uygulamaları geliştirme becerilerimi ileri seviyeye taşıyorum. Eğitim sürecim halen devam ediyor.
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>

                </div>
              </div>
            </div>
          </div>
        </section>
        <!--/.EDUCATION END-->

        <!--TESTIMONIAL-->
        <section id="testimonial">
          <div class="container">
            <div class="row wrap-testimonial">
              <div class="col-md-10 col-md-offset-1">
                <div class="owl-carousel">
                  <div class="list-testimonial">
                    <div class="content-testimonial">
                      <h3 class="testi">
                        " Başarı, cesaretle atılan ilk adımla başlar. Hedefin büyükse, yolun da o kadar öğretici olur. Denemekten korkma, her hata yeni bir ders taşır. "
                      </h3>
                      <p class="people">
                        Batuhan Yalçın
                      </p>
                    </div>
                  </div>
                  <div class="list-testimonial">
                    <div class="content-testimonial">
                      <h3 class="testi">
                        " Hiçbir başarı kolay elde edilmez ve hiçbir büyük başarının arkasında yatıp bekleyen insanlar göremezsiniz. Başarıya ulaşmak için kararlılıkla çalışmanız, çaba göstermeniz ve asla pes etmemeniz gerekiyor. "
                      </h3>
                      <p class="people">
                       Batuhan Yalçın
                      </p>
                    </div>
                  </div>
                  <div class="list-testimonial">
                    <div class="content-testimonial">
                      <h3 class="testi">
                        " Hayatınızı tamamen bu işe adamanızı beklemiyorum, çünkü sosyal hayat da en az başarı kadar önemlidir. Ancak, bir şeyler başarmak istiyorsanız bu işe belli bir zaman ayırmanız şart. Gelecekte başarılı bir yazılımcı mı olmak istiyorsunuz yoksa asgari ücretle çalışan biri mi? Karar sizin. "
                      </h3>
                      <p class="people">
                        Batuhan Yalçın..
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mask-testimonial"></div>
        </section>
        <!--/.TESTMONIAL END-->

        <!--BLOG-->
        <section class="grey-bg" id="blog">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h3 class="title-small-center text-center">
                  <span>Blog</span>
                </h3>
                <div class="row">
                  <div class="col-md-6 col-md-offset-3">
                    <p class="content-details text-center">
                      Bu kısımda Yazılım hayatına nasıl atıldığımı daha iyi göreceksiniz.
                    </p>
                  </div>
                </div>
                <!--GRID BLOG-->
                <div class="grid">
                  <div class="grid-item">
                    <div class="wrap-article">
                      <img alt="blog-1" class="img-circle text-center" src="images/merak.jpg">
                      <p class="subtitle fancy">
                        <span>09/01/2020</span>
                      </p>
                      <a href="#">
                        <h3 class="title">
                         Merak
                        </h3>
                      </a>
                      <p class="content-blog">
                        2020 yılının Ocak ayında internette gezinirken bir merakla aklıma şu soru geldi: "Bu kadar şeyi kim, nasıl yaptı? Acaba ben de yapabilir miyim? İnsanlara katkı sağlayacak içerikler üretebilir miyim?" O günden sonra bu düşüncelerle yol aldım ve Araştırmaya başladım.
                      </p>
                    </div>
                  </div>

                  <div class="grid-item">
                    <div class="wrap-article">
                     <img alt="blog-4" class="img-circle text-center" src="images/blog-4.jpg">
                     <p class="subtitle fancy">
                        <span>18/04/2020</span>
                      </p>
                      <a href="#">
                        <h3 class="title">
                         Başlangıç
                        </h3>
                      </a>
                      <p class="content-blog">
                        Ardından 3 ay geçti ve yazılım öğrenmeye kararlıydım. O 3 ayda neden başlamadığımı sorarsanız, ben de herkes gibi aylak aylak geziyordum. Fakat sonra "Bu iş böyle gitmez" diyerek araştırmalara başladım. İlk olarak HTML ve CSS öğrenip, basit web siteleri tasarlayarak kendi kendime seviniyordum. :)
                      </p>
                    </div>
                  </div>

                  <div class="grid-item">
                    <div class="wrap-article">
                      <img alt="blog6" class="img-circle text-center" src="images/temelogrenme.jpg">
                      <p class="subtitle fancy">
                        <span>01/01/2021</span>
                      </p>
                      <a href="#">
                        <h3 class="title">
                         Temel Öğrenme
                        </h3>
                      </a>
                      <p class="content-blog">
                        Evet, ardından tam 8 ay geçti ve sadece HTML ve CSS ile kaldım. Çünkü kendime bir söz vermiştim: Bir şeyde profesyonel olana kadar başka bir şeye geçmeyecektim. HTML ve CSS ile devam ederek çeşitli web siteleri oluşturmaya devam ettim.. 
                      </p>
                    </div>
                  </div>
                  
                  <div class="grid-item">
                    <div class="wrap-article">
                      <img alt="blog2" class="img-circle text-center" src="images/blog-3.jpg">
                      <p class="subtitle fancy">
                        <span>17/04/2021</span>
                      </p>
                      <a href="#">
                        <h3 class="title">
                        İlgi Alanımın Değişmesi
                        </h3>
                      </a>
                      <p class="content-blog">
                      Tamam, bu kadar web sitesi kuruyordum, ediyordum fakat ilgim sadece web sitesi yapmakla kalmıyordu; oyun yapmak istiyordum. Herkes gibi ben de oyun oynamayı çok seven birisiydim ve Java ile tanışmam işte o gün başladı.. 
                      </p>
                    </div>
                  </div>

                  <div class="grid-item">
                    <div class="wrap-article">
                      <img alt="blog5" class="img-circle text-center" src="images/blog-5.jpg">
                      <p class="subtitle fancy">
                        <span>23/01/2025</span>
                      </p>
                      <a href="#">
                        <h3 class="title">
                          BİTİŞ
                        </h3>
                      </a>
                      <p class="content-blog">
                      Daha sonrasında Java ile Android Studio kullanımına başladım, orada kendimi geliştirdim ve oradan da sıkıldım :) :) Sonrasında ise HTML ve CSS bilgimi Java ile geliştirmeye karar verdim. Evet, işte Spring framework'ü ve React'ın doğuşu başladı... Şans dileyin bana, React ve Spring için o şansa çok ihtiyacım olacak! :))
                      </p>
                    </div>
                  </div>

                  <div class="grid-item">
                    <div class="wrap-article">
                      <img alt="blog-3" class="img-circle text-center" src="images/java.jpg">
                      <p class="subtitle fancy">
                        <span>13/07/2021</span>
                      </p>
                      <a href="#">
                        <h3 class="title">
                          Java İle Tanışmam
                        </h3>
                      </a>
                      <p class="content-blog">
                        Java ile tanıştıktan sonra çeşitli kurslar, makaleler ve kitaplar inceledim ve bir kavram öğrendim: "OOP". Bu kavramın üzerine yoğunlaştım çünkü bu kavram olmadan hiçbir proje olmayacağını fark ettim ve kendimi bu kavramda geliştirmeye başladım. Tam 6-7 ay boyunca aralıksız bu kavram üzerine yoğunlaştım. 
                      </p>
                    </div>
                  </div>                  

                </div>
                <!--/.GRID BLOG END-->
              </div>
            </div>
          </div>
        </section>
        <!--/.BLOG END-->

      <!--CONTACT-->
<section id="contact" class="white-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h3 class="title-small">
          <span>Bana Ulaşın!</span>
        </h3>
        <p class="content-detail">
          Bana ulaşabilmek için mesaj gönderin.
        </p>
      </div>
      <div class="col-md-9 content-right">
        <form action="" method="post">
          <div class="group">
            <input required="" type="text" name="ad_soyad"><span class="highlight"></span><span class="bar"></span><label>Adınız</label>
          </div>
          <div class="group">
            <input required="" type="email" name="email"><span class="highlight"></span><span class="bar"></span><label>Email Adresiniz</label>
          </div>
          <div class="group">
            <textarea required="" name="mesaj"></textarea><span class="highlight"></span><span class="bar"></span><label>Mesajınız</label>
          </div>
          <input id="sendMessage" name="sendMessage" type="submit" value="Gönder">
        </form>
        
      </div>
    </div>
  </div>
</section>

<?php
    
    if(isset($_POST["ad_soyad"], $_POST["email"], $_POST["mesaj"])) {
        $ad_soyad = $_POST["ad_soyad"];
        $email = $_POST["email"];
        $mesaj = $_POST["mesaj"];
        
        $ekle = "INSERT INTO iletisim (ad_soyad, email, mesaj) VALUES (?, ?, ?)";
        $stmt = $baglan->prepare($ekle);
        $stmt->bind_param("sss", $ad_soyad, $email, $mesaj);
        
        if($stmt->execute()) {
            echo "<script>alert('Mesajınız başarıyla gönderildi.');</script>";
        } else {
            echo "<script>alert('Mesaj gönderilirken bir hata oluştu.');</script>";
        }
        $stmt->close();
    }
?>

<!--/.CONTACT END-->





        
        <!--FOOTER-->
        <footer>
          <div class="footer-top">
            <ul class="socials">
              <li class="facebook">
                <a href="https://github.com/Batuhan-Yalcin" data-hover="Github">Github</a>
              </li>
              <li class="twitter">
                <a href="https://www.linkedin.com/in/batuhan-yal%C3%A7in/" data-hover="Linkedin">Linkedin</a>
              </li>
              <li class="gplus">
                <a href="https://www.instagram.com/batuhan.yalcin58/" data-hover="İnstagram">İnstagram +</a>
              </li>
            </ul>
          </div>

          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <img src="images/batulogo.png" alt="logo bottom" class="center-block" />
              </div>
            </div>
            <div class="footer-text">
              <p>&copy; 2025 Tüm hakları saklıdır.</p>
            </div>
          </div>
        </footer>
        <!--/.FOOTER-END-->

      <!--/.CONTENT END-->
      </div>
    <!--/.CONTENT-WRAP END-->
    </div>
    

    <script>
    window.addEventListener('load', function() {
        document.getElementById('status').style.display = 'none';
        document.getElementById('preloader').style.display = 'none';
    });
    </script>
  </body>
</html>