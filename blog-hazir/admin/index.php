<?php require_once "inc/header.php"; ?>
    
    <h1>Site Admin Panel</h1>

    <table>

        <tr>
            <td>Id</td>
            <td>Resim</td>
            <td>Yayınlayan</td>
            <td>Başlık</td>
            <td>Tarih</td>
            <td>Düzenle / Sil</td>
        </tr>

        <?php

        $dataList = $db->prepare("SELECT * FROM articles ORDER BY article_id DESC");
        $dataList->execute();
        $dataList = $dataList->fetchALL(PDO::FETCH_ASSOC);

        foreach ($dataList as $row) {

            $article_id = $row["article_id"];
            $article_title = $row["article_title"];
            $article_editor = $row["article_editor"];
            $article_image = $row["article_image"];
            $article_link = $row["article_link"];
            $article_date = $row["article_date"];
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
                        <a href="delete.php?id=<?php echo $article_id ?>" class="btn btn-danger">Sil</a>
                    </div>
                </td>
            </tr>

        <?php
        }
        ?>

    </table>

</div>

<?php // require_once "inc/footer.php"; ?>