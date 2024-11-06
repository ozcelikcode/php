<?php 

if ($_GET) 
{

include("../database/database.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz.
if ($db->query("DELETE FROM articles WHERE article_id =".(int)$_GET['id'])) // id'si seçilen veriyi silme sorgumuzu yazıyoruz.
{
	header("location:index.php"); // Eğer sorgu çalışırsa ekle.php sayfasına gönderiyoruz.
}
}

?>