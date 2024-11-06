<?php require_once "../inc/admin-header.php"; ?>

<div class="con adminpanel">

    <h1>Site Admin Panel</h1>

    <?php require_once "../inc/admin-menu.php"; ?>

    <table class="table table-striped">

        <tr>
            <td>Id</td>
            <td>Resim</td>
            <td>Başlık</td>
            <td>Yazı</td>
            <td>Tarih</td>
            <td>Düzenle / Sil</td>
        </tr>

        <?php

        $dataList = $db->prepare("SELECT * FROM articles ORDER BY article_id DESC");
        $dataList->execute();
        $dataList = $dataList->fetchALL(PDO::FETCH_ASSOC);

        foreach ($dataList as $row) {
        ?>

            <!-- aşağıdaki - '.$row[""].' - şeklinde kullanılır -->

            <tr>
                <td><?php echo '' . $row["article_id"] . ''; ?></td>

                <td><img src="<?php echo '' . $row["article_image"] . ''; ?>" style="max-height: 50px;"></td>

                <td><a href="<?php echo $site_url . "/" . $page_link . '' . $row["article_link"] . ''; ?>" target="_blank"><?php echo '' . $row["article_title"] . ''; ?></a></td>

                <td><?php echo substr($row['article'], 0,120).'...'; ?></td>

                <td><?php echo date('Y/m/d H:i', strtotime($row["article_date"])); ?></td>
                <!-- orijinal hali date('d.m.Y H:i:s') şeklindedir -->

                <td>Yakında!</td>
            </tr>

        <?php
        }
        ?>

    </table>

</div>

<?php require_once "../inc/footer.php"; ?>