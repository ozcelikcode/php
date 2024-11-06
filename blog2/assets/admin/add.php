<?php
require_once "../inc/admin-header.php";
?>

<style>
    .editorler {
        padding: 10px;
        font-size: 18px;
    }

    .alert {
        width: 80%;
        margin: auto;
    }
</style>

<!-- Textarea -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<!-- Textarea -->

<div class="alert alert-info">
    Bilgi: sayfa bozuk gözükebilir fakat bunu yapan textarea'da summornote'un kullandığı bootstrap 4 kullanmasından kaynaklı.
</div>

<div class="alert alert-danger">
    NOT : Başlık yeniden kullanılmış olmasın. Sayfalarda kritik hatalar çıkabilir.
</div>

<div class="alert alert-warning">
    NOT2 : Resim url adresini web sayfamızdan temin etmeniz daha iyi ve yıllarca muhafaza olmasına olanak sağlayacaktır. Gerek kalmadıkça başka web sayfalardaki resim url adreslerini almayınız.
</div>

<div class="con adminpanel">

    <h1>İçerik Ekle</h1>



    <?php require_once "../inc/admin-menu.php"; ?>


    <?php

    if ($_POST) {

        $article_image  = htmlspecialchars($_POST["article_image"]);
        $article_editor = $_POST["article_editor"];
        $article_title  = strip_tags($_POST["article_title"]);
        $article = $_POST["article"];
        $article_tags = permalink($_POST["article_tags"]);
        $article_coverletter = strip_tags($_POST["article_coverletter"]);
        $article_link = permalink($article_title);

        if (empty($article_editor || $article_title || $article || $article_coverletter || $article_tags)) {

    ?>

            <div class="alert alert-warning">Lütfen Boş Alan Bırakmayın!</div>

            <?php
        } else {

            $add_data = $db->prepare("INSERT INTO articles SET article_image = ?, article_title = ?, article_editor = ?, article = ?, article_tags = ?, article_coverletter = ?, article_link = ?");
            $add_data->execute([
                $article_image,
                $article_title,
                $article_editor,
                $article,
                $article_tags,
                $article_coverletter,
                $article_link,
            ]);

            if ($add_data) {
            ?>

                <div class="alert alert-success">Başarılı Ekleme!</div>

            <?php
                header("refresh:1;url=index.php");
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
                <input type="text" name="article_coverletter" class="form-control" placeholder="Ana Sayfada gözükecek ön yazı">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Yayınlayan</label>
            <div class="col-sm-10">
                <select name="article_editor" class="form-control form-control-lg" style="max-width: 135px;">
                    <optgroup label="Editör Seçimi">
                        <option>ozcelikcode</option>
                        <option>Osman Talayhan</option>
                        <option>Abdülaziz</option>
                    </optgroup>
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Etiketler</label>
            <div class="col-sm-10">
                <input type="text" name="article_tags" class="form-control" placeholder="etiket, etiket şeklinde ekle">
            </div>
        </div>

        <br>

        <textarea name="article" id="summernote" placeholder="Lütfen makaleni uzun yazmaya çalış"></textarea>

        <br>

        <input type="submit" class="btn btn-primary">

    </form>

</div>

<script>
    $('#summernote').summernote({
        placeholder: 'Uzun, açıklayıcı bir yazı bekliyoruz senden :)',
        tabsize: 2,
        height: 200
    });
</script>

<?php require_once "../inc/footer.php"; ?>