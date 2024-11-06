<?php require_once "../inc/admin-header.php"; ?>

<style>
    .alert-danger,
    .alert-warning,
    .alert-success {
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

        $query = $db->prepare("SELECT * FROM articles WHERE article_title LIKE :title ORDER BY article_id DESC");

        $query->execute(array(':title' => '%' . $word . '%'));

    ?>
        <br>
        <div class="alert alert-success"><?php echo "<strong>" . $word . "</strong>"; ?> kelimesine ait <strong><?php echo "" . $query->rowCount() . "" ?></strong> adet sonuç bulundu.</div>
        
        <div class="con adminpanel">
            <table class="table table-striped text-center">

                <tr>
                    <td><strong>Id</strong></td>
                    <td><strong>Resim</strong></td>
                    <td><strong>Yayınlayan</strong></td>
                    <td><strong>Başlık</strong></td>
                    <td><strong>Tarih</strong></td>
                    <td><strong>Düzenle / Sil</strong></td>
                </tr>

                <?php

                if ($query->rowCount()) {

                    foreach ($query as $row) {

                        $article_id = $row["article_id"];
                        $article_title = $row["article_title"];
                        $article_image = $row["article_image"];
                        $article_editor = $row["article_editor"];
                        $article_date = $row["article_date"];
                        $article_link = $row["article_link"];
                        $article_tags = $row["article_tags"];
                ?>

                        <tr>
                            <td><?php echo $article_id ?></td>

                            <td><img src="<?php echo $article_image ?>" style="max-height: 50px;"></td>

                            <td><?php echo $article_editor ?></td>

                            <td><?php echo $article_title ?></td>

                            <td><?php echo date('Y/m/d H:i', strtotime($article_date)); ?></td>
                            <!-- orijinal hali date('d.m.Y H:i:s') şeklindedir -->

                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="<?php echo $site_url . "/" . $page_link . $article_link ?>" target="_blank" class="btn btn-primary">Görüntüle</a>
                                    <a href="edit.php?id=<?php echo $article_id ?>" class="btn btn-warning">Düzenle</a>
                                    <a href="delete.php?id=<?php echo $article_id ?>" class="btn btn-danger">Sil</a>
                                </div>
                            </td>
                        </tr>

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
            </table>
        </div>

        <?php require_once "../inc/footer.php"; ?>