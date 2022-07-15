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
            <main class="magasin__main main">
                <section class="price__search__section">
                    <div class="filter__icon__body">
                        <i class="filter__text">filer</i>
                        
                    </div>
                    <div class="filter__body">
                        <div class="top__filter__body">
                            <div class="price-input">
                                <div class="field">
                                
                                <input type="number" class="input-min" value="5000">
                                </div>
                                <div class="separator"></div>
                                <div class="field">
                                
                                <input type="number" class="input-max" value="20000">
                                </div>
                            </div>
                            <div class="slider">
                                <div class="progress"></div>
                            </div>
                            <div class="range-input">
                                <input type="range" class="range-min" min="0" max="25000" value="5000" step="100">
                                <input type="range" class="range-max" min="0" max="25000" value="20000" step="100">
                            </div>
                            </div>
                        </div>
                        <div class="bottom__filter__body">
                            <div class="checkbox__body">
                                <div class="checkbox__item">
                                    <input id="c1" type="checkbox" checked>
                                    <label for="c1">NEUF</label>
                                </div>
                                <div class="checkbox__item">
                                    <input id="c2" type="checkbox" checked>
                                    <label for="c2">À LOUER</label>
                                </div>
                                <div class="checkbox__item">
                                    <input id="c3" type="checkbox" checked>
                                    <label for="c3">OCCASION</label>
                                </div>
                                <div class="checkbox__item">
                                    <input id="c4" type="checkbox" checked>
                                    <label for="c4">Checkbox</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="car__shop__body"></section>
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
