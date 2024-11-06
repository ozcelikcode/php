<?php 
	error_reporting(0);
	$host 	= 'localhost'; //host bilgisi
	$user 	= 'root'; //kullanıcı adı
	$pass 	= ''; //sifre
	$db		= 'ck_ornek'; //veritabanı ismi
	$baglan = mysqli_connect($host, $user, $pass, $db) or die (mysqli_Error());
	
	$icerik_id = $_POST['icerik_id'];
	$icerik_baslik = $_POST['icerik_baslik'];
	$icerik_detay = $_POST['icerik_detay'];
	if ($icerik_baslik && $icerik_detay){
		if ($icerik_id){
			mysqli_query($baglan,'UPDATE icerikler SET icerik_baslik = \''.$icerik_baslik.'\',icerik_detay = \''.$icerik_detay.'\' WHERE icerik_id = '.$icerik_id );
		}else{
			mysqli_query($baglan,'INSERT INTO icerikler SET icerik_baslik = \''.$icerik_baslik.'\',icerik_detay = \''.$icerik_detay.'\'');
		}
		if (mysqli_affected_rows($baglan)){
			echo 'basarili';
			header('Refresh: 1; url='.($icerik_id?'index.php?sayfa='.$icerik_id:'index.php'));
		}else{
			echo 'degisen bir sey yok';
		}
	}else{
		header('Location: '.($icerik_id?'index.php?sayfa='.$icerik_id:'index.php'));
	}
?>