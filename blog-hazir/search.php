<?php require_once "assets/inc/header.php"; ?>


<style>
    .alert-danger,.alert-warning,.alert-success{
        width: 80%;
        margin: 15px auto;
    }
</style>


<?php

if ($_GET) {

    $word = $_GET['word'];

    if (!$word) {
?>
        
        <div class="alert alert-danger">Lütfen arama yapmak için bir şeyler yazın.</div>

    <?php
    } else {

        $query = $db->prepare("SELECT * FROM articles WHERE article_title LIKE :title");

        $query->execute(array(':title' => '%' . $word . '%'));

    ?>
        <br>
        <div class="alert alert-success"><?php echo "<strong>" . $word . "</strong>"; ?> kelimesine ait <strong><?php echo "" . $query->rowCount() . "" ?></strong> adet sonuç bulundu.</div>

        <div class="con">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <?php

                if ($query->rowCount()) {

                    foreach ($query as $row) {

                        $article_image = $row["article_image"];
                        $article_title = $row["article_title"];
                        $article = $row["article_image"];
                        $article = $row["article"];
                        $article_link = $row["article_link"];
                ?>


                                <img src="<?php echo $article_image; ?>" class="card-img-top">
                                    <h5 class="card-title"><?php echo $article_title; ?></h5>
                                    <p class="card-text"><?php echo strip_tags($article); ?></p>
                                    <a href="<?php echo $page_link ?><?php echo $article_link; ?>" class="btn btn-primary">Read More..</a>

                    <?php
                    }
                } else {
                    ?>

                    <div class="alert alert-warning">Aranan Kelime ile ilgili hiç bir sonuç bulunamadı.</div>

        <?php
                }
            }
        }

        ?>

            </div>
        </div>

        <?php require_once "assets/inc/footer.php"; ?>