<?php
/**
 * Created by PhpStorm.
 * User: yavuzselim
 * Date: 24.12.2019
 * Time: 03:30


 */

 ob_start();

 try{

     $db = new PDO("mysql:host=localhost;dbname=gelismisblog;charset=utf8;","root","");
     $db->query("SET CHARACTER SET UTF8");
     $db->query("SET NAMES UTF8");


 }catch(PDOException $hata){

     echo $hata->getMessage();

 }



 ##ayarlar tablosuna bağlanıyoruz
 $ayarlar = $db->prepare("SELECT * FROM ayarlar");
 $ayarlar->execute();
 $arow        = $ayarlar->fetch(PDO::FETCH_OBJ);
 $site        = $arow->site_url;
 $sitebaslik  = $arow->site_baslik;
 $sitekeyw    = $arow->site_keyw;
 $sitedesc    = $arow->site_desc;
 $logo        = $arow->site_logo;


 if($arow->site_durum != 1){
     header('Location:bakimmodu.php');
 }

?>