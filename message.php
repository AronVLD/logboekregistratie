<?php 

    $alert=(isset($_GET["alert"]))? $_GET["alert"]: "default";
    $id=(isset($_GET["id"]))? $_GET["id"]: "";
    $pwh=(isset($_GET["pwh"]))? $_GET["pwh"]: "";
    $email=(isset($_GET["email"]))? $_GET["email"]: "";

switch ($_GET["alert"]) {
    case 'no-email':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" role="alert">
        Ga terug naar de <a href="./index.php?content=registreer"class="alert-link">Registratie</a>. En vul de volgende keer je Email in </div>';
    break;

    case 'emailexists':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" role="alert">
        Ga terug naar de <a href="./index.php?content=registreer"class="alert-link">Registratie</a>. je hebt al deze email gebruikt </div>';

    break;
    case 'register-succes':
        echo '<div class="alert alert-success w-50 mx-auto mt-5" role="alert">
        U bent met succes aangemeld,
        u ontvangt een actievatiemail voor het voltooien van het registratieproces. </div>';
        header("Refresh: 5; url= ./index.php?content=login");

    break;
    case 'hacker-alert':
        echo '<div class="alert alert-danger w-50 mx-auto mt-5" role="alert">
        Wat u doet mag niet,
        u word doorverbonden. </div>';
        header("Refresh: 5; url= https://yyyyyyy.info/");
    case 'password-empty':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5" role="alert">
        U heeft een van de velden niet ingevoert,
        u word doorverbonden. </div>';
        header("Refresh: 5; url= ./index.php?content=activate&id=$id&pwh=$pwh");

    break;
    case 'password-wrong':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5" role="alert">
        De wachtwoorden zijn niet gelijk,
        u word doorverbonden. </div>';
        header("Refresh: 5; url= ./index.php?content=activate&id=$id&pwh=$pwh");

    break;
    case 'noidpwhmatch':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5" role="alert">
        Er is iets mis gegaan ofzoiets,
        u word doorverbonden. </div>';
        header("Refresh: 5; url= ./index.php?content=home");

    break;
    case 'alreadyactive':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5" role="alert">
        Je account is al geactiveerd denk ik?,
        u word doorverbonden. </div>';
        header("Refresh: 5; url= ./index.php?content=login");

    break;
    case 'updatesucces':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5" role="alert">
        uw registratie is met succes gelukt,
        u word doorverbonden. </div>';
        header("Refresh: 5; url= ./index.php?content=login");

    break;
    case 'updateerror':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5" role="alert">
        er is iets mis gegaan met updaten?,
        u word doorverbonden. </div>';
        header("Refresh: 5; url= ./index.php?content=activate&id=$id&pwh=$pwh");

    break;
    case 'nomatchpwh':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5" role="alert">
        er is iets mis gegaan,
        u word doorverbonden. </div>';
        header("Refresh: 5; url= ./index.php?content=register");

    break;
    case 'loginformempty':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5" role="alert">
        er mist info,
        u word doorverbonden. </div>';
        header("Refresh: 5; url= ./index.php?content=login");

    break;
    case 'emailunknown':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5" role="alert">
        uw email is niet geregisteerd,
        u word doorverbonden. </div>';
        header("Refresh: 5; url= ./index.php?content=register");

    break;
    case 'notactivated':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5" role="alert">
        je account is nog niet geactiveerd kijk naar je email <span class="badge bg-danger p-2"> '. $email .'</span> voor je link,
        u word doorverbonden. </div>';
        header("Refresh: 5; url= ./index.php?content=login");

    break;
    case 'nopasswordmatch':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5" role="alert">
        het wachtwoord voor <span class="badge bg-danger p-2"> '. $email .'</span> is fout,
        u word doorverbonden. </div>';
        header("Refresh: 5; url= ./index.php?content=login");

    break;
    case 'logout':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5" role="alert">
        U word nu uitgelogd,
        u word doorverbonden. </div>';
        header("Refresh: 5; url= ./index.php?content=home");

    break;
    case 'auth-error-user':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5" role="alert">
        ur not supposed to be here, please leave.
        u word doorverbonden. </div>';
        header("Refresh: 5; url= ./index.php?content=home");

    break;
    case 'auth-error':
        echo '<div class="alert alert-warning w-50 mx-auto mt-5" role="alert">
        ur not supposed to be here, please leave.
        u word doorverbonden. </div>';
        header("Refresh: 5; url= ./index.php?content=home");

    break;

    default:
        header("Location: ./index.php?content=home");
    break;

}

?>