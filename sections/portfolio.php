<?php
require("api/get_food_item.php");
?>
    <section class="page-section" id="portfolio" style="padding-bottom: 0px;">
  <div class="container-fluid px-0 ">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase" >经典推荐</h2><br>
        </div>
      </div>
       <div class="row d-flex no-gutters">

          <div class="col-lg-12">
            <ul id="portfolio-flters" class="animatable moveup">
              <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">All</li>
              <li data-filter=".filter-app">特色菜市</li>
              <li data-filter=".filter-card">点心</li>
              <li data-filter=".filter-logo">汤</li>
              <li data-filter=".filter-web">铁板</li>
            </ul>
          </div>
        </div>

        <div class="row" id="portfolio-wrapper" style="padding: 10px 20px;">
        <?php 
          while($foodItem = mysqli_fetch_object($foodItemResult)) { 
          $category = "app";  
          if($foodItem->categoryId == 2)
          {
            $category = "card";
          }  
          elseif ($foodItem->categoryId == 3) {
             $category = "logo";
           } 
          elseif ($foodItem->categoryId == 4) {
             $category = "web";
           }  
        ?>
          <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $category;?>" style="padding: 15px; margin: 0px;">
            <a class="portfolio-link animatable bounceIn" data-toggle="modal" href="#portfolioModal<?php echo $foodItem->id;?>">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <div class="img-responsive ratio-4-3" style="background-image:url(<?php echo "img/portfolio/".$foodItem->img_url;?>);"></div>
              <div class="portfolio-name"><?php echo $foodItem->name; ?></div>
            </a>
          </div>



            <div class="portfolio-modal modal fade" id="portfolioModal<?php echo $foodItem->id;?>" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                      <div class="rl"></div>
                    </div>
                  </div>
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-8 mx-auto">
                        <div class="modal-body">
                          <!-- Project Details Go Here -->
                          <h2 class="text-uppercase"><?php echo $foodItem->name;?></h2>
                          <img class="img-fluid d-block mx-auto" src="<?php echo "img/portfolio/".$foodItem->img_url;?>" alt="">
                          <p>This is delicious</p>
                          <button class="btn btn-primary" data-dismiss="modal" type="button">
                            <i class="fas fa-times"></i>
                            Close Project</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


        <?php
        }
        ?>          


        </div>

      </div>
    </section><!-- #portfolio -->

