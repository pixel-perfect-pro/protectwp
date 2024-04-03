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
						<a href="<?php echo esc_url( home_url() ); ?>/#uslugi" class="nav-link needsclick">Usługi dodatkowe</a>
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
				<section class="banner d-flex align-items-center" id="home">
					<div class="container">
						<div class="row">
							<div class="col-12 col-xl-10 offset-xl-1 d-flex flex-wrap align-items-center os-animation pl-xl-0" data-os-animation="fadeIn" data-os-animation-delay="1s">
								<h1 class="banner__heading text-center">Usuniemy wirusy z Twojego WordPressa i&nbsp;WooCommerce!</h1>
								<p class="banner__text text-center">Od ponad 10 lat przywracamy strony WordPress i WooCommerce do pełnej sprawności. Wiemy, że każde zawirusowanie serwisu może oznaczać dla Ciebie duże straty. Właśnie dlatego szybko usuwamy infekcje i wdrażamy odpowiednie zabezpieczenia. Dzięki temu zyskujesz w pełni działającą stronę, przestajesz martwić się kwestiami technicznymi i zaczynasz czerpać maksymalne zyski ze swojego biznesu online.</p>
								<a href="#wstep" class="btn mx-auto">Poznaj szczegóły</a>
							</div>
						</div>
					</div>
				</section>
			</div>
			<section class="intro intro--about section mt-0" id="wstep">
				<header class="intro__header">
				<div class="container-fluid">
					<div class="row">
					<div class="col-12 offset-md-6 col-md-6">
						<h2 class="section__heading intro__content os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
							Twoja strona WordPress może być zawirusowana, jeśli:
						</h2>
					</div>
					</div>
				</div>
				</header>
				<div class="container-fluid">
				<div class="row">
					<div class="col-12 col-md-6 order-2 order-md-1 text-center text-md-right">
					<img src="<?php bloginfo('stylesheet_directory'); ?>/img/o-firmie.png" alt="O firmie" class="intro__img img-fluid os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
					</div>
					<div class="col-12 col-md-6 order-1 order-md-2">
					<div class="intro__content os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
						<ul class="intro__ul">
							<li>odnotowuje drastyczny spadek ruchu,</li>
							<li>przekierowuje na inne, podejrzane witryny,</li>
							<li>działa znacznie wolniej niż do tej pory,</li>
							<li>jej kod źródłowy uległ zmianie,</li>
							<li>pojawia się w wyszukiwarce wraz z dodatkowymi, spamerskimi podstronami,</li>
							<li>znajdują się na niej nieznane treści,</li>
							<li>została oznaczona jako niebezpieczna i stwarzająca zagrożenie,</li>
							<li>hosting zablokował ją z powodu wykrycia spamu</li>
						</ul>
					</div>
					</div>
				</div>
				</div>
			</section>
			<section class="services section" id="uslugi">
				<header class="services__header col">
					<h2 class="section__heading services__heading text-center os-animation" data-os-animation="fadeIn">Nie zwlekaj i usuń wirusy z WordPressa lub WooCommerce!</h2>
				</header>
				<div class="container px-md-0">
					<div class="row">
						<div class="col-12 d-flex flex-wrap os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
							<div class="services__bubble services-bubble w-100 text-center">
								<b class="color12">9/10</b> zainfekowanych stron <strong>nie działa prawidłowo</strong><br>
								<b class="color12">70.000</b> z nich jest <strong>blokowanych przez Google</strong> w każdym tygodniu<br>
								<b class="color12">1 infekcja strony</b> może oznaczać <strong>stratę klientów</strong>, przychodów i zaufania
							</div>
							<img src="<?php bloginfo('stylesheet_directory'); ?>/img/services-bubble-shape.svg" alt="" class="services-bubble__shape ml-auto">
						</div>
						<a href="#kontakt" class="btn mx-auto os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">Skontaktuj się z nami</a>
					</div>
				</div>
			</section>
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
						<div class="how-it-works__number how-it-works__number--6 position-absolute">06</div>
						<div class="how-it-works__icon how-it-works__icon--6 position-relative mx-auto"></div>
						<h3 class="how-it-works__heading">
							Stała opieka techniczna nad Twoją stroną
						</h3>
						<p class="how-it-works__text how-it-works__text--6 mx-auto">
							Chcesz zapobiec podobnym problemom w przyszłości? Zadbamy, by Twoja strona działała bez zarzutu. Będziemy prowadzić monitoring antywirusowy, wprowadzać nowe zabezpieczenia przed atakami i regularnie raportować naszą pracę. 
						</p>
						</div>
					</div>
				</div>
			</section>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/img/pricing-shape.png" alt="" class="w-100 pricing__shape">
			<section class="how-we-remove-viruses section">
				<header class="how-we-remove-viruses__header container">
					<div class="col">
						<h2 class="section__heading section__heading--medium text-center os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">Jak pomagamy usunąć wirusa z WordPressa lub sklepu WooCommerce?</h2>
					</div>
				</header>
				<div class="container">
					<div class="row">
						<ul class="how-we-remove-viruses__ul col">
							<li class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
								<span><b class="color12">Przeprowadzamy dokładną analizę zagrożenia</b> <br>sprawdzamy logi na serwerze, pliki strony, spójność i poprawność baz danych oraz weryfikujemy kod Twojej strony pod kątem złośliwych skryptów.</span>
							</li>
							<li class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
								<span><b class="color12">Usuwamy złośliwe oprogramowanie</b> <br>po pozbyciu się wirusów dbamy też o wykreślenie Twojej strony z ewentualnych blacklist.</span>
							</li>
							<li class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
								<span><b class="color12">Zapobiegamy kolejnym infekcjom</b> <br>przeprowadzamy analizę hostingu, wtyczek i motywów oraz wdrażamy niezbędne zabezpieczenia chroniące przed powróceniem wirusów.</span>
							</li>
							<li class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
								<span><b class="color12">Wprowadzamy niezbędne aktualizacje</b> <br>W razie możliwości instalujemy wtyczki i motywy w najnowszej wersji, by strona była bezpieczna i maksymalnie sprawna.</span>
							</li>
							<li class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
								<span><b class="color12">Przygotowujemy szczegółowy raport</b> <br>w prosty, zrozumiały sposób podsumowujemy swoje działania i przedstawiamy Ci rekomendacje co do dalszych zabezpieczeń.</span>
							</li>
							<li class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
								<span><b class="color12">Zyskujesz w pełni działającą stronę</b> <br>pozostaje Ci już tylko skupić się na prowadzeniu swojego biznesu!.</span>
							</li>
						</ul>
					</div>
				</div>
			</section>
			<section class="cta container">
				<div class="row">
					<div class="col text-center py-5">
						<h3 class="text-center mb-5 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">Przestań tracić i zacznij zarabiać. Powierz nam przywrócenie Twojej strony do pełnej sprawności i czerp maksymalne korzyści ze swojego biznesu!</h3>
						<div class="col">
							<p class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.6s">Cena usunięcia wirusa z Twojej strony WordPress lub sklepu WooCommerce zaczyna się już od <b class="color12">450 zł netto</b> lub od <b class="color12">700 zł netto</b> w przypadku usługi ekspresowej (do 24 godzin w dni robocze od akceptacji wyceny). Ostateczną cenę jesteśmy w stanie podać po wypełnieniu przez Ciebie poniższego formularza i wykonaniu przez nas bezpłatnej analizy, ponieważ cena jest zależna od kilku czynników:</p>
							<ul class="mb-5 os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.9s">
								<li><strong>Rozmiaru i złożoności Twojej strony</strong> - im większa i bardziej złożona jest Twoja strona, a także im więcej wtyczek posiada, tym więcej możemy mieć pracy przy usunięciu wirusa</li>
								<li><strong>Rodzaju wirusa</strong> - bardziej zaawansowane wirusy mogą ukrywać swój kod w wielu różnych miejscach, w tym również w bazie danych, co bezpośrednio wpływa na ilość naszej pracy</li>
								<li><strong>Czasu wykonania usługi</strong> - standardowo na usunięcie wirusa potrzebujemy od 1 do 3 dni roboczych. Jeżeli jednak potrzebujesz usługi ekspresowej (do 24 godzin w dni robocze), to cena odwirusowania będzie wyższa</li>
							</ul>
						</div>
						<a href="#kontakt" class="btn mx-auto mb-5 os-animation" data-os-animation="fadeIn" data-os-animation-delay="1.2s" style="animation-delay: 0.2s;">Skontaktuj się z nami</a>
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

		                <?php
						echo do_shortcode( '[contact-form-7 id="215" title="Usuwanie wirusów"]' );
						?>

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