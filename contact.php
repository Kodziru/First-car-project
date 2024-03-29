<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="description"
            content="Contactez le vendeur pour avoir plus de info sur votre achat"
        />
        <meta name="keywords" content="HTML, CSS, JavaScript" />
        <meta name="Your Car" content="Les voitures de qualité" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css\main.css" />
        <title>CONTACT</title>
    </head>
    <body>
        <div class="wrapper">
<header class="header">
    <div class="header__container">
        <a href="index.php" class="header__logo">Your Car</a>
        <div class="header__menu menu">
            <div class="menu__icon">
                <span></span>
            </div>

            <nav class="menu__body">
                <ul class="menu__list">
                    <li>
                        <a data-goto="page__section_1" class="menu__link"
                            >MAGASIN</a
                        >
                        <span class="menu__arrow"></span>
                        <ul class="menu__sub-list">
                            <li>
                                <a href="" class="menu__sub-link">LOCATION</a>
                            </li>
                            <li>
                                <a href="" class="menu__sub-link"
                                    >LES VOITURES</a
                                >
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a data-goto="page__section_2" class="menu__link"
                            >CONTACT</a
                        >
                        <span class="menu__arrow"></span>
                        <ul class="menu__sub-list">
                            <li>
                                <a href="contact.php" class="menu__sub-link"
                                    >INFORMATIONS</a
                                >
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a data-goto="page__section_3" class="menu__link"
                            >PROFILE</a
                        >
                        <span class="menu__arrow"></span>
                        <ul class="menu__sub-list">
                            <li>
                                <a href="" class="menu__sub-link">MON COMPTE</a>
                            </li>
                            <li>
                                <a href="" class="menu__sub-link">MES ACHATS</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
            <main class="main__contact__page">
                <section class="contact__info__form">
                    <div class="number__info contact__box">
                        <h3 class="number__text contact__text">TÉLÈPHONE</h3>
                        <h3 class="number__item">
                            <a
                                href="07.33.33.33.33"
                                class="number contact__link"
                                >07.33.33.33.33</a
                            >
                        </h3>
                    </div>
                    <div class="mail__info contact__box">
                        <h3 class="mail__text contact__text">MAIL</h3>
                        <h3 class="mail__item">
                            <a href="" class="mail contact__link"
                                >YourCar@car.com</a
                            >
                        </h3>
                    </div>
                    <div class="adress__info contact__box">
                        <h3 class="adress__text contact__text">ADRESSE</h3>
                        <h3 class="adress__item">
                            <a href="" class="adress contact__link"
                                >3 rue Jean-Luc 70013 PARIS</a
                            >
                        </h3>
                    </div>
                </section>
                <section class="contact__message__form">
                    <h3 class="message__label">MESSAGE</h3>
                    <input
                        type="text"
                        name="message"
                        class="message__input input__principal"
                        maxlength="1500"
                        id=""
                        placeholder="..."
                    />
                    <button type="submit" class="send__button principal__btn">
                        ENVOYER
                    </button>
                    <p class="message__warning__text">
                        Le service de contact vous repondrera dans un délai de
                        24 heure!
                    </p>
                </section>
            </main>
        </div>
<footer class="footer">
    <div class="footer__gradient"></div>
    <div class="footer__body">
        <ul class="footer__nav">
            <li class="footer__item">
                <a href="" class="footer__link">CONTACT</a>
            </li>
            <li class="footer__item">
                <a href="" class="footer__link">MAGASIN</a>
            </li>
            <li class="footer__item">
                <a href="" class="footer__link">NOS OFFRES</a>
            </li>
            <li class="footer__item">
                <a href="" class="footer__link">A PROPOS DE NOUS</a>
            </li>
            <li class="footer__item">
                <a href="" class="footer__link">MENTION LEGALE</a>
            </li>
            <li class="footer__item">
                <a href="" class="footer__link">PAGE D’ACCEUIL</a>
            </li>
        </ul>
    </div>
    <div class="rss">
        <a href="">RSS</a>
        <a href="">© Tous droits réservés</a>
    </div>
</footer>
        <script src="js/main.js"></script>
    </body>
</html>
