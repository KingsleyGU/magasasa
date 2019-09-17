      <?php include 'info.php';?>
    <footer class="footer text-center" id="contact" >
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Open Hours</h2>
              <ul class="list-unstyled open-hours">
                <li class="d-flex"><span>Monday-Thursday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Friday-Sunday</span><span>9:00 - 02:00</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Follow Us</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.facebook.com/Hama-Sushi-Restaurant-Odence-C-811319885900963/" style="color:#fff; background-color: #4267b2;">
                  <i class="fab fa-fw fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.instagram.com/hamasushiodense/" style="color:#fff; background-color: #C13584;">
                  <i class="fab fa-fw fa-instagram"></i>
                </a>
              </li>
 <!--              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-linkedin-in"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-dribbble"></i>
                </a>
              </li> -->
            </ul>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Contact info</h4>
            <p class="lead mb-0">
                  <a class="btn  btn-social text-center" href="#" style="color:#fff;">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                </a>&nbsp;&nbsp;(+45)&nbsp;34232112&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
            <p class="lead mb-0">
                <a class="btn btn-social text-center" href="mailto:5000@hamasushi.dk" style="color:#fff;">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
              </a>&nbsp;5000@magasasa.dk
            </p>
          </div>
        </div>
      </div>
    </footer>

  <!-- Portfolio Modals -->


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.3.1/web-animations.min.js"></script>
<script type="text/javascript" src="vendor/bootstrap/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="vendor/bootstrap/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
  <script type="text/javascript">

  // Porfolio filter
  $("#portfolio-flters li").click(function () {
    $("#portfolio-flters li").removeClass('filter-active');
    $(this).addClass('filter-active');

    var selectedFilter = $(this).data("filter");
    $("#portfolio-wrapper").fadeTo(100, 0);

    $(".portfolio-item").fadeOut().css('transform', 'scale(0)');

    setTimeout(function () {
      $(selectedFilter).fadeIn(100).css('transform', 'scale(1)');
      $("#portfolio-wrapper").fadeTo(300, 1);
    }, 300);
  });
   $("#book_date").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
   anime.timeline({loop: false})
  .add({
    targets: '.home-masthead-intro',
    scale: [14,1],
    opacity: [0,1],
    easing: "easeOutCirc",
    duration: 1800,
    delay: (el, i) => 1800 * i
  });
  anime.timeline({loop: false})
  .add({
    targets: '.home-masthead-heading',
    translateX: [40,0],
    translateZ: 0,
    opacity: [0,1],
    easing: "easeOutExpo",
    duration: 1800,
    delay: (el, i) => 1000 + 30 * i
  });
  jQuery(function($) {
  
  // Function which adds the 'animated' class to any '.animatable' in view
  var doAnimations = function() {
    
    // Calc current offset and get all animatables
    var offset = $(window).scrollTop() + $(window).height(),
        $animatables = $('.animatable');
    
    // Unbind scroll handler if we have no animatables
    if ($animatables.length == 0) {
      $(window).off('scroll', doAnimations);
    }
    
    // Check all animatables and animate them if necessary
    $animatables.each(function(i) {
       var $animatable = $(this);
      if (($animatable.offset().top + $animatable.height() - 20) < offset) {
        $animatable.removeClass('animatable').addClass('animated');
      }
    });

  };
  
  // Hook doAnimations on scroll, and trigger a scroll
  $(window).on('scroll', doAnimations);
  $(window).trigger('scroll');

});
  </script>
</body>

</html>