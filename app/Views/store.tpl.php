<section>
    <div class="container-fluid">

        <!-- carrousel -->
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade mb-3 mx-3" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="200">
                        <img src="<?= $viewVars["baseURL"] ?>/images/plant_bg.jpeg" class="d-block w-100" alt="Lorem ipsum">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= $viewVars["baseURL"] ?>/images/green_blur.jpeg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= $viewVars["baseURL"] ?>/images/plant_bg.jpeg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        
      
        <!-- first row -->

        <div class="row mx-0">

            <div class="col-md-6 mb-2">
                <div class="card border-0 text-white text-center">
                    <img src="<?= $viewVars["baseURL"] ?>/images/plant_bg.jpeg" alt="" class="card-img">
                    <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100 py-3">
                            <h2 class="display-3 font-weight-bold mb-4">
                                Item 1
                            </h2>
                            <a href="#" class="btn btn-light">Découvrir</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <div class="card border-0 text-dark text-center">
                    <img src="<?= $viewVars["baseURL"] ?>/images/green_blur.jpeg" alt="" class="card-img">
                    <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100 py-3">
                            <h2 class="display-3 font-weight-bold mb-4">
                                Item 2
                            </h2>
                            <a href="#" class="btn btn-light">Découvrir</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- 2nd row -->

        <div class="row mx-0">
            
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="card border-0 text-center text-dark">
                    <img src="<?= $viewVars["baseURL"] ?>/images/green_blur_2.jpeg"
                    alt="Card image" class="card-img">
                    <div class="card-img-overlay d-flex align-items-center">
                    <div class="w-100">
                        <h2 class="display-4 mb-4">
                            Item 3
                        </h2>
                        <a href="category.html" class="btn btn-link text-dark">
                            Lorem ipsum
                        <i class="fa-arrow-right fa ml-2"></i></a>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="card border-0 text-center text-dark">
                    <img src="<?= $viewVars["baseURL"] ?>/images/green_blur_3.jpeg"
                        alt="Card image" class="card-img">
                    <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100">
                        <h2 class="display-4 mb-4">
                            Item 4
                        </h2>
                        <a href="category.html" class="btn btn-link text-dark">
                        Lorem ipsum
                            <i class="fa-arrow-right fa ml-2"></i>
                        </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-2">
                <div class="card border-0 text-center text-white">
                    <img src="<?= $viewVars["baseURL"] ?>/images/plant_bg.jpeg"
                    alt="Card image" class="card-img">
                    <div class="card-img-overlay d-flex align-items-center">
                    <div class="w-100">
                        <h2 class="display-4 mb-4">
                            Item 5
                        </h2>
                        <a href="category.html" class="btn btn-link text-white">
                        Lorem ipsum
                        <i class="fa-arrow-right fa ml-2"></i></a>
                    </div>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="intro-text left-0 text-center p-3 rounded">
            <h3 class="mb-4">Opening Hours</h3>
            <?php
            foreach ($viewVars["openingHours"] as $day => $hours) : ?>

            <p class="<?=($day === date('l')) ? "today" : ""?>"><?=$day?> : <?=$hours?></p>

            <?php 
            endforeach;
            ?>
        </div>
       

    </div>
  </section>