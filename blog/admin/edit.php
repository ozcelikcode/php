<?php require "inc/aheader.php"; ?>

<?php

$sorgu = $db->query("SELECT * FROM articles WHERE article_id =" . (int)$_GET['id']); //!!!!ID DEĞERİNİ DEĞİŞTİRME SAKIN!!!!!! //id değeri ile düzenlenecek verileri veritabanından alacak sorgu
$sonuc = $sorgu->fetch_assoc(); //sorgu çalıştırılıp veriler alınıyor

?>


<div class="main-wrapper">

	<article class="blog-post px-3 py-5 p-md-5">
		<div class="container">
			<header class="blog-post-header">
				<h2 class="title mb-2">İçerik Ekle</h2>
			</header>

			<?php

			if ($_POST) { // Post olup olmadığını kontrol ediyoruz.

				$article_title = $_POST['article_title']; // Post edilen değerleri değişkenlere aktarıyoruz
				$article = $_POST['article'];

				if ($article_title <> "" && $article <> "") { // Veri alanlarının boş olmadığını kontrol ettiriyoruz.

					if ($db->query("UPDATE articles SET article_title = '$article_title', article = '$article' WHERE article_id =" . $_GET['id'])) // Veri güncelleme sorgumuzu yazıyoruz.
					{
			?>

						<div class="alert alert-success">Başarılı Düzenleme. Yönlendiriliyorsunuz..</div>

			<?php
						header('Refresh: 3; URL=index.php');
					} else {
						echo "Hata oluştu"; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
					}
				}
			}

			?>

			<form action="" method="post">

				<table class="table">

					<tr>
						<td>Başlık</td>
						<td><input type="text" name="article_title" class="form-control" value="<?php echo $sonuc['article_title']; // Veritabanından verileri çekip inputların içine yazdırıyoruz. 
																								?>"></td>
					</tr>

					<tr>
						<td>İçerik</td>
						<td><textarea name="article" class="form-control"><?php echo $sonuc['article']; ?></textarea></td>
					</tr>

					<tr>
						<td></td>
						<td><input type="submit" class="btn btn-primary" value="Kaydet"></td>
					</tr>

				</table>

		</div>
		<!--//container-->
	</article>

	<?php require "inc/afooter.php"; ?>