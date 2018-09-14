
<?php

$adressTo = $_SESSION['email'];

if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $adressTo)) 

{
    $passage_ligne = "\r\n";
}

else

{
    $passage_ligne = "\n";
}

$message_txt = "Click on this link to validate your subscription";

$message_html = "<html><head></head><body><b>Click on this link to validate your subscription</b><br><a href='http://51.75.27.80/validate.php'>Click here to validate</a></body></html>";

$boundary = "-----=".md5(rand());

//=====Définition du sujet.

$subject = "Validate your account";

//=====Création du header de l'e-mail.

$header = "From: \"Test\"<no-reply@obiwankenobi.sw>".$passage_ligne;

$header.= "Reply-to:  \"Test\"<no-reply@obiwankenobi.sw>".$passage_ligne;

$header.= "MIME-Version: 1.0".$passage_ligne;

$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;


//=====Création du message.

$message = $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout du message au format texte.

$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;

$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

$message.= $passage_ligne.$message_txt.$passage_ligne;

$message.= $passage_ligne."--".$boundary.$passage_ligne;

//=====Ajout du message au format HTML

$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;

$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;

$message.= $passage_ligne.$message_html.$passage_ligne;

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;

$message.= $passage_ligne."--".$boundary."--".$passage_ligne;

//=====Envoi de l'e-mail.

mail($adressTo,$subject,$message,$header);

?>
