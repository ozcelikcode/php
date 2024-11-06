<?php

    include "../settings.php";
    include "../admin/db.php";
    include "../function.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Panel - <?php echo $site_name; ?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
    <link rel="shortcut icon" href="favicon.ico">

    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="../assets/css/theme-1.css">

</head>

<body>

    <header class="header text-center">
        <h1 class="blog-name pt-lg-4 mb-0"><a href="<?php echo $site_url . "/admin"; ?>"><?php echo $site_name; ?> - Admin Panel</a></h1>

        <nav class="navbar navbar-expand-lg navbar-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column">
                <div class="profile-section pt-3 pt-lg-0">
                    <img class="profile-image mb-3 rounded-circle mx-auto" src="../assets/images/profile.png" alt="image">

                    <div class="bio mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, quas!</div>
                    <!--//bio-->
                    <hr>
                </div>
                <!--//profile-section-->

                <ul class="navbar-nav flex-column text-left">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"><i class="fa fa-home fa-fw mr-2"></i>Ana Sayfa <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="add.php"><i class="fa fa-pencil fa-fw mr-2"></i>İçerik Ekle</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php"><i class="fa fa-user fa-fw mr-2"></i>Yakında</a>
                    </li>
                </ul>

            </div>
        </nav>
    </header>