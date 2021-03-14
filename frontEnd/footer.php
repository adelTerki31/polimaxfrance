<?php ob_start();
include "config.php";
ob_end_clean();?>

<footer class="footer ">
    <div class="container">
        <div class="footer-brand">
            <a class="" href="/">
                <img src="<?php echo $ROOT_DIR . '/assets/theme-settings/pf logo.png' ?>"
                    alt="PolimaxFrance™" />
            </a>
        </div>
        <div class="footer-body">
            <div class="is-grid grid-3">
                <div class="footer-item">
                    <h3>Contactez-nous</h3>
                    <ul class="list-unstyled footer-list">
                        <li>
                            <a href="/pages/contact-us.php" ">
                                Contactez nous
                            </a>
                        </li>
                        <li>
                            <a href="/pages/faq.php" ">
                                Foires aux Questions
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-item">
                    <h3>Mentions Légales</h3>
                    <ul class="list-unstyled footer-list">
                        <li>
                            <a href="/pages/terms-and-conditions.php" ">
                                Conditions d&#039;utilisation
                            </a>
                        </li>
                        <li>
                            <a href="/pages/retour-echange.php" ">
                                Retours &amp; échanges
                            </a>
                        </li>
                        <li>
                            <a href="/pages/confidentiality.php" ">
                                Politique de Confidentialité
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="footer-item">
                    <h3>A propos du magasin</h3>
                    <ul class="list-unstyled footer-list">
                        <li>
                            <a href="/pages/about-us.php" ">
                                À propos
                            </a>
                        </li>
                        <li>
                            <a href="/pages/paiement.php" ">
                                Comment commander et payer ?
                            </a>
                        </li>
                        <li>
                            <a href="/pages/a-propos-de-la-livraison.php" ">
                                À Propos de la livraison
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="list-unstyled footer-social">
            <li>
                <a class="facebook" target="_blank" href="https://www.facebook.com/PolimaxFrance">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
        </ul>
    </div>
</footer>