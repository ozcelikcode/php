<?php

    $host       = "localhost";
    $dbname     = "blog";
    $charset    = "utf8";
    $username   = "root";
    $password   = "";

    try {
        $db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset;", $username, $password);
    } catch (PDOException $error) {
        echo $error->getMessage();
    }
