<?php
// require_once("../includes/connection.php");
?>

<!DOCTYPE html>
<html lang="pl">
    <?php
    require_once("assets/head.php");
    ?>
    <script type="module" src="../js/animations.js" defer></script>
<body>
    <head>
        <?php
        require_once("assets/nav.php");
        ?>
    </head>
    <header class="primary-header flex">
        <div class="primary-header__content container flex gap-xxl">
            <div class="primary-header__text grid ji-s as-c gap-xl">
                <h1 class="primary-header__title">Nie śpimy, dopóki nie otrzymasz sprawidliwości </h1>
                <p>W kancelarii adwokackiej adw. Łukasza Siei skupiamy się na ochronie twoich praw i interesów. nasza pasja do świadczenia profesjonalnych usług prawnych połączona z bogatym doświadczeniem sprawiają, że jesteśmy gotowi sprostać nawet najbardziej skomplikowanym sprawom prawnym.</p>
                <a href="#contact" class="btn">Napisz do nas</a>
            </div>
            <img src="../img/lawyer.png" alt="prawnik" class="primary-header__img as-e">
        </div>
    </header>

    <main>
        <section class="container grid gap-xxl section-mt about-us-section" id="about-us">
            <h2 class="subtitle">O naszej Kancelari</h2>
            <div class="flex ai-s gap-xl">
                <p class="about-us-section__text">Kancelaria Adwokacka adw. Łukasza Siei oferuje profesjonalną i kompleksową obsługę prawną Klientom indywidualnym jak i przedsiębiorcom, zarówno w sprawach pozasądowych jak i sądowych. </p>
                <img src="../img/image1.png" alt="książki" class="about-us-section__img">
            </div>
            <div class="flex ai-s gap-xl">
                <img src="../img/image2.png" alt="półka na książki" class="about-us-section__img">
                <p class="about-us-section__text">Zdobyte doświadczenie pozwala nam na udzielanie pomocy prawnej zarówno w zakresie prawa karnego, cywilnego, gospodarczego jak i administracyjnego. Pomoc ta w zależności od potrzeb naszych klientów obejmuje reprezentację we wszystkich postępowaniach cywilnych, rodzinnych i sprawach karnych, toczących się przed organami postępowania przygotowawczego, sądami, organami egzekucyjnymi czy organami administracji publicznej.</p>
            </div>
            <div class="flex ai-s gap-xl">
                <p class="about-us-section__text">Świadczone przez nas usługi są również ukierunkowane na pomoc naszym Klientom poprzez udzielanie porad prawnych, sporządzanie opinii jak również doradztwo przy zawieraniu umów i prowadzeniu działalności gospodarczej.
        Każdemu klientowi zapewniamy indywidualne podejście i wnikliwą analizę problemu, z którym się do nas zwrócił. Ze względu na charakter powierzanych nam spraw ważne jest dla nas, aby pomoc udzielona Klientowi miała charakter kompleksowy, z jednoczesnym uwzględnieniem trafności i terminowości działania. Dbamy o to, aby nasi Klienci znali zasady i podstawy naszego działania, dlatego na każdym etapie prowadzenia sprawy Klient może liczyć na pełną informację o jej stanie.</p>
                <img src="../img/image3.png" alt="prawnik" class="about-us-section__img">
            </div>
        </section>
        <section class="testimonials container section-mt grid gap gap-xxl">
            <h2 class="subtitle">Oświadczenia</h2>
            <div class="testimonials__content flex ai-c">
                <button class="slide-btn grid pc-c" data-slider-btn="left">
                    <img src="../img/left-arrow.svg" alt="strzałka w lewo">
                </button>
                <div class="testimonials__slider grid" data-slider="">
                    <div class="testimonials__slider__content flex gap-xl" data-slider-content="">
                        <div class="testimonials__card flex gap-xl">
                            <div class="testimonials__card__left-panel grid ji-c ac-c gap-md">
                                <p class="testimonials__card__letter grid pc-c">M</p>
                                <div class="grid ji-c gap-xsm">
                                    <div class="flex gap-xsm">
                                        <img src="../img/star.svg" alt="star">
                                        <img src="../img/star.svg" alt="star">
                                        <img src="../img/star.svg" alt="star">
                                        <img src="../img/star.svg" alt="star">
                                        <img src="../img/star.svg" alt="star">
                                    </div>
                                    <span class="testimonials__card__rating">5/5</span>
                                </div>
                            </div>
                            <div class="grid gap-md">
                                <p>Pan Mecenas to człowiek o wysokiej kulturze osobistej, z profesjonalnym podejściem do swojego zawodu. Współpraca przebiegła bardzo dobrze, Pan Mecenas doskonale wie co robi, i przy współpracy o takim profilu obie strony muszą sobie ufać. Serdecznie polecam!</p>
                                <span class="testimonials__card__signature">Mariusz Błaszczyk</span>
                            </div>
                        </div>
                        <div class="testimonials__card flex gap-xl">
                            <div class="testimonials__card__left-panel grid ji-c ac-c gap-md">
                                <p class="testimonials__card__letter grid pc-c">M</p>
                                <div class="grid ji-c gap-xsm">
                                    <div class="flex gap-xsm">
                                        <img src="../img/star.svg" alt="star">
                                        <img src="../img/star.svg" alt="star">
                                        <img src="../img/star.svg" alt="star">
                                        <img src="../img/star.svg" alt="star">
                                        <img src="../img/star.svg" alt="star">
                                    </div>
                                    <span class="testimonials__card__rating">5/5</span>
                                </div>
                            </div>
                            <div class="grid gap-md">
                                <p>Pan Mecenas to człowiek o wysokiej kulturze osobistej, z profesjonalnym podejściem do swojego zawodu. Współpraca przebiegła bardzo dobrze, Pan Mecenas doskonale wie co robi, i przy współpracy o takim profilu obie strony muszą sobie ufać. Serdecznie polecam!</p>
                                <span class="testimonials__card__signature">Mariusz Błaszczyk</span>
                            </div>
                        </div>
                        <div class="testimonials__card flex gap-xl">
                            <div class="testimonials__card__left-panel grid ji-c ac-c gap-md">
                                <p class="testimonials__card__letter grid pc-c">M</p>
                                <div class="grid ji-c gap-xsm">
                                    <div class="flex gap-xsm">
                                        <img src="../img/star.svg" alt="star">
                                        <img src="../img/star.svg" alt="star">
                                        <img src="../img/star.svg" alt="star">
                                        <img src="../img/star.svg" alt="star">
                                        <img src="../img/star.svg" alt="star">
                                    </div>
                                    <span class="testimonials__card__rating">5/5</span>
                                </div>
                            </div>
                            <div class="grid gap-md">
                                <p>Pan Mecenas to człowiek o wysokiej kulturze osobistej, z profesjonalnym podejściem do swojego zawodu. Współpraca przebiegła bardzo dobrze, Pan Mecenas doskonale wie co robi, i przy współpracy o takim profilu obie strony muszą sobie ufać. Serdecznie polecam!</p>
                                <span class="testimonials__card__signature">Mariusz Błaszczyk</span>
                            </div>
                        </div>
                        <div class="testimonials__card flex gap-xl">
                            <div class="testimonials__card__left-panel grid ji-c ac-c gap-md">
                                <p class="testimonials__card__letter grid pc-c">M</p>
                                <div class="grid ji-c gap-xsm">
                                    <div class="flex gap-xsm">
                                        <img src="../img/star.svg" alt="star">
                                        <img src="../img/star.svg" alt="star">
                                        <img src="../img/star.svg" alt="star">
                                        <img src="../img/star.svg" alt="star">
                                        <img src="../img/star.svg" alt="star">
                                    </div>
                                    <span class="testimonials__card__rating">5/5</span>
                                </div>
                            </div>
                            <div class="grid gap-md">
                                <p>Pan Mecenas to człowiek o wysokiej kulturze osobistej, z profesjonalnym podejściem do swojego zawodu. Współpraca przebiegła bardzo dobrze, Pan Mecenas doskonale wie co robi, i przy współpracy o takim profilu obie strony muszą sobie ufać. Serdecznie polecam!</p>
                                <span class="testimonials__card__signature">Mariusz Błaszczyk</span>
                            </div>
                        </div>
                        <div class="testimonials__card flex gap-xl">
                            <div class="testimonials__card__left-panel grid ji-c ac-c gap-md">
                                <p class="testimonials__card__letter grid pc-c">M</p>
                                <div class="grid ji-c gap-xsm">
                                    <div class="flex gap-xsm">
                                        <img src="../img/star.svg" alt="star">
                                        <img src="../img/star.svg" alt="star">
                                        <img src="../img/star.svg" alt="star">
                                        <img src="../img/star.svg" alt="star">
                                        <img src="../img/star.svg" alt="star">
                                    </div>
                                    <span class="testimonials__card__rating">5/5</span>
                                </div>
                            </div>
                            <div class="grid gap-md">
                                <p>Pan Mecenas to człowiek o wysokiej kulturze osobistej, z profesjonalnym podejściem do swojego zawodu. Współpraca przebiegła bardzo dobrze, Pan Mecenas doskonale wie co robi, i przy współpracy o takim profilu obie strony muszą sobie ufać. Serdecznie polecam!</p>
                                <span class="testimonials__card__signature">Mariusz Błaszczyk</span>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="slide-btn grid pc-c"  data-slider-btn="rigth">
                    <img src="../img/rigth-arrow.svg" alt="strzałka w prawo">
                </button>
            </div>
        </section>
        <section class="section-mt container grid ji-c gap-xxl" id="services">
            <h2 class="subtitle">Zakres usług</h2>
            <p class="services__description txt-ac">Zapewniamy Państwu kompleksowe usługi prawne. Obsługa prawna dla klientów indywidualnych i podmiotów gospodarczych. Prowadzimy sprawy w zakresie m.in. prawa cywilnego, rodzinnego, spadkowego, gospodarczego i karnego. Pełna obsługa prawna - porady prawnicze, windykacje. Szeroka gama dziedzin prawa gospodarczego, administracyjnego, nieruchomości, ubezpieczeniowego oraz prawa pracy</p>
        
            <div class="services__cards grid gap-xl">
                <div class="services__card grid ji-c ac-s gap-xl">
                    <img src="../img/people.svg" alt="ludzie">
                    <h3 class="services__card__title">Prawo Cywilne</h3>
                    <p>W Kancelarii Prawnej adw. Łukasza Siei oddajemy się kompleksowej ochronie Twoich praw w obszarze prawa cywilnego. Nasz zespół doświadczonych adwokatów oferuje wszechstronną pomoc prawna w sprawach związanych z umowami, odszkodowaniami, sprawami rodzinno-majątkowymi i innymi aspektami prawa cywilnego. Działamy z pasją, by dostosować nasze usługi do Twoich indywidualnych potrzeb, zapewniając profesjonalizm i skuteczność.</p>
                </div>
                <div class="services__card grid ji-c ac-s gap-xl">
                    <img src="../img/family.svg" alt="rodznia">
                    <h3 class="services__card__title">Prawo Rodzinne</h3>
                    <p>W Kancelarii Adwokackiej Łukasza Siei skupiamy się na wsparciu w kwestiach związanych z prawem rodzinnym. Nasz doświadczony zespół adwokatów dedykowany jest rozwiązaniom z zakresu rozwodów, spraw o alimenty, opiekę nad dziećmi oraz innych spraw rodzinnych. Zależy nam na zrozumieniu Twoich potrzeb i zapewnieniu profesjonalnej pomocy w trudnych chwilach.</p>
                </div>
                <div class="services__card grid ji-c ac-s gap-xl">
                    <img src="../img/handcuffs.svg" alt="kajdanki">
                    <h3 class="services__card__title">Prawo Karne</h3>
                    <p>W Kancelarii Prawnej adw. Łukasza Siei specjalizujemy się w obszarze prawa karne, świadcząc kompleksową pomoc prawną. Nasza ekspertyza obejmuje obronę przed zarzutami przestępstw, reprezentację przed sądami na każdym etapie postępowania karnego oraz skuteczne rozstrzyganie spraw z zakresu przestępstw gospodarczych. Dzięki doświadczeniu, dedykowanej obsłudze i skutecznym strategiom procesowym, jesteśmy gotowi chronić Twoje prawa i zapewnić profesjonalne wsparcie w trudnych chwilach.</p>
                </div>
                <div class="services__card grid ji-c ac-s gap-xl">
                    <img src="../img/company.svg" alt="firma">
                    <h3 class="services__card__title">Prawo Gospodarcze</h3>
                    <p>W Kancelarii Prawnej adw. Łukasza Siei specjalizujemy się w obszarze prawa gospodarczego. Nasz zespół doświadczonych prawników jest gotów świadczyć kompleksową pomoc prawną przedsiębiorstwom oraz klientom indywidualnym w zakresie prawa gospodarczego.</p>
                </div>
                <div class="services__card grid ji-c ac-s gap-xl">
                    <img src="../img/money.svg" alt="pieniądze">
                    <h3 class="services__card__title">Prawo Spadkowe</h3>
                    <p>W naszej renomowanej Kancelarii Prawnej adw. Łukasza Siei, specjalizującej się w obszarze prawa spadkowego. Nasz doświadczony zespół prawników jest gotów świadczyć wszechstronną pomoc prawną w zakresie spraw związanych z dziedziną spadkową.</p>
                </div>
            </div>
        </section>
        <section class="consultations section-mt container grid ji-s gap-xxl" id="conslutations">
            <h2 class="subtitle js-c">Konsultacje online</h2>
            <div class="flex gap-xl ai-s consultations__description">
                <p class="consultations__text">Z przyjemnością informujemy, że Kancelaria Adwokacka Łukasza Siei oferuje konsultacje prawne online. W trosce o wygodę i bezpieczeństwo naszych klientów, zapewniamy możliwość skorzystania z profesjonalnych porad prawnych bez konieczności wychodzenia z domu czy biura.
                Konsultacje online to doskonałe rozwiązanie dla osób, które z różnych powodów nie mogą osobiście pojawić się w kancelarii, a jednocześnie potrzebują fachowej pomocy prawnej. Bez względu na lokalizację, teraz każdy może skorzystać z usług doświadczonego adwokata, jakim jest Łukasz Siea. Zaufaj doświadczeniu i profesjonalizmowi Kancelarii Adwokackiej Łukasza Siei. Skontaktuj się z nami już dziś i rozwiąż swoje problemy prawne w sposób wygodny i efektywny.</p>
                <img src="../img/consultation.png" alt="konsultacja" class="consultations__img">
            </div>
            <h3 class="consultation__subtitle">Jak to działa?</h3>
            <div class="consultation__cards grid gap-xl">
                <div class="consultation__card flex ai-s gap-xl">
                    <p class="consultation__card__number grid pc-c">1</p>
                    <p><span class="bold">Umów się na konsultację:</span> Skontaktuj się z nami telefonicznie lub mailowo, aby umówić dogodny termin konsultacji online.</p>
                </div>
                <div class="consultation__card flex ai-s gap-xl">
                    <p class="consultation__card__number grid pc-c">2</p>
                    <p><span class="bold">Umów się na konsultację:</span> Skontaktuj się z nami telefonicznie lub mailowo, aby umówić dogodny termin konsultacji online.</p>
                </div>
                <div class="consultation__card flex ai-s gap-xl">
                    <p class="consultation__card__number grid pc-c">3</p>
                    <p><span class="bold">Umów się na konsultację:</span> Skontaktuj się z nami telefonicznie lub mailowo, aby umówić dogodny termin konsultacji online.</p>
                </div>
                <div class="consultation__card flex ai-s gap-xl">
                    <p class="consultation__card__number grid pc-c">4</p>
                    <p><span class="bold">Umów się na konsultację:</span> Skontaktuj się z nami telefonicznie lub mailowo, aby umówić dogodny termin konsultacji online.</p>
                </div>
            </div>
            <a href="#contact" class="consultation__btn btn js-c">Napisz do nas</a>
        </section>
        <section class="why-us-section section-mt container">
            <div class="why-us-section__content grid gap-xxl">
                <h2 class="why-us-section__subtitle subtitle">Dlaczego my</h2>
                <div class="grid gap-xl why-us-section__cards">
                    <div class="why-us-section__card flex ai-s gap-md">
                        <img src="../img/section.svg" alt="sekcja">
                        <div>
                            <h3 class="bold">Doświadczenie i Specjalizacja:</h3>
                            <p>Adwokat Łukasz Sieja to doświadczony prawnik z wieloletnim doświadczeniem w obszarze prawa.
                            Specjalizuje się w różnorodnych dziedzinach prawa, co pozwala na kompleksową obsługę klientów.</p>
                        </div>
                    </div>
                    <div class="why-us-section__card flex ai-s gap-md">
                        <img src="../img/section.svg" alt="sekcja">
                        <div>
                            <h3 class="bold">Doświadczenie i Specjalizacja:</h3>
                            <p>Adwokat Łukasz Sieja to doświadczony prawnik z wieloletnim doświadczeniem w obszarze prawa.
                            Specjalizuje się w różnorodnych dziedzinach prawa, co pozwala na kompleksową obsługę klientów.</p>
                        </div>
                    </div>
                    <div class="why-us-section__card flex ai-s gap-md">
                        <img src="../img/section.svg" alt="sekcja">
                        <div>
                            <h3 class="bold">Doświadczenie i Specjalizacja:</h3>
                            <p>Adwokat Łukasz Sieja to doświadczony prawnik z wieloletnim doświadczeniem w obszarze prawa.
                            Specjalizuje się w różnorodnych dziedzinach prawa, co pozwala na kompleksową obsługę klientów.</p>
                        </div>
                    </div>
                    <div class="why-us-section__card flex ai-s gap-md">
                        <img src="../img/section.svg" alt="sekcja">
                        <div>
                            <h3 class="bold">Doświadczenie i Specjalizacja:</h3>
                            <p>Adwokat Łukasz Sieja to doświadczony prawnik z wieloletnim doświadczeniem w obszarze prawa.
                            Specjalizuje się w różnorodnych dziedzinach prawa, co pozwala na kompleksową obsługę klientów.</p>
                        </div>
                    </div>
                    <div class="why-us-section__card flex ai-s gap-md">
                        <img src="../img/section.svg" alt="sekcja">
                        <div>
                            <h3 class="bold">Doświadczenie i Specjalizacja:</h3>
                            <p>Adwokat Łukasz Sieja to doświadczony prawnik z wieloletnim doświadczeniem w obszarze prawa.
                            Specjalizuje się w różnorodnych dziedzinach prawa, co pozwala na kompleksową obsługę klientów.</p>
                        </div>
                    </div>
                    <div class="why-us-section__card flex ai-s gap-md">
                        <img src="../img/section.svg" alt="sekcja">
                        <div>
                            <h3 class="bold">Doświadczenie i Specjalizacja:</h3>
                            <p>Adwokat Łukasz Sieja to doświadczony prawnik z wieloletnim doświadczeniem w obszarze prawa.
                            Specjalizuje się w różnorodnych dziedzinach prawa, co pozwala na kompleksową obsługę klientów.</p>
                        </div>
                    </div>
                    <div class="why-us-section__card flex ai-s gap-md">
                        <img src="../img/section.svg" alt="sekcja">
                        <div>
                            <h3 class="bold">Doświadczenie i Specjalizacja:</h3>
                            <p>Adwokat Łukasz Sieja to doświadczony prawnik z wieloletnim doświadczeniem w obszarze prawa.
                            Specjalizuje się w różnorodnych dziedzinach prawa, co pozwala na kompleksową obsługę klientów.</p>
                        </div>
                    </div>
                    <div class="why-us-section__card flex ai-s gap-md">
                        <img src="../img/section.svg" alt="sekcja">
                        <div>
                            <h3 class="bold">Doświadczenie i Specjalizacja:</h3>
                            <p>Adwokat Łukasz Sieja to doświadczony prawnik z wieloletnim doświadczeniem w obszarze prawa.
                            Specjalizuje się w różnorodnych dziedzinach prawa, co pozwala na kompleksową obsługę klientów.</p>
                        </div>
                    </div>
                </div>
                <a href="#contact" class="btn js-c">Napisz do nas</a>
            </div>
        </section>
        <section class="accusation grid ai-e gap-xl section-mt container">
            <img src="../img/policeman.png" alt="policjant" class="accusation__img">
            <div class="accustation__text grid ji-s gap-xl">
                <div class="flex gap-md wrap">
                    <div class="flex ai-c gap-md">
                        <p class="accusation__number bold">997</p>
                        <img src="../img/phone.svg" alt="telefon">
                    </div>
                    <h2 class="accusation__title">Pamiętaj więzienie to miejsce dla skazanych, a nie winnych!</h2>
                </div>
                <p>Znalezienie się w sytuacji zatrzymania przez policję to chwila, która często wywołuje stres i niepewność. W takich momentach ważne jest, aby znać swoje prawa i postępować rozważnie.
                Przede wszystkim, każdy zatrzymany ma prawo do milczenia. To oznacza, że nie jesteś zobowiązany udzielać odpowiedzi na pytania policji. Warto z tego prawa skorzystać, aby uniknąć ewentualnych niekorzystnych konsekwencji.
                Dodatkowo, przysługuje ci prawo do skontaktowania się z prawnikiem przed udzieleniem zeznań. Skorzystanie z pomocy doświadczonego adwokata może znacząco wpłynąć na przebieg sprawy i zapewnić ci właściwą reprezentację prawną.
                W sytuacji zatrzymania, nie panikuj. Unikaj odpowiadania na pytania bez konsultacji z prawnikiem. Natychmiastowe skontaktowanie się z profesjonalistą pomoże w odpowiednim przygotowaniu obrony i zminimalizowaniu potencjalnych konsekwencji prawnych.
                Pamiętaj, że prawnicy specjalizujący się w prawie karnym posiadają doświadczenie w reprezentowaniu klientów zatrzymanych przez policję. Zaufaj ich wiedzy i umiejętnościom, ponieważ znają zawiłości prawa i są gotowi świadczyć kompleksową pomoc w trudnych sytuacjach.
                Warto mieć świadomość, że prawo do milczenia oraz kontaktu z prawnikiem to narzędzia, które chronią twoje prawa i interesy. Skorzystanie z pomocy prawnika w pierwszych chwilach po zatrzymaniu może mieć istotne znaczenie dla ostatecznych rezultatów postępowania. Profesjonalna reprezentacja prawna może skutecznie wpłynąć na obronę i zapewnić ci właściwe wsparcie w trudnej sytuacji prawnej.</p>
                <a href="#contact" class="btn">Skontaktuj się z nami</a>
            </div>
        </section>
        <section class="section-mt container grid gap-xxl">
            <h2 class="subtitle">Nasz blog</h2>
        
            <div class="blog__cards grid jc-c gap-xl">
                <article class="blog__card grid gap-xl">
                    <h3 class="blog__card__title">Rozwód i co dalej?</h3>
                    <div class="grid gap-md blog__card__content">
                        <img src="../img/jordan-whitt-KQCXf_zvdaU-unsplash.jpg" alt="zdjęcie z bloga" class="blog__card__img">
                        <p>Sąd może wydać wyrok rozwodowy z orzekaniem o winie: 1) z wyłącznej winy jednej strony, 2) z winy obu stron. Sąd ustala po czyjej stronie leży wina w rozpadzie pożycia małżeńskiego, trzeba liczyć się z trwającym nawet kilka lat procesem oraz trudnymi emocjonalnie przeżyciami. Jeśli jednak uda się uzyskać orzeczenie z wyłącznej winy drugiej strony....</p>
                    </div>
                    <div class="flex jc-sb ai-c">
                        <button class="btn blog__card__btn">Czytaj więcej</button>
                        <time datetime="2023-12-18" class="bold">18/12/2023</time>
                    </div>
                </article>
                <article class="blog__card grid gap-xl">
                    <h3 class="blog__card__title">Rozwód i co dalej?</h3>
                    <div class="grid gap-md blog__card__content">
                        <img src="../img/jordan-whitt-KQCXf_zvdaU-unsplash.jpg" alt="zdjęcie z bloga" class="blog__card__img">
                        <p>Sąd może wydać wyrok rozwodowy z orzekaniem o winie: 1) z wyłącznej winy jednej strony, 2) z winy obu stron. Sąd ustala po czyjej stronie leży wina w rozpadzie pożycia małżeńskiego, trzeba liczyć się z trwającym nawet kilka lat procesem oraz trudnymi emocjonalnie przeżyciami. Jeśli jednak uda się uzyskać orzeczenie z wyłącznej winy drugiej strony....</p>
                    </div>
                    <div class="flex jc-sb ai-c">
                        <button class="btn blog__card__btn">Czytaj więcej</button>
                        <time datetime="2023-12-18" class="bold">18/12/2023</time>
                    </div>
                </article>
                <article class="blog__card grid gap-xl">
                    <h3 class="blog__card__title">Rozwód i co dalej?</h3>
                    <div class="grid gap-md blog__card__content">
                        <img src="../img/jordan-whitt-KQCXf_zvdaU-unsplash.jpg" alt="zdjęcie z bloga" class="blog__card__img">
                        <p>Sąd może wydać wyrok rozwodowy z orzekaniem o winie: 1) z wyłącznej winy jednej strony, 2) z winy obu stron. Sąd ustala po czyjej stronie leży wina w rozpadzie pożycia małżeńskiego, trzeba liczyć się z trwającym nawet kilka lat procesem oraz trudnymi emocjonalnie przeżyciami. Jeśli jednak uda się uzyskać orzeczenie z wyłącznej winy drugiej strony....</p>
                    </div>
                    <div class="flex jc-sb ai-c">
                        <button class="btn blog__card__btn">Czytaj więcej</button>
                        <time datetime="2023-12-18" class="bold">18/12/2023</time>
                    </div>
                </article>
            </div>
            <a href="" class="btn js-c">Więcej postów</a>
        </section>
        <section class="container section-mt grid jc-c gap-xxl">
            <h2 class="subtitle">Godziny Otwarcia</h2>
            <div class="working-hours__content">
                <table class="primary-table">
                    <thead>
                        <tr>
                            <th>Poniedziałek</th>
                            <th>Wtorek</th>
                            <th>Środa</th>
                            <th>Czwartek</th>
                            <th>Piątek</th>
                            <th>Sobota</th>
                            <th>Niedziela</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>9-17</td>
                            <td>9-17</td>
                            <td>9-17</td>
                            <td>9-17</td>
                            <td>9-17</td>
                            <td>Nieczynne</td>
                            <td>Nieczynne</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>
        <section class="container section-mt grid gap-xxl" id="contact">
            <h2 class="subtitle">Kontakt</h2>
            <div class="flex contact__content">
                <form action="" class="contact__form grid ac-s gap-xl">
                    <div>
                        <label for="first-name">Imię</label>
                        <input type="text" id="first-name" class="contact__form__input">
                    </div>
                    <div>
                        <label for="last-name">Nazwisko</label>
                        <input type="text" id="last-name" class="contact__form__input">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" id="email" class="contact__form__input">
                    </div>
                    <div>
                        <label for="message">Wiadomość</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="contact__form__input">
                        </textarea>
                    </div>
                    <button class="btn contact__btn js-s">Wyślij</button>
                </form>
                <div class="contact__sidebar">
                    <div class="contact__info grid gap-lg">
                        <a href="mailto:lukasz.sieja@adwokatura.pl" itemprop="email">lukasz.sieja@adwokatura.pl</a>
                        <a href="tel:+48 698 256 675" itemprop="telephone">+48 698 256 675</a>
                        <a href="https://www.google.com/maps/dir//lukasz+sieja/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x4710b5db0d3a0861:0xb24423532f9cec3?sa=X&ved=2ahUKEwj9wuyjk9aDAxV5KlkFHf7FBOEQ9Rd6BAgkEAA" itemprop="address">ul. Kilińskiego 14 lok. 16  42–202 Częstochowa</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="section-mt footer">
        <p>copyrigth</p>
    </footer>
</body>
</html>