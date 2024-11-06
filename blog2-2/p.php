<?php

require_once "assets/inc/header.php"; // Header sayfası çalıştırılır

$p = @$_GET["article"]; // ?article= sayfayı çalıştırır.

$dataList = $db->prepare("SELECT * FROM articles WHERE article_link=?");
$dataList->execute([$p]);

$dataList = $dataList->fetch(PDO::FETCH_ASSOC);

?>

<title><?php echo $dataList["article_title"]; ?></title>

<div class="con">

    <div class="card text-dark bg-light mb-3">

        <div class="card-header"><?php echo $dataList["article_title"]; ?></div>
        <div class="card-body">

            <div style="width: 400px;">
                <img src="<?php echo $dataList['article_image']; ?>">
            </div>

            <div class="page-info">
                <div class="i1">
                    <h5 class="card-title">Editör:</h5> Özçelik
                </div>
                <div class="i2">
                    <h5 class="card-title">Tarih:</h5> <?php echo date('Y/m/d H:i', strtotime($dataList["article_date"])); ?>
                </div>
                <div class="i3">
                    <h5 class="card-title">Etiket:</h5> #merhaba
                </div>
            </div>

            <p class="card-text">
                <?php echo $dataList["article"]; ?>
            </p>
        </div>
    </div>

    <!-- --- -->
</div>

<?php require_once "assets/inc/footer.php" ?>