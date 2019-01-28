<!DOCTYPE html>
<html>
    <head>

        <title>SukaProd</title>

        <meta name="viewport" content="width=device-width">

        <link rel="canonical" href="https://www.sukaprod.com/">

        <link rel="icon" type="image/png" href="https://www.sukaprod.com/img/ico.png" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/pub.css">

    </head>

    <body>

        <h1>Choisissez votre publicité</h1>

        <section>
            <article>
                <?php
                if (isset($_POST['com'])) {
                    $entete  = 'MIME-Version: 1.0' . "\r\n";
                    $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                    $entete .= 'From: ' . trim(htmlentities($_POST['mail']) . "\r\n";

                    $message = '<h1>Message envoyé depuis la page PUB de sukaprod.com</h1>
                                <p><b>Nom : </b>' . trim(htmlentities($_POST['nom'])) . '<br>
                                <b>Prenom : </b>' . trim(htmlentities($_POST['prenom'])) . '<br>
                                <b>Entreprise : </b>' . trim(htmlentities($_POST['entreprise'])) . '<br>
                                <b>Email : </b>' . trim(htmlentities($_POST['mail'])) . '<p>
                                <p>
                                <b>Commentaire : </b>' . htmlentities($_POST['com']) . '</p>
                                <p>
                                <b>Choix de pub : </p>';
                    foreach($_POST['unepub'] as $valeur)
                    {
                        $message .= $valeur . ' | ';
                    }
                    $retour=mail('contact@sukaprod.com','Envoi depuis page PUB', $message, $entete);
                    if($retour)
                        echo '<p>Votre message a été envoyé.</p>';
                    else
                        echo '<p>Erreur.</p>';
                }
                ?>
            </article>
        </section>
    </body>
</html>
