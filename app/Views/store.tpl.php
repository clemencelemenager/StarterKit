    <div class="container-sm mx-sm-3 my-2">


        <!-- CARROUSEL -->

        <!-- <div class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="200">
                        <img src="<?= $assetsBaseUri ?>/images/plant_bg.jpeg" class="rounded d-block w-100" alt="Lorem ipsum">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= $assetsBaseUri ?>/images/green_blur.jpeg" class="rounded -block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="<?= $assetsBaseUri ?>/images/plant_bg.jpeg" class="rounded d-block w-100" alt="...">
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
        </div> -->


        <!-- OVERLAY instead of Carrousel -->
        
        <div class="overlay container-fluid">
            <div class="card text-white">
                <img src="<?= $assetsBaseUri ?>/images/plant_bg.jpeg" class="rounded card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text">Last updated 3 mins ago</p>
                </div>
            </div>
        </div>
      
        <!-- CATEGORIES -->

        <div class="container-fluid">

            <h2 class="my-4">Categories </h2>

            <!-- first row -->

            <div class="row">

                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="card border-0 text-white text-center">
                        <img src="<?= $assetsBaseUri ?>/images/green_blur_2.jpeg" alt="" class="rounded card-img">
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
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="card border-0 text-dark text-center">
                        <img src="<?= $assetsBaseUri ?>/images/green_blur_2.jpeg" alt="" class="rounded card-img">
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
                <div class="col-lg-4 col-md-6 mb-2">
                    <div class="card border-0 text-dark text-center">
                        <img src="<?= $assetsBaseUri ?>/images/green_blur_2.jpeg" alt="" class="rounded card-img">
                        <div class="card-img-overlay d-flex align-items-center">
                            <div class="w-100 py-3">
                                <h2 class="display-3 font-weight-bold mb-4">
                                    Item 3
                                </h2>
                                <a href="#" class="btn btn-light">Découvrir</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- 2nd row -->

            <div class="row">
                
                <div class="col-lg-3 col-md-6 mb-2">
                    <div class="card border-0 text-center text-dark">
                        <img src="<?= $assetsBaseUri ?>/images/green_blur_2.jpeg"
                        alt="Card image" class="rounded card-img">
                        <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100">
                            <h2 class="display-4 mb-4">
                                Item 4
                            </h2>
                            <a href="category.html" class="btn btn-link text-dark">
                                Lorem ipsum
                            <i class="fa-arrow-right fa ml-2"></i></a>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-2">
                    <div class="card border-0 text-center text-dark">
                        <img src="<?= $assetsBaseUri ?>/images/green_blur_2.jpeg"
                            alt="Card image" class="rounded card-img">
                        <div class="card-img-overlay d-flex align-items-center">
                            <div class="w-100">
                            <h2 class="display-4 mb-4">
                                Item 5
                            </h2>
                            <a href="category.html" class="btn btn-link text-dark">
                            Lorem ipsum
                                <i class="fa-arrow-right fa ml-2"></i>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-2">
                    <div class="card border-0 text-center text-white">
                        <img src="<?= $assetsBaseUri ?>/images/green_blur_2.jpeg"
                        alt="Card image" class="rounded card-img">
                        <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100">
                            <h2 class="display-4 mb-4">
                                Item 6
                            </h2>
                            <a href="category.html" class="btn btn-link text-white">
                            Lorem ipsum
                            <i class="fa-arrow-right fa ml-2"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-2">
                    <div class="card border-0 text-center text-white">
                        <img src="<?= $assetsBaseUri ?>/images/green_blur_2.jpeg"
                        alt="Card image" class="rounded card-img">
                        <div class="card-img-overlay d-flex align-items-center">
                        <div class="w-100">
                            <h2 class="display-4 mb-4">
                                Item 7
                            </h2>
                            <a href="category.html" class="btn btn-link text-white">
                            Lorem ipsum
                            <i class="fa-arrow-right fa ml-2"></i></a>
                        </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>

        <!-- PRODUCTS -->

        <div class="container-fluid mb-4">

            <h2 class="my-4">Products </h2>

            <div class="row">

                <?php
                for ($i=0; $i < 6 ; $i++) :?>

                <div class="product col-xl-2 col-lg-4 col-sm-6 mb-5">
                    <div class="product-image">
                    <a href="#" class="product-hover-overlay-link">
                        <img src="<?= $assetsBaseUri ?>/images/plant_bg.jpeg" alt="product" class="rounded img-fluid mb-2">
                    </a>
                    </div>
                    <div class="py-2">
                        <p class="text-muted text-sm mb-1">
                            Type of product
                        </p>
                        <h3 class="h6 text-uppercase mb-1">
                            <a href="#" class="text-dark">
                                Name of product
                            </a>
                        </h3>
                        <span class="text-muted">
                            10.00 €
                        </span>
                    </div>
                    <div class="product-action-buttons">
                    <!-- TODO - add to cart -->
                    <a href="#" class="btn btn-outline-dark btn-product-left"><i class="fa fa-shopping-cart"></i></a>
                    <a href="#" class="btn btn-dark btn-buy">
                        <i class="fa-search fa"></i>
                        <span class="btn-buy-label ml-2">Voir</span>
                    </a>
                    </div>
                </div>


                <?php
                endfor;
                ?>
                
            </div>


        </div>

        <hr />

        <!-- OPENING HOURS -->

        <div class="container mt-4 intro-text left-0 text-center p-3 rounded">
            <h3 class="mb-4">Opening Hours</h3>
            <?php
            foreach ($viewVars["openingHours"] as $day => $hours) : ?>

            <p class="<?=($day === date('l')) ? "today" : ""?>"><?=$day?> : <?=$hours?></p>

            <?php 
            endforeach;
            ?>
        </div>
       

    </div>
