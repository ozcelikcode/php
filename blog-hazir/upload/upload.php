<?php require "inc/header.php"; ?>
<div class="con">

	<?php

	$file = $_FILES["dosya"]["tmp_name"];
	$file_name = $_FILES["dosya"]["name"];
	$file_type = $_FILES["dosya"]["type"];
	$file_type_2 = explode("/", $file_type);
	$control = substr($file_type, 0, 5);

	if ($control == "image") {
		$file_upload_name = md5(date('d.m.Y H:i:s')) . "." . $file_type_2[1];
		$upload = move_uploaded_file($file, $file_location . $file_upload_name);
		$file_link = $site_url . "/" . $file_location . $file_upload_name;
	?>

		<h3 style="display: inline-block;">Dosya Yükleme Başarılı!</h3>
		<a style="float: right;" class="btn btn-primary btn-small" href="<?php echo $site_url ?>">Başka Resim Yükle</a>

		<div class="copy">
			<input type="text" class="form-control" id="metin" value="<?php echo $file_link ?>">
			<button onclick="kopyala()" class="btn btn-primary a">Linki Kopyala</button>
		</div>

		<img src='<?php echo $file_link ?>' class="max">

	<?php
	} else {
	?>
		<h3>HATA</h3>Yüklediğiniz dosya bir resim formatına sahip değil ya da bir dosya seçmediniz.

	<?php
	}
	?>
</div>

<script src="copy.js"></script>

<?php

if ($upload != true) {
	header("Location: $site_url");
}

?>

<?php require "inc/footer.php"; ?>