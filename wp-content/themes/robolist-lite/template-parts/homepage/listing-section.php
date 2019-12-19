<?php
$robolist_lite_setting = robolist_lite_get_theme_options();
$listing_title = $robolist_lite_setting['listing_des'];
$args = array(
    'post_type' => 'job_listing',
    'posts_per_page' => 6,
);

$query = new WP_Query($args);
 
    ?>
    <!-- Start of feature section -->

    <div class="site-title">
        <div class="container">
            <span class="welcome">Willkommen in unsere website</span>
        </div>
    </div>

    <div class="site-description">
        <span class="description-text">
			Suchen Sie nach einem Fitnessstudio? Ein professioneller Trainer? Oder ein Massagestudio? Sie sind am richtigen Ort. Mit Checkfit können Sie dies in 2 			sehr einfachen Schritten tun. Wählen Sie einen Ort und eine Kategorie und buchen Sie Ihren Termin direkt beim Werbetreibenden.
			Sie können Ihr Unternehmen auch auf unserer Website bewerben. <span class="register-text">Weitere Details unten:</span>
        </span>
    </div>

    <div class="container no-padding">
        <h2 class="register-title"><a href="http://www.check-fit.com/testPage/register/">Registrieren Sie ihr Profil</a></h2>
    </div>

    <section class="features">

        <div class="container">
            <div class="row main align-items-center line">
                <div class="col-md-6 image-element ">
                    <div class="img-wrap">
                        <img src="http://www.check-fit.com/testPage/wp-content/uploads/2019/12/img-free.jpg" alt="" title="">
                    </div>
                </div>
                <div class="col-md-6 text-element">
                    <div class="text-content">

                        <h2 class="mbr-title pt-2 mbr-fonts-style align-left display-2">Grundprofil (Konstenlos)</h2>
                        <span class="description">
				
Möchten Sie ein kostenloses Profil erstellen? Klicken Sie auf den Registrierungsbutton und geben Sie Ihre Daten ein. Die kostenlose Registrierung umfasst Folgendes:
			</span>
                        <ul class="register-list">
                            <li>Grundprofil auf unseren Website</li>
                            <li>1 Foto hochladen</li>
                            <li>Erscheinf mit Name oder Firmenname</li>
                        </ul>

                        <a href="http://www.check-fit.com/testPage/register/" class="btn-register">Registrieren</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="features">

        <div class="container">
            <div class="row main align-items-center line second">

                <div class="col-md-6 text-element order-second">
                    <div class="text-content mtop-0">

                        <h2 class="mbr-title pt-2 mbr-fonts-style align-left display-2">Premium Profil (€14.90 - P/M)</h2>
                        <span class="description">
				
			Möchten Sie einen Premium-Profil registrieren? Klicken Sie auf den Registrierungsbutton und geben Sie Ihre Daten ein. Die Premium-Profil umfasst Folgendes:
			</span>
                        <ul class="register-list">
                            <li>Vollständiges Profil auf unseren Website</li>
                            <li>Unbegrenzt Fotos hochladen</li>
                            <li>1 Video hochladen</li>
                            <li>Eine Kategorie für 3 Standorte möglich</li>
                        </ul>

                        <a href="http://www.check-fit.com/testPage/register/" class="btn-register">Registrieren</a>

                    </div>
                </div>
                <div class="col-md-6 image-element">
                    <div class="img-wrap">
                        <img src="http://www.check-fit.com/testPage/wp-content/uploads/2019/12/img-premium.jpg" alt="" title="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="company-data">
        <div class="container">
            <div class="row">
		<div class="item-list">
                <div class="col-md-3 col-sm-6 col-xs-12 space">
                    <div class="company-wrapper">
                         <h3 class="text-uppercase tm-work-h3">Datenschutz</h3>
                        <p>Der Schutz Ihrer persönlichen Daten ist uns ein besonderes Anliegen. Wir verarbeiten Ihre Daten daher ausschließlich auf Grundlage der gesetzlichen Bestimmungen (DSGVO, TKG 2003). <a href="http://www.check-fit.com/testPage/datenschutz/">Zeig mehr</a></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 space">
                    <div class="company-wrapper">
                        <h3 class="text-uppercase tm-work-h3">Impressum</h3>
                        <p>Check-fit ist im Rahmen des Zumutbaren bemüht auf dieser Webseite richtige und vollständige Informationen zur Verfügung zu stellen. <a href="http://www.check-fit.com/testPage/impressum/">Zeig mehr</a></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 space">
                    <div class="company-wrapper">
                        <h3 class="text-uppercase tm-work-h3">Kontakt</h3>
			<ul>
				<li>Döblingerhauptstraße 41/8</li>
				<li>1190 Wien</li>
				<li>Österreich</li>
				<li>office@checkfit.at</li>
				<li>+43 676 913 1340</li>
			</ul>
                    </div>
                </div>
		<div class="col-md-3 col-sm-6 col-xs-12 space">
                    <div class="company-wrapper">
                        <h3 class="text-uppercase tm-work-h3">Partners</h3>
                       <ul>
	                        <li><a href="https://www.ptfit.at" class="white" target="_blank">PT-FIT</a></li>
				<li><a href="https://www.toolsatwork.com/home" class="white" target="_blank">Tools at work</a></li>
			</ul>
                    </div>
                </div>
            </div>
</div>
        </div>
    </section>

    <!-- End of feature section -->
   