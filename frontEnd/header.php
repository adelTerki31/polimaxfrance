<?php ob_start();
include "config.php";
ob_end_clean();?>
<div class="notice-bar desktop-notice-bar">
  <div class="container">
    <div class="fr-view">
      <p>
        <span>-50% pendant &nbsp;24 heures sur tous nos produits + Livraison
            gratuite sur Alger et Oran !</span>
      </p>
    </div>
    <!-- <div id="google_translate_element"></div> -->
  </div>
</div>
<div class="notice-bar mobile-notice-bar">
  <div class="container">
    <div class="fr-view">
      <p>
        <strong>-50% pendant &nbsp;24 heures sur tous nos produits + Livraison
          gratuite sur Alger et Oran !</strong>
      </p>
    </div>
  </div>
</div>
<div class="header-container">
  <header class="app-header" :class="{'search-active': showSearch, 'navigation-active': showNavigation}"
    id="app-header">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
          <div class="header-left">
            <div class="header-element">
              <a class="header-brand" href="/">
                <img src="<?php echo $ROOT_DIR . '/assets/theme-settings/pf logo.png' ?>" alt="PolimaxFrance™" />
              </a>
            </div>
          </div>
          <div class="header-right">
            <div class="header-element">
              <div class="header-switcher">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                  data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                  aria-label="Toggle navigation">

                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
            </div>
          </div>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav list-unstyled header-list">
              <li>
                <a class="nav-link" href="/pages/paiement.php">Commander et payer
                </a>
              </li>
              <li>
                <a class="nav-link" href="/pages/a-propos-de-la-livraison.php">Livraison</a>
              </li>
              <li>
                <a class="nav-link" href="/pages/about-us.php">À propos de nous</a>
              </li>
              <li>
                <a class="nav-link" href="/pages/contact-us.php">Contactez-nous</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

</div>
<!-- <div class="main-bar mobile-bar">
  <div class="container">
    <div class="header-center">
      <div class="header-element">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
          <div class="container-fluid">
            <div class="header-left">
              <div class="header-element">
                <a class="header-brand" href="/">
                  <img src="<?php echo $ROOT_DIR . '/assets/theme-settings/pf logo.png' ?>" alt="PolimaxFrance™" />
                </a>
              </div>
            </div>
            <div class="header-right">
              <div class="header-element">
                <div class="header-switcher">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>
                  </button>
                </div>
              </div>
            </div>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <ul class="navbar-nav list-unstyled header-list">
                <li>
                  <a class="nav-link" href="/pages/paiement.php">Commander et payer
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="/pages/a-propos-de-la-livraison.php">Livraison</a>
                </li>
                <li>
                  <a class="nav-link" href="/pages/about-us.php">À propos de nous</a>
                </li>
                <li>
                  <a class="nav-link" href="/pages/contact-us.php">Contactez-nous</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div> -->
</div>
</div>
</header>
</div>