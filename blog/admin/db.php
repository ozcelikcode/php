<?php

@$db = new mysqli('localhost', 'root', '', 'blog'); // Veritabanı bağlantımızı yapıyoruz.
	if(mysqli_connect_error())
	{
		echo mysqli_connect_error();
		exit; //eğer bağlantıda hata varsa PHP çalışmasını sonlandırıyoruz.
	}

$db->set_charset("utf8"); // Türkçe karakter sorunu olmaması için utf8'e çeviriyoruz.

?>