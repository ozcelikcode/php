<?php
echo !defined('guvenlik') ? die() : null;
require_once './sistemyonetim/fonksiyon.php';



  if(!isset($_SESSION['oturum'])){

      header('Location:giris.php');

  }else if(@$_SESSION['oturum'] != sha1(md5(@$yid.IP()))){

      header('Location:giris.php');
  }



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Yönetim Paneli</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="app sidebar-mini">
<!-- Navbar-->
<header class="app-header"><a class="app-header__logo" href="index.php">Yonetim</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">

        <!--Notification Menu-->

        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i> <?php echo $ykadi;?></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="<?php echo $yonetim;?>/islemler.php?islem=profil"><i class="fa fa-cog fa-lg"></i> Profilim</a></li>
                <li><a class="dropdown-item" href="<?php echo $yonetim;?>/islemler.php?islem=sifredegistir"><i class="fa fa-lock fa-lg"></i> Şifreyi Değiştir</a></li>
                <li><a onclick="return confirm('Çıkış yapmak istiyor musunuz ?');" class="dropdown-item" href="<?php echo $yonetim;?>/islemler.php?islem=cikis"><i class="fa fa-sign-out fa-lg"></i> Çıkış Yap</a></li>
            </ul>
        </li>
    </ul>
</header>