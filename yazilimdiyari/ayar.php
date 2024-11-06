<?php
/*

Kodlayan	: Hanzala Özçelik
Lisans 		: Full (Boss)

*/

   	$host = "localhost";
   	$veritabani = "blog3";
   	$kullanici = "root";
   	$parola = "";

    try{
        $vt = new PDO("mysql:host=$host;dbname=$veritabani;charset=utf8",$kullanici,$parola);
    }catch(PDOException $hata){
        echo $hata->getMessage();
    }



    /* Site Ayarları */
    $site_url = "http://localhost/blog3/";
    $site_adi = "Yazılım Diyarı";
    $site_alt = "2021 &copy; $site_adi - Web Editor: Ozcelik & Osman";
    $slogan   = "Web Design";
    $tablo    = "makaleler";
    $etiketler = "web design, web tasarım, web kodlama, kodlama, html, css, php, javascript, js, öğren, kod";
    $genel_baslik   =   "Yazılıma Dair Her Şey!";
    $hareketli_yazi =   "Web Tasarım,PHP,HTML5,CSS3,JavaScript"; // Lütfen aralarında boşluk olmayacak şekilde virgül koyunuz



    /* Üst Menü Ayarları */
    $menu =  "Ana Sayfa";
    $menuid = "#home";
    $menu_url	=	"#home";
    
    $menu_url_1 = "index.php"; // Sayfalardaki Menü linkleri


    $menu2 =  "Hakkımızda";
    $menuid2 = "#about";
    $menu_url2	=	"";
    
    $menu_url2_2 = "index.php#about"; // Sayfalardaki Menü linkleri


    $menu3 =  "Blog";
    $menuid3 = "#blog";
    $menu_url3	=	"#blog";
    
    $menu_url3_3 = "index.php#blog"; // Sayfalardaki Menü linkleri


    $menu4 =  "İletişim";
    $menuid4 = "#contact";
    $menu_url4	=	"#";

    $menu_url4_4 = "#"; // Sayfalardaki Menü linkleri

    /* Hakkımda Özçelik */

    $profil_resim2  = "https://cdn.iconscout.com/icon/free/png-512/code-280-460136.png"; // Profil resmi

    $ad2  = "Hanzala Özçelik";

    $soru2   = "Ad-Soyad";              $soru2_c1  = "Hanzala Özçelik";
    $soru2_2 = "Yaşadığı İl";          $soru2_c2  = "İstanbul";
    $soru2_3  = "E-mail";        $soru2_c3  = "ozcelikkodlama@gmail.com";

    $html2 = "92%";  // html1 yüzdeli olacak şekilde yazın.

    $css2 = "70%";

    $php2 = "57%";

    $javascript2 = "20%";

    $hakkinda_yazi2 = "Adı Hanzala Özçelik 2006 İstanbul doğumlu Kendisi aslen Mardinli ama İstanbulda ikamet etmektedir PHP ile site yazmayı acayip derecede çok sever ve kendini geliştiriyor...";




    /* Hakkında Osman */

    $profil_resim1  = "https://cdn.iconscout.com/icon/free/png-512/code-280-460136.png"; // Profil resmi

    $ad1  = "Osman Talayhan";

    $soru1   = "Ad-Soyad";        $soru_c1  = "Osman Talayhan";
    $soru1_2 = "Yaşadığı İl";          $soru_c2  = "İstanbul";
    $soru1_3  = "E-mail";        $soru_c3  = "osmantlyhn7334@gmail.com";

    $html1 = "100%";  // html1 yüzdeli olacak şekilde yazın.

    $css1 = "100%";

    $php1 = "10%";

    $javascript1 = "70%";

    $hakkinda_yazi1 = "Adı Osman Talayhan 2004 İstanbul doğumlu kendisi aslen Şırnaklı ama İstanbulda ikamet etmektedir bilgisayar yazılımına meraklı Javascript, Html ve Css programlama dillerini biliyor ve kendini geliştirmektedir...";

?>
