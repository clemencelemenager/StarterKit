<!-- MAIN NAV -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark d-flex justify-content-between">
          
    <!-- LOGO -->    
    <a class="navbar-brand" href="<?=$baseUri?>/">
        LOGO
    </a>

    <!-- MENU ITEMS -->

    <!-- Display text & burger menu on mobile screens -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    Menu <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar collapsed on mobile screens -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav ">
            <li class="nav-item <?= $currentURL === '/' ? "active" : ""?>">
                <a class="nav-link" href="<?=$baseUri?>/">
                    Home
                </a>
            </li>
            <li class="nav-item <?= $currentURL === '/register' ? "active" : ""?>">
                <a class="nav-link" href="<?=$baseUri?>/register">
                    Register
                </a>
            </li>
            <li class="nav-item <?= $currentURL === '/store' ? "active" : ""?>">
                <a class="nav-link" href="<?=$baseUri?>/store">
                    Store
                </a>
            </li>
            <li class="nav-item <?= $currentURL === '/blog' ? "active" : ""?>">
                <a class="nav-link" href="<?=$baseUri?>/blog">
                    Blog
                </a>
            </li>
            <li class="nav-item <?= $currentURL === '/about' ? "active" : ""?>">
                <a class="nav-link" href="<?=$baseUri?>/about">
                    About
                </a>
            </li>
            <li class="nav-item <?= $currentURL === '/contact' ? "active" : ""?>">
                <a class="nav-link" href="<?=$baseUri?>/contact">
                    Contact
                </a>
            </li>
        </ul>
    </div>
</nav>

<!-- MENU FOR STORE -->
<?php
if ($currentURL === '/store') : ?>

  <nav class="navbar navbar-expand-md navbar-light bg-light ">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      Mon Shopping</span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">

    <!-- List of categories -->
      <ul class="navbar-nav">
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Voir tous les produits
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Category 1</a>
            <a class="dropdown-item" href="#">Category 2</a>
            <a class="dropdown-item" href="#">Category 3</a>
            <a class="dropdown-item" href="#">Category 4</a>
            <a class="dropdown-item" href="#">Category 5</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Sélection du mois</a>
            <a class="dropdown-item" href="#">Déstockage</a>
          </div>
        </li>
      </ul>

      <!-- Search form -->
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>

      <!-- My account and Cart -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Mon compte</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Panier</a>
        </li>
      </ul>

    </div>
  </nav>

<?php
endif;
?>