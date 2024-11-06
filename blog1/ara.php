<?php
define('guvenlik',true);
require_once 'inc/ust.php'; ?>

        <!-- Header -->
        <?php require_once 'inc/menu.php';


        $s     = @intval($_GET['s']);
        if(!$s){ $s = 1; }

        $q   = strip_tags($_GET['q']);
        if(!$q){ header('Location:'.$arow->site_url); }

        $sorgu = $db->prepare("SELECT yazi_kat_id,yazi_durum FROM yazilar
        INNER JOIN kategoriler ON kategoriler.id = yazilar.yazi_kat_id 
        WHERE yazi_durum=:d AND yazi_baslik LIKE :baslik
                                ");
        $sorgu->execute([':d' => 1,':baslik' => "%".$q."%"]);

        $toplam = $sorgu->rowCount();
        $lim    = 9;
        $goster = $s * $lim - $lim;

        ?>
        <!-- end: Header -->

        <!-- Content -->
        <section id="page-content">
            <div class="container">
                <!-- post content -->

                <!-- Page title -->
                <div class="page-title">
                    <h1><?php echo $q;?> | Arama Sonuçları ( <?php echo $toplam;?> )</h1>
                    <div class="breadcrumb float-left">
                        <ul>
                            <li><a href="#">Ana Sayfa</a>
                            </li>
                            <li><a href="#"><?php echo $q;?> Kelimesine göre arama sonuçları ( <?php echo $toplam;?> )</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- end: Page title -->

                <!-- Blog -->
                <div id="blog" class="grid-layout post-3-columns m-b-30" data-item="post-item">

                    <!-- Post item-->
                    <?php

                        $sorgu  = $db->prepare("SELECT * FROM yazilar
                          INNER JOIN kategoriler ON kategoriler.id = yazilar.yazi_kat_id 
                          WHERE yazi_durum=:d AND yazi_baslik LIKE :baslik ORDER BY yazi_tarih DESC LIMIT :goster,:lim
                        ");

                        $sorgu->bindValue(":d",(int) 1,PDO::PARAM_INT);
                        $sorgu->bindValue(":baslik",'%'.$q.'%',PDO::PARAM_STR);
                        $sorgu->bindValue(":goster",(int) $goster,PDO::PARAM_INT);
                        $sorgu->bindValue(":lim",(int) $lim,PDO::PARAM_INT);
                        $sorgu->execute();

                        if($s > ceil($toplam/$lim)){
                            $s = 1;
                        }


                        if($sorgu->rowCount()){

                            foreach($sorgu as $row) {

                                ?>


                                <div class="post-item border">
                                    <div class="post-item-wrap">
                                        <div class="post-image">
                                            <a href="<?php echo $arow->site_url;?>/yazidetay.php?yazi_sef=<?php echo $row['yazi_sef'];?>&id=<?php echo $row['yazi_id'];?>">
                                                <img width="525" height="350" alt="<?php echo $row['yazi_baslik'];?>" src="images/<?php echo $row['yazi_resim'];?>">
                                            </a>
                                            <span class="post-meta-category"><a href="<?php echo $arow->site_url.'/kategoriler.php?kat_sef='.$row['kat_sef'];?>"><?php echo $row['kat_adi'];?></a></span>
                                        </div>
                                        <div class="post-item-description">
                                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo date('d.m.Y',strtotime($row['yazi_tarih']));?></span>
                                            <span class="post-meta-comments"><a href=""><i class="fa fa-eye"></i><?php echo $row['yazi_goruntulenme'];?> Görüntülenme</a></span>
                                            <h2><a href="<?php echo $arow->site_url;?>/yazidetay.php?yazi_sef=<?php echo $row['yazi_sef'];?>&id=<?php echo $row['yazi_id'];?>"><?php echo $row['yazi_baslik'];?></a></h2>
                                            <p style="word-wrap: break-word;"><?php echo mb_substr(strip_tags($row['yazi_icerik']),0,250,'utf8').'...';?></p>
                                            <a href="<?php echo $arow->site_url;?>/yazidetay.php?yazi_sef=<?php echo $row['yazi_sef'];?>&id=<?php echo $row['yazi_id'];?>" class="item-link">Devamını Oku <i class="fa fa-arrow-right"></i></a>

                                        </div>
                                    </div>
                                </div>


                                <?php


                            }

                            ?>
                            </div>
                            <ul class="pagination">
                                <?php

                                    if($toplam > $lim){
                                        pagination($s,ceil($toplam/$lim),'ara.php?q='.$q.'&s=');
                                    }

                                ?>
                            </ul>


                            <?php



                        }else{
                            echo '<div class="alert alert-danger">'.$q.' Kelimesine uygun bir yazı bulunamadı</div>';
                        } ?>

                
                 <!-- Pagination -->      



                <!-- end: Pagination -->

            </div>
            <!-- end: post content -->

        </section>
        <!-- end: Content -->
        <!-- Footer -->


<?php require_once 'inc/alt.php'; ?>