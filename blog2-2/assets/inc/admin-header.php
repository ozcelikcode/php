<?php

include "../settings.php";
include "../database/database.php";
include "../inc/function.php";

?>

<!doctype html>
<html lang="tr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="<?php echo $site_url ?>/assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo $site_url ?>/assets/css/bootstrap.min.css">

    <title>Blog v1.0!</title>

    <link rel="stylesheet" href="<?php echo $site_url ?>/assets/app.css">

</head>

<style>
    .adminpanel h1 {
        margin: 0 0 20px 0;
        padding: 0;
        display: inline-block;
    }

    .adminpanel .adminpanel-menu {
        float: right;
    }
</style>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo $site_url ?>">Blog v1.0</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="<?php echo $site_url ?>/assets/admin">Admin Sayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo $site_url ?>/assets/admin/add.php">İçerik Ekle</a>
                    </li>
                </ul>
                <!--<form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="kelime ara..." aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Ara</button>
                </form> -->
            </div>
        </div>
    </nav>