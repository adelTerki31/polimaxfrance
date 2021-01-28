<?php ob_start();
include "config.php";
ob_end_clean();?>
<div class="notice-bar desktop-notice-bar" style="color: #fff; background-color: #2C3D43;">
    <div class="container">
        <div class="fr-view">
            <p style="text-align: center;"><strong><span style="font-size: 12px;">-50% pendant &nbsp;24 heures sur tous
                        nos produits + Livraison gratuite sur Alger et Oran !</span></strong></p>
        </div>
        <div id="google_translate_element"></div>
    </div>
</div>
<div class="notice-bar mobile-notice-bar" style="color: #fff; background-color: #2C3D43;">
    <div class="container">
        <div class="fr-view">
            <p style="text-align: center;"><strong>-50% pendant &nbsp;24 heures sur tous nos produits + Livraison
                    gratuite sur Alger et Oran !</strong></p>
        </div>
    </div>
</div>
<div class="header-container">
    <header class="app-header" :class="{'search-active': showSearch, 'navigation-active': showNavigation}"
        id="app-header">
        <div class="main-bar desktop-bar" style="background-color: #2C3D43FF;border-bottom: none;">
            <div class="container">
                <div class="header-left">
                    <div class="header-element">
                        <a class="header-brand" href="/">
                            <img src="<?php echo $ROOT_DIR . '/assets/theme-settings/Ovqxxjgv0hxpN92KrYAl77WbdgQXnDLDgkPXblfM.png' ?>"
                                alt="PolimaxFrance™" />
                        </a>
                    </div>
                </div>
                <div class="header-center">
                    <div class="header-element">
                        <ul class="list-unstyled header-list">
                            <li>
                                <a href="/pages/paiement.php" style="color:#FFFFFFFF">
                                    Comment commander et payer ? 
                                </a>
                            </li>
                            <li>
                                <a href="/pages/a-propos-de-la-livraison.php" style="color:#FFFFFFFF">
                                    À Propos De La Livraison 
                                </a>
                            </li>
                            <li>
                                <a href="/pages/about-us.php" style="color:#FFFFFFFF">
                                    À Propos De Nous 
                                </a>
                            </li>
                            <li>
                                <a href="/pages/contact-us.php" style="color:#FFFFFFFF">
                                    Contactez-nous 
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-right">
                </div>
            </div>
        </div>
        <div class="main-bar mobile-bar" style="background-color: #2C3D43FF;border-bottom: none;">
            <div class="container">
                <div class="header-center">
                    <div class="header-element">
                        <a class="header-brand" href="/">
                            <img src="<?php echo $ROOT_DIR . '/assets/theme-settings/Ovqxxjgv0hxpN92KrYAl77WbdgQXnDLDgkPXblfM.png' ?>"
                                alt="PolimaxFrance™" />
                        </a>
                    </div>
                </div>
                <div class="header-right">
                    <div class="header-element">
                        <a class="header-switcher" href="javascript:void(0)" role="button" onclick="openNav()">
                            <i class="fa fa-navicon" style="color:#FFFFFFFF"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay" onclick="closeNav()"></div>
        <nav class="side-navigation" id="mySidebar" style="transform: translate3d(-100%,0,0)">
            <div style="background-color: #2C3D43;"> 
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a class="navigation-brand" href="/">
                    <img src="<?php echo $ROOT_DIR . '/assets/theme-settings/Ovqxxjgv0hxpN92KrYAl77WbdgQXnDLDgkPXblfM.png' ?>" alt="PolimaxFrance™" />
                </a>
            </div>
            <form class="navigation-search">
                <div class="search-input">
                    <input type="search" placeholder="Rechercher un produit / أبحث عن" required name="query">
                    <button type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
            <ul class="list-unstyled navigation-list">
                <li>
                    <a href="/pages/paiement.php">Comment commander et payer ? </a>
                </li>
                <li>
                    <a href="/pages/a-propos-de-la-livraison.php">À Propos De La Livraison</a>
                </li>
                <li>
                    <a href="/pages/about-us.php">À Propos De Nous</a>
                </li>
                <li>
                    <a href="/pages/contact-us.php">Contactez-nous</a>
                </li>
            </ul>
        </nav>
        <form class="search-form" method="GET">
            <div class="container">
                <div class="search-select">
                    <select title="collections" name="collection">
                        <option value="" selected>Toutes les Collections</option>
                        <option value="28b040aa-f760-4a85-8fb2-b4067aa47871">Literie de luxe</option>
                        <option value="31213732-09dc-4071-b5cf-3696af8efe94">Le Premier Classement</option>
                        <option value="528fa9a7-f93d-4505-a32b-43811b08063c">Le Deuxiéme Classement</option>
                    </select>
                </div>
                <div class="search-input">
                    <input type="hidden" name="limit" value="12">
                    <input type="search" placeholder="Rechercher un produit" required name="q" value="">
                    <button class="search-submit" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </header>
</div>
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="main-bar desktop-bar" style="background-color: #2C3D43FF;border-bottom: none;">
        <a class="header-brand" href="/">
            <img src="./assets/theme-settings/Ovqxxjgv0hxpN92KrYAl77WbdgQXnDLDgkPXblfM.png " alt="PolimaxFrance™" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/pages/paiement.php">Comment commander et payer ? / كيفية الطلب و الدفع
                        ؟</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pages/a-propos-de-la-livraison.php">À Propos De La Livraison / عن
                        التوصيل</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pages/about-us.php">À Propos De Nous / عن صفحتنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pages/contact-us.php">Contactez-nous / تواصلوا معنا</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<form class="search-form" method="GET">
    <div class="container">
        <div class="search-select">
            <select title="collections" name="collection">
                <option value="" selected>Toutes les Collections / كل المجموعات</option>
                <option value="28b040aa-f760-4a85-8fb2-b4067aa47871">Literie de luxe</option>
                <option value="31213732-09dc-4071-b5cf-3696af8efe94">Le Premier Classement</option>
                <option value="528fa9a7-f93d-4505-a32b-43811b08063c">Le Deuxiéme Classement</option>
            </select>
        </div>
        <div class="search-input">
            <input type="hidden" name="limit" value="12">
            <input type="search" placeholder="Rechercher un produit / أبحث عن" required name="q" value="">
            <button class="search-submit" type="submit">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
</form> -->