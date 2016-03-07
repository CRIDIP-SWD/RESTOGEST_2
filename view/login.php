<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?= \App\GENERAL\constante::NOM_SITE; ?> - Connexion</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <link rel="shortcut icon" href="<?= $constante->getUrl(array('img/')); ?>favicon.png">
    <link href="<?= $constante->getUrl(array('css/')); ?>style.css" rel="stylesheet">
    <link href="<?= $constante->getUrl(array('css/')); ?>ui.css" rel="stylesheet">
    <link href="<?= $constante->getUrl(array('plugins/')); ?>bootstrap-loading/lada.min.css" rel="stylesheet">
</head>
<body class="account2" data-page="login">
<!-- BEGIN LOGIN BOX -->
<div class="container" id="login-block">
    <i class="user-img icons-faces-users-03"></i>
    <div class="account-info">
        <h1>RESTOGEST</h1>
    </div>
    <div class="account-form">
        <form class="form-signin" role="form">
            <h3><strong>Connectez-vous</strong> à votre compte</h3>
            <div class="append-icon">
                <input type="text" name="username" id="name" class="form-control form-white username" placeholder="Nom d'utilisateur" required>
                <i class="icon-user"></i>
            </div>
            <div class="append-icon m-b-20">
                <input type="password" name="password" class="form-control form-white password" placeholder="Mot de Passe" required>
                <i class="icon-lock"></i>
            </div>
            <button type="submit" id="submit-form" class="btn btn-lg btn-dark btn-rounded ladda-button" data-style="expand-left">Connexion</button>
        </form>
    </div>
</div>
<!-- END LOCKSCREEN BOX -->
<p class="account-copyright">
    <span>Copyright © 2016 </span><span>SAS CRIDIP</span>.<span>All rights reserved.</span>
</p>
<script src="<?= $constante->getUrl(array('plugins/')); ?>jquery/jquery-1.11.1.min.js"></script>
<script src="<?= $constante->getUrl(array('plugins/')); ?>jquery/jquery-migrate-1.2.1.min.js"></script>
<script src="<?= $constante->getUrl(array('plugins/')); ?>gsap/main-gsap.min.js"></script>
<script src="<?= $constante->getUrl(array('plugins/')); ?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?= $constante->getUrl(array('plugins/')); ?>backstretch/backstretch.min.js"></script>
<script src="<?= $constante->getUrl(array('plugins/')); ?>bootstrap-loading/lada.min.js"></script>
<script src="<?= $constante->getUrl(array('js/')); ?>pages/login-v2.js"></script>
</body>
</html>