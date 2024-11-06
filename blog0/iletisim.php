<?php 
define('guvenlik',true);
require_once 'inc/ust.php';?>

    <!-- Header -->
    <?php require_once 'inc/menu.php'; ?>
    <!-- end: Header -->

    <!-- Page title -->
    <section id="page-title" data-parallax-image="<?php echo $arow->site_url;?>/images/blog.jpg?v=1">
        <div class="container">
            <div class="page-title">
                <h1>Bana Ulaşın</h1>
            </div>
            <div class="breadcrumb">
                <ul>
                    <li><a href="#">Ana Sayfa</a> </li>
                    <li class="active"><a href="#">İletişim</a> </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- end: Page title -->

    <!-- CONTENT -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-<?php echo $arow->harita_durum == 1 ? '6' : '12';?>">
                    <h3 class="text-uppercase">Bana Yazın</h3>
                    <p>Lütfen iletişim formunu eksiksiz doldurunuz. Projeleriniz veya diğer sorunlarınız için <b><?php echo $arow->site_mail;?></b> mail adresi üzerinden iletişime geçebilirsiniz.</p>
                    <div class="m-t-30">
                        <form id="iletisimformu" onsubmit="return false;" class="widget-contact-form" action="" role="form" method="post">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Ad Soyad</label>
                                    <input type="text" aria-required="true" name="ad" class="form-control required name" placeholder="Ad Soyad giriniz">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">E-posta</label>
                                    <input type="email" aria-required="true" name="eposta" class="form-control required email" placeholder="E-posta giriniz">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="subject">Konu</label>
                                    <input type="text" name="konu" class="form-control required" placeholder="Konu...">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Mesaj</label>
                                <textarea type="text" name="mesaj" rows="5" class="form-control required" placeholder="Mesajınız"></textarea>
                            </div>

                            <button class="btn" onclick="mesajgonder();" type="submit" id="form-submit"><i class="fa fa-paper-plane"></i>&nbsp;Mesaj Gönder</button>
                        </form>

                    </div>
                </div>
                <?php if($arow->harita_durum == 1){?>
                <div class="col-lg-6">
                    <h3 class="text-uppercase">Neredeyim ?</h3>


                    <!-- Google map sensor -->
                    <iframe src="<?php echo $arow->site_harita;?>" width="600" height="400"></iframe>
                    <!-- Google map sensor -->

                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- end: CONTENT -->

  <?php require_once 'inc/alt.php'; ?>