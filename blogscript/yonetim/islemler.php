<?php require_once 'inc/ust.php'; ?>
    <!-- Sidebar menu-->
<?php require_once 'inc/sol.php'; ?>

    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-th-list"></i> İşlemler</h1>
          <p>İşlemler Listesi</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">İşlemler</li>
          <li class="breadcrumb-item active"><a href="#">İşlemler Listesi</a></li>
        </ul>
      </div>
      <div class="row">

        <div class="clearfix"></div>
        <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title"><?php echo get('islem'); ?></h3>

            <?php

            if(@$_SESSION['oturum'] == sha1(md5(@$yid.IP()))){
                $islem = @get('islem');
                if(!$islem){
                    header("Location:".$yonetim);
                }

                switch($islem){
                    ## Silme İşlemleri
                    case 'kategorisil':
                        $id = get('id');
                        if(!$id){
                            header("Location:".$yonetim."/kategoriler.php");
                        }

                        $kategorisil = $db->prepare("DELETE FROM kategoriler WHERE id=:id");
                        $kategorisil->execute([':id' => $id]);
                        if($kategorisil){

                            $yazipasif = $db->prepare("UPDATE yazilar SET yazi_durum=:d WHERE yazi_kat_id=:id");
                            $yazipasif->execute([':d' =>2, ':id' => $id]);

                            echo "<script>alert('Kategori başarıyla silindi. Bu kategoriye ait yazılar pasif hale getirildi.');</script>";
                            header('Refresh:2;url='.$_SERVER['HTTP_REFERER']);


                        }else{
                            echo "<script>alert('Hata Oluştu!');</script>";
                        }
                    break;
                    case 'mesajsil':
                        $id = get('id');
                        if(!$id){
                            header("Location:".$yonetim."/okunmusmesajlar.php");
                        }

                        $mesajsil = $db->prepare("DELETE FROM mesajlar WHERE id=:id");
                        $mesajsil->execute([':id' => $id]);
                        if($mesajsil){


                            echo "<div style='width:100%; height:auto; padding:8px; background:green; color:#fff; border-radius:4px; font-size:16px; font-weight:bold;'>Mesaj başarıyla silindi.</div>";
                            header('Refresh:2;url='.$_SERVER['HTTP_REFERER']);


                        }else{
                            echo "<div style='width:100%; height:auto; padding:8px; background:red; color:#fff; border-radius:4px; font-size:16px; font-weight:bold;'>Hata Oluştu.</div>";
                        }
                    break;
                    case 'yorumsil':
                        $id = get('id');
                        if(!$id){
                            header("Location:".$yonetim."/bekleyenyorumlar.php");
                        }

                        $yorumsil = $db->prepare("DELETE FROM yorumlar WHERE id=:id");
                        $yorumsil->execute([':id' => $id]);
                        if($yorumsil){


                            echo "<div style='width:100%; height:auto; padding:8px; background:green; color:#fff; border-radius:4px; font-size:16px; font-weight:bold;'>Yorum başarıyla silindi.</div>";
                            header('Refresh:2;url='.$_SERVER['HTTP_REFERER']);


                        }else{
                            echo "<div style='width:100%; height:auto; padding:8px; background:red; color:#fff; border-radius:4px; font-size:16px; font-weight:bold;'>Hata Oluştu.</div>";
                        }
                    break;
                    case 'sosyalmedyasil':
                        $id = get('id');
                        if(!$id){
                            header("Location:".$yonetim."/bekleyenyorumlar.php");
                        }

                        $sosyalmedyasil = $db->prepare("DELETE FROM sosyalmedya WHERE id=:id");
                        $sosyalmedyasil->execute([':id' => $id]);
                        if($sosyalmedyasil){


                            echo "<div style='width:100%; height:auto; padding:8px; background:green; color:#fff; border-radius:4px; font-size:16px; font-weight:bold;'>Sosyal medya hesabı başarıyla silindi.</div>";
                            header('Refresh:2;url='.$_SERVER['HTTP_REFERER']);


                        }else{
                            echo "<div style='width:100%; height:auto; padding:8px; background:red; color:#fff; border-radius:4px; font-size:16px; font-weight:bold;'>Hata Oluştu.</div>";
                        }
                    break;
                    case 'yazisil':
                        $id = get('id');
                        if(!$id){
                            header("Location:".$yonetim."/konular.php");
                        }

                        $yazisil = $db->prepare("DELETE FROM yazilar WHERE yazi_id=:id");
                        $yazisil->execute([':id' => $id]);
                        if($yazisil){


                            echo "<div style='width:100%; height:auto; padding:8px; background:green; color:#fff; border-radius:4px; font-size:16px; font-weight:bold;'>Makale başarıyla silindi.</div>";
                            header('Refresh:2;url='.$_SERVER['HTTP_REFERER']);


                        }else{
                            echo "<div style='width:100%; height:auto; padding:8px; background:red; color:#fff; border-radius:4px; font-size:16px; font-weight:bold;'>Hata Oluştu.</div>";
                        }
                    break;
                    case 'abonesil':
                        $id = get('id');
                        if(!$id){
                            header("Location:".$yonetim."/aboneler.php");
                        }

                        $abonesil = $db->prepare("DELETE FROM aboneler WHERE id=:id");
                        $abonesil->execute([':id' => $id]);
                        if($abonesil){
                            echo "<div style='width:100%; height:auto; padding:8px; background:green; color:#fff; border-radius:4px; font-size:16px; font-weight:bold;'>Abone başarıyla silindi.</div>";
                            header('Refresh:2;url='.$_SERVER['HTTP_REFERER']);
                        }else{
                            echo "<div style='width:100%; height:auto; padding:8px; background:red; color:#fff; border-radius:4px; font-size:16px; font-weight:bold;'>Hata Oluştu.</div>";
                        }
                    break;
                    ## Silme İşlemleri sonu#

                    ## Ekleme İşlemleri


                    ## kategori ekleme
                    case 'yenikategori':

                        if(isset($_POST['kategoriekle'])){

                            $katadi = post('katadi');
                            $katsef = sef_link($katadi);
                            $katkeyw = post('katkeyw');
                            $katdesc = post('katdesc');

                            if(!$katadi || !$katkeyw || !$katdesc){
                                echo '<script>alert("Boş alan bırkmayınız!");</script>';
                            }else{

                                $varmi = $db->prepare("SELECT * FROM kategoriler WHERE kat_sef=:s");
                                $varmi->execute([':s' => $katsef]);
                                if($varmi->rowCount()){
                                    echo "<script>alert('Bu kategori zaten bulunuyor.');</script>";
                                }else{
                                    $katekle = $db->prepare("INSERT INTO kategoriler SET
                                    kat_adi=:adi,
                                    kat_sef=:sef,
                                    kat_keyw=:keyw,
                                    kat_desc=:descc
                                    ");

                                    $katekle->execute([':adi' => $katadi, ':sef' => $katsef, ':keyw' => $katkeyw, ':descc' => $katdesc]);
                                    if($katekle->rowCount()){
                                        echo '<script>alert("kategori başarıyla eklendi.");</script>';
                                        header("refresh:2;url=".$yonetim."/kategoriler.php");
                                    }else{
                                        echo '<script>alert("Hata oluştu!!");</script>';
                                    }
                                }
                            }

                        }
                        ?>

                        <form class="form-horizontal" action="" method="POST">
    
                            <div class="tile-body">

                            <div class="form-group row">
                            <label class="control-label col-md-3">Kategori Adı</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="katadi" placeholder="kategori adı">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label class="control-label col-md-3">Kategori Anahtar Kelimeler</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="katkeyw" placeholder="kategori anahtar kelimeler">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label class="control-label col-md-3">Kategori Açıklaması</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="katdesc" placeholder="kategori açıklaması">
                            </div>
                            </div>
                            </div>
                            <div class="tile-footer">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-3">
                                <button class="btn btn-primary" type="submit" name="kategoriekle"><i class="fa fa-fw fa-lg fa-check-circle"></i>Kategori Ekle</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="<?php echo $yonetim ?>/kategoriler.php/"><i class="fa fa-fw fa-lg fa-arrow-left"></i>Listeye Dön</a>
                                </div>
                            </div>
                            </div>
                    </form>


                        <?php
                    break;
                    ## kategori ekleme



                    ## sosyalmedya ekleme
                    case 'yenisosyalmedya':

                        if(isset($_POST['sosyalmedyaekle'])){

                            $ikon = post('ikon');
                            $link = post('link');

                            if(!$ikon || !$link){
                                echo '<script>alert("Boş alan bırkmayınız!");</script>';
                            }else{

                                $sosyalekle = $db->prepare("INSERT INTO sosyalmedya SET
                                ikon=:ik,
                                link=:lk
                                ");

                                $sosyalekle->execute([':ik' => $ikon, ':lk' => $link]);
                                if($sosyalekle->rowCount()){
                                    echo '<script>alert("Sosyal medya hesabı başarıyla eklendi.");</script>';
                                    header("refresh:2;url=".$yonetim."/sosyalmedya.php");
                                }else{
                                    echo '<script>alert("Hata oluştu!!");</script>';
                                }
                                
                            }

                        }
                        ?>

                        <form class="form-horizontal" action="" method="POST">
    
                            <div class="tile-body">

                            <div class="form-group row">
                            <label class="control-label col-md-3">Sosyal Medya İkon</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="ikon" placeholder="ikon">
                            </div>
                            </div>
                            <div class="form-group row">
                            <label class="control-label col-md-3">Sosyal Medya Link</label>
                            <div class="col-md-8">
                                <input class="form-control" type="text" name="link" placeholder="link">
                            </div>
                            </div>
                            </div>
                            <div class="tile-footer">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-3">
                                <button class="btn btn-primary" type="submit" name="sosyalmedyaekle"><i class="fa fa-fw fa-lg fa-check-circle"></i>SosyalMedya Ekle</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="<?php echo $yonetim ?>/sosyalmedya.php/"><i class="fa fa-fw fa-lg fa-arrow-left"></i>Listeye Dön</a>
                                </div>
                            </div>
                            </div>
                    </form>


                        <?php
                    break;
                    ## sosyalmedya ekleme





























                    ## Ekleme İşlemleri sonu#


                    
                    

                    }
                
            }
            ?>

          </div>
        </div>
      </div>
    </main>
<?php require_once 'inc/alt.php'; ?>