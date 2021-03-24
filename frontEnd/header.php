<?php ob_start();
include "config.php";
ob_end_clean();?>
<div class="notice-bar desktop-notice-bar">
    <div class="container">
        <div class="fr-view">
            <p><strong><span>-50% pendant &nbsp;24 heures sur tous
                        nos produits + Livraison gratuite sur Alger et Oran !</span></strong></p>
        </div>
        <!-- <div id="google_translate_element"></div> -->
    </div>
</div>
<div class="notice-bar mobile-notice-bar">
    <div class="container">
        <div class="fr-view">
            <p><strong>-50% pendant &nbsp;24 heures sur tous nos produits + Livraison
                    gratuite sur Alger et Oran !</strong></p>
        </div>
    </div>
</div>
<div class="header-container">
    <header class="app-header" :class="{'search-active': showSearch, 'navigation-active': showNavigation}"
        id="app-header">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
            <a class="navbar-brand header-brand" href="/">
                <img src="<?php echo $ROOT_DIR . '/assets/theme-settings/pf logo.png' ?>"
                                    alt="PolimaxFrance™" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul class="navbar-nav list-unstyled header-list">
                <li><a class="nav-link" href="/pages/paiement.php">Commander et payer </a></li>
                <li><a class="nav-link" href="/pages/a-propos-de-la-livraison.php">Livraison</a></li>
                <li><a class="nav-link" href="/pages/about-us.php">À propos de nous</a></li>
                <li><a class="nav-link" href="/pages/contact-us.php">Contactez-nous</a></li>
            </ul>
            </div>
        </div>
        </nav>
    </header>
</div>
