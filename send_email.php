<?php
// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Adresse e-mail à laquelle envoyer le message (votre adresse e-mail personnelle)
    $destinataire = "votre_adresse_email@example.com";
    
    // Sujet du message
    $sujet = "Nouveau message depuis votre site web";
    
    // Construction du corps du message
    $corps_message = "Nom: $nom\n";
    $corps_message .= "Email: $email\n";
    $corps_message .= "Message:\n$message";
    
    // Envoi du message
    $resultat = mail($destinataire, $sujet, $corps_message);
    
    // Vérification si l'e-mail a été envoyé avec succès
    if ($resultat) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur est survenue lors de l'envoi du message. Veuillez réessayer plus tard.";
    }
}
?>
