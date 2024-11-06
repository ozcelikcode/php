<?php require_once "../inc/admin-header.php"; ?>

<!-- Main Quill library -->
<script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

<!-- Theme included stylesheets -->
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">

<!-- Core build with no theme, formatting, non-essential modules -->
<link href="//cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">
<script src="//cdn.quilljs.com/1.3.6/quill.core.js"></script>

<div class="con adminpanel">

    <h1>İçerik Ekle</h1>

    <?php require_once "../inc/admin-menu.php"; ?>


    <?php

    if ($_POST) {

        $article_image  = htmlspecialchars($_POST["article_image"]);
        $article_title  = htmlspecialchars($_POST["article_title"]);
        $article = htmlspecialchars($_POST["article"]);

        if (empty($article_title) || empty($article)) {

    ?>

            <div class="alert alert-warning">Lütfen Boş Alan Bırakmayın!</div>

    <?php
        } else {

            $veriekle = $db->prepare("INSERT INTO articles SET article_image = ?, article_title = ?, article = ?, article_link = ?");
            $add_data->execute([]);

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

        <!-- <label for="exampleDataList" class="form-label">Kategori</label>
        <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Kategorileri ara...">
        <datalist id="datalistOptions">
            <option value="HTML">
            <option value="CSS">
            <option value="PHP">
            <option value="JavaScript">
        </datalist> -->

        <br>

        <div id="editor" name="article"></div>

        <br>

        <input type="submit" class="btn btn-primary">

    </form>

</div>

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
    var quill = new Quill('#editor', {
        theme: 'snow'
    });
</script>

<?php require_once "../inc/footer.php"; ?>