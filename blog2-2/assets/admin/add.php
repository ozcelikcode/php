<?php
    require_once "../inc/admin-header.php";
?>

<!-- Textarea -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<!-- Textarea -->

<p class="text-center">Hatırlatma: sayfa bozuk gözükebilir fakat bunu ben yapmıyorum bunu textarea summornote'un kullandığı bootstrap 4 kullanmasından kaynaklı.</p>
<div class="con adminpanel">

    <h1>İçerik Ekle</h1>



    <?php require_once "../inc/admin-menu.php"; ?>


    <?php

    if ($_POST) {

        $article_image  = htmlspecialchars($_POST["article_image"]);
        $article_title  = strip_tags($_POST["article_title"]);
        $article = $_POST["article"];
        $article_link = permalink($article_title);
        $article_coverletter = strip_tags($_POST["article_coverletter"]);

        if (empty($article_title || $article || $article_coverletter)) {

    ?>

            <div class="alert alert-warning">Lütfen Boş Alan Bırakmayın!</div>

            <?php
        } else {

            $add_data = $db->prepare("INSERT INTO articles SET article_image = ?, article_title = ?, article = ?, article_link = ?, article_coverletter = ?");
            $add_data->execute([
                $article_image,
                $article_title,
                $article,
                $article_coverletter,
                $article_link
            ]);

            if ($add_data) {
            ?>

                <div class="alert alert-success">Başarılı Ekleme!</div>

            <?php
                header("refresh:1;url=add.php");
            } else {
            ?>

                <div class="alert alert-danger">Başarısız Ekleme!</div>

    <?php

                header("refresh:2;url=add.php");
            }
        }
    }

    ?>

    <form action="" method="post">
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">İçerik Başlık</label>
            <div class="col-sm-10">
                <input type="text" name="article_title" class="form-control">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Baş Resim URL'si</label>
            <div class="col-sm-10">
                <input type="text" name="article_image" class="form-control">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Ön Yazı</label>
            <div class="col-sm-10">
                <input type="text" name="article_image" class="form-control" placeholder="Ana Sayfada gözükecek ön yazı">
            </div>
        </div>

        <!-- <label for="exampleDataList" class="form-label">Kategori</label>
        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Kategorileri ara...">
        <datalist id="datalistOptions">
            <option value="HTML">
            <option value="CSS">
            <option value="PHP">
            <option value="JavaScript">
        </datalist> -->

        <br>

        <textarea name="article" id="summernote" placeholder="Lütfen makaleni uzun yazmaya çalış"><p></p></textarea>

        <br>

        <input type="submit" class="btn btn-primary">

    </form>

</div>

<script>
    $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 200
    });
</script>

<?php require_once "../inc/footer.php"; ?>