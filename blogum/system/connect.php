<?php

$host = "localhost";
$database = "gelismisblog";

$charset = "utf8";

$username = "root";
$password = "";


try {

    $db = new PDO("mysql:host=$host;dbname=$database;charset=$charset;", "$username", "$password");
    $db->query("SET CHARACTER SET UTF8");
    $db->query("SET NAMES UTF8");

} catch (PDOException $error) {
    echo $error->getMessage();
}

?>