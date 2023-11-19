<?php
if(empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}
$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$to = "unfortunately344un@gmail.com";
$subject = "$m_subject:  $name";
$body = "Вы получили новое сообщение.\n\n"."Детали:\n\nИмя: $name\n\n\nEmail: $email\n\nКомикс: $m_subject\n\nСообщение: $message";
$header = "От: $email";
$header .= "Ответить: $email";	
if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
