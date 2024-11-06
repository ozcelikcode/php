<title>Ara</title>



<?php include 'ayar.php'; ?>



<?php /* header("Location: //localhost/web5/index.php"); */ ?>


<html>

<head>

  <title>Ara</title>

  <style>
    body {
      margin: 0;
      padding: 0;
    }



    .genel {
      width: 100%;
      height: 350px;
      background: #689ef1;
      margin: 0px;
    }



    .logo {
      display: block;
      height: 50px;
      background: #689ef1;
      margin: 0px 0px 0px 200px;
      padding: 35px 0px 0px 0px;
      color: #fff;
      font: bold 24px arial;
    }



    a {
      text-decoration: none;
    }





    .menu {
      width: 660px;
      height: 40px;
      background: #689ef1;
      margin: -50px 0px 0px 650px;
    }



    ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }



    li {
      float: left;
    }





    li a {
      display: block;
      width: auto;
      color: #fff;
      text-align: center;
      padding: 10px 15px;
      text-decoration: none;
      font: bold 16px arial;
    }





    .menu li ul {
      display: none;
      width: 70px;
      position: absolute;
      background: #fff;
      border: 1px solid;
      box-shadow: 1px 1px 3px black;
    }



    .menu li ul a {
      font: bold 14px tahoma;
    }



    .menu li:hover ul {
      display: block;
    }





    .menu a {



      line-height: 1;

      display: inline-block;

      color: #fff;

      text-decoration: none;

    }



    .menu a:after {

      display: block;

      content: "";

      height: 3px;

      width: 0%;

      background-color: #fff;

      transition: width .3s ease-in-out;

    }





    .menu a:hover:after,

    .menu a:focus:after {

      width: 100%;

    }





    .sonucyazi,
    p {

      font: 20px tahoma;

    }



    .sonuc,
    button {

      width: auto;
      height: 35px;
      border: 2px solid #689ef1;
      background: #689ef1;
      font: bold 20px tahoma;
      color: #fff;
      float: left;
      margin: 0px 0px 0px 500px;

    }





    .buyukyazı {
      width: auto;
      height: auto;
      margin: 65px 0px 0px;
      font: bold 54px tahoma;
      color: #fff;
    }





    .buyukyazıaltı {
      width: auto;
      height: auto;
      margin: 30px 0px 0px 630px;
    }



    .kucukyazı1 {
      width: auto;
      height: auto;
      margin: 0px 0px 0px 0px;
      font: 17px tahoma;
      color: #fff;
      float: left;
    }



    .kucukyazı2 {
      width: auto;
      height: auto;
      margin: 0px 0px 0px 0px;
      font: 17px tahoma;
      color: #fff;
      float: left;
    }



    .kucukyazı3 {
      width: auto;
      height: auto;
      margin: 0px 0px 0px 0px;
      font: 17px tahoma;
      color: #a5c7f5;
      float: left;
    }





    .sitedearayazı {
      width: 700px;
      height: 100px;
      margin: 50px 0px 0px 330px;
      background: #fff;
      color: #689ef1;
      font: bold 44px tahoma;
      text-align: center;
    }



    .arama {
      width: 780px;
      height: 100px;
      margin: 40px 0px 0px 330px;
      background: #fff;
    }



    .inputtext {
      width: 600px;
      height: 35px;
      border-radius: 50px;
      border: 2px solid #689ef1;
      font: 20px tahoma;
      color: #689ef1;
      float: left;
    }



    .button {
      width: 150px;
      height: 35px;
      border-radius: 50px;
      padding: -20px;
      border: 2px solid #689ef1;
      background: #689ef1;
      font: bold 20px tahoma;
      color: #fff;
      float: left;
      margin: 0px 0px 0px 10px
    }
  </style>



</head>

<body>

  <div class="genel">





    <div class="logo"><?php echo $site_adi; ?></div>





    <div class="menu">



      <ul>

        <li><a href="">
            <!--bos-->
          </a></li>

        <li><a href="">
            <!--bos-->
          </a></li>

        <li><a href="">
            <!--bos-->
          </a></li>

        <li><a href="">
            <!--bos-->
          </a></li>

        <li><a href="">
            <!--bos-->
          </a></li>

        <li><a href="">
            <!--bos-->
          </a></li>

        <li><a href="">
            <!--bos-->
          </a></li>

        <li><a href="">
            <!--bos-->
          </a></li>

        <li><a href="<?php echo $menu_url_1; ?>"><?php echo $menu; ?></a></li>

        <li><a href="<?php echo $menu_url_2; ?>"><?php echo $menu2; ?></a></li>

        <li><a href="<?php echo $menu_url_3; ?>"><?php echo $menu3; ?></a></li>

        <li><a href="<?php echo $menu_url_4; ?>"><?php echo $menu4; ?></a></li>

      </ul>

    </div>





    <div class="buyukyazı">
      <center>Sitede Ara</center>
    </div>

    <!-- <div class="buyukyazıaltı">

            <a href=""> <div class="kucukyazı1">Home/ </div></a>

            <a href=""> <div class="kucukyazı2">Libary/ </div></a>

             <a href=""> <div class="kucukyazı3">exe</div></a>-->



  </div>


  </div>

  <form action="ara.php" method="GET">

    <div class="arama">

      <input class="inputtext" name="kelime" type="text" placeholder="&nbsp;&nbsp;Ara..."></input>

      <input class="button" type="submit" value="Ara"></input>

    </div>

  </form>



</body>

</html>