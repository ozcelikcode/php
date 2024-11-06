<?php require "inc/aheader.php"; ?>

<div class="main-wrapper">

	<article class="blog-post px-3 py-5 p-md-5">
		<div class="container">
			<header class="blog-post-header">
				<h2 class="title mb-2">İçerik Ekle</h2>
			</header>

			<?php

			if ($_POST) {

				$article_title = $_POST['article_title'];
				$article = $_POST['article'];
				$article_link = permalink($article_title);

				if ($article_title <> "" && $article <> "") {

					if ($db->query("INSERT INTO articles (article_title, article) VALUES ('$article_title','$article')")) {
			?>

						<div class="alert alert-success">İçerik Başarıyla Eklendi. Yönlendiriliyorsunuz...</div>

					<?php
						header('Refresh: 3; URL=index.php');
					} else {
					?>

						<div class="alert alert-danger">İçerik Eklerken Hata Oluştu!</div>

			<?php
					}
				}
			}

			?>

			<form action="" method="post">

				<table class="table">

					<tr>
						<td>Başlık</td>
						<td><input type="text" name="article_title" class="form-control"></td>
					</tr>

					<tr>
						<td>İçerik</td>
						<td><textarea name="article" class="form-control"></textarea></td>
					</tr>

					<tr>
						<td></td>
						<td><input class="btn btn-primary" type="submit" value="Ekle"></td>
					</tr>

				</table>

			</form>

		</div>
		<!--//container-->
	</article>

</div>
<!-- ############################################################## -->

<?php require "inc/afooter.php"; ?>