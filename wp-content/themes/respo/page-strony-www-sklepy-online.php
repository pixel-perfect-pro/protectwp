<?php
/**
 * The template for displaying "Removing viruses" page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package respo
 */

get_header(); ?>

	<a href="#main" class="sr-only sr-only-focusable" tabindex="1">Przejdź do treści</a>

	<div class="content removing-viruses">

		<!-- header -->
		<header class="header position-fixed w-100 d-flex align-items-center scrolled" id="header">
		<div class="container-fluid h-100 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.25s">
			<div class="row h-100">
			<div class="col-6 col-md-4 col-lg-2 d-flex justify-content-start align-items-center header__brand px-md-0">
				<a href="<?php echo esc_url( home_url() ); ?>" title="Przejdź do strony głównej" class="d-block w-100">
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.svg" alt="Logo ProtectWP" class="header__logo">
				</a>
			</div>
			<div class="col-6 col-md-8 col-lg-10 d-flex align-items-center justify-content-end position-relative px-0">
				<nav class="stellarnav navbar d-block p-0" id="stellarnav" aria-labelledby="primary-nav-label">
				<div id="primary-nav-label" hidden>Menu główne</div>
				<ul class="stellarnav__list d-lg-flex flex-wrap justify-content-end align-items-center" id="stellarnav__list">
					<li>
						<a href="<?php echo esc_url( home_url() ); ?>/#jak-dziala-ochrona" class="nav-link needsclick">Jak działa ochrona?</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url() ); ?>/#pakiety-ochrony" class="nav-link needsclick">Pakiety ochrony</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url() ); ?>/#o-firmie" class="nav-link needsclick">O firmie</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url() ); ?>/#strony-www" class="nav-link needsclick">Strony www / sklepy online</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url() ); ?>/usuwanie-wirusow/" class="nav-link needsclick">Usuwanie wirusów</a>
					</li>
					<li>
						<a href="<?php echo esc_url( home_url() ); ?>/#kontakt" class="nav-link needsclick btn">Kontakt</a>
					</li>
				</ul>
				</nav>
			</div>
			</div>
		</div>
		</header>
		<!-- content -->
		<main class="main editor-styles-wrapper overflow-hidden" id="main">
			<div class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.25s">
				<section class="banner banner--www d-flex align-items-center" id="home">
					<div class="container">
						<div class="row">
							<div class="col-12 col-xl-10 offset-xl-1 d-flex flex-wrap align-items-center os-animation pl-xl-0" data-os-animation="fadeIn" data-os-animation-delay="1s">
								<h1 class="banner__heading w-100 text-center">Strony www / sklepy online</h1>
								<p class="banner__text text-center">Specjalizujemy się w tworzeniu nowoczesnych stron i sklepów internetowych. Projektujemy witryny, które są estetyczne, funkcjonalne i przyjazne dla użytkownika.</p>
							</div>
						</div>
					</div>
				</section>
			</div>
			<section class="cta container">
				<div class="row mb-5">
					<div class="col-12 text-center py-5">
						<h2 class="text-center my-4 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">Zobacz niektóre z naszych realizacji:</h2>
					</div>
					<div class="col-12 col-md-6 col-xl-4 mb-5 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.45s">		
						<div class="services__portfolio-thumbnail">
							<a href="https://solace.pl/" target="_blank">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/solace.jpg" alt="Solace" class="services__portfolio-thumbnail">
								<div class="services__portfolio-thumbnail-overlay">
									<img width="50" height="50" src="<?php bloginfo('stylesheet_directory'); ?>/img/magnifying-glass.svg" alt="" class="services__portfolio-thumbnail-icon">
								</div>
							</a>
						</div>	
					</div>
					<div class="col-12 col-md-6 col-xl-4 mb-5 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.45s">		
						<div class="services__portfolio-thumbnail">
							<a href="https://www.berdax.pl/" target="_blank">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/berdax.jpg" alt="Berdax" class="services__portfolio-thumbnail">
								<div class="services__portfolio-thumbnail-overlay">
									<img width="50" height="50" src="<?php bloginfo('stylesheet_directory'); ?>/img/magnifying-glass.svg" alt="" class="services__portfolio-thumbnail-icon">
								</div>
							</a>
						</div>	
					</div>
					<div class="col-12 col-md-6 col-xl-4 mb-5 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.45s">		
						<div class="services__portfolio-thumbnail">
							<a href="https://rena-pol.pl/automaty-vendingowe-bhp/" target="_blank">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/renapol.jpg" alt="Rena-Pol" class="services__portfolio-thumbnail">
								<div class="services__portfolio-thumbnail-overlay">
									<img width="50" height="50" src="<?php bloginfo('stylesheet_directory'); ?>/img/magnifying-glass.svg" alt="" class="services__portfolio-thumbnail-icon">
								</div>
							</a>
						</div>	
					</div>
					<div class="col-12 col-md-6 col-xl-4 mb-5">		
						<div class="services__portfolio-thumbnail">
							<a href="https://slowinski.com.pl/" target="_blank">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/slowinski.jpg" alt="Dachy Słowiński" class="services__portfolio-thumbnail">
								<div class="services__portfolio-thumbnail-overlay">
									<img width="50" height="50" src="<?php bloginfo('stylesheet_directory'); ?>/img/magnifying-glass.svg" alt="" class="services__portfolio-thumbnail-icon">
								</div>
							</a>
						</div>	
					</div>
					<div class="col-12 col-md-6 col-xl-4 mb-5">		
						<div class="services__portfolio-thumbnail">
							<a href="https://stropypro.pl/" target="_blank">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/stropy-pro.jpg" alt="Stropy PRO" class="services__portfolio-thumbnail">
								<div class="services__portfolio-thumbnail-overlay">
									<img width="50" height="50" src="<?php bloginfo('stylesheet_directory'); ?>/img/magnifying-glass.svg" alt="" class="services__portfolio-thumbnail-icon">
								</div>
							</a>
						</div>	
					</div>
					<div class="col-12 col-md-6 col-xl-4 mb-5">		
						<div class="services__portfolio-thumbnail">
							<a href="https://dohmann.pl/" target="_blank">
								<img src="<?php bloginfo('stylesheet_directory'); ?>/img/dohmann.jpg" alt="Dohmann" class="services__portfolio-thumbnail">
								<div class="services__portfolio-thumbnail-overlay">
									<img width="50" height="50" src="<?php bloginfo('stylesheet_directory'); ?>/img/magnifying-glass.svg" alt="" class="services__portfolio-thumbnail-icon">
								</div>
							</a>
						</div>	
					</div>
				</div>
			</section>
			<section class="contact" id="kontakt">
        <div class="container-fluid px-xl-0">
          <div class="contact__wrapper">
            <div class="row">
              <div class="contact__address col-12 col-md-4 d-flex align-items-end">
                <div class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                  <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.svg" alt="Logo ProtectWP" class="contact__logo">
                  <p><img src="<?php bloginfo('stylesheet_directory'); ?>/img/phone-icon.png" alt="" class="mr-3 mr-md-1 mr-lg-3"> <a href="tel:+48537821192">+48 537 821 192</a></p>
                  <p><img src="<?php bloginfo('stylesheet_directory'); ?>/img/email-icon.png" alt="" class="mr-3 mr-md-1 mr-lg-3"> <a href="mailto:kontakt@protectwp.pl">kontakt@protectwp.pl</a></p>
				  <br>
				  <p class="contact__company-data"><b>Dane firmowe:</b><br>
				  	Pixel Perfect Paweł Lewczuk<br>
					ul. Słoneczna 39A<br>
					05-180 Pomiechówek<br>
					NIP: 531-161-01-63<br>
					REGON: 361584010
				  </p>
				</div>
              </div>
              <div class="col-12 col-md-8 p-5 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                <h2 class="contact__heading">Skontaktuj się</h2>

                <form class="contact__form contact-form row pr-md-3" id="contactForm" name="sentMessage" novalidate="novalidate">

                            <div class="col-12 col-md pr-md-3">


                    <div class="form-group">
                      <label for="name">Imię lub nazwa firmy <span class="contact-form__required">*</span></label>
                                      <input class="form-control" name="name" id="name" type="text" placeholder="Imię lub nazwa firmy" required="required" data-validation-required-message="Wpisz imię lub nazwę firmy.">
                                      <p class="help-block text-danger mb-0"></p>
                                  </div>
                  </div>
                  <div class="col-12 col-md pl-md-2">
                    <div class="form-group">
                      <label for="email">Adres e-mail <span class="contact-form__required">*</span></label>
                                      <input class="form-control" id="email" type="email" placeholder="Adres e-mail" required="required" data-validation-required-message="Wpisz adres e-mail.">
                                      <p class="help-block text-danger mb-0"></p>
                                  </div>
                  </div>

  
                              <div class="col-12">
                                <div class="form-group form-group-textarea mb-md-0">

                                  <label for="message">Treść wiadomości <span class="contact-form__required">*</span></label>
                      <textarea name="message" id="message" placeholder="Treść wiadomości" required="required" data-validation-required-message="Wpisz wiadomość."></textarea>
                      <p class="help-block text-danger mb-0"></p>
                                      
                                  </div>
                    
                  </div>

                  <div class="col-12 col-xl-8 d-flex pt-1 options">

                      <div class="form-group form-group-textarea mb-0">
                        <div class="controls">
                          <label class="contact-form__checkbox-label">
                        <input type="checkbox" name="terms-and-conditions" required="required" data-validation-required-message="Musisz zaakceptować politykę prywatności.">
                        Wyrażam zgodę na przetwarzanie podanych przeze mnie danych osobowych przez ProtectWP w celu realizacji przesłanego przeze mnie zgłoszenia kontaktowego zgodnie z <a href="https://protectwp.pl/polityka-prywatnosci/" target="_blank">polityką prywatności</a>.
                      </label>
                        
                      <p class="help-block text-danger mb-0"></p>
                        </div>
                        
                      </div>

                    
                  </div>

                          <div class="col-12 col-xl-4 pt-1 text-right">
                              
                              <button class="btn ml-auto" id="sendMessageButton" type="submit">Wyślij wiadomość</button>
                          </div>

                          <div id="success"></div>


                      </form>

              </div>
            </div>
          </div>
        </div>
      </section>
		</main>

	</div>

	<!-- footer -->
	<footer class="footer">
		<ul class="footer__ul d-flex flex-wrap justify-content-center col">
			<li class="footer__li">
	    		<a href="<?php echo esc_url( home_url() ); ?>/#home" class="footer__link needsclick">Home</a>
	    	</li>
	    	<li class="footer__li">
	    		<a href="<?php echo esc_url( home_url() ); ?>/#jak-dziala-ochrona" class="footer__link needsclick">Jak działa ochrona?</a>
	    	</li>
			<li class="footer__li">
				<a href="<?php echo esc_url( home_url() ); ?>/#cennik" class="footer__link needsclick">Cennik</a>
			</li>
			<li class="footer__li">
				<a href="<?php echo esc_url( home_url() ); ?>/#o-firmie" class="footer__link needsclick">O firmie</a>
			</li>
			<li class="footer__li">
				<a href="<?php echo esc_url( home_url() ); ?>/#uslugi" class="footer__link needsclick">Usługi dodatkowe</a>
			</li>
			<li class="footer__li">
				<a href="<?php echo esc_url( home_url() ); ?>/usuwanie-wirusow/" class="footer__link needsclick">Usuwanie wirusów</a>
			</li>
			<li class="footer__li">
				<a href="<?php echo esc_url( home_url() ); ?>/#kontakt" class="footer__link needsclick">Kontakt</a>
			</li>
		</ul>
		<p class="footer__terms text-center">
	      <a href="<?php echo esc_url( home_url() ); ?>/polityka-prywatnosci/" class="footer__term">Polityka prywatności</a> | <a href="<?php echo esc_url( home_url() ); ?>/regulamin/" class="footer__term">Regulamin</a>
	    </p>
	</footer>

<?php get_footer(); ?>