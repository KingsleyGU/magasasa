<?php include 'sections/header.php';
require("api/getCombo.php");
?>

    <section class="mb-0" id="takeaway">
      <div class="container">
        <h2 class="text-center text-uppercase text- mb-0">Take-Away</h2><br><br>
<!--        <hr class="star-light mb-5 hama-color"> -->
        <div class="row">
          <div class="col-lg-12 mx-auto" style="text-align: center;">
            <div class="takeaway-notice">
            	Ring til us and get 10% discount
            </div>
            <div class="takeaway-notice">
            
              
            </div>  
            <div >
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <?php 

                  foreach ($comboNameArray as $key => $value) {
                    
                ?>
                  <li data-target="#myCarousel" data-slide-to="<?php echo $key;?>" class="<?php if($key ==0 )echo 'active';?>"></li>
                <?php 
                  }

                ?>
              </ol>
              <div class="carousel-inner" style="padding: 0px;">
                <?php 

                  foreach ($comboUrlArray as $key => $value) {
                    
                ?>
                <div class="carousel-item <?php if($key ==0 )echo 'active';?>">

                  <div class="container">
                    <div class="carousel-caption" style="padding-top:0px; margin-top: -30px;">
                      <h3 class="text-uppercase" style="color:#ffffff;"><?php echo $comboNameArray[$key];?></h3>

                      <div class="">
                        <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-<?php echo $key;?>">

                          <img class="rounded img-fluid img-thumbnail image-menu" src="img/takeaway/<?php echo $value;?>" alt="...">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>

                <?php 
                  }

                ?>

              </div>
              <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">     
                <i class=" fa fa-angle-left fa-5x"></i>
              </a>
              <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <i class=" fa fa-angle-right fa-5x"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>


      <?php 

        foreach ($comboUrlArray as $key => $value) {
          
      ?>
        <div class="portfolio-modal mfp-hide" id="portfolio-modal-<?php echo $key;?>">
          <div class="portfolio-modal-dialog bg-white">
            <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
              <i class="fa fa-3x fa-times"></i>
            </a>
            <div class="container text-center">
              <div class="row">
                <div class="col-lg-8 mx-auto">
                  <h2 class="text-secondary text-uppercase mb-0"><?php echo $comboNameArray[$key];?></h2>
                  <hr class="star-dark mb-5">
                  <img class="rounded img-fluid img-thumbnail image-menu" src="img/takeaway/<?php echo $value;?>" alt="...">
                  <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#" style="margin-top:20px;">
                    <i class="fa fa-close"></i>
                    Close</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php 
        }

      ?>



<?php include 'sections/footer.php';?>