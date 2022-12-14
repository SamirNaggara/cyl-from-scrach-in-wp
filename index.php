<?php 
define("URL_ASSETS", "https://coucou.codeyourlife.fr/");
define("URL", "https://blog.codeyourlife.fr/");
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="description"
            content="Code Your Life, le site pour faire ses premiers pas dans le monde du développement ! Avec nous, apprenez html/css, l'algorythmie, et apprenez-en plus sur les métiers du web !"
        />
        <meta name="keywords" content="Devenir Développeur" />
        <meta name="author" content="Code Your Life" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Code Your Life</title>
        <link rel="icon" href="<?=URL_ASSETS?>images/POULPY-SOLO.png" sizes="8x16" />
        <link href="<?=URL_ASSETS?>css/reset.css" rel="stylesheet" />
        <link href="<?=URL_ASSETS?>css/style.css" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap"
            rel="stylesheet"
        />
    </head>

    <body>
        <header class="conteneurMenu">
            <div>
                <a
                    class="conteneurLogo"
                    href="<?=URL?>"
                >
                    <p>Code Your Life</p>
                </a>
                <nav class="menu">
                    <a href="" class="dissapear">Accueil</a>
                    <a href="https://blog.codeyourlife.fr/" class="dissapear"
                        >Blog</a
                    >
                    <a href="#contact" class="dissapear">Contact</a>
                    <a href="#formations" style="flex-shrink: 0"
                        >Nos formations</a
                    >
                </nav>
            </div>
            <div class="conteneurMenuResponsive">
                <input type="checkbox" id="toggle" class="input-toggler" />
                <label for="toggle" class="menu-toggler">
                    <span class="menu-toggler-line"></span>
                    <span class="menu-toggler-line"></span>
                    <span class="menu-toggler-line"></span>
                </label>
                <aside class="sidebar">
                    <ul class="menu">
                        <li><a class="menu-link" href="">Accueil</a></li>
                        <li>
                            <a
                                class="menu-link"
                                href="https://blog.codeyourlife.fr/"
                                >Blog</a
                            >
                        </li>
                        <li>
                            <a class="menu-link" href="#contact">Contact</a>
                        </li>
                        <li>
                            <a class="menu-link" href="#formations"
                                >Nos formations</a
                            >
                        </li>
                    </ul>
                </aside>
            </div>
        </header>

        <div id="first-load">
            <span>À la découverte</span>
            <span>&nbsp;du code</span>
            <span>&nbsp;et des métiers du web !</span>
        </div>
        <div class="page-content">
            <section class="hero degrade" id="bloc1" data-active>
                <div class="conteneurHero">
                    <div class="conteneur">
                        <div class="conteneur-titre">
                            <p class="les-premiers-pas">
                                Vos premiers pas dans le<br />
                            </p>
                            <p class="glitch">
                                <span aria-hidden="true"
                                    >développement web</span
                                >
                                développement web
                                <!-- <span aria-hidden="true">développement web</span> -->
                            </p>
                        </div>

                        <p class="description degrade">
                            Découvrir les bases du code et de la programmation
                        </p>
                        <div class="conteneur-cta">
                            <a href="#formations" class="cta"
                                >Voir nos formations</a
                            >
                            <a href="#formations" class="cta">En savoir plus</a>
                        </div>

                        <div class="conteneur-logo-hero">
                            <svg
                                id="blob"
                                viewBox="0 0 900 600"
                                width="1800"
                                height="1200"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1"
                                style="pointer-events: none"
                            >
                                <g
                                    transform="translate(440.3376865828275 334.7010920169451)"
                                >
                                    <path
                                        id="blob1"
                                        d="M185.3 -180.6C235.3 -135.3 267.6 -67.6 253.9 -13.8C240.1 40.1 180.1 80.1 130.1 105.1C80.1 130.1 40.1 140.1 -13.8 153.9C-67.6 167.7 -135.3 185.3 -179.5 160.3C-223.6 135.3 -244.3 67.6 -235.9 8.4C-227.6 -50.9 -190.2 -101.8 -146 -147.2C-101.8 -192.5 -50.9 -232.2 8.4 -240.6C67.6 -249 135.3 -226 185.3 -180.6"
                                        fill="#FFFFFF"
                                    ></path>
                                </g>
                                <g
                                    transform="translate(40.3376865828275 33.7010920169451)"
                                >
                                    <path
                                        id="blob2"
                                        style="visibility: hidden"
                                        d="M166.4 -158.1C216.4 -116.4 258.2 -58.2 247.3 -11C236.3 36.3 172.6 72.6 122.6 104.3C72.6 135.9 36.3 163 -1.6 164.6C-39.6 166.3 -79.2 142.5 -127.4 110.9C-175.5 79.2 -232.3 39.6 -230.1 2.1C-228 -35.4 -167 -70.7 -118.9 -112.4C-70.7 -154 -35.4 -202 11.4 -213.5C58.2 -224.9 116.4 -199.8 166.4 -158.1"
                                        fill="#FFFFFF"
                                    ></path>
                                </g>
                            </svg>
                            <img
                                src="<?=URL_ASSETS?>images/POULPY-SOLO.png"
                                alt="Code Your Life Logo"
                            />
                        </div>
                    </div>
                </div>

                <!-- Uniquement pour faire la vague du premier bloc -->
                <!-- <div class="custom-shape-divider-bottom-1651429820">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" class="shape-fill"  ></path>
                    </svg>
                </div> -->
            </section>

            <section class="bloc-tu-veux" id="bloc2">
                <h2 class="conteneur degrade">
                    <div class="developpeuse">
                        <span>Tu veux devenir développ</span>
                        <div class="message">
                            <div class="word1">eur</div>
                            <div class="word2">euse</div>
                        </div>
                    </div>
                    <div class="console-container">
                        <span id="text"></span>
                        <div class="console-underscore" id="console">&#95;</div>
                    </div>
                </h2>
                <div class="conteneur-cta">
                    <h2>Inscris-toi !</h2>
                    <p>
                        L’univers du web est trop vaste et tu en perds le Nord ?
                        <br />C’est NORMAL !
                    </p>
                    <p>
                        <br />Code Your Life règle ta boussole et t’offre 7
                        mails, qui te disent comment faire pour devenir
                        developpeur web !
                    </p>
                    <div class="newsletter_accueil">
                        <div
                            id="mauticform_wrapper_formationgratuite"
                            class="mauticform_wrapper"
                        >
                            <form
                                autocomplete="false"
                                role="form"
                                method="post"
                                action="https://mautic.codeyourlife.fr/form/submit?formId=1"
                                id="mauticform_formationgratuite"
                                data-mautic-form="formationgratuite"
                                enctype="multipart/form-data"
                                class="newsletter-form"
                            >
                                <div
                                    class="mauticform-error"
                                    id="mauticform_formationgratuite_error"
                                ></div>
                                <div
                                    class="mauticform-message"
                                    id="mauticform_formationgratuite_message"
                                ></div>
                                <div class="mauticform-innerform">
                                    <div
                                        class="mauticform-page-wrapper mauticform-page-1"
                                        data-mautic-form-page="1"
                                    >
                                        <div
                                            id="mauticform_formationgratuite_email"
                                            data-validate="email"
                                            data-validation-type="email"
                                            class="mauticform-row mauticform-email mauticform-field-1 mauticform-required"
                                        >
                                            <input
                                                id="mauticform_input_formationgratuite_email"
                                                name="mauticform[email]"
                                                value=""
                                                placeholder="Mon adresse email"
                                                class="mauticform-input"
                                                type="email"
                                            />
                                            <span
                                                class="mauticform-errormsg"
                                                style="display: none"
                                                >N'oubliez pas votre email
                                                !</span
                                            >
                                        </div>

                                        <div
                                            id="mauticform_formationgratuite_submit"
                                            class="mauticform-row mauticform-button-wrapper mauticform-field-2"
                                        >
                                            <button
                                                type="submit"
                                                name="mauticform[submit]"
                                                id="mauticform_input_formationgratuite_submit"
                                                value=""
                                                class="mauticform-button btn btn-default"
                                            >
                                                S'inscrire
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <input
                                    type="hidden"
                                    name="mauticform[formId]"
                                    id="mauticform_formationgratuite_id"
                                    value="1"
                                />
                                <input
                                    type="hidden"
                                    name="mauticform[return]"
                                    id="mauticform_formationgratuite_return"
                                    value=""
                                />
                                <input
                                    type="hidden"
                                    name="mauticform[formName]"
                                    id="mauticform_formationgratuite_name"
                                    value="formationgratuite"
                                />
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section class="question-reponses">
                <h2>Vous avez dit : Code Your Life ?</h2>
                <div class="accordion">
                    <div class="accordion-item">
                        <a href="#" class="heading">
                            <div class="icon"></div>
                            <div class="title">C'est quoi code your life ?</div>
                        </a>

                        <div class="content">
                            <p>
                                Nous proposons différentes formations courtes
                                pour démarrer dans le monde du développement
                                web.
                            </p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <a href="#" class="heading">
                            <div class="icon"></div>
                            <div class="title">
                                À qui s'adresse Code Your Life ? Est-ce fait
                                pour moi ?
                            </div>
                        </a>

                        <div class="content">
                            <p>
                                Tu aimerais devenir developpeur ou developpeuse,
                                mais tu ne sais pas par où commencer ?
                                <br />Code Your Life est fait pour toi !
                                <br />Ici tout le monde à sa place : en
                                reconversion professionnelle, salarié, étudiant
                                ou au chômage. Le même point commun : Apprendre
                                à coder rapidement et faire du web sa passion
                            </p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <a href="#" class="heading">
                            <div class="icon"></div>
                            <div class="title">
                                Comment pouvez-vous m'aider ?
                            </div>
                        </a>

                        <div class="content">
                            <p>
                                Nos formations courtes te permettent de mettre
                                directement un pied dans la pratique.<br />En
                                parallèle, nous t'aidons à découvrir les metiers
                                du web et à t'orienter vers les meilleures
                                formations adaptées à ton profil sans perdre de
                                temps.
                            </p>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <a href="#" class="heading">
                            <div class="icon"></div>
                            <div class="title">
                                Je viens de découvrir, par où commencer ?
                            </div>
                        </a>

                        <div class="content">
                            <p>
                                La première étape est de s'inscrire à la
                                formation gratuite.<br />
                                Avec un mail par jour, pendant 7 jours, tu en
                                apprendras beaucoup sur les différentes façons
                                de devenir développeur ou développeuse.
                            </p>
                        </div>
                    </div>
                </div>
                <a href="formation-gratuite.html" class="cta"
                    >C'est quoi la formation gratuite ?</a
                >
            </section>

            <section class="blocPourquoiCyl">
                <div class="conteneurBloc">
                    <h2>Pourquoi Code Your Life ?</h2>
                    <div class="container">
                        <div class="cardPourquoi">
                            <div class="face face1">
                                <div class="content la-pratique">
                                    <span class="stars"></span>
                                    <h4>Pour commencer la pratique</h4>
                                    <p>
                                        Pas de secret, la seule voie pour
                                        devenir développeur, c’est de coder !
                                        Commence dès aujourd’hui !
                                    </p>
                                    <div>
                                        <a href="#formations"
                                            >Voir les formations</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="face face2">
                                <h3>1</h3>
                            </div>
                        </div>

                        <div class="cardPourquoi">
                            <div class="face face1">
                                <div class="content comment-apprendre">
                                    <span class="stars"></span>
                                    <h4>Pour t'aider à t'orienter</h4>
                                    <p>
                                        Nous t'accompagnons pour t'aider à
                                        trouver les formations et les métiers
                                        les plus adaptés à ton profil
                                    </p>
                                    <div>
                                        <a href="formation-gratuite.html"
                                            >Voir la formation gratuite</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="face face2">
                                <h3>2</h3>
                            </div>
                        </div>

                        <div class="cardPourquoi">
                            <div class="face face1">
                                <div class="content pour-coder">
                                    <span class="stars"></span>
                                    <h4>Pour découvrir ta passion</h4>
                                    <p>
                                        Pour être un bon développeur, il faut
                                        aimer coder. La seule façon de savoir,
                                        c’est d’essayer !
                                    </p>
                                    <div>
                                        <a href="#formations"
                                            >Voir les formations</a
                                        >
                                    </div>
                                </div>
                            </div>
                            <div class="face face2">
                                <h3>3</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bloc-cta-html">
                <div class="conteneurBloc">
                    <h2>Commence dès aujourd’hui à coder !</h2>
                    <div class="conteneurEffet">
                        <div class="card-code">
                            <div class="card-code-back">
                                <div class="line-numbers">
                                    <div>1</div>
                                    <div>2</div>
                                    <div>3</div>
                                    <div>4</div>
                                    <div>5</div>
                                    <div>6</div>
                                    <div>7</div>
                                    <div>8</div>
                                    <div>9</div>
                                </div>
                                <code>
                                    <div class="indent">
                                        <span class="string"
                                            >Pour être bien assimilés, il faut
                                            plusieurs semaines
                                            d'apprentissage...
                                        </span>
                                    </div>
                                    <div class="indent">
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="indent">
                                        <span class="method"
                                            >Sans attendre, commence dès
                                            maintenant !
                                        </span>
                                    </div>
                                    <div class="indent">
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="indent cta">
                                        <a
                                            href="https://blog.codeyourlife.fr/formation-html-css/"
                                            >Apprendre HTML/CSS</a
                                        >
                                        <a
                                            href="https://blog.codeyourlife.fr/formation-html-css/"
                                            >Apprendre l'algorithmie</a
                                        >
                                    </div>
                                </code>
                            </div>
                            <div class="card-code-front">
                                <div class="line-numbers">
                                    <div>1</div>
                                    <div>2</div>
                                    <div>3</div>
                                    <div>4</div>
                                    <div>5</div>
                                    <div>6</div>
                                    <div>7</div>
                                    <div>8</div>
                                    <div>9</div>
                                </div>
                                <code>
                                    <div class="indent">
                                        <span class="variable"
                                            >HTML/CSS et l'algorithmie sont les
                                            grands piliers du web
                                        </span>
                                    </div>
                                    <div class="indent">
                                        <span>&nbsp;</span>
                                    </div>
                                    <div class="indent">
                                        <span class="text2"
                                            >Les connaître facilite
                                            l'apprentissage de toutes les autres
                                            compétences du web
                                        </span>
                                    </div>
                                </code>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="formations" id="formations">
                <h2>Les formations</h2>
                <div class="conteneur">
                    <article class="row html">
                        <div
                            class="small-7 medium-5 large-4 column end small-centered card"
                        >
                            <div class="card-top">
                                <a
                                    href="https://blog.codeyourlife.fr/formation-html-css/"
                                >
                                    <div class="overlay">
                                        <h1>DECOUVRIR</h1>
                                    </div>
                                </a>
                            </div>
                            <div class="triangle">
                                <div class="circle-button" id="circleDrop">
                                    <img class="close" src="<?=URL_ASSETS?>images/close.svg" />
                                </div>
                            </div>
                            <div class="card-middle">
                                <p class="more">
                                    HTML/CSS est le langage de base du web.
                                    Pourquoi ne pas l'apprendre maintenant ?
                                </p>

                                <a
                                    href="https://blog.codeyourlife.fr/formation-html-css/"
                                    >En savoir plus</a
                                >
                            </div>
                            <div class="card-bottom text-center">
                                <h3 class="card-title">Formation HTML/CSS</h3>
                            </div>
                        </div>
                    </article>
                    <article class="row formation-gratuite">
                        <div
                            class="small-7 medium-5 large-4 column end small-centered card"
                        >
                            <div class="card-top">
                                <a href="formation-gratuite.html">
                                    <div class="overlay">
                                        <h1>DECOUVRIR</h1>
                                    </div>
                                </a>
                            </div>
                            <div class="triangle">
                                <div class="circle-button" id="circleDrop">
                                    <img class="close" src="<?=URL_ASSETS?>images/close.svg" />
                                </div>
                            </div>
                            <div class="card-middle">
                                <p class="more">
                                    La formation gratuite qui te permet d'en
                                    savoir plus sur l'univers du développement
                                    web ! <br />
                                    Des conseils de profesionnels utiles pour se
                                    former !
                                </p>
                                <a href="formation-gratuite.html"
                                    >En savoir plus</a
                                >
                            </div>
                            <div class="card-bottom text-center">
                                <h3 class="card-title">
                                    Formation Orientation
                                </h3>
                            </div>
                        </div>
                    </article>
                    <article class="row algo">
                        <div
                            class="small-7 medium-5 large-4 column end small-centered card"
                        >
                            <div class="card-top">
                                <a
                                    href="https://blog.codeyourlife.fr/formation-html-css/"
                                >
                                    <div class="overlay">
                                        <h1>DECOUVRIR</h1>
                                    </div>
                                </a>
                            </div>
                            <div class="triangle">
                                <div class="circle-button" id="circleDrop">
                                    <img class="close" src="<?=URL_ASSETS?>images/close.svg" />
                                </div>
                            </div>
                            <div class="card-middle">
                                <p class="more">
                                    Tous les langages de développement
                                    s'appuient sur l'algorithmie. C'est le
                                    moment de s'y mettre !
                                </p>
                                <a
                                    href="https://blog.codeyourlife.fr/formation-html-css/"
                                    >En savoir plus</a
                                >
                            </div>
                            <div class="card-bottom text-center">
                                <h3 class="card-title">
                                    Formation Algorythmie
                                </h3>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <section class="carrousel" id="carrousel">
                <div class="conteneur-fleches">
                    <button class="slide-gauche" id="bouton-gauche">
                        <img src="<?=URL_ASSETS?>images/left-arrow.png" alt="" />
                    </button>
                    <button class="slide-droite" id="bouton-droit">
                        <img src="<?=URL_ASSETS?>images/right-arrow.png" alt="" />
                    </button>
                </div>
                <div
                    class="temoignage-initial temoignages firstCurrent"
                    id="current"
                >
                    <article class="carte1">
                        <div class="row">
                            <div class="column-gauche">
                                <div class="gauche">
                                    <div class="photo">
                                        <img
                                            src="<?=URL_ASSETS?>images/avatar2.svg"
                                            alt="photo témoignage Sophie"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="column-droite">
                                <div class="droite">
                                    <div class="nom-temoignage">
                                        <span class="nom">Samir,</span>
                                        <span class="location-temoignage"
                                            >Developpeur web en freelance</span
                                        >
                                    </div>
                                    <div class="texte-temoignage">
                                        "J'ai fait la formation developpeur web
                                        d'une école en étant déjà préparé. J'ai
                                        appris l'algorythmie dans une ancienne
                                        école, et avant de venir je me suis
                                        formé seul en HTML/CSS. Cela m'a permis
                                        de découvrir que j'étais un passionné de
                                        developpement. J'ai pu commencer la
                                        formation en étant à l'aise, alors que
                                        j'en voyais d'autres galérer et
                                        déprimer. J'ai ainsi pu garder mon
                                        enthousiasme tout au long de la
                                        formation.<br />"
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="temoignages temoignage2 firstGauche" id="gauche">
                    <article class="carte1">
                        <div class="row">
                            <div class="column-gauche">
                                <div class="gauche">
                                    <div class="photo">
                                        <img
                                            src="<?=URL_ASSETS?>images/avatar1.svg"
                                            alt="photo témoignage Sophie"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="column-droite">
                                <div class="droite">
                                    <div class="nom-temoignage">
                                        <span class="nom">Sophie,</span>
                                        <span class="location-temoignage"
                                            >Developpeur Web</span
                                        >
                                    </div>
                                    <div class="texte-temoignage">
                                        "Pendant la formation, on doute en
                                        permanence. Es-ce que c'est fait pour
                                        moi ? Es-ce que je vais y arriver ? On
                                        voit d'autres élèves s'en sortir plus
                                        facilement que nous et ça augmente
                                        encore le doute. J'ai fini par m'en
                                        sortir et je suis maintenant
                                        développeuse, mais avec le recul, je me
                                        dis que ça n'aurait pas été de trop de
                                        me préparer en amont."
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>

                <div class="temoignages temoignage3 firstDroite" id="droite">
                    <article class="carte1">
                        <div class="row">
                            <div class="column-gauche">
                                <div class="gauche">
                                    <div class="photo">
                                        <img
                                            src="<?=URL_ASSETS?>images/avatar3.svg"
                                            alt="photo témoignage Sophie"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="column-droite">
                                <div class="droite">
                                    <div class="nom-temoignage">
                                        <span class="nom">Jihane,</span>
                                        <!-- <span class="location-temoignage">Holberton School San Francisco, Cohort 3</span> -->
                                    </div>
                                    <div class="texte-temoignage">
                                        "En arrivant en formation, je ne
                                        connaissais vraiment rien de rien.
                                        Pendant les cours, je me suis rendus
                                        compte que j'aimais beaucoup plus le
                                        design que le developpement. Je me suis
                                        dis après coup que j'aurais du essayer
                                        avant, j'aurais pu m'orienter plus
                                        rapidement vers de que j'aime vraiment,
                                        sans perdre autant de temps et
                                        d'énergies"
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </section>

            <section class="contact" id="contact">
                <div class="conteneur">
                    <form action="contact.php" method="post">
                        <h2>Écrivez-nous</h2>

                        <div class="conteneurEmail">
                            <label for="E-mail">Votre email</label>
                            <input
                                id="email"
                                type="email"
                                name="email"
                                placeholder="mon-mail@gmail.fr"
                            />
                            <p id="error-mail">
                                Attention, les mails @sfr, @yahoo ne sont pas
                                acceptés !
                            </p>
                        </div>
                        <div class="conteneurMessage">
                            <label for="message">Votre message</label>
                            <textarea
                                row="30"
                                col="50"
                                placeholder="Écrivez-nous votre message ici"
                                id="message"
                                name="message"
                            ></textarea>
                        </div>
                        <input
                            type="submit"
                            value="Envoyer"
                            class="degrade"
                            id="input-formulaire"
                        />
                    </form>
                </div>
            </section>
        </div>
        <!-- <footer> -->
        <div class="general-footer">
            <div class="link-footer">
                <a href="https://codeyourlife.fr/#contact">CONTACT</a>
            </div>
            <div class="link-footer">
                <a
                    href="https://www.formations.codeyourlife.fr/mentions-legales/"
                    >MENTIONS LEGALES</a
                >
            </div>
            <div class="link-footer">
                <a
                    href="https://www.formations.codeyourlife.fr/politique-de-confidentialite/"
                    >POLITIQUE DE CONFIDENTIALITE</a
                >
            </div>
            <div class="link-footer">
                <a href="https://www.codeyourlife.fr/">LES ARTICLES</a>
            </div>
        </div>
        <nav class="copywrite">
            <a>@Copyright 2022. - CodeYourLife</a>
        </nav>
        <!-- </footer> -->

        <!-- <svg id="svg-sprite">
            <symbol id="paw" viewBox="0 0 249 209.32">
            <image xlink:href="http://icons.veryicon.com/png/System/Icons8%20Metro%20Style/Tracks%20Footprints%20Left%20shoe.png" x="0" y="0" height="100px" width="100px"/>
            </symbol>
        </svg>
        
         Animation des pas  
        <div class="conteneur-pas">
            
            <div class="ajax-loader">
                <div class="paw"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw"><svg class="icon"><use xlink:href="#paw" /></svg></div>
            
                <div class="paw"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw"><svg class="icon"><use xlink:href="#paw" /></svg></div>

                <div class="paw"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw"><svg class="icon"><use xlink:href="#paw" /></svg></div>

                <div class="paw"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw"><svg class="icon"><use xlink:href="#paw" /></svg></div>
            </div>

            <div class="ajax-loader4">
                <div class="paw2"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw2"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw2"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw2"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw2"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw2"><svg class="icon"><use xlink:href="#paw" /></svg></div>
            
                <div class="paw2"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw2"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw2"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw2"><svg class="icon"><use xlink:href="#paw" /></svg></div>

                <div class="paw2"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw2"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw2"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw2"><svg class="icon"><use xlink:href="#paw" /></svg></div>

                <div class="paw2"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw2"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw2"><svg class="icon"><use xlink:href="#paw" /></svg></div>
                <div class="paw2"><svg class="icon"><use xlink:href="#paw" /></svg></div>
            </div>
        </div> -->

        <script src="<?=URL_ASSETS?>js/script.js" defer></script>
        <script src="<?=URL_ASSETS?>js/disappearMenu.js" defer></script>
        <script src="https://cdn.jsdelivr.net/npm/kute.js@2.2.4/dist/kute.min.js"></script>
        <script>
            console.log(KUTE);
            const tween = KUTE.fromTo(
                "#blob1",
                { path: "#blob1" },
                { path: "#blob2" },
                { repeat: 999, duration: 15000, yoyo: true }
            ).start();
        </script>
    </body>
</html>
