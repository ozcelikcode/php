<?php

ob_start();

try{

    $db = new PDO("mysql:host=localhost;dbname=blogdersi;charset=utf8;","root","");
    $db->query("SET CHARACTER SET UTF8");
    $db->query("SET NAMES UTF8");


}catch(PDOException $hata){

    echo $hata->getMessage();

}

$ayarlar = $db->prepare("SELECT * FROM ayarlar");
$ayarlar->execute();
$arow        = $ayarlar->fetch(PDO::FETCH_OBJ);

if($arow->site_durum == 1){
    header('Location:'.$arow->site_url);
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Bakımdayız</title>
<style type="text/css">
body {
	background-color: #241628;
}
#bakim {
	height: 593px;
	width: 1000px;
	margin-right: auto;
	margin-left: auto;
}
#paylasan a {
	color: #CCC;
	text-decoration: none;
}
#paylasan {
	float: right;
	height: 50px;
	width: 100px;
}
</style>
</head>

<body>

<div id="bakim"><img src="images/bakim.gif" width="1000" height="593" alt="Bakım Resmi" /></div>
<div id="paylasan"><a href="<?php echo $arow->site_url;?>" target="_blank"><?php echo $arow->site_baslik;?></a></div>
</body>
</html>
