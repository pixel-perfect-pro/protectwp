<?php
/**
 * The template for displaying "Google Consent Mode v2" page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package respo
 */

get_header(); ?>

	<a href="#main" class="sr-only sr-only-focusable" tabindex="1">Przejdź do treści</a>

	<div class="content consent-mode-v2">

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
							<div class="col-12 col-xl-10 offset-xl-1 d-flex flex-wrap align-items-center os-animation px-xl-0" data-os-animation="fadeIn" data-os-animation-delay="1s">
								<h1 class="banner__heading text-center">Już dziś <b class="color12">mija termin</b> na wdrożenie Google Consent Mode v2</h1>
								<p class="banner__text text-center">Google Consent Mode v2, nowa dyrektywa Unii Europejskiej, nakłada obowiązek uzyskania zgody użytkowników przez strony internetowe przed zapisaniem plików cookie na ich urządzeniach. Użytkownik powinien mieć możliwość modyfikacji swoich zgód w dowolnym momencie.</p>
								<p class="banner__text text-center">Ta zmiana ma zastosowanie <strong>do każdej strony, która nie ma zaawansowanego banneru cookies</strong> (umożliwiającego wybór i późniejszą edycję zgód) i należy ją wdrożyć do <strong>6 marca 2024 r.</strong></p>
								<p class="banner__text text-center">To już ostatnia szansa na zabezpieczenie Twojej strony przed potencjalną utratą danych w Google Analytics i uniknięcie ryzyka spadku skuteczności Twoich działań online.</p>
								<a href="#dlaczego" class="btn mx-auto mt-5">Sprawdź szczegóły</a>
							</div>
						</div>
					</div>
				</section>
			</div>
			<section class="how-it-works how-it-works--viruses section mt-5 mb-0 my-lg-0 os-animation" data-os-animation="fadeIn" id="dlaczego">
				<header class="how-it-works__header col">
					<h2 class="section__heading section__heading--medium text-center mt-5 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.25s">Dlaczego Consent Mode v2 jest konieczne?</h2>
				</header>
				<div class="container staggered-animation-container">
					<div class="how-it-works__row row os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
						<div class="col-12 mb-5">
							<p class="how-it-works__text how-it-works__text--top text-center mb-0">Przede wszystkim dlatego, że wymaga tego <a href="https://www.google.com/intl/pl/about/company/user-consent-policy-help/" target="_blank">Polityka zgody użytkownika UE (EUUCP)</a>. A ponadto:</p>
						</div>
					</div>
					<div class="how-it-works__row how-it-works__row--1 row mt-5">
						<div class="col-12 col-lg-4 text-center staggered-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s">
						<div class="how-it-works__number how-it-works__number--1 position-absolute">01</div>
						<div class="how-it-works__icon how-it-works__icon--1 position-relative mx-auto"></div>
						<h3 class="how-it-works__heading">
							Zapewnienie zgodności z RODO
						</h3>
						<p class="how-it-works__text how-it-works__text--1 mx-auto">
							Unikniesz ryzyka nałożenia kary finansowej (aż do 4% rocznych przychodów) i zapewnisz zgodność z przepisami o ochronie danych.
						</p>
						</div>
						<div class="col-12 col-lg-4 text-center staggered-animation" data-os-animation="fadeIn" data-os-animation-delay="0.95s">
						<div class="how-it-works__number how-it-works__number--2 position-absolute">02</div>
						<div class="how-it-works__icon how-it-works__icon--2 position-relative mx-auto"></div>
						<h3 class="how-it-works__heading">
							Wymagane przez Google
						</h3>
						<p class="how-it-works__text how-it-works__text--2 mx-auto">
							Od teraz do prowadzenia działań reklamowych w Google (Ads, remarketing itp.) niezbędne będzie posiadanie wdrożonego Google Consent Mode v2.
						</p>
						</div>
						<div class="col-12 col-lg-4 text-center staggered-animation" data-os-animation="fadeIn" data-os-animation-delay="1.2s">
						<div class="how-it-works__number how-it-works__number--3 position-absolute">03</div>
						<div class="how-it-works__icon how-it-works__icon--3 position-relative mx-auto"></div>
						<h3 class="how-it-works__heading">
							Wzrost zaufania Twoich klientów
						</h3>
						<p class="how-it-works__text how-it-works__text--3 mx-auto">
							Zwiększysz zaufanie wśród swoich klientów, którzy zaczną postrzegać Cię jako partnera, który dba o ich prywatność i bezpieczeństwo danych.
						</p>
						</div>
					</div>
					<div class="how-it-works__row how-it-works__row--2 row pt-lg-5 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.25s">
						<div class="col-12 col-md-6 col-xl-7 d-flex flex-wrap align-items-start pt-xl-4">
							<div>
								<h3 class="how-it-works__heading--level3 text-center">Jesteśmy po to, żeby Ci pomóc</h3>
								<p class="how-it-works__text how-it-works__text--bottom text-center">Doskonale rozumiemy, że konieczność wdrożenia Google Consent Mode v2 może wydawać się kolejnym przykrym obowiązkiem nałożonym na właścicieli witryn internetowych. Na szczęście jest to jednorazowa czynność, którą wykonamy za Ciebie, abyś Ty nie musiał już zaprzątać sobie tym głowy. A Twoja strona wyróżni się profesjonalizmem, spośród innych stron, które nie wdrożyły jeszcze Google Consent Mode v2.</p>
								<p class="how-it-works__text how-it-works__text--bottom text-center">Przykładowy wygląd bannera cookies zgodnego z Google Consent Mode v2 prezentujemy obok.</p>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xl-5 pl-xl-5">
							<img loading="eager" width="930" height="986" src="<?php bloginfo('stylesheet_directory'); ?>/img/cookie-popup.jpg" alt="Widok banneru cookies" class="img-fluid">
						</div>
						<div class="col-12 text-center">
							<a href="#kontakt" class="btn mx-auto mt-5 os-animation" data-os-animation="fadeIn">Zamów wdrożenie Consent Mode v2</a>
						</div>
					</div>
				</div>
			</section>
			<section class="intro intro--about section mt-0" id="o-firmie">
				<header class="intro__header">
				<div class="container-fluid">
					<div class="row">
					<div class="col-12 offset-md-6 col-md-6">
						<h2 class="section__heading intro__content os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
							Zapewniamy szybkie wdrożenie
						</h2>
					</div>
					</div>
				</div>
				</header>
				<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-6 order-2 order-md-1 text-center text-md-right">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/img/cookie-1.png" alt="O firmie" class="intro__img img-fluid os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
					</div>
					<div class="col-12 col-md-6 order-1 order-md-2">
					<div class="intro__content os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
						<p>Czasu nie zostało już zbyt wiele, dlatego potraktujemy Twoje zlecenie priorytetowo i wykonamy je w ciągu 1-3 dni roboczych. Dokładny czas wdrożenia zależy od specyfiki Twojej strony internetowej, jednak większość wdrożeń wykonujemy najpóźniej następnego dnia po otrzymaniu zamówienia.</p>
						<p>Nasze kompleksowe wdrożenie Google Consent Mode v2 obejmuje następujące etapy:</p>
						<ul class="intro__ul">
							<li><span><strong>Analiza strony:</strong> Dokładnie analizujemy Państwa stronę internetową, aby określić, czy możemy zainstalować na niej nowy, zaawansowany banner dotyczący zgody na pliki cookie.</span></li>
							<li><span><strong>Weryfikacja domeny:</strong> Korzystając z certyfikowanej platformy CookieYes, przeprowadzamy proces weryfikacji domeny Państwa firmy.</span></li>
							<li><span><strong>Implementacja i testowanie bannera:</strong> Po pozytywnej weryfikacji domeny, implementujemy banner na stronie i dokładnie testujemy jego działanie.</span></li>
							<li><span><strong>Dostosowanie wyglądu:</strong> Dopasowujemy tłumaczenia i kolorystykę bannera do designu Państwa strony.</span></li>
						</ul>
					</div>
					</div>
				</div>
				</div>
			</section>
			<section class="services section" id="uslugi">
				<header class="services__header col">
					<h2 class="section__heading services__heading text-center os-animation" data-os-animation="fadeIn">Nie zwlekaj i już dziś dostosuj stronę do nowych wymogów!</h2>
				</header>
				<div class="container px-md-0">
					<div class="row">
						<div class="col-12 d-flex flex-wrap os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
							<div class="services__bubble services-bubble w-100 text-center">
								Aby zamówić <b class="color12">wdrożenie Google Consent Mode v2</b> prosimy o wysłanie wiadomości <strong>z formularza poniżej.</strong><br><br>
								Koszt przystosowania przez nas Twojej strony WordPress do nowych przepisów wynosi <b class="color12">700 zł netto</b>.<br><br>
							</div>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/services-bubble-shape.svg" alt="" class="services-bubble__shape ml-auto">
						</div>
						<div class="col-12 text-center mb-5">
							<a href="#kontakt" class="btn mx-auto os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">Zamów wdrożenie Consent Mode v2</a>
						</div>
						<div class="col-12 text-center pt-5 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.25s">
							<p><strong>Realizacja zlecenia przebiega według kilku prostych kroków:</strong></p>
						</div>
						<ul class="services__ul os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.25s">
							<li>
								<span><b class="color12">Udostępnienie dostępu do panelu WordPressa:</b> prosimy o udostępnienie nam dostępu do panelu administracyjnego Państwa strony poprzez podanie loginu i hasła.</span>
							</li>
							<li>
								<span><b class="color12">Kontakt do osoby odpowiedzialnej:</b> w miarę możliwości, prosimy o przekazanie nam kontaktu do osoby odpowiedzialnej za zarządzanie stroną internetową w Państwa firmie.</span>
							</li>
							<li>
								<span><b class="color12">Realizacja i testowanie:</b> w przeciągu maksymalnie 3 dni roboczych od otrzymania niezbędnych informacji, wdrożymy banner cookies zgodny z Google Consent Mode v2.</span>
							</li>
							<li>
								<span><b class="color12">Informacja o zakończeniu prac:</b> poinformujemy Państwa o zakończeniu prac za pośrednictwem wiadomości e-mail i prześlemy fakturę do opłacenia.</span>
							</li>
							<li>
								<span><b class="color12">Zmiana hasła:</b> po zakończeniu prac wdrożeniowych, sugerujemy zmianę hasła dostępu do panelu WordPressa w celu zwiększenia bezpieczeństwa.</span>
							</li>
						</ul>
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