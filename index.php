<?php
require_once 'header.php'; ?>

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




    <main>



        <section class="hero">
            <h1>High-end Gaming Gear</h1>
            <h2>In Breda</h2>
        </section>



        <section class="intro">

            <div class="intro-text">

                <p>
                    Bij LevelUp Hardware draait alles om performance.
                    Of je nu op zoek bent naar een betrouwbare laptop
                    die de nieuwste AAA-titels moeiteloos draait, of je
                    huidige rig een professionele upgradebeurt nodig
                    heeft; wij staan voor je klaar.
                </p>

                <p>
                    In onze fysieke winkel combineren we de
                    nostalgische sfeer van de jaren '80 arcades met
                    de brute kracht van moderne hardware van morgen.
                </p>

                <h3 class="why-title">
                    Waarom kiezen voor ons?
                </h3>

            </div>


            <div class="laptop-placeholder">
    <img src="https://64.media.tumblr.com/87ead72356f1c77fb7556078cec6b4b7/9595e294a97c3ec7-7e/s2048x3072/3cb797dc8b859d42ef9feb80265ef1c6ea5f2a6a.webp" alt="Gaming laptop">
</div>

        </section>




        <section class="why-section">


            <div class="store-placeholder">
    <img src="https://64.media.tumblr.com/fae42fae9c1791fbd7652e28cc0759d0/9595e294a97c3ec7-c5/s1280x1920/dce34f89951e91b924f0ff05c3efd5544e8abf5f.pnj" alt="LevelUp Hardware winkel">
</div>

            <ul class="benefits">

                <li>
                    <strong>Curated Selectie:</strong>
                    Wij verkopen alleen laptops waar we zelf achter staan.
                    Geen concessies op bouwkwaliteit of koeling.
                </li>

                <li>
                    <strong>Expert Onderhoud:</strong>
                    Van het vervangen van een kapotte SSD tot complexe
                    hardware-upgrades; wij verlengen de levensduur van je machine.
                </li>

                <li>
                    <strong>Persoonlijk advies:</strong>
                    Geen standaard verkooppraatjes, maar eerlijk advies
                    gebaseerd op jouw favoriete games en workflow.
                </li>

            </ul>

        </section>

    </main>

    <script>
        const newsletterDialog = document.getElementById("newsletter-dialog");
        const openNewsletter = document.getElementById("open-newsletter");
        const closeNewsletter = document.getElementById("close-newsletter");
        const newsletterForm = document.getElementById("newsletter-form");
        const newsletterStatus = document.getElementById("newsletter-status");

        openNewsletter.addEventListener("click", () => {
            newsletterDialog.showModal();
        });

        closeNewsletter.addEventListener("click", () => {
            newsletterDialog.close();
        });

        newsletterDialog.addEventListener("click", (event) => {
            if (event.target === newsletterDialog) {
                newsletterDialog.close();
            }
        });

        newsletterForm.addEventListener("submit", (event) => {
            event.preventDefault();
            const name = document.getElementById("newsletter-name").value.trim();
            newsletterStatus.textContent = `Bedankt, ${name}! Je staat nu ingeschreven voor ons nieuws.`;
            newsletterForm.reset();
        });

        if (window.location.hash === "#newsletter-dialog") {
            newsletterDialog.showModal();
        }
    </script>

</body>
</html>

