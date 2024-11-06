<?php require_once "../inc/admin-header.php"; ?>

<div class="con adminpanel">

    <h1>Site Admin Panel</h1>

    <?php require_once "../inc/admin-menu.php"; ?>

    <table class="table table-striped text-center">

        <tr>
            <td><strong>Id</strong></td>
            <td><strong>Resim</strong></td>
            <td><strong>Yayınlayan</strong></td>
            <td><strong>Başlık</strong></td>
            <td><strong>Tarih</strong></td>
            <td><strong>Düzenle / Sil</strong></td>
        </tr>

        <!-- ----- -->

        <?php

        $limit = 10;

        $query = $db->prepare("SELECT * FROM articles");
        $query->execute();

        $total_results = $query->rowCount();
        $total_pages = ceil($total_results / $limit);

        if (isset($_GET["page"])) {
            $page = $_GET["page"];
        } else {
            $page = 1;
        }

        $starting_limit = (($page - 1) * $limit);
        $query = $db->prepare("SELECT * FROM articles ORDER BY article_id DESC LIMIT $starting_limit,$limit");
        $query->execute();

        ?>

        <?php while ($result = $query->fetch(PDO::FETCH_ASSOC)) :

            $article_id = $result["article_id"];
            $article_editor = $result["article_editor"];
            $article_date = $result["article_date"];
            $article_image = $result["article_image"];
            $article_title = $result["article_title"];
            $article_coverletter = $result["article_coverletter"];
            $article_link = $result["article_link"];
        ?>

            <!-- aşağıdaki - '.$row[""].' - şeklinde kullanılır -->

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

        <?php endwhile; ?>

    </table>

    <?php for ($i = 1; $i <= $total_pages; $i++) : ?>
        <a href="index.php?page=<?= $i ?>" class="btn btn-outline-primary"><?= $i ?></a>
    <?php endfor; ?>

</div>

<?php require_once "../inc/footer.php"; ?>