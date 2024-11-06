<?php require "inc/aheader.php"; ?>

<div class="main-wrapper">

    <article class="blog-post px-3 py-5 p-md-5">
        <div class="container">
            <header class="blog-post-header">
                <h2 class="title mb-2">Admin Panele Hoş Geldiniz!</h2>
                <div class="meta mb-3"><span class="date">Sitede (234) Yazı var.</span><span class="time">5 min read</span><span class="comment"><a href="#">4 comments</a></span></div>
            </header>

            <table class="table table-primary text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Resim</th>
                        <th scope="col">Başlık</th>
                        <th scope="col">Tarih</th>
                        <th scope="col">Düzenle / Görütüle / Sil</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $sorgu = $db->query("SELECT * FROM articles ORDER BY article_id DESC");

                    while ($sonuc = $sorgu->fetch_assoc()) {

                        $article_id = $sonuc['article_id'];
                        $article_title = $sonuc['article_title'];

                    ?>

                        <tr>
                            <th scope="row"><?php echo $article_id; ?></th>
                            <td><?php echo $article_id; ?></td>
                            <td><?php echo $article_title; ?></td>
                            <td><?php echo $article_id; ?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="edit.php?id=<?php echo $article_id ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                    <a href="../p.php?id=<?php echo $article_id ?>" class="btn btn-warning btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <a href="delete.php?id=<?php echo $article_id ?>" class="btn btn-danger btn-sm"><i class="fa fa-ban" aria-hidden="true"></i></a>
                                </div>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>

            <nav class="blog-nav nav nav-justified my-5">
                <a class="nav-link-prev nav-item nav-link rounded-left" href="index.html">Previous<i class="arrow-prev fas fa-long-arrow-alt-left"></i></a>
                <a class="nav-link-next nav-item nav-link rounded-right" href="blog-list.html">Next<i class="arrow-next fas fa-long-arrow-alt-right"></i></a>
            </nav>

        </div>
        <!--//container-->
    </article>

    <?php require "inc/afooter.php"; ?>