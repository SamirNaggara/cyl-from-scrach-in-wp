<?php

  // La personne qui a envoyé la demande de contact
  $dest = $_POST['email'];
  // Le message de cette personne
  $message = $_POST['message'];

  // Notre mail contact@codeyourlife.fr
  $contact = "contact@codeyourlife.fr";
  // Le sujet à envoyer à nous-même
  $subjectContact = "Nouvelle demande de contact";
  // Le headers à envoyer à nous-même (qui fait en sorte que cliquer sur "répondre" va envoyer le mail au $dest !!)
  $headersContact = 'From : ' . $dest . "\r\n" . 'Reply-To : ' . $dest . "\r\n" . 'X-Mailker : PHP/' . phpversion();
  // Le contenu du mail à envoyer à nous-même
  $bodyContact = "Bonjour, \n Vous avez reçu une nouvelle demande de contact sur coucou.codeyourlife.fr ! \n Demandeur : " . $dest . "\n Message : " . $message;

  $bodyDest = "Bonjour, \n\n Nous avons bien reçu votre demande de contact pour CodeYourLife et nous vous en remercions. \n Notre équipe reviendra vers vous à l'adresse mail indiquée dans les plus brefs délais !\n\n Votre message : " . "\"". $message . "\"";
  $subjectDest = "CodeYourLife - Votre demande de contact";

  if($_POST) {
    // print '<pre>';
    //   print_r($_POST);
    // print '</pre>';

    // echo $dest . " = mail <br>";
    // echo $message . " = message";

    $check1 = mail($contact, $subjectContact, $bodyContact, $headersContact);
    $check2 = mail($dest, $subjectDest, $bodyDest);
    $br = '<br>';

    if($check1) {
      $status = 'Votre message a correctement été envoyé !';
    } else {
      $status = "Une erreur est survenue, votre message n'a pas pu être envoyé." . $br . $br . "Vous pouvez nous contacter directement via contact@codeyourlife.fr !";
    }
    header( "refresh:7;url=http://localhost/cyl-from-scratch/#formations");
  }
  ?>
  <!DOCTYPE html>
      <html lang="fr">
        <head>
            <meta charset="UTF-8" />
            <meta name="description" content="Web tutorials" />
            <meta name="keywords" content="HTML,CSS,JavaScript" />
            <meta name="author" content="Code Your Life" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <meta name="googlebot" content="noindex">
            <title>Message envoyé !</title>
            <link rel="icon" href="images/mascotte-v1.png">
            <link href="css/reset.css" rel="stylesheet">
            <link href="css/formation_gratuite.css" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Khula:wght@700&family=Montserrat:wght@300&family=Poppins:wght@600&display=swap" rel="stylesheet">
        </head>
        <body>
            <div class="page-content">
                <section class="newsletter">
                    <div class="container">
                    
                        <div class="section-title text-center">
                            <h2><?php echo $status ?></h2>
                            <p>Vous allez être redirigé automatiquement...</p>     
                        </div>                  
                    </div>
                </section>  
            </div>
            <script src="js/script.js"></script>
        </body>
      </html>