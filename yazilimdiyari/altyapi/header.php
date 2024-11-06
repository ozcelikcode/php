<?php include("ayar.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!-- title -->
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="<?php echo $etiketler; ?>" name="keywords">
  <meta content="Site kodlama eğitim sitesi" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">


<style type="text/css">

.baslik {}

</style>
</head>

<body id="page-top">
<script>

}

</script>
  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top"><?php echo $site_adi; ?></a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="#home"><?php echo $menu; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about"><?php echo $menu2; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#blog"><?php echo $menu3; ?></a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact"><?php echo $menu4; ?></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(https://wallpapershome.com/images/wallpapers/apple-pro-display-xdr-3840x2160-abstract-4k-wwdc-2019-21619.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!-- <p class="display-6 color-d">Hello, world!</p> -->
          <h1 class="intro-title mb-4"><p class="baslik"><?php echo $genel_baslik; ?></p></h1>
          <p class="intro-subtitle"><span class="text-slider-items"><?php echo $hareketli_yazi; ?></span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->



  <?php require 'altyapi/hakkimda-osman.php'; ?>

  <?php require 'altyapi/hakkimda-ozcelik.php'; ?>

  <?php /* require 'altyapi/services.php'; */ ?>

  <!-- Hareketli sayılar -->
  <?php /* require 'altyapi/counter.php'; */ ?>

  <?php /* require 'altyapi/porfotilo.php'; */ ?>



  <!--/ Section Testimonials Star /-->
  <div class="testimonials paralax-mf bg-image" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="testimonial-mf" class="owl-carousel owl-theme">
            <div class="testimonial-box">
              <div class="author-test">
                <img src="https://lh3.googleusercontent.com/rFYy64XqPaQB9rbc9vGionXiZoyKrfk7tSDyZaiYxjhI1G-2hLr7VY38wVAGdrrlHLXFXA=s85" alt="" class="rounded-circle b-shadow-a">
                <span class="author"><?php echo $ad1; ?></span>
              </div>
              <div class="content-test">
                <p class="description lead">
                  <?php echo $hakkinda_yazi1; ?>
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
            <div class="testimonial-box">
              <div class="author-test">
                <img src="https://lh3.googleusercontent.com/rFYy64XqPaQB9rbc9vGionXiZoyKrfk7tSDyZaiYxjhI1G-2hLr7VY38wVAGdrrlHLXFXA=s85" alt="" class="rounded-circle b-shadow-a">
                <span class="author"><?php echo $ad2; ?></span>
              </div>
              <div class="content-test">
                <p class="description lead">
                  <?php echo $hakkinda_yazi2; ?>
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!--/ Section Blog Star /-->
  <section id="blog" class="blog-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              Blog
            </h3>
            <p class="subtitle-a">
              Harika blog yazılarını inceleyin!
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      
      <div class="row">