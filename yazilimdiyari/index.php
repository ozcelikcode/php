<?php require 'altyapi/header.php'; ?>

<title><?php echo $site_adi . " - " . $slogan; ?></title>


<?php

error_reporting(0);
$host   = 'localhost'; //host bilgisi
$user   = 'root'; //kullanıcı adı
$pass   = ''; //sifre
$db     = 'blog3'; //veritabanı ismi

$baglan = mysqli_connect($host, $user, $pass, $db);
mysqli_query($baglan, "SET CHARACTER SET 'utf8'");
mysqli_query($baglan, "SET NAMES 'utf8'");

$sayfa = $_GET['sayfa'] ? $_GET['sayfa'] : 1; //urlden gelen sayfa değeri var ise o değeri, yok ise 1 değeri veriyoruz.
$toplam_icerik_sayisi = mysqli_num_rows(mysqli_query($baglan, 'SELECT id FROM makaleler'));
$limit = 9; //sayfalamada her sayfada gösterilecek veri sayısı
$sonSayfa = ceil($toplam_icerik_sayisi / $limit);
$baslangic = ($sayfa - 1) * $limit;
if ($sonSayfa >= $sayfa) {
  $icerik_sorgu = mysqli_query($baglan, 'SELECT * FROM makaleler ORDER BY id DESC LIMIT ' . $baslangic . ',' . $limit);
  while ($icerik = mysqli_fetch_assoc($icerik_sorgu)) {
?>

    <!-- İçerik Başladı -->
    <div class='col-md-4'>
      <div class='card card-blog'>
        <div class='card-img'>
          <a href='sayfa.php?p=" . $icerik["id"] . "'><img src='<?php echo "" . $icerik["resim"] . "" ?>' style='width: 100%; height: 200px;' class='img-fluid'></a>
        </div>
        <div class='card-body'>
          <div class='card-category-box'>
            <div class='card-category'>
              <h6 class='category'><?php echo "" . $icerik["genel_etiket"] . "" ?></h6>
            </div>
          </div>
          <h3 class='card-title'><a href='sayfa.php?p=<?php echo "" . $icerik["id"] . "" ?>'><?php echo "" . $icerik["baslik"] . "" ?></a></h3>
          <p class='card-description'>

          </p>
          <p class='pt-3'><a class='btn btn-primary btn js-scroll px-4' href='sayfa.php?p=<?php echo "" . $icerik["id"] . "" ?>' role='button'>Devamını Oku</a></p>
        </div>
        <div class='card-footer'>



          <div class='post-author'>
            <a href='#'>
              <!-- <img src='img/testimonial-2.jpg' alt='' class='avatar rounded-circle'> -->
              <span class='author'><?php echo "" . $icerik["yazar"] . "" ?></span>
            </a>
          </div>
          <div class='post-date'>
            <span class='ion-ios-clock-outline'></span> <?php echo "" . $icerik["tarih"] . "" ?>
          </div>
        </div>
      </div>
    </div>
    <!-- İçerik bitti -->

<?php
  }

  if ($toplam_icerik_sayisi > $limit) {
    echo '<br><br>';

    $x = 2; //kısaltma limiti 
    if ($sayfa > 1) {
      $onceki = $sayfa - 1;
      echo '<a href="?sayfa=' . $onceki . '">« Önceki </a>';
    }
    if ($sayfa == 1) {
      echo '&nbsp;<a>[1]</a>&nbsp;';
    } else { // bulunmuyorsak
      echo '&nbsp;<a href="?sayfa=1">1</a>&nbsp;';
    }

    if ($sayfa - $x > 2) {
      echo '...';
      $i = $sayfa - $x;
    } else {
      $i = 2;
    }

    for ($i; $i <= $sayfa + $x; $i++) {
      if ($i == $sayfa) {
        echo '&nbsp;<a>[' . $i . ']</a>&nbsp;';
      } else { //değil ise
        echo '<a href="?sayfa=' . $i . '">' . $i . '</a>&nbsp;';
      }
      if ($i == $sonSayfa) break;
    }

    if ($sayfa + $x < $sonSayfa - 1) { //6+2<11-1 ise  
      echo '...';
      echo '<a href="?sayfa=' . $sonSayfa . '">' . $sonSayfa . '</a>';
    } elseif ($sayfa + $x == $sonSayfa - 1) {
      echo '<a href="?sayfa=' . $sonSayfa . '">' . $sonSayfa . '</a>';
    }

    if ($sayfa < $sonSayfa) {
      $sonraki = $sayfa + 1;
      echo '<a href="?sayfa=' . $sonraki . '"> Sonraki » </a>';
    }
  }
} else {
  echo 'Hiç içerik yok';
}

?>




<?php require 'altyapi/footer.php'; ?>