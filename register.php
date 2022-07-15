<?php 
include 'config\config.php';



if(isset($_POST['submit'])) {
    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));
    $cpass = mysqli_real_escape_string($conn, md5($_POST['cpassword']));
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $adresse = mysqli_real_escape_string($conn, $_POST['adresse']);
    $codePostale = mysqli_real_escape_string($conn, $_POST['codePostale']);
    $ville = mysqli_real_escape_string($conn, $_POST['ville']);
    

    $image = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = 'uploaded_img/'.$image;
    $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die ('query failed');
    if(mysqli_num_rows($select) > 0) {
    $message[] = 'user already exist';
    } else {
        if($pass != $cpass) {
            $message[] = 'Mot de passe incorrecte';
        }elseif($image_size > 2000000) {
            $message[] = 'Image ne doit pas dépasser 2mb';
        } else{
            $insert = mysqli_query($conn,"INSERT INTO `user_form`(firstName,lastName, email, password ,number ,adresse ,codePostale ,ville ,image) 
            VALUES('$firstName','$lastName','$email','$pass', '$number', '$adresse', '$codePostale', '$ville')") or die ('query failed');
            if($insert) {
                move_uploaded_file($image_tmp_name, $image_folder);
                $message[] = 'Bienvenue sur notre site';
                header('location:login.php');
            }else {
                $message[] = 'essayez à nouveau
                ';
            }
        }
    }
}
?>
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

        <title>REGISTER</title>
    </head>
    <body>
        <div class="wrapper register__page">
<header class="header">
    <div class="header__container">
        <a href="index.html" class="header__logo">Your Car</a>
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
                                <a href="contact.html" class="menu__sub-link"
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
            <main class="register__main main">
                <section class="register__section login__register-section">
                    <div class="register__body login__register-body">
                        <form method="POST" enctype="multipart/form-data" class="form">
                            <div class="register__form1 login__register-form">
                            <button
                                type="submit"
                                class="button login__register-btn"
                            >
                                <a href="login.php" class="login__register-link">
                                    CONNECTER</a
                                >
                            </button>
                            <div class="choise">
                                <span></span>
                                <p>ou</p>
                                <span></span>
                            </div>
                            <?php
                            if (isset($message)) {
                                foreach($message as $message)
                                echo '<div class"message__register">'.$message.'</div>';
                            }
                            ?>
                            <h3 class="text__principal register__label">NOM</h3>
                            <input
                                type="text"
                                name="lastName"
                                class="register__input input__principal"
                                maxlength="100"
                                id=""
                                placeholder="..."
                            />
                            <h3 class="text__principal register__label">
                                PRÉNOM
                            </h3>
                            <input
                                type="text"
                                name="firstName"
                                class="register__input input__principal"
                                maxlength="100"
                                id=""
                                placeholder="..."
                            />
                            <h3 class="text__principal login__label">MAIL</h3>
                            <input
                                type="text"
                                name="email"
                                class="register__input input__principal"
                                maxlength="100"
                                id=""
                                placeholder="..."
                            />
                            <h3 class="text__principal login__label">
                                MOT DE PASSE
                            </h3>
                            <input
                                type="password"
                                name="password"
                                class="register__input input__principal"
                                maxlength="100"
                                id=""
                                placeholder="..."
                            />
                            <h3 class="text__principal login__label">
                                CONFIRMER LE MDP
                            </h3>
                            <input
                                type="password"
                                name="cpassword"
                                class="register__input input__principal"
                                maxlength="100"
                                id=""
                                placeholder="..."
                            />
                            </div>
                            <div class="register__form2 login__register-form">
                            <h3 class="text__principal register__label">
                                TELEPHONE
                            </h3>
                            <input
                                type="text"
                                name="number"
                                class="register__input input__principal"
                                maxlength="100"
                                id=""
                                placeholder="..."
                            />
                            <h3 class="text__principal register__label">
                                ADRESSE
                            </h3>
                            <input
                                type="text"
                                name="firstName"
                                class="register__input input__principal"
                                maxlength="100"
                                id=""
                                placeholder="..."
                            />
                            <h3 class="text__principal login__label">
                                CODE POSTALE
                            </h3>
                            <input
                                type="text"
                                name="index"
                                class="register__input input__principal"
                                maxlength="50"
                                id=""
                                placeholder="..."
                            />
                            <h3 class="text__principal login__label">VILLE</h3>
                            <input
                                type="text"
                                name="adress"
                                class="register__input input__principal"
                                maxlength="100"
                                id=""
                                placeholder="..."
                            />
                                <button
                                    type="submit"
                                    id=""
                                    class="register__btn principal__btn apply__btn"
                                    
                                >
                                    CONFIRMER
                                </button>
                            </div>
                        </form>
                        <div class="btn__body">
                                <button
                                type="submit"
                                id=""
                                class="register__btn principal__btn back__btn"
                                onclick="backFunctuin()">
                                REVENIR
                                </button>
                            <button
                                type="submit"
                                id="next__btn"
                                onclick="nextFunction()"
                                class="register__btn principal__btn next__btn"
                            >
                                SUIVANT
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
