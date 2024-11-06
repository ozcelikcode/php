<?php 

if ($_GET) 
{

include("db.php");

if ($db->query("DELETE FROM articles WHERE article_id =".(int)$_GET['id']))
{
	header("location:index.php");
}
}
?>