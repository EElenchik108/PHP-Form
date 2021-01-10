<?php

	$name = $_GET['user'] ?? null;
	$name = htmlentities($name);
	$password = $_POST['password'] ?? null;
	$password = htmlentities($password); 
	$disk =  htmlentities($_GET['disk'] ?? null);
	$courses =  array_map('htmlentities', $_GET['courses'] ?? []); 
	$delivery = htmlentities($_GET['delivery'] ?? null);
	$adress = $_GET['adress'] ?? null;

	$to = 'EElenchik@i.ua';
	$subject = 'Mail from site';
	$message = "Здравствуйте, $name! <br>";
	$message.= 'Ваш заказ: ' .  implode(', ', $courses) . ' на ' . $disk . ' диске. Будет доставлен ' . $delivery .' доставкой по адресу: ' . $adress . '. <br>Благодарим за внимание к нашим курсам!';

	if (mail($to, $subject, $message)) {
		echo 'Thank!';
	}
	else {
		echo 'Sorry!';
	}

?>