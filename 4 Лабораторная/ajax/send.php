<?php

if(!empty($_POST)) {

	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['email']);
	$message = htmlspecialchars($_POST['message']);
	$make = htmlspecialchars($_POST['make']);


	$topic_name = "=?utf-8?b?".base64_encode($name)."?=";
	$subject ="Новое сообщение с сайта example.ru";
	$subject_to = "=?utf-8?b?".base64_encode($subject)."?=";

	$message_to ="Имя: ".$name."\nE-mail: ".$email."\nСообщение: ".$message."\nСделать: ".$make;	

	$header = "Content-Type: text/plain; charset=utf-8\n";
	$header .= "From:  <rp.inmovery@gmail.com>\n\n";

	$mail = mail("roman_piskunov@bk.ru", $subject_to, iconv('utf-8', 'windows-1251', $message_to), iconv('utf-8', 'windows-1251', $header));

	if($mail) echo 'OK';

}

?>