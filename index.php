<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://kit.fontawesome.com/89020d4bf7.js" crossorigin="anonymous"></script>

    <title>Portfolio</title>
</head>

<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="">Portfo<span>lio</span></a></div>
            <ul class="menu">
                <li><a href="#home">Accueil</a></li>
                <li><a href="#about">A-propos</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#skills">Compétences</a></li>
                <li><a href="">Teams</a></li>
                <li><a href="#contact">Contactez moi</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>

    </nav>
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Salut mon nom et </div>
                <div class="text-2">Benyahia Abdennour</div>
                <div class="text-3">Et je suis un <span class='typing'></span></div>
                <a href="#contact">Engagez moi</a>
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">A-propos </h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/photo.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">Je suis Benyahia un <span class='typing-2'></span></div>
                    <p>Bonjour, je suis entré dans le domaine du développement web en 2019 en m'appuyant sur moi pour apprendre et j'ai poursuivi ce parcours pédagogique en suivant une formation professionnelle à Doranco Ecole Supérieure des Technologies Créatives où j'ai obtenu mon diplôme avec distinction (Titre RNCP Bac+2 DÉVELOPPEUR WEB ET WEBMOBILE)
                        Je suis quelqu'un de curieux et passionné, j'aime expérimenter, découvrir et apprendre au fur et à mesure de mes projets professionnels et personnels.
                        Aujourd'hui, je met à profit mes connaissances pour les missions suivantes en freelance:

                        -Intégration HTML / CSS à partir de vos maquettes graphiques
                        - Site responsive «Adaptable sur tous types d'écrans»
                        -Création des sites et thèmes avec le CMS Wordpres
                        -Création des sites avec Symfony
                        -Création des sites vitrine /Blog / e-commerce
                        En parallèle, je continue à moi sur les nouvelles technologies afin d’augmenter mes compétences.</p>
                    <a href="cv.pdf" class="button" download><i class="fa fa-download"></i>Download CV</a>
                </div>
            </div>
        </div>
    </section>
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Mes services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Application front-end back-end</div>
                        <p>Développement d'application web front-end avec html-css-bootstarp-sass-scss ,back-end symfony-javascript-php-jquerry ,site vitrine ,site e-commerce ,intégration du front-end à votre API.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Web Design</div>
                        <p>Logos, templates Web, plaquettes publicitaires,
                            cartes de visite, newsletters...</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Référencement naturel</div>
                        <p>Affichage sémantique des informations,
                            des pages propres pour un référencement optimal.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">Compétences</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Mes compétences et expériences</div>
                    <p>-Intégration (X)HTML / CSS.</p>
                    <p>Codage à la main respectueux des standards du Web</p>
                    <p>-Conception milti-plateformes.
                    <p>Compatible tous supports, tablette & application mobile</p>
                    <p>-validation W3C, réferencement naturel SEO.</p>
                    <p>Accessibilité & ergonomie des pages web</p>
                    <p>-Applications spécifiques et interface d'administartion PHP - MYSQL.</p>
                    <p>-Gestion de projet web
                        Site vitrine, corporate, e-commerce, application mobile.</p>
                    <a href="https://github.com/abdouschools">See my projects</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>70%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JAVASCRIPT</span>
                            <span>50%</span>
                        </div>
                        <div class="line javascript"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>60%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MY SQL</span>
                            <span>50%</span>
                        </div>
                        <div class="line sql"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Entrer en contact</div>
                    <p>Une Idée ? Un Projet ? N'hésitez pas a Demandez un devis ! [GRATUIT]</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Nom</div>
                                <div class="sub-title">Benyahia Abdennour</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Adresse</div>
                                <div class="sub-title">Chelles 77500</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">abdouschools@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Envoie moi un message</div>
                    <form action="mailer.php" method="POST">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="field ">
                            <input type="text" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea name="message" cols="30" rows="10" placeholder="Describtion..."></textarea>
                        </div>
                        <div class="button">
                            <button type="submit">Envoyer</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </section>
    <footer>
        <span>Créé par <a href="https://github.com/abdouschools">AbdouSchools</a> | <span class="far fa-copyright"></span>2020 Tous les droits sont réservés.</span>
    </footer>
    <script src="script.js">
    </script>
</body>

</html>