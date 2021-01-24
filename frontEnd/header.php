<?php ob_start();
include "config.php" ;
ob_end_clean();?>
<div
    class="notice-bar desktop-notice-bar"
    style="color: #fff; background-color: #2C3D43;">
    <div class="container">
      <div class="fr-view">
        <p style="text-align: center;"><strong><span style="font-size: 12px;">-50% pendant &nbsp;24 heures sur tous nos produits + Livraison gratuite sur Alger et Oran !</span></strong></p><p style="text-align: center;"><strong><span style="font-size: 12px;">أقل من 50٪ لمدة 24 ساعة في منتجاتنا بالكامل + توصيل مجاني في الجزائر العاصمة ووهران!</span></strong></p>
      </div>
    </div>
  </div>
  <div
    class="notice-bar mobile-notice-bar"
    style="color: #fff; background-color: #2C3D43;">
    <div class="container">
      <div class="fr-view">
        <p style="text-align: center;"><strong>-50% pendant &nbsp;24 heures sur tous nos produits + Livraison gratuite sur Alger et Oran !</strong></p><p style="text-align: center;"><strong><span style="font-size: 18px;">أقل من 50٪ لمدة 24 ساعة في منتجاتنا بالكامل + توصيل مجاني في الجزائر العاصمة ووهران!</span></strong></p>
      </div>
    </div>
  </div>
  <div class="header-container">
        <header
      class="app-header"
      :class="{'search-active': showSearch, 'navigation-active': showNavigation}"
      id="app-header">
      <div class="main-bar desktop-bar" style="background-color: #2C3D43FF;border-bottom: none;">
  <div class="container">
          <div class="header-left">
                  <div class="header-element">
      <a class="header-brand" href="/">
      <img src="<?php echo $ROOT_DIR.'/assets/theme-settings/Ovqxxjgv0hxpN92KrYAl77WbdgQXnDLDgkPXblfM.png'  ?>"  alt="PolimaxFrance™"/>
  </a>
    </div>
                  </div>
              <div class="header-center">
                  <div class="header-element">
      <ul class="list-unstyled header-list">
                              <li>
              <a href="/pages/paiement.php" style="color:#FFFFFFFF">
                Comment commander et payer ? / كيفية الطلب و الدفع ؟
              </a>
            </li>
                      <li>
              <a href="/pages/a-propos-de-la-livraison.php" style="color:#FFFFFFFF">
                À Propos De La Livraison / عن التوصيل
              </a>
            </li>
                      <li>
              <a href="/pages/about-us.php" style="color:#FFFFFFFF">
                À Propos De Nous / عن صفحتنا
              </a>
            </li>
                      <li>
              <a href="/pages/contact-us.php" style="color:#FFFFFFFF">
                Contactez-nous / تواصلوا معنا
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
      <img src="<?php echo $ROOT_DIR.'/assets/theme-settings/Ovqxxjgv0hxpN92KrYAl77WbdgQXnDLDgkPXblfM.png'  ?>"  alt="PolimaxFrance™"/>
  </a>
    </div>
                  </div>
              <div class="header-right">
                  <div class="header-element">
      <a class="header-switcher" href="javascript:void(0)" role="button" @click="toggleNavigation()">
        <i class="yc yc-menu" style="color:#FFFFFFFF"></i>
      </a>
    </div>
                  </div>
      </div>
</div>
      <div v-if="showNavigation" class="overlay" @click="toggleNavigation()"></div>
<nav class="side-navigation">
  <a class="navigation-brand" href="/">
      <img src="./assets/theme-settings/Ovqxxjgv0hxpN92KrYAl77WbdgQXnDLDgkPXblfM.png " alt="PolimaxFrance™"/>
  </a>
  <form class="navigation-search" action="https://polimaxfrance.youcan.shop/search">
    <div class="search-input">
      <input type="search" placeholder="Rechercher un produit / أبحث عن" required name="query">
      <button type="submit">
        <i class="yc yc-search"></i>
      </button>
    </div>
  </form>
  <ul class="list-unstyled navigation-list">
                  <li>
          <a href="/pages/paiement.php">Comment commander et payer ? / كيفية الطلب و الدفع ؟</a>
        </li>
              <li>
          <a href="/pages/a-propos-de-la-livraison.php">À Propos De La Livraison / عن التوصيل</a>
        </li>
              <li>
          <a href="/pages/about-us.php">À Propos De Nous / عن صفحتنا</a>
        </li>
              <li>
          <a href="/pages/contact-us.php">Contactez-nous / تواصلوا معنا</a>
        </li>
            </ul>
  </nav>
      <form class="search-form" method="GET" action="https://polimaxfrance.youcan.shop/search">
		<div class="container">
			<div class="search-select">
				<select title="collections" name="collection">
					<option value="" selected>Toutes les Collections / كل المجموعات</option>
											<option value="28b040aa-f760-4a85-8fb2-b4067aa47871" >Literie de luxe</option>
											<option value="31213732-09dc-4071-b5cf-3696af8efe94" >Le Premier Classement</option>
											<option value="528fa9a7-f93d-4505-a32b-43811b08063c" >Le Deuxiéme Classement</option>
									</select>
			</div>
			<div class="search-input">
				<input type="hidden" name="limit" value="12">
				<input type="search" placeholder="Rechercher un produit / أبحث عن" required name="q" value="">
				<button class="search-submit" type="submit">
					<i class="yc yc-search"></i>
				</button>
			</div>
		</div>
	</form>
    </header>
      </div>
