<?php
    $email = trim($_POST('[email]'));
    $fromMail = 'info@site.ru';
    $fromName = 'Поступила заявка с сайта';
    $emailTo = 'guk2001y@gmail.com';
    $subject = 'Форма обратной связи site.com';
    $subject = '=?utf-8?b?'.base64_encode($subject) . '?=';
    $headers = "Content-type: text/plain; charset=\"utf-8\"\r\n";
    $headers = "From: ". $fromName ." <". $fromMail ."> \r\n";

    $body = "Получено письмо с сайта\n Email: $email";
?>