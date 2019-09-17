  <?php include 'sections/header.php';?>

  <!-- Header -->
  <header class="masthead home-masthead ">
    <div class="container">
      <div class="intro-text home-masthead-intro-text">
        <div class="intro-lead-in home-masthead-intro">Welcome To <span class="shop-name" >Magasasa!</span></div>
          <div class="bg"></div>
          <div class="bg bg2"></div>
          <div class="bg bg3"></div>
        <div class="intro-heading home-masthead-heading text-uppercase">美味正宗中餐</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger home-masthead-button animatable bounceIn" href="#services" style="position:relative; z-index: 2;">Guide</a>
      </div>
    </div>
  </header>


  <!-- Services -->
  <section class="page-section" id="services" style="padding: 0px;">
  <div class="container-fluid px-0">
      <div class="row text-center">
        <div class="col-md-4 guide-choice guide-choice-classy animatable bounceInLeft">
          <a href="index.php#portfolio">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary text-home-main"></i>
            <i class="fas fa-heart fa-stack-1x fa-inverse"></i>
          </span></a>
          <h4 class="service-heading">经典菜式</h4>
        </div>
        <div class="col-md-4 guide-choice guide-choice-reserve animatable bounceIn">
        <a href="#info">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-calendar-check fa-stack-1x fa-inverse"></i>
          </span></a>
          <h4 class="service-heading">预定</h4>
        </div>
        <div class="col-md-4 guide-choice guide-choice-culture animatable bounceInRight">
          <a href="tradition.php">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary text-home-main"></i>
            <i class="fas fa-fish fa-stack-1x fa-inverse"></i>
          </span></a>
          <h4 class="service-heading">了解中餐文化</h4>
        </div>         
      </div>
    </div>
  </section>

   <?php include 'sections/portfolio.php';?>


  <!-- Footer -->
  <?php include 'sections/footer.php';?>
