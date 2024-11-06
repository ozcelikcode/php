<?php
$dbHost     = "localhost";
$dbUsername = "root"; //db kullanıcı adı
$dbPassword = "";//db şifre
$dbName     = "ticaret";//db adı
 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
 
if ($db->connect_error) {
    die("Bağlantı hatası: " . $db->connect_error);
}
?>