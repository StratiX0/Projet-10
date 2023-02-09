<?php session_start(); ?>
<!DOCTYPE html>
    <html lang="fr">
    <html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Accueil</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!--------------------------------- Token pour l'authentification google --------------------------------------->
        <meta name="google-signin-client_id" content="184341005227-3gk41qqd3inmpehb5qc1qp43t03q51fp.apps.googleusercontent.com">
        <!----------------------------------- POLICES UTILISEES -------------------------------------------------------->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Red+Rose&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

        <!------------------------------------------CSS/JS LINK---------------------------------------------------------->
        <link rel="stylesheet" href="../css/index.css"/>
        <link rel="stylesheet" href="../css/login.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php
        include 'partials/header.php';
        ?>
        <div class="profile-logout ">
            <div class="btn-logout">
                <a class="text-animated" href="logout.php" >
                    DÉCONNEXION
                </a>
                <div class="close-menu">
                    <p>
                        X
                    </p>
                </div>
            </div>
        </div>

        <div class="container">
            <img src="assets/loginphoto.png" class="img-login" alt="Gaming Campus Photo" /><span></span>
            <form class="form-info" method="POST" action="register.php">
                <h5 class="connexion-title">INSCRIPTION</h5>
                    <div class="form-input">
                    <!------------------------------------------- Email --------------------------------------------->
                        <div class="mb-3">
                            <img src="assets/envelope-fill.svg" class="input-icon" alt="logo-mail">
                            <input type="email"	class="form-email form-control" id="InputEmail" name="email"      placeholder="Adresse Mail"/>
                        </div>
                        <!---------------------------------------- Mot de Passe ----------------------------------------->
                        <div class="mb-3">
                        <input type="password" name="pass" placeholder="Mot de Passe" class="form-control" id="InputPassword"/>
                        </div>
                        <!------------------------------------------- Code ---------------------------------------------->
                        <div class="mb-3">
                            <input type="text" placeholder="Code" class="form-control" id="InputPassword1" name="code"/>
                        </div>
                    </div>
                    <div class="form-option">
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="Check" />
                            <label class="form-check-label" for="Check">Restez connecté</label>
                        </div>
                    <div class="forgotten-password">
                        <a class="forgotten-btn" href="#">Mot de passe oublié?</a>
                    </div>
                </div>
                <button name="submit" class="btn btn-primary">Me connecter</button>
            </form>
        </div>

        <?php
        include 'partials/footer.php';
        ?>

    </body>
</html>