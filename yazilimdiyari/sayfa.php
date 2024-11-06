
  <!-- Meta -->
  <meta content="<?php

    include("ayar.php");

    $p = $_GET["p"];

    $veri = $vt->prepare("select * from makaleler where id=?");
    $veri->execute(array($p));
    
    $icerik = $veri->fetch(PDO::FETCH_ASSOC);
        echo "".$icerik["etiket"].", ".$icerik["etiket2"].", ".$icerik["etiket3"].", ".$icerik["etiket4"]."";

    ?>" name="keywords">


  <meta content="<?php

    include("ayar.php");

    $p = $_GET["p"];

    $veri = $vt->prepare("select * from makaleler where id=?");
    $veri->execute(array($p));
    
    $icerik = $veri->fetch(PDO::FETCH_ASSOC);
        echo "".$icerik["konu"]."";

    ?>" name="description">

<title><?php

    include("ayar.php");

    $p = $_GET["p"];

    $veri = $vt->prepare("select * from makaleler where id=?");
    $veri->execute(array($p));
    
    $icerik = $veri->fetch(PDO::FETCH_ASSOC);
        echo " ".$icerik["baslik"]." - $site_adi";

    ?></title>

<?php require 'altyapi/sayfa_header.php'; ?>

  <!-- Disqus -->
  <script id="dsq-count-scr" src="//ozcelik.disqus.com/count.js" async></script>




      <?php

            include("ayar.php");

            $p = $_GET["p"];

            $veri = $vt->prepare("select * from makaleler where id=?");
            $veri->execute(array($p));
			
			$icerik = $veri->fetch(PDO::FETCH_ASSOC);

        ?>


  <!--/ Genel Başlık /-->
  <div class="intro intro-single route bg-image" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <h2 class="intro-title mb-4"><?php echo " ".$icerik["baslik"]." "; ?></h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item">
              <a href="index.php">Ana Sayfa</a>
            </li>
            <li class="breadcrumb-item active">
              Blog
            </li>
            <li class="breadcrumb-item active"><?php echo " ".$icerik["baslik"]." "; ?></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--/ Genel Başlık /-->



  <!--/ Blog İçerik /-->
  <section class="blog-wrapper sect-pt4" id="blog">
    <div class="container">
      <!-- İçerik Başladı -->
      <div class="row">
        <div class="col-md-8">
          <div class="post-box">
            <div class="post-thumb">
              <a href="<?php /* echo "".$icerik["resim"].""; */ ?>" target="_blank"><img src="<?php /* echo " ".$icerik["resim"]." "; */ ?>" class="img-fluid" alt=""></a>
            </div>
            <div class="post-meta">
              <h1 class="article-title"><?php echo " ".$icerik["baslik"]." "; ?></h1>
              <ul>
                <li>
                  <span class="ion-ios-person"></span>
                  <a href="#"><?php echo " ".$icerik["yazar"]." "; ?></a>
                </li>
                <li>
                  <span class="ion-pricetag"></span>
                  <a href="#"><?php echo " ".$icerik["genel_etiket"]." "; ?></a>
                </li>
                <!-- <li>
                  <span class="ion-chatbox"></span>
                  <a href="#">YORUM SAYISI</a>
                </li> -->
<li><span style="font-family: Arial;"><i class="fa fa-history"></i>Gönderim Tarihi: <?php echo " ".$icerik["tarih"]." "; ?></span></li>
              </ul>
            </div>
            <div class="article-content">
              
               <?php echo " ".$icerik["yazi"]." "; ?>
              
              <!--<blockquote class="blockquote">
                <p class="mb-0">Alıntılı metin</p>
              </blockquote> -->
            </div>
          </div>

          <!-- Yorumlar -->
          <div class="widget-sidebar widget-tags">
            <h5 class="sidebar-title">Yorumlar</h5>
            <div class="sidebar-content">
              <ul>
               
               <div id="disqus_thread">
               	<script>
				    (function() { // DON'T EDIT BELOW THIS LINE
				    var d = document, s = d.createElement('script');
				    s.src = 'https://ozcelik.disqus.com/embed.js';
				    s.setAttribute('data-timestamp', +new Date());
				    (d.head || d.body).appendChild(s);
				    })();
				</script></div>

              </ul>
            </div>
          </div>
        <!-- Yorumlar -->


  <!--/ Blog İçerik /-->
 

<?php require 'altyapi/sayfa_footer.php'; ?>