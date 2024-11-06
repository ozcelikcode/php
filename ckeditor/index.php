<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<script src="ckeditor/ckeditor.js"></script>
<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
	$(function() {
		/*$('input[type="submit"]').click(function(){
			var icerik_baslik = $('input[name="icerik_baslik"]').val();
			var icerik_id = $('input[name="icerik_id"]').val();
			var icerik_detay = CKEDITOR.instances.editor1.getData();
			if (icerik_baslik && icerik_detay){
				$.post("islem.php",{icerik_baslik: icerik_baslik,icerik_id:icerik_id,icerik_detay:icerik_detay},function(result){
					alert(result);
				});
			}
			return false;
		});*/
		$('button').click(function() {
			//ckeditor içerisinde odaklanılan imlecin bulunduğu bölgeye, veri ekleme
			var oEditor = CKEDITOR.instances.editor1; //id değeri editor1 olan ckeditor elde ediliyor
			var eklenecek = '<b>' + prompt("Bir şey yazın.") + '</b>'; //eklenecek html içeriği
			var yeniEleman = CKEDITOR.dom.element.createFromHtml(eklenecek, oEditor.document); //ckeditor için eklenecek veriye göre eleman oluşturuluyor
			oEditor.insertElement(yeniEleman); //ckeditor e oluşturduğumuz elemanı ekliyoruz 
			//--------------------------------
			return false;
		});
	});
</script>
<h1 style="text-align:center"><a href="index.php">CKEditor Ornek Uygulamaları</a></h1>
<?php
error_reporting(0);
$host 	= 'localhost'; //host bilgisi
$user 	= 'root'; //kullanıcı adı
$pass 	= ''; //sifre
$db		= 'ck_ornek'; //veritabanı ismi
$baglan = mysqli_connect($host, $user, $pass, $db) or die(mysqli_Error());
?>
<h2>İçerik Listesi</h2>
<?php
$icerikler = mysqli_query($baglan, 'SELECT * FROM icerikler');
while ($icerik = mysqli_fetch_assoc($icerikler)) {
	echo '<a href="?sayfa=' . $icerik['icerik_id'] . '">' . $icerik['icerik_baslik'] . '</a><br>';
}
?>
<br>
<?php
$icerik_id = $_GET['sayfa'];
if ($icerik_id) {
	$islem_tur = 'İçerik Düzenle';
	$icerik = mysqli_fetch_assoc(mysqli_query($baglan, 'SELECT * FROM icerikler WHERE icerik_id = ' . $icerik_id)); //id değerine göre içerik bilgilerini veritabanından getir
} else {
	$islem_tur = 'İçerik Ekle';
}
?>
<hr>
<form action="islem.php" method="POST">
	<h2><?php echo $islem_tur; ?></h2>
	<h3>İçerik Başlık</h3>
	<input type="text" name="icerik_baslik" style="padding:10px; border:1px solid #b1b1b1; width:100%" value="<?php echo $icerik['icerik_baslik']; ?>" /><br>
	<h3>İçerik Detay</h3>
	<button>İmlecin odaklandığı yere ekle</button><br><br>
	<textarea name="icerik_detay" class="ckeditor" id="editor1"><?php echo $icerik['icerik_detay']; ?></textarea><br><br>
	<input type="hidden" name="icerik_id" value="<?php echo $icerik_id; ?>" />
	<input type="submit" value="İşlemi Bitir" style="padding:10px; border:1px solid #1aab1e; width:100%; background:#1aab1e; color:#fff; cursor:pointer " />
</form>
<?php
if ($icerik_id) {
	echo '<br><hr><br><h2>İçerik Detayı Önizleme</h2>';
	echo $icerik['icerik_detay'];
}
?>