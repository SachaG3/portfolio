<script src='https://www.google.com/recaptcha/api.js'></script>
<form action="mail.php" method="post">
  <label for="nom">Nom :</label><br>
  <input type="text" id="nom" name="nom"><br>
  <label for="email">Adresse email :</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="sujet">Sujet :</label><br>
  <input type="text" id="sujet" name="sujet"><br><br>
  <label for="message">Message :</label><br>
  <textarea id="message" name="message" rows="5" cols="30"></textarea><br><br>
  <div class="g-recaptcha" data-sitekey="6LfVkJgjAAAAAMr9PmMvA8YMEOZxhQavI0Dba6_A"></div>
  <input type="submit" value="Envoyer">
</form> 
<?php
if (isset($_POST['nom'], $_POST['email'], $_POST['sujet'], $_POST['message'])) {
  // Validez les données du formulaire ici (par exemple, vérifiez que l'adresse email est valide)
  $nom = $_POST['nom'];
  $email = $_POST['email'];
  $sujet = $_POST['sujet'];
  $message = $_POST['message'];
  $headers = "From: expediteur@example.com\r\n";
  $headers .= "Reply-To: $nom <$email>\r\n";
  $success = mail('destinataire@example.com', $sujet, $message, $headers);
  if ($success) {
    // Le mail a été envoyé avec succès
    echo "Merci pour votre message ! Nous vous répondrons dès que possible.";
  } else {
    // Une erreur s'est produite lors de l'envoi du mail
    echo "Une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer.";
  }
}
?>

