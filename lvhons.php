<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Over Ons | LevelUp Hardware</title>

    <link rel="stylesheet" href="csslv/style2.css">
    <link rel="stylesheet" href="csslv/theme.css">
</head>

<body>
    <script src="js/theme.js"></script>



    <header>


        <div class="logo-placeholder">
            <img
                src="https://64.media.tumblr.com/1aeb833b2bd9e1b5d526f762379cf835/9595e294a97c3ec7-25/s1280x1920/239e3037d2f4ad0664724cee3e7872c92663c976.pnj"
                alt="LevelUp Hardware"
            >
        </div>

        <nav>
            <a href="index.php">Home</a>
            <a href="lvhons.php">Over ons</a>
            <a href="lvhprod.php">Producten</a>
            <button class="theme-toggle" type="button" id="theme-toggle">Lichtmodus</button>
            <button class="newsletter-link" type="button" id="open-newsletter">Nieuwsbrief</button>
        </nav>

    </header>



    <main>



        <section class="hero">
            <h1>Over Ons</h1>
            <h2>LevelUp Hardware</h2>
        </section>



        <section class="about-section">

            <div class="about-text">

                <p>
                    Welkom bij LevelUp Hardware, de plek waar jouw gaming-dromen
                    werkelijkheid worden. Als eigenaar en drijvende kracht achter
                    deze zaak, is Daan meer dan alleen een ondernemer; hij is een
                    gamer in hart en nieren en een absolute hardware-enthousiasteling.
                </p>

                <p>
                    Al sinds zijn tienerjaren, omringd door de gloed van CRT-schermen
                    en de pulserende beat van synthwave, sleutelde Daan aan zijn
                    eigen gaming-rigs. Wat begon als een hobby — het finetunen van
                    elke component voor die extra frame per seconde, het
                    optimaliseren van koelsystemen voor piekprestaties — groeide al
                    snel uit tot een diepgewortelde passie.
                </p>

                <h3>Jouw Game is zijn Prioriteit</h3>

                <p>
                    Of je nu de grenzen van virtual reality verkent, in
                    competitief verband strijdt om de hoogste rang, of gewoon wilt
                    genieten van adembenemende singleplayer-avonturen: Daan en
                    zijn team zorgen ervoor dat je hardware je nooit in de steek laat.
                    Hij gelooft dat een perfect afgestelde machine het verschil
                    maakt tussen gamen en écht domineren.
                </p>

            </div>



            <div class="portrait-placeholder">
                    <img src="https://64.media.tumblr.com/7e49c6cc9615145699d086d79bacec12/9595e294a97c3ec7-c8/s1280x1920/d741003426a5a070f303655da2b652c133362c00.jpg" alt="Gaming laptop">
            </div>

        </section>

        <section class="location-section">
            <div class="location-heading">
                <p class="location-eyebrow">Bezoek ons</p>
                <h2>Onze locatie</h2>
                <p>Vind LevelUp Hardware in Breda. Plan je route via de kaart hieronder.</p>
            </div>

            <div class="map-frame">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2477.9065157524724!2d4.775722176833179!3d51.60660147183599!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c69f990d127d8b%3A0x1e825fb420ca913c!2sCurio%2C%20Terheijdenseweg%20350!5e0!3m2!1snl!2snl!4v1790177162352!5m2!1snl!2snl"
                    title="Kaart van LevelUp Hardware in Breda"
                    loading="lazy"
                    allowfullscreen
                    referrerpolicy="no-referrer-when-downgrade"
                ></iframe>
            </div>
        </section>

    </main>

    <dialog class="newsletter-dialog" id="newsletter-dialog" aria-labelledby="newsletter-title">
        <button class="dialog-close" type="button" id="close-newsletter" aria-label="Nieuwsbrief sluiten">&times;</button>
        <div class="newsletter-content">
            <p class="newsletter-eyebrow">LevelUp Hardware nieuws</p>
            <h2 id="newsletter-title">Blijf op de hoogte</h2>
            <p>Ontvang nieuws over nieuwe hardware, aanbiedingen en gamingsetups rechtstreeks in je inbox.</p>

            <form id="newsletter-form">
                <label for="newsletter-name">Naam</label>
                <input id="newsletter-name" name="name" type="text" autocomplete="name" placeholder="Jouw naam" required>

                <label for="newsletter-email">E-mailadres</label>
                <input id="newsletter-email" name="email" type="email" autocomplete="email" placeholder="jij@voorbeeld.nl" required>

                <button class="newsletter-submit" type="submit">Inschrijven</button>
                <p class="newsletter-status" id="newsletter-status" role="status" aria-live="polite"></p>
            </form>
        </div>
    </dialog>

    <script>
        const newsletterDialog = document.getElementById("newsletter-dialog");
        const openNewsletter = document.getElementById("open-newsletter");
        const closeNewsletter = document.getElementById("close-newsletter");
        const newsletterForm = document.getElementById("newsletter-form");
        const newsletterStatus = document.getElementById("newsletter-status");

        openNewsletter.addEventListener("click", () => newsletterDialog.showModal());
        closeNewsletter.addEventListener("click", () => newsletterDialog.close());

        newsletterDialog.addEventListener("click", (event) => {
            if (event.target === newsletterDialog) newsletterDialog.close();
        });

        newsletterForm.addEventListener("submit", (event) => {
            event.preventDefault();
            const name = document.getElementById("newsletter-name").value.trim();
            newsletterStatus.textContent = `Bedankt, ${name}! Je staat nu ingeschreven voor ons nieuws.`;
            newsletterForm.reset();
        });
    </script>

</body>
</html>