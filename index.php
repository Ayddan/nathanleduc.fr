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
        <section class="hero container">
            <div class="text-content">
                <h1>Nathan Leduc <br> Developpeur web</h1>
                <span class="sub-title">Js-React / php-Symfony</span>
                <div class="links-wrapper">
                    <a class="button-1" href="#contact">Me contacter</a>
                    <a class="button-1" href="#presentation">En savoir plus</a>
                </div>
            </div>
            <div class="letters">
                <img class="logo-letter" src="./images/svg/n-hero.svg" alt="Logo N">
                <img class="logo-letter" src="./images/svg/l-hero.svg" alt="Logo L">
            </div>
        </section>
        <section class="presentation container" id="presentation">
            <h2>Bienvenue, moi c'est Nathan.</h2>
            <p>Je développe des sites web et applications depuis plus d'un an avec passion. D'abord autodidacte, puis en apprentissage. J'ai accumulé une expérience qui ma permis d'agrandir mon champ de compétences et de répondre aux attentes de mes clients.</p>
        </section>
        <section class="tech">
            <div class="tech-content tech-1 container">
                <h2><img src="./images/svg/web-development.svg" alt="Logo languages"> Languages</h2>
                <div class="tech-line">
                    <div class="tech-element">
                        <img src="./images/svg/030-html-5.svg" alt="">
                        <span>HTML</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/svg/031-css.svg" alt="">
                        <span>CSS</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/svg/javascript.svg" alt="">
                        <span>JAVASCRIPT</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/svg/php.svg" alt="">
                        <span>PHP</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/svg/021-mysql.svg" alt="">
                        <span>MYSQL</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/svg/005-python.svg" alt="">
                        <span>PYTHON</span>
                    </div>
                </div>
            </div>
            <div class="tech-content tech-2 container">
                <h2><img src="./images/svg/web-settings.svg" alt="Logo frameworks"> Frameworks / Librairies</h2>
                <div class="tech-line">
                    <div class="tech-element">
                        <img src="./images/svg/026-sass.svg" alt="">
                        <span>sass</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/svg/bootstrap.svg" alt="">
                        <span>bootstrap</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/svg/006-react.svg" alt="">
                        <span>react</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/svg/symfony_white_03.svg" alt="">
                        <span>symfony</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/svg/gsap-greensock.svg" alt="">
                        <span>gsap</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/svg/032-nodejs.svg" alt="">
                        <span>node js</span>
                    </div>
                </div>
            </div>
            <div class="tech-content tech-3 container">
                <h2><img src="./images/svg/adjust.svg" alt="Logo "> Mes outils</h2>
                <div class="tech-line">
                    <div class="tech-element">
                        <img src="./images/svg/visual-studio.svg" alt="">
                        <span>vs code</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/svg/010-github.svg" alt="">
                        <span>github</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/svg/xd.svg" alt="">
                        <span>adobe xd</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/svg/wordpress.svg" alt="">
                        <span>wordpress</span>
                    </div>
                    <div class="tech-element">
                        <img src="./images/svg/modx-icon.svg" alt="">
                        <span>modx</span>
                    </div>
                </div>
            </div>
            
        </section>
        <section class="projects container">
            <h2>Mes projets</h2>
            <div class="projects-wrapper">
                <div class="project-element" style="background-image: url('./images/vitrine-tom.jpg');">
                    <div class="mask">
                        <span>tomleduc.fr</span>
                        <a class="button-1" href="#">Visiter le site</a>
                    </div>
                </div>
                <div class="project-element" style="background-image: url('./images/vitrine-tom.jpg');">
                    <div class="mask">
                        <span>tomleduc.fr</span>
                        <a class="button-1" href="#">Visiter le site</a>
                    </div>
                </div>
                <div class="project-element" style="background-image: url('./images/vitrine-tom.jpg');">
                    <div class="mask">
                        <span>tomleduc.fr</span>
                        <a class="button-1" href="#">Visiter le site</a>
                    </div>
                </div>
                <div class="project-element" style="background-image: url('./images/vitrine-tom.jpg');">
                    <div class="mask">
                        <span>tomleduc.fr</span>
                        <a class="button-1" href="#">Visiter le site</a>
                    </div>
                </div>
                <div class="project-element" style="background-image: url('./images/vitrine-tom.jpg');">
                    <div class="mask">
                        <span>tomleduc.fr</span>
                        <a class="button-1" href="#">Visiter le site</a>
                    </div>
                </div>
                <div class="project-element" style="background-image: url('./images/vitrine-tom.jpg');">
                    <div class="mask">
                        <span>tomleduc.fr</span>
                        <a class="button-1" href="#">Visiter le site</a>
                    </div>
                </div>
            </div>
        </section>
        <? echo $alert; ?>
        <section class="contact container" id="contact">
            <h2>Un projet en tête ? <br>Contactez moi !</h2>
            <div class="content">
                <form action="" method="POST">
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
                            <input class="button-1" name="submit" type="submit" value="Envoyer">
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