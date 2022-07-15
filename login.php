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
        <title>LOGIN</title>
    </head>
    <body>
        <div class="wrapper main__page">
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
            <main class="login__main main">
                <section class="login__section">
                    <div class="login__body">
                        <div class="form__login">
                            <button
                                type="submit"
                                class="button login__register-btn"
                            >
                                <a href="" class="login__register-link">
                                    ENREGISTER</a
                                >
                            </button>
                            <div class="choise">
                                <span></span>
                                <p>ou</p>
                                <span></span>
                            </div>
                            <h3 class="text__principal login__label">
                                MAIL / USERNAME
                            </h3>
                            <input
                                type="text"
                                name="login"
                                class="login__input input__principal"
                                maxlength="70"
                                id=""
                                placeholder="..."
                            />
                            <h3 class="text__principal login__label">
                                MOT DE PASSE
                            </h3>
                            <input
                                type="password"
                                name="password"
                                class="login__input input__principal"
                                maxlength="90"
                                id=""
                                placeholder="..."
                            />
                            <button
                                type="submit"
                                class="login__btn principal__btn"
                            >
                                CONNECTER
                            </button>

                            <button type="submit" class="password__forgot">
                                <a href="" class="password__forgot__link">
                                    mot de passe oublié</a
                                >
                            </button>
                        </div>
                    </div>
                </section>
            </main>
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
        </div>

        <script src="js/main.js"></script>
    </body>
</html>
