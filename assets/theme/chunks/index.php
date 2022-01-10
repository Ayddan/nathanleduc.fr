<?php include 'sendEmail.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nathan Leduc</title>
    <link rel="icon" href="assets/theme/images/svg/fav-icon.svg" />
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   
</head>
<body>
    <div data-scroll-container class="smooth-scroll">
        <?php if(isset($alert)){echo $alert;} ?>
        <section class="hero container">
            <div class="text-content">
                <h1>Nathan Leduc <br> Developpeur web</h1>
                <span class="sub-title">Js-React / php-Symfony</span>
                <div class="links-wrapper">
                    <a class="button-1 contact-link" href="#contact" rel="noreferrer">Me contacter</a>
                    <a class="button-1 presentation-link" href="#presentation" rel="noreferrer">En savoir plus</a>
                </div>
            </div>
            <div class="letters">
                <img class="logo-letter" src="assets/theme/images/svg/n-hero.svg" alt="Logo N">
                <img class="logo-letter" src="assets/theme/images/svg/l-hero.svg" alt="Logo L">
            </div>
        </section>
        <section class="presentation container" id="presentation">
            <h2>Bienvenue, moi c'est Nathan.</h2>
            <p>Je développe des sites web et applications avec passion. D'abord autodidacte, puis en apprentissage. J'ai accumulé une expérience qui m'a permis d'agrandir mon champ de compétences et de répondre aux attentes de mes clients.</p>
        </section>
        <section class="tech">
            <div class="tech-content tech-1 container">
                <h2><img src="assets/theme/images/png/web-development.png" alt="Logo languages"> Languages</h2>
                <div class="tech-line">
                [[!pdoResources?
                    &parents=`8`
                    &depth=`0`
                    &tpl=`techElement`
                    &sortdir=`ASC`
                ]]
                </div>
            </div>
            <div class="tech-content tech-2 container">
                <h2><img src="assets/theme/images/png/web-settings.png" alt="Logo frameworks"> Frameworks / Librairies</h2>
                <div class="tech-line">
                    [[!pdoResources?
                        &parents=`2`
                        &depth=`0`
                        &tpl=`techElement`
                        &sortdir=`ASC`
                    ]]
                </div>
            </div>
            <div class="tech-content tech-3 container">
                <h2><img src="assets/theme/images/png/adjust.png" alt="Logo Outils"> Mes outils</h2>
                <div class="tech-line">
                    [[!pdoResources?
                        &parents=`14`
                        &depth=`0`
                        &tpl=`techElement`
                        &sortdir=`ASC`
                    ]]
                </div>
            </div>
        </section>
        <section class="projects container">
            <h2>Mes projets</h2>
            <div class="projects-wrapper">
                [[!pdoResources?
                    &parents=`20`
                    &depth=`0`
                    &tpl=`projectElement`
                    &includeTVs=`git_url,tech_list,project_img`
                    &sortdir=`ASC`
                ]]
            </div>
        </section>
        
        <section class="contact container" id="contact">
            <h2>Un projet en tête ? <br>Contactez moi !</h2>
            <div class="content">
                <form method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="ir" for="name">Nom</label>
                            <input class="form-input" type="text" id="name" name="name" placeholder="Nom">
                            <div class="input-background"></div>
                        </div>
                        <div class="form-group">
                            <label class="ir" for="email">Email</label>
                            <input class="form-input" type="email" id="email" name="email" placeholder="Email">
                            <div class="input-background"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="ir" for="subject">Objet</label>
                        <input class="form-input" type="text" id="subject" name="subject" placeholder="Objet">
                        <div class="input-background"></div>
                    </div>
                    <div class="form-group">
                        <label class="ir" for="message">Message</label>
                        <textarea class="form-input" name="message" id="message" placeholder="Message" rows="10"></textarea>
                        <div class="input-background"></div>
                    </div>

                    <div class="form-row">
                        <div class="social-medias">
                            <!--<a class="social-link" href="#" target="_blank"><img src="assets/theme/images/svg/twitter.svg" alt="Logo twitter"></a>-->
                            <a class="social-link" href="//www.linkedin.com/in/nathan-leduc-349561146/" target="_blank"><img src="assets/theme/images/svg/linkedin.svg" alt="Logo Linkedin"></a>
                            <a class="social-link" href="//github.com/Ayddan" target="_blank"><img src="assets/theme/images/svg/github.svg" alt="Logo Github"></a>
                        </div>
                        <div class="form-group submit-wrapper">
                            <label class="ir" for="submit">Envoyer</label>
                            <input class="button-1" name="submit" id="submit" type="submit" value="Envoyer">
                            <div class="submit-background"></div>
                        </div>
                    </div>
                </form>
                <div id="map"></div>
            </div>
        </section>
    </div>
    <script src="assets/theme/js/SplitText.min.js"></script>
    <script src="assets/theme/js/ScrollTrigger.min.js"></script>
    <script src='assets/theme/js/gsap.min.js'></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
    <script src='assets/theme/js/map.js'></script>
    <script src='assets/theme/js/noResubmission.js'></script>
    <script src="assets/theme/js/locomotiveScroll.min.js"></script>
    <script src="assets/theme/js/animations.js"></script>
</body>
</html>