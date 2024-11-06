<?php
include("edit-db.php");
?>

<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Veritabanı İşlemleri</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../app.css">
</head>

<body>

	<div class="con adminpanel">
		<?php require_once "../inc/admin-menu.php"; ?>
		<br>
		<h1>İçerik Düzenle</h1>

		<style>
			.s {
				background-color: mediumseagreen;
				color: #fff;
			}
		</style>

		<?php

		$sorgu = $db->query("SELECT * FROM articles WHERE article_id =" . (int)$_GET['id']);
		$row = $sorgu->fetch_assoc();

		$article_title = $row["article_title"];
		$article = $row["article"];
		$article_image = $row["article_image"];
		$article_editor = $row["article_editor"];
		$article_coverletter = $row["article_coverletter"];
		$article_tags = $row["article_tags"];

		?>

		<form action="" method="post">
			<div class="mb-3 row">
				<label for="inputPassword" class="col-sm-2 col-form-label">İçerik Başlık</label>
				<div class="col-sm-10">
					<input type="text" name="article_title" class="form-control" value="<?php echo $article_title; ?>">
				</div>
			</div>

			<!-- <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Baş Resim URL'si</label>
            <div class="col-sm-10">
                <input type="text" name="article_image" class="form-control">
            </div>
        </div> -->

			<div class="mb-3 row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Kısa Açıklama</label>
				<div class="col-sm-10">
					<input type="text" name="article_coverletter" class="form-control" value="<?php echo $article_coverletter; ?>">
				</div>
			</div>

			<div class="mb-3 row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Resim URL Adresi</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="article_image" value="<?php echo $article_image; ?>" />
					<img src="<?php echo $article_image; ?>" alt="<?php echo $article_title ?>" width="200px">
				</div>
			</div>

			<div class="mb-3 row">
				<label for="inputPassword" class="col-sm-2 col-form-label">Yayınlayan</label>
				<div class="col-sm-10">
					<h4><?php echo $article_editor; ?> - Seçilen</h4>
					<select name="article_editor" class="form-control form-control-lg" style="max-width: 350px;">
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
					<input type="text" name="article_tags" class="form-control" value="<?php echo $article_tags; ?>">
				</div>
			</div>

			<br>

			<textarea id="editor" name="article" placeholder="Lütfen makaleni uzun yazmaya çalış"><?php echo $article; ?></textarea>

			<br>

			<input type="submit" class="btn btn-primary">

		</form>

	</div>

	<?php

	if ($_POST) {

		$article_image  = htmlspecialchars($_POST["article_image"]);
		$article_editor = $_POST["article_editor"];
		$article_title  = strip_tags($_POST["article_title"]);
		$article = $_POST["article"];
		$article_tags = permalink($_POST["article_tags"]);
		$article_coverletter = strip_tags($_POST["article_coverletter"]);
		$article_link = permalink($article_title);


		if ($db->query("UPDATE articles SET article_title = '$article_title', article = '$article', article_editor = '$article_editor', article_image = '$article_image', article_coverletter = '$article_coverletter', article_link = '$article_link', article_tags = '$article_tags' WHERE article_id =" . $_GET['id'])) {
			header("location:index.php");
		} else {
	?>

			<div class="alert alert-danger">İçerik Düzenleme İşlemi Başarısız!</div>

	<?php
		}
	}

	?>

	<script src="../js/bootstrap.min.js"></script>

</body>

</html>