<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="De: $name \n Mensagem: $message";
$recipient = "lizzie@itslizzie.space";
$subject = "Mensagem do formul�rio de contato";
$mailheader = "De: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Erro!");
echo "Mensagem enviada com sucesso.";
?>