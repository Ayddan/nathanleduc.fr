<?php include 'sendEmail.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nathan Leduc</title>
    <link rel="icon" href="./images/svg/fav-icon.svg" />
    <link rel="stylesheet" href="./css/style.css">
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
                <img class="logo-letter" src="./images/svg/n-hero.svg" alt="Logo N">
                <img class="logo-letter" src="./images/svg/l-hero.svg" alt="Logo L">
            </div>
        </section>
        <section class="presentation container" id="presentation">
            <h2>Bienvenue, moi c'est Nathan.</h2>
            <p>Je développe des sites web et applications avec passion. D'abord autodidacte, puis en apprentissage. J'ai accumulé une expérience qui m'a permis d'agrandir mon champ de compétences et de répondre aux attentes de mes clients.</p>
        </section>
        <section class="tech">
            <div class="tech-content tech-1 container">
                <h2><img src="./images/png/web-development.png" alt="Logo languages"> Languages</h2>
                <div class="tech-line">
                    <div class="tech-element">
                        <img src="./images/png/030-html-5.png" alt="HTML">
                        <span>HTML</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/png/031-css.png" alt="CSS">
                        <span>CSS</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/png/javascript.png" alt="Javascript">
                        <span>JAVASCRIPT</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/png/php.png" alt="PHP">
                        <span>PHP</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/png/021-mysql.png" alt="MYSQL">
                        <span>MYSQL</span>
                    </div>
                    <!-- <div class="tech-element">
                        <img src="./images/png/005-python.png" alt="Python">
                        <span>PYTHON</span>
                    </div> -->
                </div>
            </div>
            <div class="tech-content tech-2 container">
                <h2><img src="./images/png/web-settings.png" alt="Logo frameworks"> Frameworks / Librairies</h2>
                <div class="tech-line">
                    <div class="tech-element">
                        <img src="./images/png/026-sass.png" alt="Sass">
                        <span>sass</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/png/bootstrap.png" alt="Bootstrap">
                        <span>bootstrap</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/png/006-react.png" alt="Ract JS">
                        <span>react</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/png/symfony_white_03.png" alt="Symfony">
                        <span>symfony</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/png/gsap-greensock.png" alt="GSAP Greensock">
                        <span>gsap</span>
                    </div>
                </div>
            </div>
            <div class="tech-content tech-3 container">
                <h2><img src="./images/png/adjust.png" alt="Logo Outils"> Mes outils</h2>
                <div class="tech-line">
                    <div class="tech-element">
                        <img src="./images/png/visual-studio.png" alt="Visual Studio Code">
                        <span>vs code</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/png/010-github.png" alt="Git Hub">
                        <span>github</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/png/xd.png" alt="Adobe XD">
                        <span>adobe xd</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/png/wordpress.png" alt="Wordpress">
                        <span>wordpress</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/svg/modx-icon.svg" alt="MODX">
                        <span>modx</span>
                    </div>
                </div>
            </div>
            
        </section>
        <section class="projects container">
            <h2>Mes projets</h2>
            <!-- <span class="in-dev">A venir</span> -->
            <div class="projects-wrapper">
                <!-- <div class="project-element-wrapper">
                    <a class="github-link" href="#">
                        <img src="./images/png/010-github.png" alt="Git Hub">
                    </a>
                    <div class="project-image" style="background-image: url('./images/vitrine-tom.jpg');"></div>
                    <div class="element-body">
                        <h2>Vitrine Tom Leduc</h2>
                        <hr>
                        <p>Site vitrine du photographe animalier Tom Leduc. Site vitrine avec gestion de contenu pour la galerie.</p>
                        <div class="tech-and-link-wrapper">
                            <div class="tech-line">
                                <div class="tech-element">
                                    <img src="./images/png/symfony_white_03.png" alt="Symfony">
                                    <span>symfony</span>
                                </div>
                                <div class="tech-element">
                                    <img src="./images/png/gsap-greensock.png" alt="GSAP Greensock">
                                    <span>gsap</span>
                                </div>
                            </div>
                            <a class="button-1" href="#">Visiter</a>
                        </div>
                    </div>
                </div> -->
                <div class="project-element-wrapper">
                    <a class="github-link" href="https://gitlab.com/Quamiye/cefimvote/-/tree/develop" target="_blank">
                        <img src="./images/png/010-github.png" alt="Git Hub">
                    </a>
                    <div class="project-image" style="background-image: url('./images/cefim-vote.jpg');"></div>
                    <div class="element-body">
                        <h2>CEFIM VOTE</h2>
                        <hr>
                        <p>Outil pour l'éléction des délégués de classe de l'école CEFIM avec génération d'un procés verbal au format PDF</p>
                        <div class="tech-and-link-wrapper">
                            <div class="tech-line">
                                <div class="tech-element">
                                    <img src="./images/png/030-html-5.png" alt="HTML">
                                    <span>HTML</span>
                                </div>
                                <div class="tech-element">
                                    <img src="./images/png/031-css.png" alt="CSS">
                                    <span>CSS</span>
                                </div>
                                <div class="tech-element">
                                    <img src="./images/png/javascript.png" alt="Javascript">
                                    <span>JAVASCRIPT</span>
                                </div>
                                <div class="tech-element">
                                    <img src="./images/png/php.png" alt="PHP">
                                    <span>PHP</span>
                                </div>
                                <div class="tech-element">
                                    <img src="./images/png/symfony_white_03.png" alt="Symfony">
                                    <span>SYMFONY</span>
                                </div>
                                <div class="tech-element">
                                    <img src="./images/png/Vuejs.png" alt="HTML">
                                    <span>VUEJS</span>
                                </div>
                            </div>
                            <a class="button-1" href="https://cefimvote.cefim.o2switch.site/#/" target="_blank">Visiter</a>
                        </div>
                    </div>
                </div>
                <!-- <div class="project-element" style="background-image: url('./images/vitrine-tom.jpg');">
                    <div class="mask">
                        <span>tomleduc.fr</span>
                        <a class="button-1" href="#">Visiter le site</a>
                    </div>
                </div> -->
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
                            <a class="social-link" href="#" target="_blank"><img src="./images/svg/twitter.svg" alt="Logo twitter"></a>
                            <a class="social-link" href="//www.linkedin.com/in/nathan-leduc-349561146/" target="_blank"><img src="./images/svg/linkedin.svg" alt="Logo twitter"></a>
                            <a class="social-link" href="//github.com/Ayddan" target="_blank"><img src="./images/svg/github.svg" alt="Logo twitter"></a>
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
    <script src="./js/SplitText.min.js"></script>
    <script src="./js/ScrollTrigger.min.js"></script>
    <script src='./js/gsap.min.js'></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
    <script src='./js/map.js'></script>
    <script src='./js/noResubmission.js'></script>
    <script src="./js/locomotiveScroll.min.js"></script>
    <script src="./js/animations.js"></script>
</body>
</html>