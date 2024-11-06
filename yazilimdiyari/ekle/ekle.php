<?php 

    $kul[0]['kullanici']="admin"; 
    $kul[0]['sifre']="123asd123"; 
    $kul[1]['kullanici']="admin"; 
    $kul[1]['sifre']="123asd123";
    // Üstteki Kullanıcı adı ve sifreyi cogaltabilirsiniz

    // Dogrulama 
    function authenticate() { 
    header( 'WWW-Authenticate: Basic realm="Kullanıcı adı ve şifreyi yazınız."' ); 
    header( 'HTTP/1.0 401 Unauthorized' );
    echo '<br/><br/><b><body bgcolor=#29a2d6><font color=white size=10 face="Trebuchet MS"><center>Giriş Yapıldı!<br/><br/>Sen tam anlamıyla bir hackersın :D '; 
exit; 
} 
if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) { authenticate(); } else 
{ 
for($i=0;$i<count($kul);$i++) { if($_SERVER['PHP_AUTH_USER']==$kul[$i]['kullanici'] && $_SERVER['PHP_AUTH_PW']==$kul[$i]['sifre']){$auth=TRUE;}} 
        if($auth !=TRUE) {authenticate();} 
    } 
?>

<?php
    include ("../ayar.php");

    if($_POST){
        $baslik = $_POST["baslik"];
        $yazi = $_POST["yazi"];
        $yazar = $_POST["yazar"];
        $resim = $_POST["resim"];
        $etiket = $_POST["etiket"];
        $etiket2 = $_POST["etiket2"];
        $etiket3 = $_POST["etiket3"];
        $etiket4 = $_POST["etiket4"];
        $etiket5 = $_POST["etiket5"];
        $genel_etiket = $_POST["genel_etiket"];
        $konu = $_POST["konu"];

        $veri = $vt->prepare("insert into makaleler set baslik=?, yazi=?, yazar=?, resim=?, etiket=?, konu=?, genel_etiket=?, etiket2=?, etiket3=?, etiket4=?, etiket5=?");
  $veri->execute(array($baslik,$yazi,$yazar,$resim,$etiket,$konu,$genel_etiket,$etiket2,$etiket3,$etiket4,$etiket5));
        
        if($veri){
            echo "<center><h1 class='gradient2'>Başarılı İşlem!</h1></center></br>";
            header("refresh: 1; url=#");
        }else{
            echo "<center><h1 class='gradient2'>Başarısız İşlem!!!</h1></center></br>";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>İçerik Ekle</title>
  <!-- include jquery -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>

  <!-- include libs stylesheets -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.css" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.js"></script>

  <!-- include summernote -->
  <link rel="stylesheet" href="dist/summernote-bs4.css">
  <script type="text/javascript" src="dist/summernote-bs4.js"></script>

  <link rel="stylesheet" href="examples/example.css">
  <script type="text/javascript">
    $(document).ready(function() {
      $('.summernote').summernote({
        height: 300,
        tabsize: 2
      });
    });
  </script>




  <!-- Gradient -->

  <style type="text/css">

  .text, h1 {
  font-size: 40px;
  background: -webkit-linear-gradient(rgba(2,0,36,1), rgba(9,9,121,1), rgba(0,212,255,1));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  }

.gradient2 {background:#2e73ff;background-image:linear-gradient(45deg,#2e73ff 20%,#ff0032 52%,#0c0c0f 95%);background-size:100%;background-clip:text;-webkit-background-clip:text;-webkit-text-fill-color:transparent;-moz-background-clip:text;-moz-text-fill-color:transparent}


</style>

  <!-- Gradient -->


</head>
<body>
<div class="container">
  <h1>İçerik Ekle</h1>
  <h4>
	<a href="../index.php">Ana Sayfa</a>
	-
	<a href="#" onclick="javascript: window.open('../index.php', '', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=780,height=550'); return false" >Önizle</a></span>
    - 
</h4>

	<br>
<center>
   <form action="" method="POST">
        <b>Başlık: </b><br />
        <input type="text" name="baslik" placeholder="içerik başlık" /><br /><br />
        
        <b>Resim Ekle: </b><br />
        <input type="text" name="resim" placeholder="resim url"><br /><br />
        
        <b>Yazar: </b><br />
        <input type="text" name="yazar" placeholder="kim gönderiyor?" /><br /><br />

        <b>Etiket 1: </b><br />
        <input type="text" name="etiket" placeholder="etiket 1" /><br /><br />

        <b>Etiket 2: </b><br />
        <input type="text" name="etiket2" placeholder="etiket 2" /><br /><br />

        <b>Etiket 3: </b><br />
        <input type="text" name="etiket3" placeholder="etiket 3" /><br /><br />

        <b>Etiket 4: </b><br />
        <input type="text" name="etiket4" placeholder="etiket 4" /><br /><br />

        <b>Etiket 5: </b><br />
        <input type="text" name="etiket5" placeholder="etiket 5" /><br /><br />

        <b>Genel Etiket *1 tane yazmanız yeterli: </b><br />
        <input type="text" name="genel_etiket" placeholder="1 tane genel etiket yaz" /><br /><br />

        <b>Konu: </b><br />
        <input type="text" name="konu" placeholder="konuyu detaylı açıkla!"><br /><br />

        <br />

  </center>

        <textarea class="summernote" name="yazi"></textarea><br>


    <center>
  <input type="submit" class="btn btn-primary btn js-scroll px-4" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;İçerik ekle!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" />
            </form><br><br>

      <p>
        <span class="badge badge-primary">&nbsp;&nbsp;özçelikGrup&nbsp;&nbsp;</span><br>
        <span class="badge badge-info">&nbsp;&nbsp;2021 &copy; Tüm Hakları Saklıdır. <?php echo $site_adi; ?> &nbsp;&nbsp;</span>
      <br><br>
    </p>

<h1 class="gradient2">PHP Developer: özçelik</h1>
<h1 class="text">CSS Designer: osman</h1>

<br><br>
    </center>



</div>
</body>
</html>
