<?php
require_once "../inc/admin-header.php";
?>

<style>
    .ck-editor__editable[role="textbox"] {
        /* editing area */
        min-height: 300px;
    }

    .editorler {
        padding: 10px;
        font-size: 18px;
    }

    .alert {
        width: 80%;
        margin: auto;
    }
</style>

<br>

<div class="alert alert-danger">
    NOT : Başlık yeniden kullanılmış olmasın. Sayfalarda kritik hatalar çıkabilir.
</div>
<br>
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

    <?php
    if (isset($_FILES['resim'])) {
        $hata = $_FILES['resim']['error']; //resim inputundan gönderilen hatayı aldık.
        if ($hata != 0) { // hata kontrolü gerçekleştirdik.
            echo 'Resim gönderilirken bir hata gerçekleşti.';
        } else {
            $resimBoyutu = $_FILES['resim']['size']; // resim boyutunu öğrendik
            if ($resimBoyutu > (1024 * 1024 * 2)) {
                //buradaki işlem aslında bayt, kilobayt ve mb formülüdür.
                //2 rakamını mb olarak görün ve kaç yaparsanız o mb anlamına gelir.
                //Örn: (1024 * 1024 * 3) => 3MB / (1024 * 1024 * 4) => 4MB

                echo 'Resim 2MB den büyük olamaz.';
            } else {
                $tip = $_FILES['resim']['type']; //resim tipini öğrendik.
                $resimAdi = $_FILES['resim']['name']; //resmin adını öğrendik.

                $uzantisi = explode('.', $resimAdi); // uzantısını öğrenmek için . işaretinden parçaladık.
                $uzantisi = $uzantisi[count($uzantisi) - 1]; // ve daha sonra 1 den fazla nokta olma ihtimaline karşı en son noktadan sonrasını al dedik.

                $yeni_adi = "upload/" . time() . "." . $uzantisi; // resime yeni isim vereceğimiz için zamana göre yeni bir isim oluşturduk ve yüklemesi gerektiği yeride belirttik.
                //yuklenecek_yer/resim_adi.uzantisi

                if ($tip == 'image/jpeg' || $tip == 'image/png') { //uzantısnın kontrolünü sağladık. sadece .jpg ve .png yükleyebilmesi için.
                    if (move_uploaded_file($_FILES["resim"]["tmp_name"], $yeni_adi)) {
                        //tmp_name ile resmi bulduk ve $yeni_adi değişkeninin değerine göre yükleme işlemini gerçekleştirdik.
                        echo "Resim başarılı bir şekilde yüklendi.";
                    } else echo 'Resim yüklenirken bir hata oluştu.';
                } else {
                    echo 'Yanlızca JPG ve PNG resim gönderebilirsiniz.';
                }
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

        <!-- <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Baş Resim URL'si</label>
            <div class="col-sm-10">
                <input type="text" name="article_image" class="form-control">
            </div>
        </div> -->

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Ön Yazı</label>
            <div class="col-sm-10">
                <input type="text" name="article_coverletter" class="form-control" placeholder="Ana Sayfada gözükecek ön yazı">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Resim Yükle</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="article_image" placeholder="Resim URL adresi" />
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

        <textarea id="editor" name="article" placeholder="Lütfen makaleni uzun yazmaya çalış"></textarea>

        <br>

        <input type="submit" class="btn btn-primary">

    </form>

</div>

<!-- Textarea -->
<script src="ckeditor/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
<!-- Textarea -->

<?php require_once "../inc/footer.php"; ?>