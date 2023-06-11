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

	<div class="content">

		<!-- header -->
		<header class="header position-fixed w-100 d-flex align-items-center" id="header">
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
						<a href="https://protectwp.pl/#home" class="nav-link needsclick">Home</a>
					</li>
					<li>
						<a href="https://protectwp.pl/#jak-dziala-ochrona" class="nav-link needsclick">Jak działa ochrona?</a>
					</li>
					<li>
					<a href="https://protectwp.pl/#pakiety-ochrony" class="nav-link needsclick">Pakiety ochrony</a>
					</li>
					<li>
					<a href="https://protectwp.pl/#o-firmie" class="nav-link needsclick">O firmie</a>
					</li>
					<li>
					<a href="https://protectwp.pl/#uslugi" class="nav-link needsclick">Usługi dodatkowe</a>
					</li>
					<li>
					<a href="https://protectwp.pl/#kontakt" class="nav-link needsclick btn">Kontakt</a>
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
				<section class="banner d-flex align-items-center" id="home">
					<div class="container">
						<div class="row">
							<div class="col-10 offset-1 d-flex flex-wrap align-items-center os-animation pl-xl-0" data-os-animation="fadeIn" data-os-animation-delay="1s">
								<h1 class="banner__heading text-center">Usuniemy wirusy z Twojego WordPressa i&nbsp;WooCommerce!</h1>
								<p class="banner__text text-center">Od ponad 10 lat przywracamy strony WordPress i WooCommerce do pełnej sprawności. Wiemy, że każde zawirusowanie serwisu może oznaczać dla Ciebie duże straty. Właśnie dlatego szybko usuwamy infekcje i wdrażamy odpowiednie zabezpieczenia. Dzięki temu zyskujesz w pełni działającą stronę, przestajesz martwić się kwestiami technicznymi i zaczynasz czerpać maksymalne zyski ze swojego biznesu online.</p>
								<a href="#opieka-wordpress" class="btn mx-auto">Poznaj szczegóły</a>
							</div>
						</div>
					</div>
				</section>
				<img src="<?php bloginfo('stylesheet_directory'); ?>/img/banner-shape.svg" alt="" class="w-100">
			</div>
			<section class="how-it-works how-it-works--viruses section mt-5 mb-0 my-lg-0 os-animation" data-os-animation="fadeIn" id="jak-dziala-ochrona">
				<header class="how-it-works__header col">
					<h2 class="section__heading section__heading--medium text-center os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">Dlaczego warto wybrać właśnie nas?</h2>
				</header>
				<div class="container staggered-animation-container">
				<div class="how-it-works__row how-it-works__row--1 row">
					<div class="col-12 col-lg-4 text-center staggered-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s">
					<div class="how-it-works__number how-it-works__number--1 position-absolute">01</div>
					<div class="how-it-works__icon how-it-works__icon--1 position-relative mx-auto"></div>
					<h3 class="how-it-works__heading">
						Szybka naprawa
					</h3>
					<p class="how-it-works__text how-it-works__text--1 mx-auto">
						Wiemy, że każdy przestój w działaniu Twojej strony może oznaczać dla Ciebie duże straty finansowe. Właśnie dlatego naprawimy ją najszybciej, jak to możliwe.
					</p>
					</div>
					<div class="col-12 col-lg-4 text-center staggered-animation" data-os-animation="fadeIn" data-os-animation-delay="0.95s">
					<div class="how-it-works__number how-it-works__number--2 position-absolute">02</div>
					<div class="how-it-works__icon how-it-works__icon--2 position-relative mx-auto"></div>
					<h3 class="how-it-works__heading">
						Maksymalna skuteczność
					</h3>
					<p class="how-it-works__text how-it-works__text--2 mx-auto">
						Usuwaniem wirusów z WordPress i WooCommerce zajmujemy się od ponad 10 lat. Dzięki tak dużemu doświadczeniu dokładnie wiemy, gdzie szukać infekcji i jak sprawnie pozbyć się ich z Twojej witryny.
					</p>
					</div>
					<div class="col-12 col-lg-4 text-center staggered-animation" data-os-animation="fadeIn" data-os-animation-delay="1.2s">
					<div class="how-it-works__number how-it-works__number--3 position-absolute">03</div>
					<div class="how-it-works__icon how-it-works__icon--3 position-relative mx-auto"></div>
					<h3 class="how-it-works__heading">
						Współpraca na jasnych zasadach
					</h3>
					<p class="how-it-works__text how-it-works__text--3 mx-auto">
						Nie zasypiemy Cię programistycznym żargonem ani technicznymi terminami. Dbamy, by zasady współpracy były dla Ciebie całkowicie zrozumiałe. I to nawet jeśli jesteś spoza branży.
					</p>
					</div>
				</div>
				<div class="how-it-works__row how-it-works__row--2 row">
					<div class="col-12 col-lg-4 text-center order-md-last staggered-animation" data-os-animation="fadeIn" data-os-animation-delay="1.45s">
					<div class="how-it-works__number how-it-works__number--4 position-absolute">04</div>
					<div class="how-it-works__icon how-it-works__icon--4 position-relative mx-auto"></div>
					<h3 class="how-it-works__heading">
						Cykliczna kopia zapasowa Twojej strony
					</h3>
					<p class="how-it-works__text how-it-works__text--4 mx-auto">
						Zapomnij o utracie ważnych danych i długich przestojach Twojej strony WordPress lub sklepu WooCommerce. Robimy regularny backup, dzięki czemu zawsze masz dostęp do najnowszej wersji Twojej witryny.
					</p>
					</div>
					<div class="col-12 col-lg-4 text-center staggered-animation" data-os-animation="fadeIn" data-os-animation-delay="1.7s">
					<div class="how-it-works__number how-it-works__number--5 position-absolute">05</div>
					<div class="how-it-works__icon how-it-works__icon--5 position-relative mx-auto"></div>
					<h3 class="how-it-works__heading">
						Gwarancja trwałego usunięcia wirusa
					</h3>
					<p class="how-it-works__text how-it-works__text--5 mx-auto">
						Jesteśmy pewni skuteczności naszych działań, dlatego udzielamy 14-dniowej gwarancji. Jeśli w tym czasie wirus wróci na Twoją stronę, usuniemy go za darmo. 
					</p>
					</div>
					<div class="col-12 col-lg-4 text-center order-md-first staggered-animation" data-os-animation="fadeIn" data-os-animation-delay="1.95s">
					<div class="how-it-works__number how-it-works__number--5 position-absolute">06</div>
					<div class="how-it-works__icon how-it-works__icon--5 position-relative mx-auto"></div>
					<h3 class="how-it-works__heading">
						Stała opieka techniczna nad Twoją stroną
					</h3>
					<p class="how-it-works__text how-it-works__text--5 mx-auto">
						Chcesz zapobiec podobnym problemom w przyszłości? Zadbamy, by Twoja strona działała bez zarzutu. Będziemy prowadzić monitoring antywirusowy, wprowadzać nowe zabezpieczenia przed atakami i regularnie raportować naszą pracę. 
					</p>
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
	    		<a href="#home" class="footer__link needsclick">Home</a>
	    	</li>
	    	<li class="footer__li">
	    		<a href="#jak-dziala-ochrona" class="footer__link needsclick">Jak działa ochrona?</a>
	    	</li>
			<li class="footer__li">
				<a href="#cennik" class="footer__link needsclick">Cennik</a>
			</li>
			<li class="footer__li">
				<a href="#o-firmie" class="footer__link needsclick">O firmie</a>
			</li>
			<li class="footer__li">
				<a href="#uslugi" class="footer__link needsclick">Usługi dodatkowe</a>
			</li>
			<li class="footer__li">
				<a href="#kontakt" class="footer__link needsclick">Kontakt</a>
			</li>
		</ul>
		<p class="footer__terms text-center">
	      <a href="<?php echo esc_url( home_url() ); ?>/polityka-prywatnosci/" class="footer__term">Polityka prywatności</a> | <a href="<?php echo esc_url( home_url() ); ?>/regulamin/" class="footer__term">Regulamin</a>
	    </p>
	</footer>

<?php get_footer(); ?>