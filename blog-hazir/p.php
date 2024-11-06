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

<!-- // -->

<?php echo $article_title ?> <br>

<img src="<?php echo $article_image ?>" style="max-width:250px;"> <br>

Editör: <?php echo $article_editor ?> <br>

Tarih: <?php echo date('Y/m/d H:i', strtotime($article_date)); ?> <br>

Etiket: <?php echo $article_tags ?> <br>

<?php echo $article ?>

<!-- // -->

<!-- <?php // eğerki değer boş ise siteye yönlendirsin.

        // if ($article_title != true) {
        //     header("Location: http://localhost/blog2");
        // }

        ?> -->

<?php require_once "assets/inc/footer.php" ?>