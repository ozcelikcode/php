        </div>
        <div class="col-md-4">
          <div class="widget-sidebar sidebar-search">
            <h5 class="sidebar-title">Ara</h5>
            <div class="sidebar-content">
              <form action="ara.php" method="GET">
                <div class="input-group">
                  <input type="text" class="form-control" name="kelime" placeholder="Ara..." aria-label="Ara...">
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-secondary btn-search" type="button">
                      <span class="ion-android-search"></span>
                    </button>
                  </span>
                </div>
              </form>
            </div>
          </div>
          <div class="widget-sidebar">
            <h5 class="sidebar-title">Yeni Eklenenler!</h5>
            <div class="sidebar-content">
              <ul class="list-sidebar">

<?php require 'altyapi/yenieklenenler.php'; ?>

            </ul>
            </div>
          </div>
          
          <!-- Etiketler -->
          <div class="widget-sidebar widget-tags">
            <h5 class="sidebar-title">Etiketler</h5>
            <div class="sidebar-content">
              <ul>
                <li>
                  <?php echo "<a href='#'>".$icerik["etiket"]."</a>"; ?>
                </li>
                
                <li>
                  <?php echo "<a href='#'>".$icerik["etiket2"]."</a>"; ?>
                </li>
                                
                <li>
                  <?php echo "<a href='#'>".$icerik["etiket3"]."</a>"; ?>
                </li>
                                
                <li>
                  <?php echo "<a href='#'>".$icerik["etiket4"]."</a>"; ?>
                </li>
                
                <li>
                  <?php echo "<a href='#'>".$icerik["etiket5"]."</a>"; ?>
                </li>
                
              </ul>
            </div>
          </div>
          <!-- Etiketler -->

          <!-- <div class="widget-sidebar">
            <h5 class="sidebar-title">Archives</h5>
            <div class="sidebar-content">
              <ul class="list-sidebar">
                <li>
                  <a href="#">September, 2017.</a>
                </li>
                <li>
                  <a href="#">April, 2017.</a>
                </li>
                <li>
                  <a href="#">Nam quo autem exercitationem.</a>
                </li>
                <li>
                  <a href="#">Atque placeat maiores nam quo autem</a>
                </li>
                <li>
                  <a href="#">Nam quo autem exercitationem.</a>
                </li>
              </ul>
            </div>
          </div> -->

        </div>
      </div>
    </div>
  </section>
  <!--/ Section Blog-Single End /-->

  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright"><?php echo $site_alt; ?></p>
              <br><div class="credits">
                <a href="https://bootstrapmade.com/" target="_blank">Tüm Haklar Saklıdır</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>