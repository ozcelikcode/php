<?php require "inc/header.php"; ?>
	<div class="con con2">
		<h1 class="text-center">Resim Yükle</h1>
		<form action="upload.php" method="POST" enctype="multipart/form-data">
			<div class="input-group">
				<input type="file" class="form-control" name="dosya" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
				<input class="btn btn-primary" type="submit" id="inputGroupFileAddon04" value="Resim Yükle"></input>
			</div>
		</form>
	</div>
<?php require "inc/footer.php"; ?>