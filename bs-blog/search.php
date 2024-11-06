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
                ?>

                        <div class="col">
                            <div class="card">
                                <img src="<?php echo '' . $row["article_image"] . ''; ?>" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo '' . $row["article_title"] . ''; ?></h5>
                                    <p class="card-text"><?php echo strip_tags('' . $row["article"] . ''); ?></p>
                                    <a href="<?php echo $page_link ?><?php echo '' . $row["article_link"] . ''; ?>" class="btn btn-primary">Read More..</a>
                                </div>
                            </div>
                        </div>

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