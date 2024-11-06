<header id="header">
    <div class="header-inner">
        <div class="container">
            <!--Logo-->
            <div id="logo">
                <a href="index.html" class="logo" data-src-dark="images/logo-dark.png"> <img src="images/logo.png" alt="Polo Logo"> </a>
            </div>
            <!--End: Logo-->

            <!-- Search -->
            <div id="search">
                <div id="search-logo"><img src="images/logo.png" alt="Polo Logo"></div>
                <button id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i class="icon-x"></i></button>
                <form class="search-form" action="search-results-page.html" method="get">
                    <input class="form-control" name="q" type="search" placeholder="Search..." autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" />
                    <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                </form>

                <div class="search-suggestion-wrapper">


                    <div class="search-suggestion">
                        <h3>News Articles</h3>
                        <p><a href="#">Beautiful nature, and rare feathers!</a></p>
                        <p><a href="#">New costs and rise of the economy!</a></p>
                        <p><a href="#">A true story, that never been told!</a></p>
                    </div>
                    <div class="search-suggestion">
                        <h3>Looking for these?</h3>
                        <p><a href="#">New costs and rise of the economy!</a></p>
                        <p><a href="#">AI can be trusted to take answer calls </a></p>
                        <p><a href="#">Polo now lets you easily create any beautiful clean website</a></p>
                    </div>
                    <div class="search-suggestion">
                        <h3>Blog Posts</h3>
                        <p><a href="#">A true story, that never been told!</a></p>
                        <p><a href="#">Beautiful nature, and rare feathers!</a></p>
                        <p><a href="#">The most happiest time of the day!</a></p>
                    </div>


                </div>
            </div>
            <!-- end: search -->

            <!--Header Extras-->
            <div class="header-extras">
                <ul>
                    <li>
                        <!--search icon-->
                        <a id="btn-search" href="#"> <i class="icon-search1"></i></a>
                        <!--end: search icon-->
                    </li>
                    <li class="d-none d-sm-block">
                    </li>
                </ul>
            </div>
            <!--end: Header Extras-->
            <!--Navigation Resposnive Trigger-->
            <div id="mainMenu-trigger">
                <button class="lines-button x"> <span class="lines"></span> </button>
            </div>
            <!--end: Navigation Resposnive Trigger-->

            <!--Navigation-->
            <div id="mainMenu">
                <div class="container">
                    <nav>
                        <ul>
                            <li><a href="index.html"><i class="fa fa-home"></i> Ana Sayfa</a></li>
                            <li class="dropdown">

                                <a href="#"><i class="fa fa-list"></i> Kategoriler</a>

                                <ul class="dropdown-menu">

                                    <?php

                                    $kategoriler = $db->prepare("SELECT * FROM kategoriler");
                                    $kategoriler->execute();
                                    if ($kategoriler->rowCount()) {
                                        foreach ($kategoriler as $row) {
                                           $kat_adi = $row['kat_adi'];
                                           $kat_sef = $row['kat_sef'];
                                    ?>

                                            <li><a href="kategoriler.php?kat_sef=<?php echo $kat_sef; ?>"><?php echo $kat_adi ?></a></li>

                                    <?php

                                        }
                                    }

                                    ?>

                                    <!-- <li class="dropdown-submenu"><a href="#">Sliders</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="slider-revolution-slider.html">Revolution Slider</a></li>
                                            <li><a href="slider-owl-slider.html">OWL Slider</a></li>
                                            <li><a href="slider-static-media-image.html">Fullscreen Image</a></li>
                                            <li><a href="slider-static-media-parallax.html">Fullscreen Parallax</a></li>
                                            <li><a href="slider-static-media-text-rotator.html">Fullscreen Text Rotator</a></li>
                                            <li><a href="slider-static-media-video.html">Fullscreen HTML5 Video</a></li>
                                        </ul>
                                    </li> -->

                                    <li><a href="widgets.html">HTML <span class="badge badge-success">KOLAY</span></a></li>
                                    <li><a href="widgets.html">CSS <span class="badge badge-warning">ORTA</span></a></li>
                                    <li><a href="widgets.html">JAVASCRİPT <span class="badge badge-danger">ZOR</span></a></li>

                                    <li class="dropdown-submenu"><a href="#">Menu Labels</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Label (new)<span class="badge badge-danger">NEW</span></a> </li>
                                            <li><a href="#">Label (hot)<span class="badge badge-danger">HOT</span></a> </li>
                                            <li><a href="#">Label (popular)<span class="badge badge-success">POPULAR</span></a> </li>
                                            <li><a href="#">Label (sale)<span class="badge badge-warning">SALE</span></a> </li>
                                            <li><a href="#">Label (info)<span class="badge badge-info">INFO</span></a> </li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--END: NAVIGATION-->
        </div>
    </div>
</header>