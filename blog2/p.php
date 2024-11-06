<?php

require_once "assets/inc/header.php"; // Header sayfası çalıştırılır

$p = @$_GET["article"]; // ?article= sayfayı çalıştırır.

$dataList = $db->prepare("SELECT * FROM articles WHERE article_link=?");
$dataList->execute([$p]);

$dataList = $dataList->fetch(PDO::FETCH_ASSOC);

$article_editor = $dataList["article_editor"];
$article_title = $dataList["article_title"];
$article = $dataList["article"];
$article_date = $dataList["article_date"];
$article_image = $dataList["article_image"];
$article_tags = $dataList["article_tags"];

?>

<title><?php echo $article_title ?></title>

<style>
    .pimg{
        max-width: 60%;
        margin: auto;
    }
</style>

<div class="con">

    <div class="card text-dark bg-light mb-3">

        <div class="card-header"><?php echo $article_title ?></div>
        <div class="card-body">

            <img src="<?php echo $article_image ?>" class="pimg">

            <br>

            <div class="page-info">
                <div class="i1">
                    <h5 class="card-title">Editör:</h5> <?php echo $article_editor ?>
                </div>

                <div class="i2">
                    <h5 class="card-title">Tarih:</h5> <?php echo date('Y/m/d H:i', strtotime($article_date)); ?>
                </div>

                <div class="i3">
                    <h5 class="card-title">Etiket:</h5> <?php echo $article_tags ?>
                </div>
            </div>

            <p class="card-text">
                <?php echo $article ?>
            </p>
        </div>
    </div>

    <!-- --- -->
</div>

<!-- <?php // eğerki değer boş ise siteye yönlendirsin.

        // if ($article_title != true) {
        //     header("Location: http://localhost/blog2");
        // }

        ?> -->

<?php require_once "assets/inc/footer.php" ?>