<?php get_header(); ?>

  <a href="#main" class="sr-only sr-only-focusable" tabindex="1">Przejdź do treści</a>

  <div class="content">

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
    
    <main class="main editor-styles-wrapper overflow-hidden" id="main">
      <div class="os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.25s">
        
        <section class="banner d-flex align-items-center" id="home">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-5 d-flex flex-wrap align-items-center os-animation pl-xl-0" data-os-animation="fadeIn" data-os-animation-delay="1s">
                <h1 class="banner__heading">Ochrona strony WordPress</h1>
                <p class="banner__text">Oferujemy opiekę techniczną nad stronami internetowymi opartymi o&nbsp;system WordPress. Nasze pakiety ochrony podniosą poziom bezpieczeństwa Twojej strony, a Ty zyskasz spokój.</p>
                <a href="#opieka-wordpress" class="btn">Dowiedz się więcej</a>
              </div>
              <div class="col-12 col-md-6 col-lg-7 d-flex align-items-center">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/img/banner-laptop.png" alt="Laptop" class="banner__img os-animation" data-os-animation="fadeIn" data-os-animation-delay="1s">
              </div>
            </div>
          </div>
        </section>
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/banner-shape.svg" alt="" class="w-100">
      </div>
      
      <section class="intro section pb-5 pb-md-0" id="opieka-wordpress">
        <header class="intro__header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 offset-md-6 col-md-6">
                <h2 class="section__heading section__heading--medium os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">Czy jest mi to potrzebne?</h2>
              </div>
            </div>
          </div>
        </header>
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 col-md-6 order-2 order-md-1 text-center text-md-right">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/opieka-wordpress.png" alt="Opieka WordPress" class="intro__img img-fluid os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
            </div>
            <div class="col-12 col-md-6 order-1 order-md-2">
              <div class="intro__content os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                <p>Skoro tu trafiłeś, to zapewne zdajesz sobie sprawę, że Twoja strona WordPress wymaga stałej opieki technicznej - podobnie jak samochód, który należy regularnie serwisować, żeby zapewnić mu sprawne działanie i&nbsp;bezpieczeństwo jego pasażerom.</p>
                <p>Podejmując z&nbsp;nami współpracę zyskujesz fachową opiekę nad swoim WordPressem. Masz pewność, że oprogramowanie Twojej strony będzie zawsze aktualne, a&nbsp;dane Twoje i&nbsp;Twoich użytkowników bezpieczne. Dzięki temu, że nie musisz sam dbać o&nbsp;kwestie techniczne związane ze stroną, możesz w&nbsp;całości skupić się na rozwijaniu swojego biznesu.</p>
                <ul class="intro__ul">
                  <li>Wykonywanie aktualizacji systemu CMS, motywów i&nbsp;wtyczek</li>
                  <li>Wykonywanie kopii zapasowych (backupów) strony</li>
                  <li>Regularne skanowanie antywirusowe całej witryny</li>
                  <li>Monitorowanie pojawiających się w&nbsp;internecie zagrożeń</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="how-it-works section mt-5 mb-0 my-lg-0 os-animation" data-os-animation="fadeIn" id="jak-dziala-ochrona">
        <header class="how-it-works__header col">
          <h2 class="section__heading section__heading--medium text-center os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.3s">Jak działa ochrona?</h2>
        </header>
        <div class="container staggered-animation-container">
          <div class="how-it-works__row how-it-works__row--1 row">
            <div class="col-12 col-md-4 text-center staggered-animation" data-os-animation="fadeIn" data-os-animation-delay="0.7s">
              <div class="how-it-works__number how-it-works__number--1 position-absolute">01</div>
              <div class="how-it-works__icon how-it-works__icon--1 position-relative mx-auto">
                
              </div>
              <p class="how-it-works__text how-it-works__text--1 mx-auto">Na początku współpracy wykonujemy niezbędne zabezpieczenia strony</p>
            </div>
            <div class="col-12 col-md-4 text-center staggered-animation" data-os-animation="fadeIn" data-os-animation-delay="0.95s">
              <div class="how-it-works__number how-it-works__number--2 position-absolute">02</div>
              <div class="how-it-works__icon how-it-works__icon--2 position-relative mx-auto">
                
              </div>
              <p class="how-it-works__text how-it-works__text--2 mx-auto">Regularnie aktualizujemy CMS WordPress, motywy i&nbsp;wtyczki, a&nbsp;przed każdą aktualizacją wykonujemy kopię zapasową</p>
            </div>
            <div class="col-12 col-md-4 text-center staggered-animation" data-os-animation="fadeIn" data-os-animation-delay="1.2s">
              <div class="how-it-works__number how-it-works__number--3 position-absolute">03</div>
              <div class="how-it-works__icon how-it-works__icon--3 position-relative mx-auto">
                
              </div>
              <p class="how-it-works__text how-it-works__text--3 mx-auto">Codziennie wykonujemy backup całego serwisu i&nbsp;dla bezpieczeństwa przechowujemy go na oddzielnym serwerze w&nbsp;chmurze</p>
            </div>
          </div>
          <div class="how-it-works__row how-it-works__row--2 row">
            <div class="col-12 col-md-4 text-center order-md-last staggered-animation" data-os-animation="fadeIn" data-os-animation-delay="1.45s">
              <div class="how-it-works__number how-it-works__number--4 position-absolute">04</div>
              <div class="how-it-works__icon how-it-works__icon--4 position-relative mx-auto">
                
              </div>
              <p class="how-it-works__text how-it-works__text--4 mx-auto">Regularnie przeprowadzamy skanowanie antywirusowe strony</p>
            </div>
            <div class="col-12 col-md-4 offset-md-2 text-center staggered-animation" data-os-animation="fadeIn" data-os-animation-delay="1.7s">
              <div class="how-it-works__number how-it-works__number--5 position-absolute">05</div>
              <div class="how-it-works__icon how-it-works__icon--5 position-relative mx-auto">
                
              </div>
              <p class="how-it-works__text how-it-works__text--5 mx-auto">Monitorujemy pojawiające się w&nbsp;internecie nowe zagrożenia i&nbsp;w&nbsp;razie potrzeby reagujemy</p>
            </div>
          </div>
        </div>
      </section>
      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/pricing-shape.png" alt="" class="w-100 pricing__shape">
      
      <section class="pricing section my-0" id="pakiety-ochrony">
        <header class="pricing__header col">
          <h2 class="section__heading section__heading--light pricing__heading text-center os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">Pakiety ochrony</h2>
          <div class="d-flex justify-content-center align-items-center os-animation pt-5" data-os-animation="fadeIn" data-os-animation-delay="0.3s">
            <span class="pricing__label pricing__label--monthly">Płatność miesięczna</span>
            <label class="pricing__switch" id="pricing__switch" aria-label="Wybierz okres płatności - miesięcznie lub rocznie">
              <input type="checkbox">
              <span class="pricing__slider"></span>
            </label>
            <span class="pricing__label pricing__label--annualy"><span class="pricing__label-tooltip">MIESIĄC GRATIS</span>Płatność roczna</span>
          </div>
        </header>
        <div class="tab-content os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.5s" id="myTabContent">
          <div class="pricing__monthly tab-pane show active" id="pricing__monthly" role="tabpanel">
            <div class="container-fluid">
              <div class="row">
                <div class="col d-flex flex-wrap px-md-0">
                  
                  <table class="pricing__table pricing-table text-center position-relative">
                    <thead>
                      <tr>
                        <th>
                          <div class="pricing-table__icon-wrapper">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/protect-mini-icon.svg" alt="Pakiet Protect Mini" class="pricing-table__icon pricing-table__icon--1">
                          </div>
                          <div class="pricing-table__heading text-center">Protect Mini</div>
                        </th>
                      </tr>
                      <tr>
                        <td class="pricing-table__price">
                          od <span class="pricing-table__amount">89 zł</span> netto
                          <span class="pricing-table__term d-block text-center mt-n1">PŁATNOŚĆ MIESIĘCZNA</span>
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Regularne kopie bezpieczeństwa <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Wykonujemy regularne kopie bezpieczeństwa całej witryny internetowej (core CMS, wtyczki, motywy, baza danych). Backup przechowywany jest w bezpiecznym miejscu – chmura AWS (Amazon Web Services). Kopia wykonywana jest codziennie i przechowywana do 30 dni wstecz."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Aktualizacje systemu WordPress <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Aktualizacja systemu CMS WordPress wykonywana jest maksymalnie raz na 2 tygodnie – z wyjątkiem poprawek bezpieczeństwa, które wykonujemy od razu, kiedy się pojawią – po to, aby twoja strona www była zawsze aktualna i bezpieczna."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Aktualizacje wtyczek i motywów <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Wykonujemy aktualizację wtyczek i motywów zainstalowanych w systemie CMS WordPress maksymalnie raz na 2 tygodnie. W razie pojawienia się podatności (luki w zabezpieczeniach) we wtyczce lub motywie, daną aktualizację wykonujemy od razu."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Podstawowe zabezpieczenia <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Na samym początku współpracy wdrażamy podstawową wersję naszych autorskich zabezpieczeń strony."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Max. 1 dodatkowa wersja językowa <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="W ramach pakietu Protect Mini obsługujemy strony z maksymalnie 1 dodatkową wersją językową, czyli np. wersja polska i wersja angielska."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Comiesięczny przegląd wtyczek <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Raz w miesiącu wykonujemy przegląd zainstalowanych w systemie CMS WordPress wtyczek. Jeżeli uznamy, że jakaś wtyczka przestała, naszym zdaniem, spełniać standardy bezpieczeństwa, to prześlemy Klientowi naszą rekomendację. Rekomendacja ta może obejmować instalację innej, podobnej wtyczki lub stworzenie zamiast niej autorskiego rozwiązania. Decyzję o wdrożeniu rekomendacji każdorazowo podejmuje Klient. Wdrożenie wskazanych rozwiązań może się wiązać z dodatkową opłatą. Dzięki przeglądowi wtyczek mamy większą kontrolę nad bezpieczeństwem strony."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Raport z aktualizacji (standardowy) <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Po każdej wykonanej przez nas aktualizacji otrzymasz natychmiast szczegółowy raport w wersji standardowej."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item pricing-table__item--disabled">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/x.svg" alt="" class="pricing-table__x"> Monitoring antywirusowy
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item pricing-table__item--disabled">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/x.svg" alt="" class="pricing-table__x"> Opieka nad WooCommerce
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item pricing-table__item--disabled">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/x.svg" alt="" class="pricing-table__x"> Monitoring działania serwisu www
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item pricing-table__item--disabled">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/x.svg" alt="" class="pricing-table__x"> Analiza struktury linków
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item" style="text-align: center;background: #f3f8fa;width: 120%;margin-left: -10%;margin-top: 2.1rem;margin-bottom: 0.9rem;">
                          <b style="font-size: 1.1em;">Możesz także dokupić:</b>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Optymalizację prędkości strony pod <br>Core Web Vitals (<b>od 449 zł</b>)
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Rozbudowę strony, w tym również aktualizowanie treści strony (<b>120 zł/h</b>)
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td class="pricing-table__cta">
                          <a href="#" class="btn" data-toggle="modal" data-target="#modal-form-mini-month">WYBIERZ</a>
                        </td>
                      </tr>
                    </tfoot>
                  </table>
                  
                  <table class="pricing__table pricing-table pricing-table--recommended text-center position-relative">
                    <thead>
                      <tr>
                        <th>
                          <div class="pricing-table__icon-wrapper">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/protect-standard-icon.svg" alt="Pakiet Protect Standard" class="pricing-table__icon pricing-table__icon--2">
                          </div>
                          <div class="pricing-table__heading text-center">Protect Standard</div>
                        </th>
                      </tr>
                      <tr>
                        <td class="pricing-table__price">
                          od <span class="pricing-table__amount">149 zł</span> netto
                          <span class="pricing-table__term d-block text-center mt-n1">PŁATNOŚĆ MIESIĘCZNA</span>
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Regularne kopie bezpieczeństwa <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Wykonujemy regularne kopie bezpieczeństwa całej witryny internetowej (core CMS, wtyczki, motywy, baza danych). Backup przechowywany jest w bezpiecznym miejscu – chmura AWS (Amazon Web Services). Kopia wykonywana jest codziennie i przechowywana do 60 dni wstecz."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Aktualizacje systemu WordPress <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Aktualizacja systemu CMS WordPress wykonywana jest maksymalnie raz w tygodniu – z wyjątkiem poprawek bezpieczeństwa, które wykonujemy od razu, kiedy się pojawią – po to, aby twoja strona www była zawsze aktualna i bezpieczna."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Aktualizacje wtyczek i motywów <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Wykonujemy aktualizację wtyczek i motywów zainstalowanych w systemie CMS WordPress maksymalnie raz w tygodniu. W razie pojawienia się podatności (luki w zabezpieczeniach) we wtyczce lub motywie, daną aktualizację wykonujemy od razu."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Zaawansowane zabezpieczenia <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Na samym początku współpracy wdrażamy zaawansowaną wersję naszych autorskich zabezpieczeń strony."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Max. 2 dodatkowe wersje językowe <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="W ramach pakietu Protect Standard obsługujemy strony z maksymalnie 2 dodatkowymi wersjami językowymi, czyli np. wersja polska, wersja angielska i wersja niemiecka."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Comiesięczny przegląd wtyczek <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Raz w miesiącu wykonujemy przegląd zainstalowanych w systemie CMS WordPress wtyczek. Jeżeli uznamy, że jakaś wtyczka przestała, naszym zdaniem, spełniać standardy bezpieczeństwa, to prześlemy Klientowi naszą rekomendację. Rekomendacja ta może obejmować instalację innej, podobnej wtyczki lub stworzenie zamiast niej autorskiego rozwiązania. Decyzję o wdrożeniu rekomendacji każdorazowo podejmuje Klient. Wdrożenie wskazanych rozwiązań może się wiązać z dodatkową opłatą. Dzięki przeglądowi wtyczek mamy większą kontrolę nad bezpieczeństwem strony."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Raport z aktualizacji (standardowy) <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Po każdej wykonanej przez nas aktualizacji otrzymasz natychmiast szczegółowy raport w wersji standardowej."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Monitoring antywirusowy <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Raz w tygodniu wykonujemy skanowanie antywirusowe strony, a także nieustannie monitorujemy internet pod kątem pojawiania się nowych zagrożeń i luk w zabezpieczeniach (podatności)."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Opieka nad WooCommerce (<b>+ 50 zł</b>) <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="W ramach pakietu Protect Standard obsługujemy za dopłatą również strony zawierające wtyczkę sklepową WooCommerce."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item pricing-table__item--disabled">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/x.svg" alt="" class="pricing-table__x"> Monitoring działania serwisu www
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item pricing-table__item--disabled">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/x.svg" alt="" class="pricing-table__x"> Analiza struktury linków
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item" style="text-align: center;background: #e3f0f6;width: 120%;margin-left: -10%;margin-top: 1.5rem;margin-bottom: 1rem;padding: 0.9rem 0;">
                          <b style="font-size: 1.1em;">Możesz także dokupić:</b>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Optymalizację prędkości strony pod <br>Core Web Vitals (<b>od 299 zł</b>)
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Rozbudowę strony, w tym również aktualizowanie treści strony (<b>100 zł/h</b>)
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td class="pricing-table__cta">
                          <a href="#" class="btn" data-toggle="modal" data-target="#modal-form-standard-month">WYBIERZ</a>
                        </td>
                      </tr>
                    </tfoot>
                  </table>
                  
                  <table class="pricing__table pricing-table text-center position-relative">
                    <thead>
                      <tr>
                        <th>
                          <div class="pricing-table__icon-wrapper">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/protect-pro-icon.svg" alt="Pakiet Protect PRO" class="pricing-table__icon pricing-table__icon--3">
                          </div>
                          <div class="pricing-table__heading text-center">Protect Max</div>
                        </th>
                      </tr>
                      <tr>
                        <td class="pricing-table__price">
                          od <span class="pricing-table__amount">199 zł</span> netto
                          <span class="pricing-table__term d-block text-center mt-n1">PŁATNOŚĆ MIESIĘCZNA</span>
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Regularne kopie bezpieczeństwa <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Wykonujemy regularne kopie bezpieczeństwa całej witryny internetowej (core CMS, wtyczki, motywy, baza danych). Backup przechowywany jest w bezpiecznym miejscu – chmura AWS (Amazon Web Services). Kopia wykonywana jest codziennie i przechowywana do 90 dni wstecz."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Aktualizacje systemu WordPress <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Aktualizacja systemu CMS WordPress wykonywana jest maksymalnie raz w tygodniu – z wyjątkiem poprawek bezpieczeństwa, które wykonujemy od razu, kiedy się pojawią – po to, aby twoja strona www była zawsze aktualna i bezpieczna."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Aktualizacje wtyczek i motywów <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Wykonujemy aktualizację wtyczek i motywów zainstalowanych w systemie CMS WordPress maksymalnie raz w tygodniu. W razie pojawienia się podatności (luki w zabezpieczeniach) we wtyczce lub motywie, daną aktualizację wykonujemy od razu."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Zaawansowane zabezpieczenia <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Na samym początku współpracy wdrażamy zaawansowaną wersję naszych autorskich zabezpieczeń strony."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Bez limitu wersji językowych <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="W ramach pakietu Protect Max obsługujemy strony z nielimitowaną liczbą wersji językowych."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Comiesięczny przegląd wtyczek <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Raz w miesiącu wykonujemy przegląd zainstalowanych w systemie CMS WordPress wtyczek. Jeżeli uznamy, że jakaś wtyczka przestała, naszym zdaniem, spełniać standardy bezpieczeństwa, to prześlemy Klientowi naszą rekomendację. Rekomendacja ta może obejmować instalację innej, podobnej wtyczki lub stworzenie zamiast niej autorskiego rozwiązania. Decyzję o wdrożeniu rekomendacji każdorazowo podejmuje Klient. Wdrożenie wskazanych rozwiązań może się wiązać z dodatkową opłatą. Dzięki przeglądowi wtyczek mamy większą kontrolę nad bezpieczeństwem strony."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Raport z aktualizacji (zaawansowany) <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Po każdej wykonanej przez nas aktualizacji otrzymasz natychmiast szczegółowy raport w wersji zaawansowanej."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Monitoring antywirusowy <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Raz w tygodniu wykonujemy skanowanie antywirusowe strony, a także nieustannie monitorujemy internet pod kątem pojawiania się nowych zagrożeń i luk w zabezpieczeniach (podatności)."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Opieka nad WooCommerce (<b>+ 50 zł</b>) <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="W ramach pakietu Protect Max obsługujemy za dopłatą również strony zawierające wtyczkę sklepową WooCommerce."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Monitoring działania serwisu www <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Nieustannie monitorujemy prawidłowość działania strony internetowej, a w razie stwierdzenia niedostępności strony, natychmiast reagujemy."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Analiza struktury linków <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Raz dziennie sprawdzamy prawidłowość działania linków na stronie (sprawdzamy maksymalnie 10 tysięcy linków), co pozwala szybko wykryć ewentualne problemy. Jest to ważne z punktu widzenia SEO.."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item" style="text-align: center;background: #f3f8fa;width: 120%;margin-left: -10%;margin-top: 1.6rem;margin-bottom: 1.3rem;">
                          <b style="font-size: 1.1em;">Możesz także dokupić:</b>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Optymalizację prędkości strony pod <br>Core Web Vitals (<b>od 200 zł</b>)
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Rozbudowę strony, w tym również aktualizowanie treści strony (<b>80 zł/h</b>)
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td class="pricing-table__cta">
                          <a href="#" class="btn" data-toggle="modal" data-target="#modal-form-pro-month">WYBIERZ</a>
                        </td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="pricing__annualy tab-pane" id="pricing__annualy" role="tabpanel">
            <div class="container-fluid">
              <div class="row">
                <div class="col d-flex flex-wrap px-md-0">
                  
                  <table class="pricing__table pricing-table text-center position-relative">
                    <thead>
                      <tr>
                        <th>
                          <div class="pricing-table__icon-wrapper">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/protect-mini-icon.svg" alt="Pakiet Protect Mini" class="pricing-table__icon pricing-table__icon--1">
                          </div>
                          <div class="pricing-table__heading text-center">Protect Mini</div>
                        </th>
                      </tr>
                      <tr>
                        <td class="pricing-table__price">
                          od <span class="pricing-table__amount">979 zł</span> netto
                          <span class="pricing-table__term d-block text-center mt-n1">PŁATNOŚĆ ROCZNA (1 MIESIĄC GRATIS)</span>
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Regularne kopie bezpieczeństwa <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Wykonujemy regularne kopie bezpieczeństwa całej witryny internetowej (core CMS, wtyczki, motywy, baza danych). Backup przechowywany jest w bezpiecznym miejscu – chmura AWS (Amazon Web Services). Kopia wykonywana jest codziennie i przechowywana do 30 dni wstecz."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Aktualizacje systemu WordPress <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Aktualizacja systemu CMS WordPress wykonywana jest maksymalnie raz na 2 tygodnie – z wyjątkiem poprawek bezpieczeństwa, które wykonujemy od razu, kiedy się pojawią – po to, aby twoja strona www była zawsze aktualna i bezpieczna."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Aktualizacje wtyczek i motywów <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Wykonujemy aktualizację wtyczek i motywów zainstalowanych w systemie CMS WordPress maksymalnie raz na 2 tygodnie. W razie pojawienia się podatności (luki w zabezpieczeniach) we wtyczce lub motywie, daną aktualizację wykonujemy od razu."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Podstawowe zabezpieczenia <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Na samym początku współpracy wdrażamy podstawową wersję naszych autorskich zabezpieczeń strony."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Max. 1 dodatkowa wersja językowa <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="W ramach pakietu Protect Mini obsługujemy strony z maksymalnie 1 dodatkową wersją językową, czyli np. wersja polska i wersja angielska."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Comiesięczny przegląd wtyczek <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Raz w miesiącu wykonujemy przegląd zainstalowanych w systemie CMS WordPress wtyczek. Jeżeli uznamy, że jakaś wtyczka przestała, naszym zdaniem, spełniać standardy bezpieczeństwa, to prześlemy Klientowi naszą rekomendację. Rekomendacja ta może obejmować instalację innej, podobnej wtyczki lub stworzenie zamiast niej autorskiego rozwiązania. Decyzję o wdrożeniu rekomendacji każdorazowo podejmuje Klient. Wdrożenie wskazanych rozwiązań może się wiązać z dodatkową opłatą. Dzięki przeglądowi wtyczek mamy większą kontrolę nad bezpieczeństwem strony."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Raport z aktualizacji (standardowy) <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Po każdej wykonanej przez nas aktualizacji otrzymasz natychmiast szczegółowy raport w wersji standardowej."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item pricing-table__item--disabled">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/x.svg" alt="" class="pricing-table__x"> Monitoring antywirusowy
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item pricing-table__item--disabled">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/x.svg" alt="" class="pricing-table__x"> Opieka nad WooCommerce
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item pricing-table__item--disabled">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/x.svg" alt="" class="pricing-table__x"> Monitoring działania serwisu www
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item pricing-table__item--disabled">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/x.svg" alt="" class="pricing-table__x"> Analiza struktury linków
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item" style="text-align: center;background: #f3f8fa;width: 120%;margin-left: -10%;margin-top: 2.1rem;margin-bottom: 0.9rem;">
                          <b style="font-size: 1.1em;">Możesz także dokupić:</b>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Optymalizację prędkości strony pod <br>Core Web Vitals (<b>od 449 zł</b>)
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Rozbudowę strony, w tym również aktualizowanie treści strony (<b>120 zł/h</b>)
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td class="pricing-table__cta">
                          <a href="#" class="btn" data-toggle="modal" data-target="#modal-form-mini-year">WYBIERZ</a>
                        </td>
                      </tr>
                    </tfoot>
                  </table>
                  
                  <table class="pricing__table pricing-table pricing-table--recommended text-center position-relative">
                    <thead>
                      <tr>
                        <th>
                          <div class="pricing-table__icon-wrapper">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/protect-standard-icon.svg" alt="Pakiet Protect Standard" class="pricing-table__icon pricing-table__icon--2">
                          </div>
                          <div class="pricing-table__heading text-center">Protect Standard</div>
                        </th>
                      </tr>
                      <tr>
                        <td class="pricing-table__price">
                          od <span class="pricing-table__amount">1639 zł</span> netto
                          <span class="pricing-table__term d-block text-center mt-n1">PŁATNOŚĆ ROCZNA (1 MIESIĄC GRATIS)</span>
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Regularne kopie bezpieczeństwa <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Wykonujemy regularne kopie bezpieczeństwa całej witryny internetowej (core CMS, wtyczki, motywy, baza danych). Backup przechowywany jest w bezpiecznym miejscu – chmura AWS (Amazon Web Services). Kopia wykonywana jest codziennie i przechowywana do 60 dni wstecz."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Aktualizacje systemu WordPress <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Aktualizacja systemu CMS WordPress wykonywana jest maksymalnie raz w tygodniu – z wyjątkiem poprawek bezpieczeństwa, które wykonujemy od razu, kiedy się pojawią – po to, aby twoja strona www była zawsze aktualna i bezpieczna."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Aktualizacje wtyczek i motywów <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Wykonujemy aktualizację wtyczek i motywów zainstalowanych w systemie CMS WordPress maksymalnie raz w tygodniu. W razie pojawienia się podatności (luki w zabezpieczeniach) we wtyczce lub motywie, daną aktualizację wykonujemy od razu."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Zaawansowane zabezpieczenia <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Na samym początku współpracy wdrażamy zaawansowaną wersję naszych autorskich zabezpieczeń strony."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Max. 2 dodatkowe wersje językowe <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="W ramach pakietu Protect Standard obsługujemy strony z maksymalnie 2 dodatkowymi wersjami językowymi, czyli np. wersja polska, wersja angielska i wersja niemiecka."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Comiesięczny przegląd wtyczek <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Raz w miesiącu wykonujemy przegląd zainstalowanych w systemie CMS WordPress wtyczek. Jeżeli uznamy, że jakaś wtyczka przestała, naszym zdaniem, spełniać standardy bezpieczeństwa, to prześlemy Klientowi naszą rekomendację. Rekomendacja ta może obejmować instalację innej, podobnej wtyczki lub stworzenie zamiast niej autorskiego rozwiązania. Decyzję o wdrożeniu rekomendacji każdorazowo podejmuje Klient. Wdrożenie wskazanych rozwiązań może się wiązać z dodatkową opłatą. Dzięki przeglądowi wtyczek mamy większą kontrolę nad bezpieczeństwem strony."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Raport z aktualizacji (standardowy) <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Po każdej wykonanej przez nas aktualizacji otrzymasz natychmiast szczegółowy raport w wersji standardowej."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Monitoring antywirusowy <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Raz w tygodniu wykonujemy skanowanie antywirusowe strony, a także nieustannie monitorujemy internet pod kątem pojawiania się nowych zagrożeń i luk w zabezpieczeniach (podatności)."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Opieka nad WooCommerce (<b>+ 550 zł</b>) <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="W ramach pakietu Protect Standard obsługujemy za dopłatą również strony zawierające wtyczkę sklepową WooCommerce."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item pricing-table__item--disabled">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/x.svg" alt="" class="pricing-table__x"> Monitoring działania serwisu www
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item pricing-table__item--disabled">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/x.svg" alt="" class="pricing-table__x"> Analiza struktury linków
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item" style="text-align: center;background: #e3f0f6;width: 120%;margin-left: -10%;margin-top: 1.5rem;margin-bottom: 1rem;padding: 0.9rem 0;">
                          <b style="font-size: 1.1em;">Możesz także dokupić:</b>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Optymalizację prędkości strony pod <br>Core Web Vitals (<b>od 299 zł</b>)
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Rozbudowę strony, w tym również aktualizowanie treści strony (<b>100 zł/h</b>)
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td class="pricing-table__cta">
                          <a href="#" class="btn" data-toggle="modal" data-target="#modal-form-standard-year">WYBIERZ</a>
                        </td>
                      </tr>
                    </tfoot>
                  </table>
                  
                  <table class="pricing__table pricing-table text-center position-relative">
                    <thead>
                      <tr>
                        <th>
                          <div class="pricing-table__icon-wrapper">
                            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/protect-pro-icon.svg" alt="Pakiet Protect PRO" class="pricing-table__icon pricing-table__icon--3">
                          </div>
                          <div class="pricing-table__heading text-center">Protect Max</div>
                        </th>
                      </tr>
                      <tr>
                        <td class="pricing-table__price">
                          od <span class="pricing-table__amount">2189 zł</span> netto
                          <span class="pricing-table__term d-block text-center mt-n1">PŁATNOŚĆ ROCZNA (1 MIESIĄC GRATIS)</span>
                        </td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Regularne kopie bezpieczeństwa <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Wykonujemy regularne kopie bezpieczeństwa całej witryny internetowej (core CMS, wtyczki, motywy, baza danych). Backup przechowywany jest w bezpiecznym miejscu – chmura AWS (Amazon Web Services). Kopia wykonywana jest codziennie i przechowywana do 90 dni wstecz."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Aktualizacje systemu WordPress <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Aktualizacja systemu CMS WordPress wykonywana jest maksymalnie raz w tygodniu – z wyjątkiem poprawek bezpieczeństwa, które wykonujemy od razu, kiedy się pojawią – po to, aby twoja strona www była zawsze aktualna i bezpieczna."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Aktualizacje wtyczek i motywów <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Wykonujemy aktualizację wtyczek i motywów zainstalowanych w systemie CMS WordPress maksymalnie raz w tygodniu. W razie pojawienia się podatności (luki w zabezpieczeniach) we wtyczce lub motywie, daną aktualizację wykonujemy od razu."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Zaawansowane zabezpieczenia <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Na samym początku współpracy wdrażamy zaawansowaną wersję naszych autorskich zabezpieczeń strony."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Bez limitu wersji językowych <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="W ramach pakietu Protect Max obsługujemy strony z nielimitowaną liczbą wersji językowych."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Comiesięczny przegląd wtyczek <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Raz w miesiącu wykonujemy przegląd zainstalowanych w systemie CMS WordPress wtyczek. Jeżeli uznamy, że jakaś wtyczka przestała, naszym zdaniem, spełniać standardy bezpieczeństwa, to prześlemy Klientowi naszą rekomendację. Rekomendacja ta może obejmować instalację innej, podobnej wtyczki lub stworzenie zamiast niej autorskiego rozwiązania. Decyzję o wdrożeniu rekomendacji każdorazowo podejmuje Klient. Wdrożenie wskazanych rozwiązań może się wiązać z dodatkową opłatą. Dzięki przeglądowi wtyczek mamy większą kontrolę nad bezpieczeństwem strony."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Raport z aktualizacji (zaawansowany) <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Po każdej wykonanej przez nas aktualizacji otrzymasz natychmiast szczegółowy raport w wersji zaawansowanej."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Monitoring antywirusowy <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Raz w tygodniu wykonujemy skanowanie antywirusowe strony, a także nieustannie monitorujemy internet pod kątem pojawiania się nowych zagrożeń i luk w zabezpieczeniach (podatności)."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Opieka nad WooCommerce (<b>+ 550 zł</b>) <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="W ramach pakietu Protect Max obsługujemy za dopłatą również strony zawierające wtyczkę sklepową WooCommerce."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Monitoring działania serwisu www <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Nieustannie monitorujemy prawidłowość działania strony internetowej, a w razie stwierdzenia niedostępności strony, natychmiast reagujemy."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Analiza struktury linków <button type="button" href="#" data-toggle="tooltip" title="" class="needsclick" data-original-title="Raz dziennie sprawdzamy prawidłowość działania linków na stronie (sprawdzamy maksymalnie 10 tysięcy linków), co pozwala szybko wykryć ewentualne problemy. Jest to ważne z punktu widzenia SEO.."><i class="fa fa-info-circle" aria-hidden="true"></i></button>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item" style="text-align: center;background: #f3f8fa;width: 120%;margin-left: -10%;margin-top: 1.6rem;margin-bottom: 1.3rem;">
                          <b style="font-size: 1.1em;">Możesz także dokupić:</b>
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Optymalizację prędkości strony pod <br>Core Web Vitals (<b>od 200 zł</b>)
                        </td>
                      </tr>
                      <tr>
                        <td class="pricing-table__item">
                          <img src="<?php bloginfo('stylesheet_directory'); ?>/img/v.svg" alt="" class="pricing-table__v"> Rozbudowę strony, w tym również aktualizowanie treści strony (<b>80 zł/h</b>)
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td class="pricing-table__cta">
                          <a href="#" class="btn" data-toggle="modal" data-target="#modal-form-pro-year">WYBIERZ</a>
                        </td>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <p style="color: #fff; font-size: 1.5rem; margin-top: 3rem;">Nie znalazłeś pakietu odpowiednigo dla siebie?<br><a href="#kontakt" style="color: inherit;">Skontaktuj się z nami</a> i powiedz nam, czego potrzebujesz.</p>
            </div>
          </div>
        </div>
      </section>
      
      <section class="intro intro--about section mt-0" id="o-firmie">
        <header class="intro__header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 offset-md-6 col-md-6">
                <h2 class="section__heading os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">O firmie</h2>
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
                <p class="lead">Jesteśmy firmą z&nbsp;dużym doświadczeniem w&nbsp;branży internetowej, bardzo mocno związaną z&nbsp;WordPressem.</p>
                <p>Można nas spotkać na wielu wordpressowych wydarzeniach - WordCampach i&nbsp;WordUpach. Aktywnie udzielamy się w&nbsp;społeczności WordPressa, starając się nieść pomoc mniej zaawansowanym użytkownikom i&nbsp;promować dobre praktyki związane z&nbsp;bezpieczeństwem stron internetowych.</p>
                <p>Zależy nam na tym, aby uczynić internet bezpiecznym miejscem, czego efektem jest stworzenie przez nas marki ProtectWP.</p>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="services section" id="uslugi">
        <header class="services__header col">
          <h2 class="section__heading services__heading text-center os-animation" data-os-animation="fadeIn">Usługi dodatkowe</h2>
        </header>
        <div class="container px-md-0">
          <div class="row">
            <div class="col-12 d-flex flex-wrap os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.1s">
              <div class="services__bubble services-bubble text-center">
                “Ponad <b class="color12">60% użytkowników</b> robiących zakupy online, twierdzi że <b>szybkość ładowania sklepu</b> internetowego ma <b class="color12">znaczący wpływ</b> na podjęcie decyzji o&nbsp;transakcji.”
              </div>
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/services-bubble-shape.svg" alt="" class="services-bubble__shape ml-auto">
            </div>
            <div class="col-12 col-md-8">
              <article class="services__service services-service os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                <div class="services-service__icon services-service__icon--1 position-relative mr-auto">
                </div>
                <h3 class="services-service__heading">Optymalizacje stron www</h3>
                <div class="services-service__columns">
                  <p>Lekkie, czytelne i&nbsp;szybkie witryny są zdecydowanie lepiej oceniane przez wyszukiwarkę Google. Szybkość ładowania witryny internetowej ma bezpośredni wpływ na&nbsp;pozycję w&nbsp;wynikach wyszukiwania, co sprawia, że klienci łatwiej odnajdą Twoją firmę&nbsp;w&nbsp;Internecie. Dzięki prawidłowej optymalizacji serwisu www, klienci będą mieli możliwość szybszego odnalezienia produktu lub&nbsp; usługi której poszukują.</p>
                  <p>Optymalizacja serwisów www pod kątem szybkości wczytywania w przeglądarkach internetowych.</p>
                  <div>
                    <ul class="services-service__ul">
                      <li>Optymalizacja grafiki</li>
                      <li>Minifikacja CSS i&nbsp;Javascript</li>
                      <li>Zasoby blokujące renderowanie</li>
                      <li>Pamięć podręczna</li>
                      <li>Lazy Loading</li>
                      <li>Kompresja Gzip</li>
                      <li>Dobór odpowiedniego hostingu (serwera)</li>
                    </ul>
                  </div>
                </div>
                <h4 class="services-service__subheading">Co zyskujesz?</h4>
                <div class="row">
                  <div class="col-6 col-lg-3">
                    <div class="services-service__icon-wrapper">
                      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/services-service-arrow.svg" alt="" class="services-service__icon-svg">
                    </div>
                    <p class="services-service__benefits">Niższy współczynnik odrzuceń</p>
                  </div>
                  <div class="col-6 col-lg-3">
                    <div class="services-service__icon-wrapper">
                      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/services-service-clock.svg" alt="" class="services-service__icon-svg">
                    </div>
                    <p class="services-service__benefits">Dłuższy czas spędzony w&nbsp;witrynie</p>
                  </div>
                  <div class="col-6 col-lg-3">
                    <div class="services-service__icon-wrapper">
                      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/services-service-cart.svg" alt="" class="services-service__icon-svg ml-n1 mb-n1">
                    </div>
                    <p class="services-service__benefits">Wzrost sprzedaży <br>(dla sklepów internetowych)</p>
                  </div>
                  <div class="col-6 col-lg-3">
                    <div class="services-service__icon-wrapper">
                      <img src="<?php bloginfo('stylesheet_directory'); ?>/img/services-service-star.svg" alt="" class="services-service__icon-svg">
                    </div>
                    <p class="services-service__benefits">Zwiększenie konwersji</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-12 col-md-4">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/img/uslugi-dodatkowe.png" alt="Usługi dodatkowe" class="services__img os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
            </div>
            <div class="col-12">
              <div class="services__separator w-100 os-animation" data-os-animation="fadeIn"></div>
            </div>
            <div class="col-12 col-md-6 py-4 py-lg-0">
              <article class="services__service services-service services-service--narrow os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                <div class="services-service__icon services-service__icon--2 position-relative mr-auto">
                </div>
                <h3 class="services-service__heading">Usuwanie wirusów WordPress</h3>
                <p>Zainfekowana strona www może doprowadzić do blokady przez Google w wynikach wyszukiwania (blacklist). Zareaguj na czas i nie pozwól na to.</p>
                <ul class="services-service__ul mt-0">
                  <li>Usuwanie zagrożeń i złośliwych kodów</li>
                  <li>Przywracanie witryny sprzed stanu infekcji</li>
                  <li>Skanowanie pod kątem występowania zagrożeń</li>
                  <li>Raport z wykonanych czynności</li>
                </ul>
              </article>
            </div>
            <div class="col-12 col-md-6 py-4 py-lg-0">
              <article class="services__service services-service services-service--narrow os-animation" data-os-animation="fadeIn" data-os-animation-delay="0.2s">
                <div class="services-service__icon services-service__icon--4 position-relative mr-auto">
                </div>
                <h3 class="services-service__heading">Administracja i&nbsp;prace programistyczne</h3>
                <p>Potrzebujesz wsparcia przy zmianach na twojej witrynie internetowej lub prac programistycznych przy jej rozwoju? Zapewniamy stałą opiekę polegającą na administracji która obejmuje (liczba godzin ustalana indywidualnie):</p>
                <ul class="services-service__ul mt-0">
                  <li>Aktualizacje treści</li>
                  <li>Zmiany grafik oraz zdjęć</li>
                  <li>Zmiany wizualne</li>
                  <li>Rozwój funkcjonalności</li>
                  <li>Inne wedle ustaleń</li>
                </ul>
              </article>
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

  <footer class="footer">
    <ul class="footer__ul d-flex flex-wrap justify-content-center col">
      <li class="footer__li">
          <a href="#home" class="footer__link needsclick">Home</a>
        </li>
        <li class="footer__li">
          <a href="#jak-dziala-ochrona" class="footer__link needsclick">Jak działa ochrona?</a>
        </li>
      <li class="footer__li">
        <a href="#pakiety-ochrony" class="footer__link needsclick">Pakiety ochrony</a>
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

  <div class="modal fade" id="modal-form-mini-month" tabindex="-1" role="dialog" aria-labelledby="modal-form__label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header flex-wrap justify-content-center">
          <h3 class="modal__heading w-100 text-center" id="modal-form__label">Wyślij zapytanie <br>(Protect Mini)</h3>
          <p class="text-center mt-4 mb-0">Samo przesłanie poniższego formularza nie jest równoznaczne z zawarciem umowy przez Internet i <b>nie wiąże się z obowiązkiem zapłaty</b>. Po otrzymaniu Twojego zapytania wykonamy bezpłatny audyt Twojej strony i na jego podstawie zdecydujemy czy możemy świadczyć dla Ciebie usługę.</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal__form">
            <?php echo do_shortcode('[contact-form-7 id="20" title="Formularz - Mini (miesiąc)"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-form-mini-year" tabindex="-1" role="dialog" aria-labelledby="modal-form__label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header flex-wrap justify-content-center">
          <h3 class="modal__heading w-100 text-center" id="modal-form__label">Wyślij zapytanie <br>(Protect Mini)</h3>
          <p class="text-center mt-4 mb-0">Samo przesłanie poniższego formularza nie jest równoznaczne z zawarciem umowy przez Internet i <b>nie wiąże się z obowiązkiem zapłaty</b>. Po otrzymaniu Twojego zapytania wykonamy bezpłatny audyt Twojej strony i na jego podstawie zdecydujemy czy możemy świadczyć dla Ciebie usługę.</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal__form">
            <?php echo do_shortcode('[contact-form-7 id="151" title="Formularz - Mini (rok)"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-form-standard-month" tabindex="-1" role="dialog" aria-labelledby="modal-form__label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header flex-wrap justify-content-center">
          <h3 class="modal__heading w-100 text-center" id="modal-form__label">Wyślij zapytanie <br>(Protect Standard)</h3>
          <p class="text-center mt-4 mb-0">Samo przesłanie poniższego formularza nie jest równoznaczne z zawarciem umowy przez Internet i <b>nie wiąże się z obowiązkiem zapłaty</b>. Po otrzymaniu Twojego zapytania wykonamy bezpłatny audyt Twojej strony i na jego podstawie zdecydujemy czy możemy świadczyć dla Ciebie usługę.</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal__form">
            <?php echo do_shortcode('[contact-form-7 id="23" title="Formularz - Standard"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-form-standard-year" tabindex="-1" role="dialog" aria-labelledby="modal-form__label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header flex-wrap justify-content-center">
          <h3 class="modal__heading w-100 text-center" id="modal-form__label">Wyślij zapytanie <br>(Protect Standard)</h3>
          <p class="text-center mt-4 mb-0">Samo przesłanie poniższego formularza nie jest równoznaczne z zawarciem umowy przez Internet i <b>nie wiąże się z obowiązkiem zapłaty</b>. Po otrzymaniu Twojego zapytania wykonamy bezpłatny audyt Twojej strony i na jego podstawie zdecydujemy czy możemy świadczyć dla Ciebie usługę.</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal__form">
            <?php echo do_shortcode('[contact-form-7 id="155" title="Formularz - Standard (rok)"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-form-pro-month" tabindex="-1" role="dialog" aria-labelledby="modal-form__label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header flex-wrap justify-content-center">
          <h3 class="modal__heading w-100 text-center" id="modal-form__label">Wyślij zapytanie <br>(Protect Max)</h3>
          <p class="text-center mt-4 mb-0">Samo przesłanie poniższego formularza nie jest równoznaczne z zawarciem umowy przez Internet i <b>nie wiąże się z obowiązkiem zapłaty</b>. Po otrzymaniu Twojego zapytania wykonamy bezpłatny audyt Twojej strony i na jego podstawie zdecydujemy czy możemy świadczyć dla Ciebie usługę.</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal__form">
            <?php echo do_shortcode('[contact-form-7 id="24" title="Formularz - Max"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modal-form-pro-year" tabindex="-1" role="dialog" aria-labelledby="modal-form__label" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header flex-wrap justify-content-center">
          <h3 class="modal__heading w-100 text-center" id="modal-form__label">Wyślij zapytanie <br>(Protect Max)</h3>
          <p class="text-center mt-4 mb-0">Samo przesłanie poniższego formularza nie jest równoznaczne z zawarciem umowy przez Internet i <b>nie wiąże się z obowiązkiem zapłaty</b>. Po otrzymaniu Twojego zapytania wykonamy bezpłatny audyt Twojej strony i na jego podstawie zdecydujemy czy możemy świadczyć dla Ciebie usługę.</p>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="modal__form">
            <?php echo do_shortcode('[contact-form-7 id="153" title="Formularz - Max (rok)"]'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php
get_footer();