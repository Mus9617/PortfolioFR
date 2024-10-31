<!-- <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
//     $name = strip_tags(trim($_POST["name"]));
//     $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
//     $subject = strip_tags(trim($_POST["subject"]));
//     $message = trim($_POST["message"]);

 
//     if (empty($name) || empty($email) || empty($subject) || empty($message)) {
//         http_response_code(400);
//         echo "Veuillez remplir tous les champs du formulaire.";
//         exit;
//     }

    
//     $to = "#"; 
    
//     $headers = "De: $name <$email>\r\n";
//     $headers .= "Répondre à: $email\r\n";

    
//     if (mail($to, $subject, $message, $headers)) {
//         http_response_code(200);
//         echo "Merci ! Votre message a été envoyé avec succès.";
//     } else {
//         http_response_code(500);
//         echo "Oops ! Il y a eu un problème lors de l'envoi du message. Veuillez vérifier les journaux du serveur pour plus de détails.";
//     }
// } else {
//     http_response_code(403);
//     echo "Il y a eu un problème avec votre demande. Veuillez réessayer.";
// }
?> -->
