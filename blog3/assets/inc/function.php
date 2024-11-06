<?php

// Türkçe karakter gibi özel karakterleri linklere göre uyumlu haline getirilir.

function permalink($text){
	$find = array("/Ğ/","/Ü/","/Ş/","/İ/","/Ö/","/Ç/","/ğ/","/ü/","/ş/","/ı/","/ö/","/ç/");
	$degis = array("G","U","S","I","O","C","g","u","s","i","o","c");
	$text = preg_replace("/[^0-9a-zA-ZÄzÜŞİÖÇğüşıöç]/"," ",$text);
	$text = preg_replace($find,$degis,$text);
	$text = preg_replace("/ +/"," ",$text);
	$text = preg_replace("/ /","-",$text);
	$text = preg_replace("/\s/","",$text);
	$text = strtolower($text);
	$text = preg_replace("/^-/","",$text);
	$text = preg_replace("/-$/","",$text);
	return $text;
}

function short($word, $str = 10)
 {
    if (strlen($word) > $str)
    {
       if (function_exists("mb_substr")) $word = mb_substr($word, 0, $str, "UTF-8").'...';
       else $word = substr($word, 0, $str).'...';
    }
    return $word;
 }
 
?>